######################################
# 1) Configuración global
######################################
terraform {
  required_providers {
    aws = {
      source  = "hashicorp/aws"
      version = ">= 4.0"
    }
  }
}

provider "aws" {
  region = var.aws_region
}

######################################
# 1.b) AMI para bastión (Amazon Linux 2)
######################################
data "aws_ami" "amazon_linux" {
  most_recent = true
  owners      = ["amazon"]

  filter {
    name   = "name"
    values = ["amzn2-ami-hvm-*-x86_64-gp2"]
  }
}

######################################
# 2) AZs disponibles
######################################
data "aws_availability_zones" "available" {
  state = "available"
}

######################################
# 3) Red: VPC, subnets y SGs
######################################
resource "aws_vpc" "main" {
  cidr_block = "10.0.0.0/16"
  tags       = { Name = "vot-${var.environment}-vpc" }
}

resource "aws_subnet" "public" {
  count                   = 2
  vpc_id                  = aws_vpc.main.id
  cidr_block              = cidrsubnet(aws_vpc.main.cidr_block, 8, count.index)
  availability_zone       = data.aws_availability_zones.available.names[count.index]
  map_public_ip_on_launch = true
  tags = {
    Name = "vot-${var.environment}-public-${count.index}"
  }
}

resource "aws_security_group" "alb_sg" {
  name        = "vot-${var.environment}-alb-sg"
  description = "Permite HTTP 80 y 8000 al ALB"
  vpc_id      = aws_vpc.main.id

  ingress {
    from_port   = 80
    to_port     = 80
    protocol    = "tcp"
    cidr_blocks = ["0.0.0.0/0"]
  }
  ingress {
    from_port   = 8000
    to_port     = 8000
    protocol    = "tcp"
    cidr_blocks = ["0.0.0.0/0"]
  }
  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }
}

resource "aws_security_group" "ecs_sg" {
  name        = "vot-${var.environment}-ecs-sg"
  description = "ECS traffic from ALB"
  vpc_id      = aws_vpc.main.id

  ingress {
    from_port       = 0
    to_port         = 0
    protocol        = "-1"
    security_groups = [aws_security_group.alb_sg.id]
  }
  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }
}

######################################
# 4) Base de datos MySQL en RDS (NO pública)
######################################
resource "aws_db_subnet_group" "db_subnets" {
  name       = "vot-${var.environment}-db-subnets"
  subnet_ids = aws_subnet.public[*].id
}

resource "aws_security_group" "db_sg" {
  name   = "vot-${var.environment}-db-sg"
  vpc_id = aws_vpc.main.id

  ingress {
    from_port       = 3306
    to_port         = 3306
    protocol        = "tcp"
    security_groups = [aws_security_group.ecs_sg.id]
  }
  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }
}

resource "aws_db_instance" "mysql" {
  identifier              = "vot-${var.environment}-db"
  engine                  = "mysql"
  engine_version          = "8.0"
  instance_class          = "db.t3.micro"
  allocated_storage       = 20
  username                = var.db_username
  password                = var.db_password
  skip_final_snapshot     = true
  publicly_accessible     = false
  db_subnet_group_name    = aws_db_subnet_group.db_subnets.name
  vpc_security_group_ids  = [aws_security_group.db_sg.id]
  tags = {
    Name = "vot-${var.environment}-mysql"
  }
}

######################################
# 5) ECR: repos para cada servicio
######################################
resource "aws_ecr_repository" "repos" {
  for_each = toset(var.services)
  name     = "${each.key}-${var.environment}"
}

######################################
# 6) ECS Cluster
######################################
resource "aws_ecs_cluster" "main" {
  name = "vot-${var.environment}-cluster"
}

######################################
# 7) Application Load Balancer (ALB)
######################################
resource "aws_lb" "main" {
  name               = "vot-${var.environment}-alb"
  load_balancer_type = "application"
  subnets            = aws_subnet.public[*].id
  security_groups    = [aws_security_group.alb_sg.id]
}

resource "aws_lb_target_group" "frontend_tg" {
  name        = "frontend-${var.environment}-tg"
  port        = 80
  protocol    = "HTTP"
  vpc_id      = aws_vpc.main.id
  target_type = "ip"

  health_check {
    path    = "/"
    matcher = "200-399"
  }
}

resource "aws_lb_listener" "frontend_listener" {
  load_balancer_arn = aws_lb.main.arn
  port              = 80
  protocol          = "HTTP"

  default_action {
    type             = "forward"
    target_group_arn = aws_lb_target_group.frontend_tg.arn
  }
}

resource "aws_lb_target_group" "kong_tg" {
  name        = "kong-${var.environment}-tg"
  port        = 8000
  protocol    = "HTTP"
  vpc_id      = aws_vpc.main.id
  target_type = "ip"

  health_check {
    path    = "/"
    matcher = "200-399"
  }
}

resource "aws_lb_listener" "kong_listener" {
  load_balancer_arn = aws_lb.main.arn
  port              = 8000
  protocol          = "HTTP"

  default_action {
    type             = "forward"
    target_group_arn = aws_lb_target_group.kong_tg.arn
  }
}

######################################
# 8) ECS Tasks & Services (FARGATE)
######################################
# 8.a) Variables comunes
locals {
  common_env = [
    { name = "DB_HOST", value = aws_db_instance.mysql.address },
    { name = "DB_USER", value = var.db_username },
    { name = "DB_PASS", value = var.db_password },
    { name = "DB_NAME", value = "votaciondb" },
  ]
}

# 8.b) ms-logeo
resource "aws_ecs_task_definition" "ms_logeo" {
  family                   = "ms-logeo"
  requires_compatibilities = ["FARGATE"]
  network_mode             = "awsvpc"
  cpu                      = "256"
  memory                   = "512"

  container_definitions = jsonencode([
    {
      name         = "ms-logeo"
      image        = "calehu/ms-logeo:latest"
      portMappings = [{ containerPort = 80, protocol = "tcp" }]
      environment  = local.common_env
    }
  ])
}

resource "aws_ecs_service" "ms_logeo" {
  name            = "ms-logeo"
  cluster         = aws_ecs_cluster.main.id
  task_definition = aws_ecs_task_definition.ms_logeo.arn
  desired_count   = 2
  launch_type     = "FARGATE"

  network_configuration {
    subnets          = aws_subnet.public[*].id
    security_groups  = [aws_security_group.ecs_sg.id]
    assign_public_ip = true
  }

  load_balancer {
    target_group_arn = aws_lb_target_group.frontend_tg.arn
    container_name   = "ms-logeo"
    container_port   = 80
  }
}

# 8.c) ms-participantes
resource "aws_ecs_task_definition" "ms_participantes" {
  family                   = "ms-participantes"
  requires_compatibilities = ["FARGATE"]
  network_mode             = "awsvpc"
  cpu                      = "256"
  memory                   = "512"

  container_definitions = jsonencode([
    {
      name         = "ms-participantes"
      image        = "calehu/ms-participantes:latest"
      portMappings = [{ containerPort = 80, protocol = "tcp" }]
      environment  = local.common_env
    }
  ])
}

resource "aws_ecs_service" "ms_participantes" {
  name            = "ms-participantes"
  cluster         = aws_ecs_cluster.main.id
  task_definition = aws_ecs_task_definition.ms_participantes.arn
  desired_count   = 2
  launch_type     = "FARGATE"

  network_configuration {
    subnets          = aws_subnet.public[*].id
    security_groups  = [aws_security_group.ecs_sg.id]
    assign_public_ip = true
  }

  load_balancer {
    target_group_arn = aws_lb_target_group.frontend_tg.arn
    container_name   = "ms-participantes"
    container_port   = 80
  }
}

# 8.d) ms-votaciones
resource "aws_ecs_task_definition" "ms_votaciones" {
  family                   = "ms-votaciones"
  requires_compatibilities = ["FARGATE"]
  network_mode             = "awsvpc"
  cpu                      = "256"
  memory                   = "512"

  container_definitions = jsonencode([
    {
      name         = "ms-votaciones"
      image        = "calehu/ms-votaciones:latest"
      portMappings = [{ containerPort = 80, protocol = "tcp" }]
      environment  = local.common_env
    }
  ])
}

resource "aws_ecs_service" "ms_votaciones" {
  name            = "ms-votaciones"
  cluster         = aws_ecs_cluster.main.id
  task_definition = aws_ecs_task_definition.ms_votaciones.arn
  desired_count   = 2
  launch_type     = "FARGATE"

  network_configuration {
    subnets          = aws_subnet.public[*].id
    security_groups  = [aws_security_group.ecs_sg.id]
    assign_public_ip = true
  }

  load_balancer {
    target_group_arn = aws_lb_target_group.frontend_tg.arn
    container_name   = "ms-votaciones"
    container_port   = 80
  }
}

# 8.e) kong
resource "aws_ecs_task_definition" "kong" {
  family                   = "kong"
  requires_compatibilities = ["FARGATE"]
  network_mode             = "awsvpc"
  cpu                      = "256"
  memory                   = "512"

  container_definitions = jsonencode([
    {
      name         = "kong"
      image        = "calehu/kong:latest"
      portMappings = [{ containerPort = 8000, protocol = "tcp" }]
      environment  = local.common_env
    }
  ])
}

resource "aws_ecs_service" "kong" {
  name            = "kong"
  cluster         = aws_ecs_cluster.main.id
  task_definition = aws_ecs_task_definition.kong.arn
  desired_count   = 1
  launch_type     = "FARGATE"

  network_configuration {
    subnets          = aws_subnet.public[*].id
    security_groups  = [aws_security_group.ecs_sg.id]
    assign_public_ip = true
  }

  load_balancer {
    target_group_arn = aws_lb_target_group.kong_tg.arn
    container_name   = "kong"
    container_port   = 8000
  }
}

# 8.f) frontend
resource "aws_ecs_task_definition" "frontend" {
  family                   = "frontend"
  requires_compatibilities = ["FARGATE"]
  network_mode             = "awsvpc"
  cpu                      = "256"
  memory                   = "512"

  container_definitions = jsonencode([
    {
      name         = "frontend"
      image        = "calehu/frontend:latest"
      portMappings = [{ containerPort = 80, protocol = "tcp" }]
      environment  = local.common_env
    }
  ])
}

resource "aws_ecs_service" "frontend" {
  name            = "frontend"
  cluster         = aws_ecs_cluster.main.id
  task_definition = aws_ecs_task_definition.frontend.arn
  desired_count   = 2
  launch_type     = "FARGATE"

  network_configuration {
    subnets          = aws_subnet.public[*].id
    security_groups  = [aws_security_group.ecs_sg.id]
    assign_public_ip = true
  }

  load_balancer {
    target_group_arn = aws_lb_target_group.frontend_tg.arn
    container_name   = "frontend"
    container_port   = 80
  }
}

######################################
# 9) Bastión dentro de VPC (SSM-only)
######################################
resource "aws_security_group" "bastion_sg" {
  name        = "vot-${var.environment}-bastion-sg"
  description = "Seguridad para bastion host (SSM)"
  vpc_id      = aws_vpc.main.id

  egress {
    from_port   = 0
    to_port     = 0
    protocol    = "-1"
    cidr_blocks = ["0.0.0.0/0"]
  }
}

resource "aws_instance" "bastion" {
  ami                    = data.aws_ami.amazon_linux.id
  instance_type          = "t3.micro"
  subnet_id              = aws_subnet.public[0].id
  vpc_security_group_ids = [aws_security_group.bastion_sg.id]
  iam_instance_profile   = "LabInstanceProfile"
  tags = {
    Name = "vot-${var.environment}-bastion"
  }
}

######################################
# 10) Outputs
######################################
output "db_endpoint" {
  description = "Endpoint de la instancia MySQL RDS"
  value       = aws_db_instance.mysql.address
}

output "bastion_id" {
  description = "ID de la instancia bastión para SSM"
  value       = aws_instance.bastion.id
}

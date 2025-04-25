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

data "aws_availability_zones" "available" {
  state = "available"
}

######################################
# 2) Red: VPC, subnets y SGs
######################################
resource "aws_vpc" "main" {
  cidr_block = "10.0.0.0/16"
  tags = { Name = "vot-${var.environment}-vpc" }
}

resource "aws_subnet" "public" {
  count                   = 2
  vpc_id                  = aws_vpc.main.id
  cidr_block              = cidrsubnet(aws_vpc.main.cidr_block, 8, count.index)
  availability_zone       = data.aws_availability_zones.available.names[count.index]
  map_public_ip_on_launch = true
  tags = { Name = "vot-${var.environment}-public-${count.index}" }
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
# 3) Base de datos MySQL en RDS
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
  identifier             = "vot-${var.environment}-db"
  engine                 = "mysql"
  engine_version         = "8.0"
  instance_class         = "db.t3.micro"
  allocated_storage      = 20
  username               = var.db_username
  password               = var.db_password
  skip_final_snapshot    = true
  db_subnet_group_name   = aws_db_subnet_group.db_subnets.name
  vpc_security_group_ids = [aws_security_group.db_sg.id]
  tags = { Name = "vot-${var.environment}-mysql" }
}

######################################
# 4) ECR: repos para cada servicio
######################################
resource "aws_ecr_repository" "repos" {
  for_each = toset(var.services)
  name     = "${each.key}-${var.environment}"
}

######################################
# 5) ECS Cluster
######################################
resource "aws_ecs_cluster" "main" {
  name = "vot-${var.environment}-cluster"
}

######################################
# 6) Application Load Balancer (ALB)
######################################
resource "aws_lb" "main" {
  name               = "vot-${var.environment}-alb"
  load_balancer_type = "application"
  subnets            = aws_subnet.public[*].id
  security_groups    = [aws_security_group.alb_sg.id]
}

resource "aws_lb_target_group" "frontend_tg" {
  name     = "frontend-${var.environment}-tg"
  port     = 80
  protocol = "HTTP"
  vpc_id   = aws_vpc.main.id

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
  name     = "kong-${var.environment}-tg"
  port     = 8000
  protocol = "HTTP"
  vpc_id   = aws_vpc.main.id

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
# 7) ECS Tasks & Services
######################################
locals {
  common_env = [
    { name = "DB_HOST", value = aws_db_instance.mysql.address },
    { name = "DB_USER", value = var.db_username },
    { name = "DB_PASS", value = var.db_password },
    { name = "DB_NAME", value = "votaciondb" },
  ]
}

# ARN del Role existente para ECS Task Execution
variable "ecs_exec_role_arn" {
  type        = string
  description = "ARN del IAM Role existente con AmazonECSTaskExecutionRolePolicy"
}

# ms-logeo
resource "aws_ecs_task_definition" "ms_logeo" {
  family                   = "ms-logeo"
  requires_compatibilities = ["FARGATE"]
  network_mode             = "awsvpc"
  cpu                      = "256"
  memory                   = "512"
  execution_role_arn       = var.ecs_exec_role_arn

  container_definitions = jsonencode([
    {
      name         = "ms-logeo"
      image        = "${aws_ecr_repository.repos["ms-logeo"].repository_url}:latest"
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
    subnets         = aws_subnet.public[*].id
    security_groups = [aws_security_group.ecs_sg.id]
    assign_public_ip= false
  }

  load_balancer {
    target_group_arn = aws_lb_target_group.frontend_tg.arn
    container_name   = "ms-logeo"
    container_port   = 80
  }
}

# (Repite el patrón anterior para ms-participantes, ms-votaciones, kong y frontend,
#  usando var.ecs_exec_role_arn en cada aws_ecs_task_definition)

######################################
# 8) Carga automática del init.sql
######################################
resource "null_resource" "db_init" {
  triggers = {
    init_hash = filesha256("${path.module}/init.sql")
  }
  depends_on = [ aws_db_instance.mysql ]

  provisioner "local-exec" {
    command = <<EOT
mysql \
  --host=${aws_db_instance.mysql.address} \
  --port=3306 \
  --user=${var.db_username} \
  --password=${var.db_password} \
  votaciondb < ${path.module}/init.sql
EOT
  }
}

######################################
# 9) Output del endpoint de la DB
######################################
output "db_endpoint" {
  description = "Endpoint de la instancia MySQL RDS"
  value       = aws_db_instance.mysql.address
}

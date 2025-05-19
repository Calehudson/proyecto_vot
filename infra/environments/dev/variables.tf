# Región AWS
variable "aws_region" {
  type    = string
  default = "us-east-1"
}

# Entorno (dev, prod…)
variable "environment" {
  type    = string
  default = "dev"
}

# Credenciales de la base de datos
variable "db_username" {
  type = string
}
variable "db_password" {
  type = string
}

# Lista de servicios (repos ECR + ECS tasks)
variable "services" {
  type    = list(string)
  default = [
    "ms-logeo",
    "ms-participantes",
    "ms-votaciones",
    "kong",
    "frontend",      
  ]
}

variable "aws_access_key_id" {
  description = "AWS Access Key ID para el contenedor de Grafana"
  type        = string
}

variable "aws_secret_access_key" {
  description = "AWS Secret Access Key para el contenedor de Grafana"
  type        = string
}

variable "aws_session_token" {
  description = "AWS Session Token para el contenedor de Grafana"
  type        = string
}


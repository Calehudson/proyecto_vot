terraform {
  backend "s3" {
    bucket         = "proyecto-vot-terraform-state-2025-55"
    key            = "dev/terraform.tfstate"
    region         = "us-east-1"
    dynamodb_table = "proyecto-vot-terraform-locks"
  }
}

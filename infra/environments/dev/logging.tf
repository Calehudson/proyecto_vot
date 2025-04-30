# infra/environments/dev/logging.tf

resource "aws_cloudwatch_log_group" "kong" {
  name              = "/ecs/vot-dev-kong"
  retention_in_days = 7
}

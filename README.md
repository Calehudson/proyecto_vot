# README - Despliegue del Sistema de Votación

Este documento describe el procedimiento para provisionar la infraestructura en AWS utilizando AWS CloudShell y Terraform.

---

## Prerrequisitos

- Repositorio Git clonado en CloudShell o acceso con `git pull`.
- Archivo `terraform.tfvars` con las variables necesarias (`db_username`, `db_password`, `ecs_exec_role_arn`, etc.).
- Backend de Terraform configurado en S3 y con locking en DynamoDB.

## Pasos para provisionar infraestructura

1. **Clonar o actualizar el repositorio**

   ```bash
   # Si no está clonado
   git clone https://github.com/Calehudson/proyecto_vot.git
   cd proyecto_vot/infra/environments/dev

   # Si ya estaba clonado
   git pull origin main
   cd proyecto_vot/infra/environments/dev
   ```

2. **Inicializar el entorno de Terraform**

   ```bash
   terraform init
   ```

   - Instala los proveedores necesarios.
   - Configura el backend en S3 y el locking en DynamoDB.

3. **Revisar el plan de cambios**

   ```bash
   terraform plan -var-file="terraform.tfvars"
   ```

   - Muestra en pantalla todos los recursos que se crearán, modificarán o eliminarán.
   - Verificar que las acciones reflejen los cambios esperados.

4. **Aplicar los cambios en AWS**

   ```bash
   terraform apply -var-file="terraform.tfvars"
   ```

   - Crea o actualiza todos los recursos declarados en la configuración (VPC, subnets, Security Groups, ALB, ECS Cluster, RDS, EC2 Bastión, ECR, etc.).
   - Terraform bloqueará el estado durante el apply y lo liberará al finalizar.

5. **Verificar el despliegue**

   - Acceder a la **consola de AWS** (VPC, ECS, RDS, ALB, ECR, S3, DynamoDB) y comprobar que todos los recursos estén en estado `Active` o `Healthy`.
   - En **Application Load Balancer**:
     - Revisar los **Target Groups** de Frontend y Kong; deben aparecer tareas en estado `healthy`.
   - En **ECS**:
     - Verificar que las tareas estén desplegadas con la etiqueta de imagen correcta y en estado `RUNNING`.
   - En **RDS**:
     - Confirmar que la instancia MySQL esté accesible desde las tareas ECS (por ejemplo, mediante health checks de los microservicios).

---


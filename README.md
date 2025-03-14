# README - Despliegue del Sistema de Votación

## Requisitos previos
Asegúrate de tener instalados los siguientes programas:
- Git
- Docker Compose
- Docker Desktop

## Despliegue
Clonar la carpeta `sistema` del repositorio de GitHub:
```bash
git clone --no-checkout https://github.com/Calehudson/proyecto_vot.git
cd proyecto_vot  
git sparse-checkout init --cone
git sparse-checkout set sistema
git checkout
```

## Dockerización
Abrir la terminal en Docker Desktop y ejecutar los siguientes comandos desde la carpeta `sistema`.

### Levantar los contenedores
```bash
docker-compose up -d
```

### Si Kong entra en un bucle, seguir estos pasos:
1. **Detener el servicio:**
   ```bash
   docker stop kong
   ```

2. **Crear las migraciones:**
   ```bash
   docker run --rm --network=docker_proyecto_vot_mynetwork \
     -e KONG_DATABASE=postgres \
     -e KONG_PG_HOST=kong-database \
     -e KONG_PG_USER=kong \
     -e KONG_PG_PASSWORD=kong \
     kong/kong kong migrations bootstrap
   ```

3. **Cargar los datos del `kong.yml` en la base de datos:**
   ```bash
   docker exec -it kong kong config db_import /etc/kong/kong.yml
   ```

## Ejecutar el sistema
Una vez levantados los contenedores, acceder a la dirección:
[http://localhost:8000](http://localhost:8000)

🚀 ¡El sistema está listo para usarse!


# ADR 0001: Usar Nginx como Servidor Web

## Contexto
Inicialmente se consideró utilizar Apache como servidor web, aprovechando su fácil integración con entornos de desarrollo locales como XAMPP. Sin embargo, debido a requisitos de escalabilidad, rendimiento y compatibilidad con arquitecturas basadas en contenedores (Docker), se evaluaron otras alternativas. Nginx surgió como la opción ideal para manejar un alto volumen de solicitudes concurrentes y facilitar una futura migración hacia microservicios.

## Decisión
Se utilizará **Nginx** como servidor web para el sistema de votación. Nginx se encargará de recibir las solicitudes entrantes y delegar la ejecución de PHP a **PHP-FPM**. Esta arquitectura permite un manejo eficiente de las conexiones, reduciendo la carga del servidor y ofreciendo una mayor capacidad de respuesta ante picos de tráfico.

## Opciones Consideradas

### 1. **Apache**
- ✅ **Integración Sencilla:** Fácil de implementar en entornos de desarrollo y con herramientas como XAMPP.
- ❌ **Rendimiento Limitado:** Su modelo de procesamiento basado en procesos/hilos puede presentar problemas de escalabilidad en entornos de alta concurrencia.

### 2. **Nginx (Decisión Final)**
- ✅ **Alto Rendimiento:** Optimizado para manejar un gran número de conexiones concurrentes, ideal para sistemas de votación con tráfico variable.
- ✅ **Compatibilidad con Contenedores:** Se integra de manera nativa con arquitecturas basadas en Docker, facilitando la migración y la escalabilidad.
- ✅ **Facilidad para Implementar Proxy Inverso:** Permite la configuración de microservicios y la distribución de carga entre distintos servicios.
- ❌ **Configuración Inicial:** Requiere una configuración más detallada que Apache, lo que implica una mayor inversión de tiempo en la fase de puesta en marcha.

## Consecuencias

### ✅ Ventajas
- **Escalabilidad y Rendimiento:** Nginx ofrece un rendimiento superior en escenarios de alta carga, lo que es fundamental para un sistema de votación que puede experimentar picos de tráfico.
- **Portabilidad:** La facilidad para dockerizar Nginx, junto con PHP-FPM, garantiza que el entorno de producción sea reproducible en distintos servidores y plataformas.
- **Compatibilidad con Microservicios:** Su capacidad para actuar como proxy inverso facilita la futura migración hacia arquitecturas basadas en microservicios.
- **Seguridad y Eficiencia:** Nginx está diseñado para minimizar el uso de recursos, lo que puede mejorar la seguridad y eficiencia del sistema.

### ❌ Desventajas
- **Mayor Complejidad de Configuración:** A diferencia de Apache, Nginx requiere una configuración más manual y detallada, lo que puede incrementar el tiempo inicial de desarrollo.
- **Curva de Aprendizaje:** Para equipos acostumbrados a Apache, la migración a Nginx puede requerir capacitación y ajustes en las prácticas de configuración del servidor.

## Estrategia de Mitigación
- **Documentación Detallada:** Se creará una documentación interna que detalle la configuración de Nginx y PHP-FPM, facilitando la comprensión y mantenimiento del entorno.
- **Capacitación y Pruebas:** Se realizará una capacitación inicial para el equipo de desarrollo y se ejecutarán pruebas de rendimiento para ajustar la configuración antes del despliegue en producción.
- **Automatización del Despliegue:** Utilizar Docker y Docker Compose para automatizar el despliegue del entorno, asegurando que la configuración de Nginx se mantenga consistente en todos los entornos (desarrollo, pruebas y producción).

---

📌 **Ubicación del archivo en GitHub:**  
📂 `docs/adr/0001-uso-de-nginx.md`

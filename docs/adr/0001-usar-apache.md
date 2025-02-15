# ADR 0001: Usar Apache como Servidor Web

## Contexto
Inicialmente se consideró utilizar Nginx como servidor web debido a su rendimiento y escalabilidad en entornos de alta concurrencia y arquitecturas basadas en contenedores. Sin embargo, tras una evaluación detallada de los requerimientos del proyecto, se determinó que Apache ofrece una mayor facilidad de configuración y compatibilidad con entornos de desarrollo locales, como XAMPP y herramientas similares. Además, **Apache tiene integrado soporte para PHP**, lo que elimina la necesidad de configuraciones adicionales como PHP-FPM, simplificando el proceso de despliegue y desarrollo.

## Decisión
Se utilizará **Apache** como servidor web para el sistema de votación. Apache se encargará de recibir las solicitudes entrantes y ejecutar PHP directamente a través de su módulo integrado (`mod_php`). Esta arquitectura proporciona facilidad de implementación y una configuración flexible para distintos entornos.

## Opciones Consideradas

### 1. **Nginx**
- ✅ **Alto Rendimiento:** Optimizado para manejar un gran número de conexiones concurrentes.
- ✅ **Compatibilidad con Contenedores:** Se integra de manera nativa con arquitecturas basadas en Docker.
- ✅ **Facilidad para Implementar Proxy Inverso:** Permite configuraciones avanzadas de balanceo de carga y microservicios.
- ❌ **Mayor Complejidad de Configuración:** Requiere configuraciones detalladas y diferentes a las que el equipo está acostumbrado.
- ❌ **Necesita PHP-FPM:** A diferencia de Apache, Nginx requiere una configuración adicional para ejecutar PHP.

### 2. **Apache (Decisión Final)**
- ✅ **Integración Sencilla:** Compatible con entornos de desarrollo locales sin configuraciones complejas.
- ✅ **PHP Integrado:** Apache puede ejecutar PHP directamente mediante `mod_php`, eliminando la necesidad de configuraciones adicionales como PHP-FPM.
- ✅ **Flexibilidad en Configuración:** Su sistema de módulos permite adaptar la configuración según las necesidades del proyecto.
- ✅ **Amplio Soporte y Documentación:** Apache es ampliamente utilizado y documentado, lo que facilita la resolución de problemas y la configuración.
- ❌ **Menor Rendimiento en Alta Concurrencia:** Su arquitectura basada en procesos/hilos puede ser menos eficiente en escenarios de alta carga sin ajustes adecuados.
- ❌ **Consumo de Recursos:** Puede consumir más memoria en escenarios de alta concurrencia en comparación con Nginx.

## Consecuencias

### ✅ Ventajas
- **Facilidad de Uso:** Apache es más accesible para desarrolladores acostumbrados a entornos como XAMPP y LAMP.
- **Compatibilidad con Aplicaciones Web Tradicionales:** Mejor soporte para `.htaccess` y configuraciones heredadas.
- **Configuración Flexible:** Su arquitectura basada en módulos permite activación o desactivación de funcionalidades según necesidades específicas.
- **Ejecución de PHP Integrada:** No se requiere configuraciones adicionales para ejecutar PHP, reduciendo el esfuerzo de mantenimiento.

### ❌ Desventajas
- **Escalabilidad Limitada sin Optimizaciones:** Puede requerir ajustes avanzados para manejar alta concurrencia.
- **Mayor Consumo de Recursos en Alto Tráfico:** En comparación con Nginx, Apache puede requerir más memoria y CPU en ciertos escenarios.

## Estrategia de Mitigación
- **Optimización de Configuración:** Se ajustará Apache para mejorar su rendimiento en escenarios de alta carga (ajustes de `KeepAlive`, `mpm_event`, `cache`, etc.).
- **Documentación Detallada:** Se proporcionará una guía de configuración y ajustes recomendados para Apache.
- **Monitoreo y Escalabilidad:** Se implementará un monitoreo continuo del rendimiento del servidor web para detectar posibles cuellos de botella y optimizar según sea necesario.

---

📌 **Ubicación del archivo en GitHub:**  
📂 `docs/adr/0001-uso-de-apache.md`

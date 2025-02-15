# ADR 0003: Uso de PHP en el Proyecto

## Contexto
Realizado en análisis para la implementación del sistema de votación para "Operación Triunfo", se tiene la oportunidad de definir la tecnología que se utilizará para el desarrollo del backend. Se requiere una solución que permita:
- Un **desarrollo ágil y maduro** para la creación de un sistema web robusto.
- **Integración nativa con Apache** como servidor web, lo que facilita una configuración optimizada.
- **Futuras migraciones a entornos dockerizados**, garantizando portabilidad y consistencia entre desarrollo y producción.

La evaluación se centró en tecnologías que permitan desarrollar el sistema de forma rápida y con gran soporte comunitario, a la vez que se integren sin fricciones con Apache y sean fácilmente containerizables.

## Decisión
Se opta por utilizar **PHP** como lenguaje principal para el desarrollo del backend. Esta elección se fundamenta en la madurez de PHP, su amplia comunidad, y la excelente integración con Apache, lo que permitirá un desarrollo ágil y escalable desde la etapa inicial hasta la producción.

## Opciones Consideradas

### 1. **Node.js**
✅ Alto rendimiento en operaciones asíncronas y manejo de aplicaciones en tiempo real.  
✅ Ecosistema moderno con numerosas librerías y herramientas.  
❌ Requiere adoptar un paradigma asíncrono que puede implicar una curva de aprendizaje para equipos acostumbrados a PHP.  
❌ La integración con frameworks tradicionales de desarrollo web no es directa, lo que podría incrementar el tiempo de desarrollo.

### 2. **Python (Django/Flask)**
✅ Frameworks robustos que facilitan el desarrollo de aplicaciones complejas y seguras.  
✅ Enfoque en la legibilidad del código y una comunidad activa.  
❌ La integración nativa con Apache y la configuración para entornos dockerizados pueden requerir ajustes adicionales.  
❌ Para un sistema de votación tradicional, PHP permite un desarrollo más rápido debido a su larga trayectoria y a la abundancia de recursos.

### 3. **PHP (Decisión Final)**
✅ **Madurez y estabilidad comprobada:** PHP es ampliamente utilizado en el desarrollo web y cuenta con décadas de experiencia y mejoras continuas.  
✅ **Integración nativa con Apache:** PHP se configura de manera óptima con Apache, facilitando el despliegue y la optimización del rendimiento.  
✅ **Portabilidad y dockerización:** Existen imágenes oficiales y una gran comunidad en torno a Docker para PHP, lo que simplifica la migración a entornos containerizados y garantiza la consistencia entre desarrollo y producción.  
✅ **Desarrollo ágil:** La amplia disponibilidad de recursos, documentación y soporte comunitario permite acelerar el desarrollo y resolver incidencias de forma eficiente.  
❌ En escenarios de alta concurrencia, PHP puede requerir optimizaciones adicionales (por ejemplo, mediante caching o balanceo de carga) para mantener un rendimiento óptimo.

## Consecuencias

### ✅ **Ventajas**
- **Desarrollo Ágil y Familiar:** La extensa experiencia en PHP y la abundancia de recursos permiten un desarrollo rápido y confiable.
- **Integración Eficiente con Apache:** PHP se integra de manera nativa con Apache, facilitando la configuración y la optimización del servidor.
- **Portabilidad con Docker:** La disponibilidad de imágenes oficiales y herramientas de Docker para PHP asegura que el entorno se pueda replicar y migrar sin complicaciones.

### ❌ **Desventajas**
- **Optimización en Alta Carga:** En situaciones de tráfico extremadamente alto, es posible que se necesiten técnicas de optimización adicionales.
- **Mantenimiento y Actualizaciones:** Se requiere un plan de mantenimiento para asegurar la actualización constante de PHP y sus dependencias, garantizando la seguridad del sistema.
- **Enfoque Tradicional:** Aunque PHP es muy efectivo para sistemas web tradicionales, para aplicaciones con requerimientos asíncronos muy intensos otras tecnologías podrían ofrecer ventajas específicas.

## Estrategia de Mitigación
- **Optimización del Rendimiento:** Implementar técnicas de caching, balanceo de carga y optimización de consultas para mitigar posibles cuellos de botella en entornos de alta concurrencia.
- **Automatización del Despliegue:** Utilizar Docker junto con herramientas de integración continua (CI/CD) para asegurar que el entorno de desarrollo sea idéntico al de producción.
- **Plan de Mantenimiento:** Establecer un proceso de actualización y monitoreo constante para mantener las versiones y dependencias de PHP seguras y optimizadas.
- **Documentación y Capacitación:** Asegurar que el equipo de desarrollo esté familiarizado con las buenas prácticas de PHP y Apache, facilitando la transición y el mantenimiento del sistema.

---

📌 **Ubicación del archivo en GitHub:**  
📂 `docs/adr/0003-uso-de-php.md`

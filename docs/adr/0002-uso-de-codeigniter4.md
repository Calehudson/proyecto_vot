# ADR 0002: Uso de CodeIgniter 4 como Framework

## Contexto
Para el sistema de votación de "Operación Triunfo" se requiere desarrollar un backend que permita un **desarrollo ágil**, una **integración eficiente con Apache**, compatibilidad nativa con PHP y la posibilidad de migrar fácilmente a entornos dockerizados. Dado que aún no se ha implementado el sistema, existe la oportunidad de definir la tecnología que permita construir una aplicación robusta y escalable desde sus inicios, sin introducir complejidad innecesaria.

## Decisión
Se opta por utilizar **CodeIgniter 4** como framework para el desarrollo del sistema. Esta elección se fundamenta en su ligereza, facilidad de aprendizaje y configuración, así como en su excelente integración con PHP y Apache. Además, CodeIgniter 4 se adapta muy bien a entornos dockerizados, lo que garantiza que el entorno de desarrollo y producción sean consistentes, simplificando la migración y el despliegue.

## Opciones Consideradas

### 1. **Laravel**
✅ Framework muy popular y rico en funcionalidades integradas (ORM, colas, etc.).  
✅ Amplia comunidad y soporte.  
❌ Su robustez puede resultar excesiva para un sistema de votación con requerimientos relativamente sencillos, lo que puede incrementar la complejidad y el tiempo de desarrollo.

### 2. **Symfony**
✅ Altamente modular, escalable y adecuado para aplicaciones complejas.  
✅ Ofrece componentes reutilizables y gran flexibilidad.  
❌ La curva de aprendizaje es más pronunciada y su configuración puede ser más compleja, lo cual podría no ser necesario para el alcance del proyecto actual.

### 3. **CodeIgniter 4 (Decisión Final)**
✅ Ligero y fácil de aprender, lo que permite un desarrollo ágil y eficiente.  
✅ Excelente rendimiento y bajo consumo de recursos, ideal para manejar la alta concurrencia en sistemas de votación.  
✅ Se integra de manera nativa con PHP y Apache, simplificando la configuración y optimización del servidor.  
✅ Facilita la dockerización, permitiendo que el entorno se replique de manera consistente entre desarrollo y producción.  
❌ Ofrece menos funcionalidades "out-of-the-box" en comparación con Laravel, lo que podría requerir implementaciones manuales para características avanzadas; sin embargo, esta simplicidad es una ventaja para el alcance del proyecto.

## Consecuencias

### ✅ **Ventajas**
- **Desarrollo Ágil:** La estructura ligera de CodeIgniter 4 permite construir rápidamente el sistema sin una sobrecarga innecesaria.
- **Rendimiento Óptimo:** Su bajo consumo de recursos y alta velocidad de respuesta son ideales para una aplicación que puede enfrentar picos de concurrencia.
- **Integración Sencilla con Apache:** La configuración y optimización con Apache es directa, lo que facilita el despliegue en producción.
- **Portabilidad y Dockerización:** La facilidad para dockerizar el entorno asegura que el mismo se pueda replicar en diferentes servidores, garantizando consistencia y escalabilidad.
- **Soporte y Comunidad:** Aunque su comunidad es más reducida en comparación con Laravel, CodeIgniter 4 cuenta con una documentación clara y suficiente soporte para resolver la mayoría de los desafíos.

### ❌ **Desventajas**
- **Funcionalidades Limitadas:** En comparación con frameworks más robustos como Laravel o Symfony, CodeIgniter 4 puede requerir el desarrollo manual de algunas funcionalidades avanzadas.
- **Menor Popularidad en Proyectos Modernos:** La comunidad y la cantidad de paquetes disponibles son menores, lo que podría limitar el soporte en algunos casos.
- **Escalabilidad en Proyectos de Gran Complejidad:** Para aplicaciones extremadamente complejas, otros frameworks podrían ofrecer herramientas más avanzadas; sin embargo, para el alcance del sistema de votación, la simplicidad de CodeIgniter es una ventaja.

## Estrategia de Mitigación
- **Desarrollo Modular:** Crear módulos y componentes personalizados para aquellas funcionalidades que no estén disponibles de forma nativa en CodeIgniter 4.
- **Optimización Continua:** Implementar pruebas de rendimiento y revisiones periódicas para identificar y solucionar cuellos de botella, asegurando un rendimiento óptimo en producción.
- **Capacitación del Equipo:** Proveer formación específica y documentar las buenas prácticas de uso de CodeIgniter 4 para que el equipo pueda aprovechar al máximo sus capacidades.
- **Monitoreo y Actualización:** Establecer un proceso continuo de monitoreo, mantenimiento y actualización del framework y sus dependencias, garantizando la seguridad y estabilidad del sistema.

---

📌 **Ubicación del archivo en GitHub:**  
📂 `docs/adr/0002-uso-de-codeigniter4.md`




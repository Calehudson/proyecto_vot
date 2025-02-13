# ADR 007: Herramientas de Gestión de la configuración - Git vs Jira 

### **Fecha:** [ 2025-02-09 ] 

## Contexto
La gestión de configuración es fundamental para la organización y mantenimiento de proyectos asegurando la calidad del producto final, del sistema de votación para Operación Triunfo. Dado que el sistema de votación estará en producción por al menos diez años, es fundamental elegir herramientas que permita administrar versiones, coordinar tareas y facilitar la comunicación entre equipos dando así la facilidad de escalar y adaptar el desarrollo a futuras necesidades. 
Se consideran opciones como GitHub, GitLab y Jira, las cuales son herramientas de control de versiones y de gestión. ¿Cuál de estas plataformas sería la más adecuada para gestionar el proyecto del sistema de votación de Operación Triunfo? ¿Se pueden complementar con otras herramientas para maximizar la eficiencia y adaptabilidad del desarrollo? 

## Decisión
Se elige **GitHub** como la herramienta principal de gestión de configuración, complementada con herramientas de Microsoft como Teams y Planner usadas para la comunicación y organización del trabajo. GitHub es ampliamente adoptado en la industria y cuenta con una interfaz intuitiva, permitiendo la revisión de código, la integración continua y la gestión de proyectos a través de issues y dashboards. 
Además, se espera que la integración de GitHub y Teams sea más estable lo que permitirá mejorar la comunicación sin cambiar de plataforma. 

## Factores de Desición
- Curva de aprendizaje. 
- Control de versiones.
- Integración con herramientas de comunicación y gestión de tareas.
- Escalabilidad y compatibilidad con entornos de desarrollo modernos.

## Consecuencias de la decisión 
### ✅ Positivas 
- GitHub permite centralizar el código, los comentarios y la organización del trabajo en un solo lugar. 
- La integración futura con Teams mejorará la eficiencia sin necesidad de cambios bruscos en el flujo de trabajo. 
- GitHub tiene menor curva de aprendizaje ya que es ampliamente conocido por los desarrolladores. 

### ❌ Negativas 
- La integración con Teams aún está en fase beta y podría presentar problemas iniciales. 
- Para una gestión avanzada de proyectos, podría ser necesario incorporar Planner u otras herramientas adicionales.

## Opciones Consideradas
- **GitHub:** Plataforma de control de versiones y colaboración en código, con integraciones para la gestión de proyectos. 
- **GitLab:** Alternativa similar a GitHub con enfoque en DevOps y CI/CD. 
- **Jira:** Herramienta de gestión de proyectos que permite seguimiento de tareas y metodologías ágiles (Scrum/Kanban). 

## Ventajas y Desventajas de las opciones 
### 1. **GitHub** 
- ✅ Control de versiones y gestión de proyectos en una sola plataforma. 
- ✅ Integración con Microsoft Teams, permitiendo una transición gradual hacia una gestión centralizada. 
- ✅ Facilidad de entendimiento. 
- ✅ Amplio soporte y comunidad. 
- ❌ Limitaciones en gestión avanzada de proyectos, aunque se pueden complementar con otras herramientas. 

### 2. **GitLab** 
- ✅ Plataforma todo en uno con CI/CD integrado. 
- ✅ Mayor control en implementaciones self-hosted. 
- ❌ Menos adopción en el ecosistema empresarial en comparación con GitHub. 
- ❌ Curva de aprendizaje más pronunciada. 

### 3. **Jira** 
- ✅ Gestión avanzada de tareas y metodologías ágiles. 
- ✅ Personalización y reportes detallados. 
- ❌ No maneja control de versiones, por lo que requeriría integrarse con GitHub o GitLab. 
- ❌ Costo adicional y mayor configuración inicial. 

---

📌 **Ubicación del archivo en GitHub:**  
📂 `docs/adr/0007-herramientas-gestion.md`


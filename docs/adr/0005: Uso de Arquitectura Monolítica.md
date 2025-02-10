# ADR 0005: Uso de Arquitectura Monolítica

## Contexto
Inicialmente, se consideró la posibilidad de utilizar una arquitectura basada en microservicios. Sin embargo, debido a la simplicidad del proyecto y la necesidad de minimizar la sobrecarga operativa, se optó por una arquitectura monolítica.

## Decisión
Usaremos una arquitectura monolítica para desarrollar el sistema de votación, utilizando **CodeIgniter (PHP)** para la lógica del servidor, con una base de datos **MySQL** y un servidor web **Nginx**.

## Opciones Consideradas

### 1. **Microservicios**
✅ Modularización y escalabilidad independiente.  
❌ Mayor complejidad en despliegue y mantenimiento.  

### 2. **Arquitectura Monolítica (Decisión Final)**
✅ Simplicidad en desarrollo y mantenimiento.  
✅ Despliegue más fácil y rápido.  
✅ Menos sobrecarga operativa.  
❌ Puede ser menos escalable en grandes volúmenes de tráfico.  

## Consecuencias

### ✅ **Ventajas**
- Reducción en los costos de infraestructura y mantenimiento.
- Menos complejidad en la integración entre servicios.
- Fácil de desarrollar y probar en entornos locales.

### ❌ **Desventajas**
- Puede volverse difícil de escalar en el futuro.
- Mayor acoplamiento entre componentes.

## Estrategia de Mitigación
- Modularizar el código dentro de la arquitectura monolítica para facilitar una futura migración a microservicios si es necesario.
- Implementar contenedores con **Docker** para simplificar despliegues y gestión de entornos.

---

📌 **Ubicación del archivo en GitHub:**  
📂 `docs/adr/0002-arquitectura-monolitica.md`

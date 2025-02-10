# ADR 0004: Uso de MySQL como Base de Datos

## Contexto
Para el sistema de votación, se evaluaron varias opciones de bases de datos. La selección de la base de datos debe garantizar **rendimiento, estabilidad y compatibilidad** con la infraestructura establecida. 

Inicialmente, se consideraron bases de datos SQL y NoSQL, pero debido a los requisitos del proyecto, se decidió optar por **MySQL**.

## Decisión
Se utilizará **MySQL** como base de datos principal para el sistema de votación, proporcionando una solución estructurada y fiable para el almacenamiento y la gestión de datos.

## Opciones Consideradas

### 1. **PostgreSQL**
✅ Soporta transacciones ACID y alta integridad de datos.  
✅ Robusto en consultas complejas.  
❌ Puede tener una curva de aprendizaje más alta en comparación con MySQL.  

### 2. **MongoDB (NoSQL)**
✅ Flexible para datos no estructurados.  
✅ Escalabilidad horizontal.  
❌ No es ideal para consultas SQL estructuradas y relacionales.  

### 3. **MySQL (Decisión Final)**
✅ Popularidad y gran comunidad de soporte.  
✅ Alto rendimiento en consultas SQL.  
✅ Compatible con CodeIgniter y otras tecnologías del stack.  
✅ Fácil de integrar con servicios en la nube y herramientas de backup.  
❌ Puede tener problemas de escalabilidad en casos de alta carga si no se optimiza adecuadamente.  

## Consecuencias

### ✅ **Ventajas**
- Mayor facilidad de integración con el stack actual.
- Alto rendimiento en operaciones de lectura y escritura.
- Madurez y estabilidad probadas en entornos productivos.

### ❌ **Desventajas**
- Puede necesitar ajustes en optimización para grandes volúmenes de datos.
- Menos flexible en modelos de datos no relacionales.

## Estrategia de Mitigación
- **Optimizar consultas SQL** y utilizar **índices** para mejorar el rendimiento.
- **Implementar replicación** de base de datos para escalabilidad.
- **Usar backups regulares** para asegurar la integridad de los datos.

---

📌 **Ubicación del archivo en GitHub:**  
📂 `docs/adr/0004-uso-de-mysql.md`

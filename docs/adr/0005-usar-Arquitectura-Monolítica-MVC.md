# ADR 0005: Uso de Arquitectura Monolítica con MVC

## **Contexto**
Durante la fase de diseño del sistema de votación, se evaluaron diferentes enfoques arquitectónicos para garantizar una estructura flexible y mantenible. Si bien se optó por una arquitectura monolítica para minimizar la sobrecarga operativa, se decidió utilizar el **patrón Modelo-Vista-Controlador (MVC)** dentro de esta arquitectura en lugar de un diseño monolítico tradicional.

## **Decisión**
El sistema de votación será desarrollado utilizando una arquitectura **monolítica con el patrón MVC** a través del framework **CodeIgniter (PHP)**, con **MySQL** como base de datos y **Apache** como servidor web.

## **Opciones Consideradas**

### **1. Arquitectura Monolítica Tradicional**
✅ Simplicidad en implementación inicial.  
❌ Mayor dificultad para mantener y escalar.  
❌ Acoplamiento fuerte entre la capa de datos, lógica de negocio y la interfaz de usuario.  

### **2. Arquitectura Monolítica con MVC (Decisión Final)**
✅ Separación clara de responsabilidades: facilita mantenimiento y escalabilidad.  
✅ Desarrollo modular y flexible dentro de la estructura monolítica.  
✅ Permite una futura migración a microservicios si es necesario.  
✅ Facilita el trabajo en equipo al dividir lógica, interfaz y datos en capas independientes.  
❌ Requiere un aprendizaje inicial para comprender la estructura MVC.  

## **Consecuencias**
### **✅ Ventajas**
- **Mantenibilidad mejorada**: gracias a la separación de responsabilidades en Modelo, Vista y Controlador.  
- **Reutilización de componentes**: reduce redundancias en el código.  
- **Escalabilidad dentro del entorno monolítico**: facilita la integración de nuevas funcionalidades.  
- **Desarrollo colaborativo**: distintos desarrolladores pueden trabajar en diferentes capas del sistema sin generar conflictos.  

### **❌ Desventajas**
- **Requiere una curva de aprendizaje para equipos sin experiencia en MVC.**  
- **Puede generar sobrecarga en el diseño inicial, aunque a largo plazo mejora la organización del proyecto.**  

## **Estrategia de Mitigación**
- **Uso de contenedores con Docker** para facilitar la portabilidad del sistema y la gestión de entornos.  
- **Modularización del código** dentro del esquema MVC para facilitar futuras migraciones a arquitecturas más escalables.  
- **Documentación clara** de los componentes del sistema y el patrón MVC para mejorar la curva de aprendizaje del equipo.  

📌 **Ubicación del archivo en GitHub:**  
📂 `docs/adr/0005-usar-Arquitectura-Monolítica-MVC.md`



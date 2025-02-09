# ADR 0001: Usar Nginx como Servidor Web

## Contexto
El sistema inicialmente iba a utilizar Apache, pero debido a requisitos de escalabilidad y compatibilidad con Docker, decidimos usar Nginx.

## Decisión
Usaremos **Nginx** como servidor web para manejar solicitudes del sistema y delegar la ejecución de PHP a PHP-FPM.

## Opciones Consideradas
1. **Apache**
   - ✅ Fácil integración con XAMPP.
   - ❌ Menor eficiencia en alto tráfico.
2. **Nginx (Decisión Final)**
   - ✅ Mejor rendimiento en solicitudes concurrentes.
   - ✅ Compatibilidad con microservicios y proxy inverso.

## Consecuencias
✅ Ventajas:
- Escalabilidad y rendimiento.
- Mejor soporte para futuras migraciones a microservicios.

❌ Desventajas:
- Necesita más configuración inicial.
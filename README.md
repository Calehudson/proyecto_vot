# README - Despliegue del Sistema de Votación

## **Requisitos Previos**
Antes de comenzar, asegúrate de tener instalados los siguientes componentes en tu máquina local:

- **Apache 2.4** (El módulo `mod_rewrite` debe estar habilitado)
- **MySQL 15.1**
- **PHP 8**
- **Git** (Para clonar el repositorio)
- También puedes utilizar un paquete de distribución como **XAMPP**, que instala todas las especificaciones mencionadas.

---

## **Despliegue**
### **1. Descargar el sistema**
1. Ubicarse en la carpeta de salida del servidor web:
   - Para **XAMPP**: `C:/xampp/htdocs/`
   - Para **WAMP**: `C:/wamp/www/`
2. Abrir una terminal y ejecutar el siguiente comando para clonar el repositorio:
   ```sh
   git clone https://github.com/Calehudson/proyecto_vot.git
   ```

### **2. Importar la Base de Datos**
1. Abrir **phpMyAdmin** accediendo a [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
2. Crear una nueva base de datos (por ejemplo, `bd_sistema`).
3. Importar el script de la base de datos:
   - Seleccionar la base de datos creada.
   - Ir a la pestaña **Importar**.
   - Seleccionar el archivo SQL ubicado en `proyecto_vot/bd/bdscript.sql`.
   - Presionar **Continuar**.

### **3. Configuración del Sistema**
1. Abrir el archivo de configuración de la base de datos en `app/Config/Database.php`.
2. Modificar los siguientes valores con las credenciales de la base de datos:
   ```php
   public $default = [  
       'hostname' => 'localhost',  
       'username' => 'root',  
       'password' => 'contraseña del root',  
       'database' => 'nombre de la bd', 
       'port' => 3306, 
   ];
   ```

### **4. Ejecutar el Sistema**
Para acceder al sistema, abre un navegador web y visita la siguiente URL:
```
http://localhost/proyecto_vot
```

El sistema desplegará la pantalla inicial con el formulario de votación.

---

## **Notas Adicionales**
- Si `mod_rewrite` no está habilitado, edita el archivo `httpd.conf` en Apache y asegúrate de que la siguiente línea no tenga `#` al inicio:
  ```apache
  LoadModule rewrite_module modules/mod_rewrite.so
  ```
- Para solucionar problemas de conexión a la base de datos, verifica que MySQL esté en ejecución y que las credenciales en `Database.php` sean correctas.
- Despues de clonar el repositorio, se recomienda instalar las dependencias de PHP con composer install

🚀 ¡El sistema está listo para usarse!


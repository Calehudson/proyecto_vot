FROM php:8.2-apache

# Instala extensiones necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip unzip \
    libzip-dev \
    libicu-dev \
  && docker-php-ext-install mysqli pdo pdo_mysql zip intl

# Habilita mod_rewrite
RUN a2enmod rewrite

# Ajusta DocumentRoot de Apache a la carpeta `public`
RUN sed -i \
    -e "s|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|" \
    /etc/apache2/sites-available/000-default.conf \
  && sed -i \
    -e "s|<Directory /var/www/html>|<Directory /var/www/html/public>|" \
    /etc/apache2/apache2.conf

# Copia la aplicación al contenedor
COPY . /var/www/html/
WORKDIR /var/www/html/

# Ajusta permisos para el usuario www-data en `public` y `writable`
RUN chown -R www-data:www-data /var/www/html/public /var/www/html/writable

EXPOSE 80


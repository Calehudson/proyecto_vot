FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip unzip \
    libzip-dev \
    libicu-dev \
    && docker-php-ext-install mysqli pdo pdo_mysql zip intl

RUN a2enmod rewrite

COPY . /var/www/html/
# 1) Priorizar index.php
RUN sed -ri \
  -e 's/(DirectoryIndex )(.+)/\1index.php \2/' \
  /etc/apache2/mods-enabled/dir.conf

# 2) Desactivar MultiViews
RUN sed -ri \
  -e '/<Directory \/var\/www\/>/,/<\/Directory>/ s/Options Indexes FollowSymLinks/Options -MultiViews +FollowSymLinks/' \
  /etc/apache2/apache2.conf

# 3) Permitir .htaccess (AllowOverride All)
RUN sed -ri \
  -e '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' \
  /etc/apache2/apache2.conf

WORKDIR /var/www/html/

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80


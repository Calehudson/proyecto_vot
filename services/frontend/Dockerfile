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
# Configuras Apache para que sirva la carpeta public/
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' \
      /etc/apache2/sites-available/*.conf \
 && a2enmod rewrite
WORKDIR /var/www/html/public

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80



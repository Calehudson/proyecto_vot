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
WORKDIR /var/www/html/

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

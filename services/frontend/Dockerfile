FROM php:8.2-apache

RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev zip unzip \
    libzip-dev libicu-dev \
  && docker-php-ext-install mysqli pdo pdo_mysql zip intl \
  && a2enmod rewrite

COPY public/ /var/www/html/

# Habilita .htaccess y Rewrite en /var/www/html
RUN sed -ri \
  -e 's!/var/www/html!/var/www/html!g' \
    /etc/apache2/sites-available/*.conf \
  && sed -ri '/<Directory \/var\/www\/html>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

WORKDIR /var/www/html
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80




FROM php:8.2-apache

# 1) Instala extensiones y limpia caché de apt
RUN apt-get update \
  && apt-get install -y \
       libpng-dev \
       libjpeg-dev \
       libfreetype6-dev \
       libzip-dev \
       libicu-dev \
       zip unzip \
  && docker-php-ext-install \
       mysqli \
       pdo \
       pdo_mysql \
       zip \
       intl \
  && rm -rf /var/lib/apt/lists/*

# 2) Habilita mod_rewrite y AllowOverride All en la raíz
RUN a2enmod rewrite \
  && printf "\
<Directory /var/www/html>\n\
    AllowOverride All\n\
</Directory>\n" \
     > /etc/apache2/conf-available/override.conf \
  && a2enconf override

# 3) Copia todo el código al root de Apache
COPY . /var/www/html

# 4) Ajusta permisos
RUN chown -R www-data:www-data /var/www/html

# 5) Trabaja en la raíz
WORKDIR /var/www/html

EXPOSE 80



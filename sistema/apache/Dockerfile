FROM php:8.2-apache

# Solucionar problema de '/usr/src/php/.docker-delete-me'
RUN mkdir -p /usr/src/php && touch /usr/src/php/.docker-delete-me

# Reparar base de datos de dpkg antes de actualizar
RUN rm -rf /var/lib/dpkg/info/* && dpkg --clear-avail

# Actualizar paquetes e instalar dependencias
RUN apt-get update && apt-get install -y --no-install-recommends \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libzip-dev \
    libicu-dev \
    pkg-config \
    zip \
    unzip \
    && rm -rf /var/lib/apt/lists/*

# Instalar extensiones de PHP
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql mysqli gd zip intl

# Habilitar mod_rewrite antes de copiar la configuración de Apache
RUN a2enmod rewrite

# Copiar configuración de Apache solo si el archivo existe
COPY sites-available/000-default.conf /etc/apache2/sites-available/000-default.conf

# Asegurar que el directorio de Apache existe antes de copiar
RUN mkdir -p /var/www/html

# Copiar el código de cada microservicio y frontend
COPY src/ /var/www/html/

# Dar permisos correctos
RUN chown -R www-data:www-data /var/www/html/ \
    && chmod -R 755 /var/www/html/

EXPOSE 80

CMD ["apache2-foreground"]

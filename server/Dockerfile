# Utiliza una imagen base de PHP con Apache
FROM php:8.2-apache

# Instala dependencias necesarias
RUN apt-get update && \
    apt-get install -y git zip unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Establece la variable de entorno COMPOSER_ALLOW_SUPERUSER en 1
ENV COMPOSER_ALLOW_SUPERUSER 1

# Instala extensiones de PHP necesarias
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Configura el directorio de trabajo
WORKDIR /var/www/html

# Copia los archivos necesarios de Ratchet desde la carpeta lib
COPY . /var/www/html

# Instala las dependencias de Composer
RUN composer install --no-scripts --no-autoloader --ignore-platform-reqs

# Expone el puerto 80
EXPOSE 80

# Comando para iniciar el servidor Apache
CMD ["apache2-foreground"]

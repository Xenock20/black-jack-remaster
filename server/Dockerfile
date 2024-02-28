# Utiliza una imagen base de PHP con Apache
FROM php:7.4-apache

# Instala extensiones de PHP necesarias
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Copia los archivos necesarios de Ratchet desde la carpeta lib
COPY . /var/www/html

# Configura el directorio de trabajo
WORKDIR /var/www/html

# Expone el puerto 80
EXPOSE 80


# Comando para iniciar el servidor Apache
CMD ["apache2-foreground"]

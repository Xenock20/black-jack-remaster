# Utiliza una imagen base de PHP con Apache
FROM php:7.4-apache

# Instala dependencias necesarias para Ratchet
RUN apt-get update && \
    apt-get install -y git libssl-dev libpcre3-dev zlib1g-dev libsqlite3-dev && \
    docker-php-ext-install pdo pdo_mysql mysqli && \
    pecl install channel://pecl.php.net/pthreads-3.1.6 && \
    docker-php-ext-enable pthreads

# Clona el repositorio de Ratchet y copia los archivos necesarios
RUN git clone https://github.com/ratchetphp/Ratchet.git /tmp/Ratchet
RUN cp -r /tmp/Ratchet/src /var/www/html

# Configura el directorio de trabajo
WORKDIR /var/www/html

# Expone el puerto 80
EXPOSE 80

# Comando para iniciar el servidor Apache
CMD ["apache2-foreground"]

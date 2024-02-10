# Utiliza una imagen base de PHP con Apache
FROM php:7.4-apache

# Instala dependencias necesarias para Ratchet
RUN apt-get update && \
    apt-get install -y git libssl-dev libpcre3-dev zlib1g-dev libsqlite3-dev && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

# Instala extensiones de PHP necesarias
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Clona el repositorio de Ratchet y copia los archivos necesarios
RUN git clone https://github.com/ratchetphp/Ratchet.git /tmp/Ratchet && \
    cp -r /tmp/Ratchet/src /var/www/html

# Configura el directorio de trabajo
WORKDIR /var/www/html

# Expone el puerto 80
EXPOSE 80

# Comando para iniciar el servidor Apache
CMD ["apache2-foreground"]

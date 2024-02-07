# Utiliza una imagen base de MySQL
FROM mysql:5.7

# Define variables de entorno para configurar la base de datos
ENV MYSQL_ROOT_PASSWORD=root
ENV MYSQL_DATABASE=blackjack_db
ENV MYSQL_USER=blackjack_user
ENV MYSQL_PASSWORD=blackjack_password

# Copia el script SQL de inicialización a la carpeta /docker-entrypoint-initdb.d/
# Esto garantiza que se ejecute cuando se inicie el contenedor
COPY init.sql /docker-entrypoint-initdb.d/

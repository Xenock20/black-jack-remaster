# Utiliza una imagen base de Node.js
FROM node:16-alpine

# Configura el directorio de trabajo
WORKDIR /app

# Copia los archivos de la aplicación React al directorio de trabajo
COPY . .

# Instala las dependencias
RUN npm install

# Compila la aplicación React
RUN npm run build

# Expone el puerto 3000 (puerto por defecto para React)
EXPOSE 3000

# Comando para iniciar la aplicación React
CMD ["npm", "start"]

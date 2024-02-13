# Utiliza una imagen base de Node.js
FROM node:lts-alpine as build-stage

RUN mkdir app

# Configura el directorio de trabajo
WORKDIR /app

# Copia los archivos de la aplicación React al directorio de trabajo
COPY package.json ./

# Instala las dependencias
RUN npm install

COPY . .

# Compila la aplicación React
RUN npm run build

FROM nginx:1.21.6-alpine as production-state

COPY --from=build-stage /app/dist /usr/share/nginx/html

EXPOSE 80

# Comando para iniciar la aplicación React
CMD ["nginx", "-g", "daemon off;"]

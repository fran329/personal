# Start your image with a node base image
FROM php:latest

# Crea un directorio en el contenedor para almacenar la aplicación
RUN mkdir -p /var/www/html

# Establece el directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Copia el formulario PHP al contenedor
COPY formulario.php C:\Users\fc\Desktop\webdeveloper\webInstitucional\personal\php

# Expone el puerto 80 para acceder a la aplicación
EXPOSE 80

# Define el comando de inicio para ejecutar la aplicación PHP
CMD ["php", "-S", "0.0.0.0:80"]
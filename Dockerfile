# 1. Usamos la imagen oficial de PHP con Apache como base
FROM php:8.2-apache

# 2. Ejecutamos los comandos para instalar el driver de base de datos
# Esto se ejecutará UNA SOLA VEZ durante la construcción
RUN docker-php-ext-install pdo_mysql

# (Opcional) Aquí podrías añadir más cosas, como instalar librerías para IA o sensores
# RUN apt-get update && apt-get install -y python3

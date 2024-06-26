FROM php:8.0-apache

# Set the working directory
WORKDIR /var/

# Copy your PHP application files into the container

# COPY ../travelution-monolith/* /var/www/html/

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
RUN a2enmod rewrite
RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 80 
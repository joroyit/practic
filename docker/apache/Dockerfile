FROM php:7.4-apache
 
# PHP extensions
RUN apt-get update && apt-get install -y \
        curl \
    && docker-php-ext-install mysqli 

# Apache modules
RUN a2enmod rewrite
FROM php:8.2-fpm

# Install PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

WORKDIR /var/www/html

COPY public/ .

RUN chown -R www-data:www-data /var/www/html

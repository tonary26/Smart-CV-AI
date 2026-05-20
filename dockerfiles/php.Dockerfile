FROM php:8.4-fpm-alpine

WORKDIR /var/www/laravel

RUN apk add --no-cache poppler-utils
RUN docker-php-ext-install pdo pdo_mysql

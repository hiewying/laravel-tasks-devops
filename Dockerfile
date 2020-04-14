FROM php:7.2.0 
 
RUN apt-get update -y && apt-get install -y openssl zip unzip git 
RUN curl -sS https://getcomposer.org/installer | php -- --installdir=/usr/local/bin --filename=composer 
RUN docker-php-ext-install pdo 
RUN docker-php-ext-install sockets  

ADD . /var/www
ADD ./public /var/www/html
 
WORKDIR /app 
COPY . /app 
 
CMD composer install
CMD vendor/bin/phpunit 
CMD php artisan serve --host=0.0.0.0 --port=8181 
 
EXPOSE 8181 
 
 
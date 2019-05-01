#Install the dependencies using composer

FROM composer:1.7 as build

WORKDIR /var/www/html

COPY /bkd/. /var/www/html
COPY /data-bkd/. /var/www/.
COPY /data-file-bkd/. /var/www/.

RUN composer install

#Application

FROM php:7.2-apache

RUN docker-php-ext-install pdo pdo_mysql

EXPOSE 80

COPY --from=build /var/www/html /var/www/html

COPY vhost.conf /etc/apache2/sites-available/000-default.conf

RUN chown -R www-data:www-data /var/www/html \
&& a2enmod rewrite
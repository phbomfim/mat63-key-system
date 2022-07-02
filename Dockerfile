FROM php:7.4-apache

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

WORKDIR /var/www/mat63

COPY . .
RUN rm 000-default.conf

RUN chown -R www-data:www-data .

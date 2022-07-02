FROM php:7.4-apache

COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

#WORKDIR /the/workdir/path

COPY . /var/www/mat63
RUN rm /var/www/mat63/000-default.conf

RUN chown -R www-data:www-data /var/www/mat63

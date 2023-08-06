FROM php:7.4-apache
RUN docker-php-ext-install gd
COPY . /var/www/html/
EXPOSE 80
CMD ["apache2-foreground"]

FROM php:7.0-apache
COPY src/ /var/www/html
RUN composer require --dev phpunit/phpunit ^9
EXPOSE 80


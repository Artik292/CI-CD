FROM php:7.0-apache
COPY src/ /var/www/html
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN sudo apt-get install curl php-cli php-mbstring git unzip
RUN composer require --dev phpunit/phpunit ^9
EXPOSE 80


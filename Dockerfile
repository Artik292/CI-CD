FROM php:7.0-apache
FROM composer:latest
COPY src/ /var/www/html
# RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
# RUN apt-get install curl php-cli php-mbstring git unzip
RUN a2enmod rewrite

RUN docker-php-ext-install pdo pdo_mysql

RUN yes | pecl install xdebug \
    && echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_enable=on" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.remote_autostart=off" >> /usr/local/etc/php/conf.d/xdebug.ini

RUN composer require --dev phpunit/phpunit ^9
EXPOSE 80


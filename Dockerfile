FROM php:7.0-apache
FROM composer:latest
COPY src/ /var/www/html
# RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
# RUN apt-get install curl php-cli php-mbstring git unzip

RUN apt-get update && apt-get install

RUN apt-get php-xdebug

RUN echo "zend_extension=/usr/lib/php/20151012/xdebug.so" >> /etc/php/7.0/mods-available/xdebug.ini
RUN echo "xdebug.remote_autostart = 1" >> /etc/php/7.0/mods-available/xdebug.ini
RUN echo "xdebug.remote_enable = 1" >> /etc/php/7.0/mods-available/xdebug.ini
RUN echo "xdebug.remote_handler = dbgp" >> /etc/php/7.0/mods-available/xdebug.ini
RUN echo "xdebug.remote_host = 127.0.0.1" >> /etc/php/7.0/mods-available/xdebug.ini
RUN echo "xdebug.remote_log = /tmp/xdebug_remote.log" >> /etc/php/7.0/mods-available/xdebug.ini
RUN echo "xdebug.remote_mode = req" >> /etc/php/7.0/mods-available/xdebug.ini
RUN echo "xdebug.remote_port = 9005" >> /etc/php/7.0/mods-available/xdebug.ini

RUN systemctl restart php7.0-fpm
RUN systemctl restart nginx # If you are using nginx server
RUN systemctl restart apache2 # If you are using apache server

RUN composer require --dev phpunit/phpunit ^9
EXPOSE 80


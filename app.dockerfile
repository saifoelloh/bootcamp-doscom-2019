FROM php:7.1.19-fpm

MAINTAINER Moh Saifoelloh | "saifoelloh@gmail.com"

RUN apt-get update 

RUN apt-get install -y libmcrypt-dev \
    mysql-client libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && docker-php-ext-install mcrypt pdo_mysql

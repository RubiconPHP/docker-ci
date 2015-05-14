FROM php:5.6-apache

RUN apt-get update
RUN apt-get install -y zlib1g-dev
RUN docker-php-ext-install zip
FROM php:7.4-fpm

MAINTAINER Grzegorz Gabryel <greg@grzegab.eu>

RUN apt-get update && apt-get install -y apt-transport-https git-all \
    libpq-dev libcurl4 \
    libcurl4-openssl-dev libxml2-dev libpng-dev libicu-dev libfreetype6-dev libjpeg62-turbo-dev \
    libzip-dev zlib1g-dev cifs-utils unzip libaio1 \
    xfonts-75dpi xfonts-base wget \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
RUN docker-php-ext-install -j$(nproc) soap gd zip intl
RUN docker-php-ext-enable intl

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

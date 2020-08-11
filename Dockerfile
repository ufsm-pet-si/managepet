FROM php:7.4-cli

COPY . /usr/src/managepet/

WORKDIR /usr/src/managepet

RUN apt-get update \
    && apt-get install wget git libzip-dev unzip python -y \
    && docker-php-ext-install pdo_mysql zip \
    && chmod -R 766 scripts/ && scripts/config.sh
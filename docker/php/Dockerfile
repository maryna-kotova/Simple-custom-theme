FROM php:7.4-fpm

RUN apt update \
    && apt install -y --no-install-recommends \
        default-mysql-client \
        git \
        less \
        libpng-dev \
        libzip-dev \
        unzip \
        zip \
    && apt clean \
    && docker-php-ext-install bcmath gd mysqli opcache pdo pdo_mysql zip \
    && curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x wp-cli.phar \
    && mv wp-cli.phar /usr/local/bin/wp \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ARG PHP_USE_XDEBUG

RUN if [ "$PHP_USE_XDEBUG" = true ] ; then pecl install xdebug && docker-php-ext-enable xdebug; fi

ARG USER_ID=1000
ARG GROUP_ID=1000

ENV USER_ID ${USER_ID}
ENV GROUP_ID ${GROUP_ID}

RUN groupadd -g ${GROUP_ID} developer \
    && useradd -l -u ${USER_ID} -m -g developer developer \
    && chown -R ${USER_ID}:${GROUP_ID} /home/developer

USER developer

WORKDIR /app

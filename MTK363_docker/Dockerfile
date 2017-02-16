FROM php:5.6.30-apache
RUN apt-get update && apt-get install -y \
      libfreetype6-dev \
      libjpeg62-turbo-dev \
      libmcrypt-dev \
      libpng12-dev \
      zlib1g-dev \
      libicu-dev \
      libpq-dev \
      g++ \
      && docker-php-ext-install -j$(nproc) iconv mcrypt \
      && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
      && docker-php-ext-install -j$(nproc) gd \
      && docker-php-ext-install -j$(nproc) pdo \
      && docker-php-ext-install -j$(nproc) mbstring \
      && docker-php-ext-install -j$(nproc) exif \
      && docker-php-ext-configure intl \
      && docker-php-ext-configure pdo_pgsql \
      && docker-php-ext-install -j$(nproc) intl \
      && docker-php-ext-install -j$(nproc) pdo_mysql \
      && docker-php-ext-install -j$(nproc) pdo_pgsql \
      && docker-php-ext-install -j$(nproc) mysqli \
      && pecl install zip \
      && docker-php-ext-enable zip

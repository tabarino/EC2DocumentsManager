FROM php:7.3-apache-stretch

ENV PHP_OPCACHE_VALIDATE_TIMESTAMPS=0 \
    PHP_OPCACHE_MAX_ACCELERATED_FILES=10000 \
    PHP_OPCACHE_MEMORY_CONSUMPTION=128

RUN docker-php-ext-install pdo_mysql \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug opcache \
    && a2enmod rewrite

COPY docker/start.sh /usr/local/bin/start
COPY docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY docker/php/conf.d/*.ini /usr/local/etc/php/conf.d/
COPY docker/php/php.ini /usr/local/etc/php/php.ini
COPY . /var/www/html
COPY docker/env/.env.production /var/www/html/.env

# Install Node and Node Packages
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash - \
    && apt-get -yqq update \
    && apt-get -yqq install --no-install-recommends nodejs \
    && npm install \
    && npm run prod

# Install Composer
RUN apt-get -yqq update \
    && apt-get -yqq install --no-install-recommends zip unzip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && chmod +x /usr/local/bin/composer \
    && composer check-platform-reqs

# Install Composer Packages
RUN composer install \
    --no-interaction \
    --no-plugins \
    --no-scripts \
    --prefer-dist

# Change Permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod +x /usr/local/bin/start

EXPOSE 80

CMD [ "/usr/local/bin/start" ]

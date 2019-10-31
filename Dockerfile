FROM php:7.3-apache-stretch

RUN docker-php-ext-install pdo_mysql \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && a2enmod rewrite

COPY docker/start.sh /usr/local/bin/start
COPY docker/apache/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY docker/php/conf.d/*.ini /usr/local/etc/php/conf.d/
COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html \
    && chmod +x /usr/local/bin/start

EXPOSE 80

CMD [ "/usr/local/bin/start" ]

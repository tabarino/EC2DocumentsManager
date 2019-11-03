#!/usr/bin/env bash

set -e

env=${APP_ENV:-production}
role=${CONTAINER_ROLE:-app}

echo "The environment is $env"

if [ "$env" != "local" ]; then
    echo "Removing Xdebug"
    rm -rf /usr/local/etc/php/conf.d/{docker-php-ext-xdebug.ini,xdebug.ini}
fi

echo "The container role is $role"

if [ "$role" = "app" ]; then
    cd /var/www/html
    php artisan key:generate
    php artisan cache:clear
    php artisan config:clear

    exec apache2-foreground
else
    echo "Could not match the container role \"role\""
    exit 1
fi
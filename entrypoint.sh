#!/bin/bash

# php -v
if [ ! -f .env  ]; then
    cp .env.example .env
fi

php artisan migrate --seed

php -S 0.0.0.0:80 -t public/ 
#!/bin/bash

echo "running commands for final setup"

docker run --rm -v $(pwd):/app composer install

cp .env.example .env
chmod 777 -R storage/

docker-compose exec app php artisan key:generate
docker-compose exec app php artisan optimize
docker-compose exec app php artisan migrate:refresh --seed

echo "The app is now ready to use!"
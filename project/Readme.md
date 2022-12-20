# STEP MAKE A FOLDER
- mkdir project
- mkdir project/php
- mkdir project/nginx
- touch project/.env
- touch project/docker-compose.yml
- touch project/php/Dockerfile
- touch project/php/docker-entrypoint.sh
- touch project/php/www.conf
- touch project/php/local.ini
- touch project/nginx/default.conf
- touch project/nginx/Dockerfile

# HOW TO RUN
- docker-compose up -d --build

# EXECUTE CONTAINER
- docker exec -it project_akhir bash

# HOW TO MAKE A PROJECT IN SRC
- composer create-project --prefer-dist laravel/lumen .
- composer require flipbox/lumen-generator

# ADD TO src/bootstrap/app.php
$app->withFacades();
$app->withEloquent();
$app->registe(Flipbox\LumenGenerator\LumenGeneratorServiceProvider::class);

# GENERATE KEY
- php artisan key:generate

# CREATE MODEL/CONTROLLER/MIGRATE/SEEDER
- php artisan make:model User -mcfs --resource

# INSPECT CONTAINER MYSQL
- docker inspect mysql

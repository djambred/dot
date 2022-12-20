# STEP MAKE A FOLDER
```zsh
cd /root
mkdir project
mkdir project/php
mkdir project/nginx
touch project/.env
touch project/docker-compose.yml
touch project/php/Dockerfile
touch project/php/docker-entrypoint.sh
touch project/php/www.conf
touch project/php/local.ini
touch project/nginx/default.conf
touch project/nginx/Dockerfile
```
# HOW TO RUN
```zsh
docker-compose up -d --build
```

# EXECUTE CONTAINER
```zsh
docker exec -it project_akhir bash
```

# HOW TO MAKE A PROJECT IN SRC
```php
composer create-project --prefer-dist laravel/lumen .
```
```php
composer require flipbox/lumen-generator
```

# ADD TO src/bootstrap/app.php
```php
$app->withFacades();
$app->withEloquent();
$app->register(Flipbox\LumenGenerator\LumenGeneratorServiceProvider::class);
```

# GENERATE KEY
```php
php artisan key:generate
```

# REMOVE FILE User.php 
```zsh
rm -rf /src/app/Model/User.php
```
# CREATE MODEL/CONTROLLER/MIGRATE/SEEDER
```php
php artisan make:model User -mcfs --resource
```
# tambahkan database di dalam folder src/database/migration
```php
    $table->id();
    $table->string('username');
    $table->string('password');
    $table->timestamps();
```
# tambahkan seedernya
```php
public function run()
    {
        $timestamp = \Carbon\Carbon::now()->toDateTimeString();
        DB::table('users')->insert([
            'username'  => 'client',
            'password'  => Str::random(40),
            'created_at' => $timestamp,
            'updated_at' => $timestamp
        ]);
    }
```
# add schema db
```php
php artisan migrate
```

# HOW TO ADD ROUTE in src/route/web.php
```php
$router->group(['prefix' => 'api/v1/testing'], function() use ($router){
    $router->get('/', ['uses' => 'UserController@index']);
	$router->post('/', ['uses' => 'UserController@create ']);
	$router->get('/{id}', ['uses' => 'UserController@show']);
	$router->delete('/{id}', ['uses' => 'UserController@destroy']);
	$router->put('/{id}', ['uses' => 'UserController@update']);
});
```

# 

# INSPECT CONTAINER MYSQL
```zsh
docker inspect mysql
```

# STOP PROJECT AKHIR CONTAINER
```zsh
docker-compose down
```
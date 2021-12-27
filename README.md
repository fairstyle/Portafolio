<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

![](public/assets/images/portrait.png)

### Deploy App
1. _first you need to update and run composer in terminal_
```
    composer update && composer install
```
2. _install npm and run tailwindcss compiler_
```
    npm install && npm run dev
```
3. _now, change file name .env.example to .env and configure them_.
```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=100projects
    DB_USERNAME=username
    DB_PASSWORD=password
```
4. _create database with your favorite app_

5. _generate key and migrations_
```
    php artisan key:generate && php artisan migrate:refresh --seed
```
6. _deploy server_
```
    php artisan serve
```
7. _go fun_
```
    http://127.0.0.1:8000/
```

### First run


### Create new app


### License
The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

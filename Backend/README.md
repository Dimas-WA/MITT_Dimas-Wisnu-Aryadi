<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## DEPLOYMENT BACKEND

## Laravel Installing
# Clone
-- Clone first at repository<br />
-- go to project directory<br />
-- run command on terminal<br />
composer install<br />

# Migrating DB
-- run command on terminal<br />
php artisan migrate:fresh<br />
-- or import manual DB<br />

# ENV Config -- Change with your db credentials
DB_CONNECTION=mysql<br />
DB_HOST=127.0.0.1<br />
DB_PORT=3306<br />
DB_DATABASE={database_name}<br />
DB_USERNAME={database_username}<br />
DB_PASSWORD={database_password}<br /><br />

# Optimize After Finish Installation
-- run command on terminal<br />
```sh
php artisan optimize
```
```sh
php artisan serve --port=8080
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

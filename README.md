## DEPLOYMENT BACKEND

## Laravel Installing
# Clone
-- Clone first at repository<br />
-- go to project directory<br />
-- run command on terminal<br />
```sh
composer install
```

# Migrating DB
-- run command on terminal<br />
```sh
php artisan migrate:fresh
```
-- or import manual DB<br />

# ENV Config -- Change with your db credentials

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={database_name}
DB_USERNAME={database_username}
DB_PASSWORD={database_password}
```

# Optimize After Finish Installation
run command on terminal<br />
```sh
php artisan optimize
```
```sh
php artisan serve --port=8080
```

## DEPLOYMENT FRONTEND

## Laravel Installing
# Clone
-- Clone first at repository<br />
-- go to project directory<br />
-- run command on terminal<br />
```sh
composer install
```

# Migrating DB
-- run command on terminal<br />
```sh
php artisan migrate:fresh
```
-- or import manual DB<br />

# ENV Config -- Change with your db credentials

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE={database_name}
DB_USERNAME={database_username}
DB_PASSWORD={database_password}
```

# Optimize After Finish Installation
run command on terminal<br />
```sh
php artisan optimize
```
```sh
php artisan serve
```

# Running On Chrome Browser
```sh
http://localhost:8000
```

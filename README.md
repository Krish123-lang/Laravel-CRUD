<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Commands used

### Create models, Tables and Migrations

1. php artisan make:model Product -m
2. php artisan migrate

### Create Controllers

3. php artisan make:controller ProductController
4. php artisan migrate

### Files Created manually

1. layouts/app.blade.php
2. products/create.blade.php
3. products/edit.blade.php
4. products/index.blade.php
5. products/show.blade.php
6. products/store.blade.php

### Files Created Automatically (By running some commands)

1. app/Http/Controllers/ProductController.php
2. app/Http/Models/User.php
3. app/database/migrations/create_products_table.php
4. app/public/products/images.png

### Files utilized

1. app/Http/Controllers/ProductController.php
2. app/Providers/AppService/Providers.php
3. app/database/migrations/create_products_table.php
4. app/routes/web.php
5. app/resources/views/layouts/app.blade.php

6. app/resources/views/products/create.blade.php
7. app/resources/views/products/edit.blade.php
8. app/resources/views/products/index.blade.php
9. app/resources/views/products/show.blade.php
10. app/resources/views/products/store.blade.php


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Setting up AdminApp

This guide will walk you through setting up the AdminApp project.

## Step 1: Clone the Repository

Clone the AdminApp repository using the following command:

```bash
git clone https://github.com/vikrampatel0408/adminApp.git
```
## Step:2 Configure database
<p> DB_CONNECTION=mysql </p>
<p> DB_HOST=your_database_host </p>
<p> DB_PORT=your_database_port </p>
<p> DB_DATABASE=adminapp </p>
<p> DB_USERNAME=your_database_user </p>
<p> DB_PASSWORD=your_database_password </p>

## Step:3 Import adminapp.sql into Database 

## Step:4 Start Server
```bash
php artisan serve
```

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

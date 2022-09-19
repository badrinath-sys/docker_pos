<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

### Clone the repository from github.

    git clone --branch develop git@bitbucket.org:badri_111/pos.git

The command installs the project in a directory named `YourDirectoryName`. You can choose a different
directory name if you want.

### Install dependencies

Laravel utilizes [Composer](https://getcomposer.org/) to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.

    *cd YourDirectoryName
    *composer install
	
### Config file

Rename or copy `.env.example` file to `.env` 

          *`php artisan key:generate` to generate app key
          *Set your database credentials in your `.env` file
          *Set your `APP_URL` in your `.env` file
   
### Database

       * Migrate database table `php artisan migrate`
        *`php artisan db:seed`,  this will initialize settings and create and admin user for you 
		 [email: pallam@gmail.com  - password: pallam]

### Create storage link

### Run Server

  * `php artisan serve` 

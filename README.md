<br />
<div align="center">
  <h1 align="center">
    Fin Blog 🗨
  </h1>

  <p align="center">
    <img src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white"/>
    <img src="https://img.shields.io/badge/laravel-%23FF2D20.svg?style=for-the-badge&logo=laravel&logoColor=white"/>
    <img src="https://img.shields.io/badge/NPM-%23CB3837.svg?style=for-the-badge&logo=npm&logoColor=white"/>
    <img src="https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white"/>
    <img src="https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=white"/>
    <img src="https://img.shields.io/badge/Ubuntu-E95420?style=for-the-badge&logo=ubuntu&logoColor=white"/>
  </p>
  <p align="center">
    Made by <a href="https://github.com/SDO-SA" target="_blank">SDO-SA</a>
  </p>
  
</div>
<br/>

Hello everyone !! 👀

I have just created this project using [PHP 8.3](https://php.net/) , [Laravel 10.x](https://laravel.com/docs/10.x) , [JetStream Laravel 4.x](https://jetstream.laravel.com/introduction.html) , [Livewire 2.x](https://laravel-livewire.com/docs/2.x/quickstart) and [Filament PHP 3.x](https://filamentphp.com/docs/3.x/panels/installation) !!

It was my first time using PHP for building Full Stack Website and suprisingly i had so much fun doing so 🔥


## About Project 💡

As i mentioned before , it's a blog website that you can 
* <strong>Login/Register </strong>
* <strong>View & Like others Posts </strong>
* <strong>Create your own Posts </strong>
* <strong>Profile Editing </strong>
* <strong>Admin Panel </strong>

## Purpose ❓
The purpose of this repository is to try new development practices on [Laravel](https://laravel.com/docs/10.x) such as:
- [Authentication](https://laravel.com/docs/10.x/authentication)
- API
  - Token authentication
  - [API Resources](https://laravel.com/docs/10.x/eloquent-resources)
  - Versioning
- [Blade](https://laravel.com/docs/10.x/blade)
- [Filesystem](https://laravel.com/docs/10.x/filesystem)
- [Migrations](https://laravel.com/docs/10.x/migrations)
- [Policies](https://laravel.com/docs/10.x/authorization)
- [Providers](https://laravel.com/docs/10.x/providers)
- [Requests](https://laravel.com/docs/10.x/validation#form-request-validation)
- [Seeding & Factories](https://laravel.com/docs/10.x/seeding)
- Many More to explore

## Website Preview 📸
### Home Page
![Home Overview](https://i.imgur.com/Lz7Y8AV.png)
### Posts Page
![Posts Overview](https://i.imgur.com/eFURa74.png)
## Installation 👨🏻‍💻
Follow these commands to download and install this project on your local machine ! 💻
```bash
$ git clone https://github.com/SDO-SA/Fin-Blog.git
$ cd fin-blog
$ cp .env.example .env
$ composer install
$ npm install
```

## Setup and Run 🛠
<Strong>Step 1:</Strong>
You have to create a database named ```finblog``` and then edit your ```DB_DATABASE=finblog``` in this ```.env``` file
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=finblog
DB_USERNAME=root
DB_PASSWORD=
```
<Strong>Step 2:</Strong>
After creating the database run these commands to migrate and seed data on your database!
```bash
$ php artisan migrate
$ php artisan db:seed
$ php artisan key:generate
```
This will create a new admin user that you can use to sign in :
```yml
email: admin@test.com
password: password
```
<Strong>Step 3:</Strong>
Last step follow these commands to build and run the website !
```bash
$ npm run build
$ php artisan serve
```

## Explore ✈
Now feel free to explore Fin Blog and have fun !! 😎

## License 💯

Fin Blog is open-sourced software licensed under the [![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE.txt)








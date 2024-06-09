
<h1 align="center">
  <br>
  <a href=""><img src="https://github.com/JNietoR/Vesta/blob/main/public/assets/logo/LogoBlanco.svg" alt="Vesta" width="450"></a>
  <br>
  VESTA
  <br>
</h1>

<h2 align="center" >A Web app built on top of </h2>
<p align="center">
    <a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200"  alt="Laravel Logo" style="margin:auto;"></a>
    <a href="https://vuejs.org" target="_blank" rel="noopener noreferrer"><img width="75" src="https://vuejs.org/images/logo.png" alt="Vue logo"></a>
</p>

<p align="center">
  <a href="#how-to-use">How To Install in local</a> •
</p>

## How To Install

To clone and run this application, you'll need [Git](https://git-scm.com), [Node.js](https://nodejs.org/en/download/) (which comes with [npm](http://npmjs.com)) and [Composer](https://getcomposer.org/download/) installed on your computer. From your command line:

```bash
# Clone this repository
$ git clone https://github.com/JNietoR/Vesta.git

# Go into the repository
$ cd vesta

# Install dependencies
$ npm install
$ composer install

# Configure Database
Create database with a name.

# Configure .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nameofdatabase
DB_USERNAME=root
DB_PASSWORD=

# Generate app key and link storage
$ php artisan key:generate
$ php artisan storage:link

# Run migration
$php artisan migrate

# Run the app
$ npm run dev
$ php artisan serve
```




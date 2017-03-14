# suimpleAuthLaravel
suimple authentication laravel

# Preview
priview halaman admin dengan full Akses
![Alt text](https://raw.githubusercontent.com/yaqien378/suimpleAuthLaravel/master/preview.jpg "tampilan admin")


# Installation
* clone the repository
* ketik `cd projectname`
* ketik `composer install`
* ketik `composer update`
* copy *.env.example* to *.env*
* ketik `php artisan key:generate` untuk regenerate secure key
* ubah settingan file *.env* sesuai dengan database anda
    * DB_CONNECTION
    * DB_DATABASE
    * DB_USERNAME
    * DB_PASSWORD
* ketik `php artisan migrate` untuk generate struktur table
* ketik `php artisan db:seed` untuk generate user admin

# Akses
* email : admin@example.com
* password : 123456

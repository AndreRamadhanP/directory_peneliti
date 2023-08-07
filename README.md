<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

## Installasi Laravel & laravel-admin
## Catatan *Jangan lupa nyalain php dan mysql nya di xampp
1. git clone git@github.com:mYusufH882/direktori_peneliti.git
2. composer-update
3. buat database di phpmyadmin dengan nama "direktori_peneliti"
4. Ubah file .env.example jadi .env
5. Ubah kode baris pada file .env berikut menjadi:
    DB_DATABASE=direktori_peneliti
    DB_USERNAME=root
    DB_PASSWORD=
7. Jalankan perintah php artisan key:generate
8. Jalankan php artisan admin:install
9. Jalankan php artisan db:seed
10. Akses browser http://localhost:8000/admin

## Informasi Akun
1. Admin <br/>
   Username: admin <br/>
   Password: admin
   
2. Peneliti 1 <br/>
   Username: andre <br/>
   Password: 1234567890
   
3. Peneliti 2 <br/>
   Username: yusuf <br/>
   Password: 0987654321
   
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

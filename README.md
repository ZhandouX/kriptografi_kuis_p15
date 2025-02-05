<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Project qrcode
## Instalasi
1. Membuat Project Baru:  
   ```
   create-project laravel/laravel qrcode
   ```
2. Masuk ke folder project:  
   ```
   cd qrcode
   ```
3. Membuat Database Baru dengan nama database "qrcode"  
   ![Daftar Tabel: ](screenshot/table.png)
4. Copy file `.env.example` menjadi `.env` dan atur konfigurasi database.  
5. Generate app key:  
   ```
   php artisan key:generate
   ```
6. Jalankan migrasi database:  
   ```
   php artisan migrate
   ```
7. Jalankan server lokal:  
   ```
   php artisan serve
   ```

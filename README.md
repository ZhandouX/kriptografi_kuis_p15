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
4. Mengubah Nama Database Pada File `.env` dan sesuai dengan nama Database yang      telah dibuat.  
5. Jalankan Migrasi Database:   
   ```
   php artisan migrate
   ```
   ![Tabel QR Code (menyimpan data URL): ](screenshot/url_qr_code.png)
   ![Tabel User (menyimpan data user berupa email & password): ](screenshot/user_table.png)
6. Membuat model Laravel bernama QrCode beserta file migrasi database-nya:  
   ```
   php artisan make:model QrCode -m
   ```
7. Menginstall Library QR Code untuk Laravel:
   ```
   composer require simplesoftwareio/simple-qrcode
   ```
8. Jalankan Migrasi Database-nya lagi:  
   ```
   php artisan migrate
   ```
9. Menginstal Laravel Breeze sebagai paket autentikasi di Laravel:
   ```
   composer require laravel/breeze --dev
   ```
10. Jalankan Aplikasi:
    ```
    php artisan serve
    ```
11. Membuat file QrCodeController didalam folder app/Http/Controller.
12. Menambahkan `Route` pada file routes/web.php.
13. Tampilan Hasil :
    - Setelah Berhasil Login/Register, User akan diarahkan ke halaman Dashboard: 
    ![Setelah Berhasil Login/Register, User akan diarahkan ke halaman Dashboard](screenshot/dash.png)
    - Tampilan Halaman Create QR Code :
    ![Tampilan Halaman Create QR Code :](screenshot/hasil.png)
    - Tampilan Hasil Create QR Code setelah User memasukkan URL dokumen yang kemudian akan di implementasikan menjadi sebuah QR Code: 
    ![Tampilan Hasil Create QR Code setelah User memasukkan URL dokumen yang kemudian akan di implementasikan menjadi sebuah QR Code](screenshot/create_qr.png)
    - QR Code akan tersimpan di folder storage/app/public/qr_codes : 
    ![QR Code akan tersimpan di folder storage/app/public/qr_codes : ](screenshot/tersimpan.png)

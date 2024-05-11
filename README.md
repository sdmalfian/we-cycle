

![logo-ijo](https://github.com/sdmalfian/we-cycle/assets/53588747/9ae0ab1d-0637-40a7-8ba9-f27d58cc6df5)
<br>
![Laravel](https://img.shields.io/badge/Built%20with-Laravel-red)
<h1>We-Cycle</h1>

## Table of Contents
+ [About](#about)
+ [Features](#features)
+ [Installation](#installation)
+ [Preview](#preview)

## About <a name = "about"></a>
**Welcome to We-Cycle!**
<br>
We-Cycle adalah sebuah project Sistem Informasi Manajemen Bank Sampah berbasis Website. Aplikasi ini adalah hasil akhir dari project untuk memenuhi tugas mata kuliah Manajemen Proyek Sistem Informasi - SI UIN Jakarta angkatan 2020 kelas B. Aplikasi ini dibuat dengan Laravel, MySql, dan Library CrudBooster versi 5.6.

Tujuan dari pembuatan sistem informasi ini adalah memberikan solusi pengelolaan limbah pada bank sampah RW 16 Cimanggis Depok agar dapat terkelola dengan lebih baik yaitu dengan meningkatkan kualitas layanan yang telah ada secara manual menjadi online. 

Aplikasi ini terbagi menjadi 2 bagian, yaitu tampilan user (nasabah) dan tampilan admin.

## Requirements
- PHP 7.4
- Laravel 8
- [CrudBooster 5.6 (Deprecated)](https://github.com/crocodic-studio/crudbooster/tree/v5.6)
- MySql 5

## Features <a name = "features"></a>
**Fitur Umum**
  - Homepage
  - Register
 
**Admin**
 - Login dan Logout
 - Kelola Nasabah (User)
 - Kelola Kategori Sampah
 - Kelola Sampah
 - Kelola Rewards
 - Kelola Transaksi Nasabah
 - Kelola Poin Nasabah
 - Kelola Transaksi Tukar Poin Yang Dilakukan Oleh Nasabah
 
**Nasabah**
 - Login, dan Logout
 - Kelola Profil
 - Lihat Sampah
 - Lihat Reward
 - Lihat Riwayat Transaksi
 - Tukar Poin dengan Reward

## Installation <a name = "installation"></a>
Berikut adalah langkah-langkah untuk menginstall aplikasi ini:

 1. Pastikan bahwa anda sudah menginstall Laravel Versi 8 di perangkat anda
 2. Clone repository ini lalu masuk ke folder project we-cycle 
 3. Buka terminal atau command line anda, lalu masukkan perintah
```
    composer install
    npm install
```
 4. Setelah menginstall dependensi yang dibutuhkan, copy file .env.example ke file .env pada root folder project
 5. Buka file .env lalu sesuaikan konfigurasi database anda sebagai berikut
```
    DB_DATABASE=**we-cycle**
    // sesuaikan sendiri username dan password database anda
```
 6. Masukkan perintah `php artisan key:generate` ke terminal anda
 7. Masukkan perintah `composer dump-autoload`
 8. Buka file `vendor/crocodicstudio/crudbooster/src/database/seeds/CBSeeder.php` lalu masukkan kode berikut pada baris pertama setelah tag php:
```
    namespace Database\Seeders;
```
 9. Install dependensi CrudBooster dengan memasukkan perintah
 ```
    php artisan crudbooster:install
 ```   
 10. Setelah dependesi CrudBooster terinstall, hapus database **we-cycle** dan buat lagi dengan nama yang sama tanpa menambahkan tabel apapun ke dalam database
 
 11. Impor file database **we-cycle.sql** yang telah kami sediakan ke database yang baru saja anda buat
 12. Jalankan perintah `php artisan serve`
 13. Buka link http://localhost:8000/. Jika tampilan web sudah terlihat maka anda sudah berhasil menginstall aplikasi we-cycle!

## Project Preview <a name = "preview"></a>

Link Figma : https://www.figma.com/file/lgv3E3qDyCVh4AmVuoxqQn/Kelompok-PMSI?node-id=1-3&t=twFvL6vcIeQAVFVN-0

### Home Page

![screencapture-127-0-0-1-8000-dashboard-2023-08-31-13_18_34](https://github.com/sdmalfian/we-cycle/assets/53588747/2ed6a308-b693-4300-abdf-fdbc8cb5195a)


## Warning
Beberapa asset gambar dan logo yang ada pada project ini terinspirasi dari gambar-gambar yang dapat dicari di Google. Kami tidak berniat untuk melakukan plagiasi dalam bentuk apapun karena project ini hanya ditujukan untuk tugas kuliah.

## Lisensi
Anda bebas menggunakan aplikasi untuk keperluan apapun sebagaimana yang tertera pada [Lisensi MIT.](https://opensource.org/license/mit)

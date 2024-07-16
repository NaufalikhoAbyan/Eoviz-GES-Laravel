<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
<p align="center">X</p>
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://www.software.or.id/wp-content/uploads/2021/04/eoviz.jpg" width="400" alt="Laravel Logo"></a></p>

Project Masih WIP, jika ingin melihat progress terkini bisa checkout di branch development

# Requirement
- Node.js ≤ 18.3
- NPM ≤ 10.0
- PHP ≤ 8.2
- Composer ≤ 2.7
- MySQL Server

# Installation
### 1. Clone repositroy ke local
```bash
git clone https://github.com/NaufalikhoAbyan/Eoviz-GES-Laravel.git
```
```bash
cd Eoviz-GES-Laravel
```
 ### 2. Install dependensi javascript dan php
 ```bash
npm install
```
```bash
composer install
```
### 3. Buat file `.env` dari file `.env.example`
```bash
cp .env.example .env
```

### 4. Dalam file `.env` definisikan nama pengguna, password, dan nama database yang ingin digunakan
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=eoviz_ges_laravel
DB_USERNAME=root
DB_PASSWORD=admin#1234
```

### 5. Laravel membutuhkan `APP_KEY` untuk berjalan, buat app key dengan menggunakan perintah berikut
```bash
php artisan:key generate
```

### 6. Lakukan migrasi tabel ke database dan memberikan data dummy
```bash
php artisan migrate --seed
```
> Data yang diberikan hanya data dummy yang digunakan untuk development

### 7. Jalankan Aplikasi Laravel
```bash
npm run dev
```
```bash
php artisan serve
```
> kedua command ini harus berjalan bersama-sama

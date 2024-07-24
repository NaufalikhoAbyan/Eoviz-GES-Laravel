# Eoviz-GES-Laravel
Project Masih WIP, jika ingin melihat progress terkini bisa checkout di branch development

### Built With
* [![Vue][Vue.js]][Vue-url]
* [![Laravel][Laravel.com]][Laravel-url]
* [![Tailwind][Tailwind.com]][Tailwind-url]
* [![MYSQL][MYSQL.com]][MYSQL-url]

### Contributors
[![Contributors][contributors-shield]][contributors-url]

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


<!-- MARKDOWN LINKS  -->
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Tailwind.com]: https://img.shields.io/badge/tailwindcss-%2338B2AC.svg?style=for-the-badge&logo=tailwind-css&logoColor=white
[Tailwind-url]: https://tailwindui.com
[MYSQL.com]: https://img.shields.io/badge/mysql-4479A1.svg?style=for-the-badge&logo=mysql&logoColor=white
[MYSQL-url]: https://mysql.com

[contributors-shield]: https://img.shields.io/github/contributors/NaufalikhoAbyan/Eoviz-GES-Laravel.svg?style=for-the-badge
[contributors-url]: https://github.com/NaufalikhoAbyan/Eoviz-GES-Laravel/graphs/contributors

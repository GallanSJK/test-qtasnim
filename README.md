# [Laravel 9.52 MongoDB](https://github.com/GallanSJK/test-qtasnim)

Laravel 9.52 + PHP 8 With MySQL (Test PT. QTASNIM DIGITAL TEKNOLOGI).

- [Installation](#installation)
  - [Developments](#developments)
  - [Requirements](#requirements)
  - [Copyright](#copyright)

## Installation

1. Clone repository
	```bash
	# Clone dengan SSH
	git clone git@github.com:GallanSJK/test-qtasnim.git
	# Clone dengan HTTPS
	git clone https://github.com/GallanSJK/test-qtasnim.git
	```
  Atau dengan mendownload folder zip
  https://github.com/GallanSJK/test-qtasnim/archive/refs/heads/main.zip

2. Update composer apabila terdapat update baru :

```bash
composer update
```

3. Install vendors composer :

```bash
composer install
```

4. Install node_modules :

```bash
npm install
```

5. Copy File .env.example to .env :
Buat file `.env` di root project dan copy isi file `.env.example` ke `.env`  
Ubah konfigurasi sesuai keperluan.

```bash
cp .env.example .env
```

6. Generate key :

```bash
php artisan key:generate
```

7. Migrasi database
Pastikan konfigurasi database di `.env` sudah benar

```bash
php artisan migrate
```

8. Insert Data menggunakan Seeder Database
Command Untuk Seeder Database :

```bash
php artisan db:seed
```

9. Jalankan Project Laravel

```bash
php artisan serve
```

## Developments
1. [Routes Viewer](http://127.0.0.1:8000/admin)   
Lihat list routes `/admin` langsung dari browser. Tampilan halaman login akan tampil.
Login menggunakan :

Email : admin@example.com
Password : admin123

Atau jika ingin daftar, klik Register

## Requirements
- PHP >= 8.0
- MySQL >= 8.0
- [Composer Requirements](https://getcomposer.org/download/)
- [Laravel Requirements](https://laravel.com/docs/10.x/installation)

## Copyright
2023 [Gallan Stefan Jayakelana](https://www.github.com/GallanSJK/)
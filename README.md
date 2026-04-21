# Manajemen transaksi penjualan

> Website manajemen transaksi penjualan berbasis Laravel dengan fitur CRUD untuk mengelola data transaksi penjualan. 

## Deskripsi Proyek

Proyek ini adalah aplikasi web berbasis **Laravel** yang dibangun untuk menggelola data transaksi penjualan yang ada di sebuah toko secara terstruktur dan efesien lebih cocok di toko sepatu, baju, sederhana. Aplikasi ini dirancang untuk penggololaan data penjualan produk dan menyimpan produk yang terjual. Dibangun menggunakan Laravel versi 12 dengan database MySQL/PostgreSQL.

## Fitur
-  CRUD lengkap (Create, Read, Update, Delete)
- menampilkan tabel transaksi penjualan yang lengkap dengan tanggal
- otomatisasi total harga 

## Teknologi yang Digunakan

| Teknologi | Versi |
- PHP  >= 8.3
- Laravel  >= 12
- MySQL  >= 8.2 
- Composer >= 2.9
- Node.js  >= 18.22.2

  
# Cara Membuat Proyek Laravel

## 1. Install Laravel via Composer

bash
composer create-project laravel/laravel12 nama-project

## 2. Buat Database di MySQL
   
Masuk ke MySQL dan buat database baru:

sql
mysql -u root -p

CREATE DATABASE penjualans;
EXIT;


## 3. Konfigurasi File .env

Buka file .env di root proyek dan sesuaikan pengaturan database:

env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=penjualans
DB_USERNAME=root
DB_PASSWORD=


### 4. Jalankan Migrasi Database

Buat semua tabel yang diperlukan dengan perintah:

bash
php artisan migrate


### 5. Jalankan diterminal
bash
php artisan make:model penjualan -mc --resource

### 6. Membuka file 'database\migration\listmenucaves'

bash
 $table->id();
            $table->id();
            $table->string('nama_produk',100);
            $table->integer('harga');
            $table->integer('jumlah');
            $table->integer('total');
            $table->date('tanggal');
            $table->timestamps();

Jalankan diterminal:

bash
php artisan migrate 


## 7. mebuka file 'route\web' dan tambahkan:

bash
route::resource('penjualans',penjualans controller::class); 

setelah itu periksa diterminal apakah sudah berhasil dijalankan

bash
php artisan migrate  route:list; 


### 8.buka file 'app\model\listmenucaves' dan tambahkan:

bash
protected $guarded = [];

# cara menjalankan projectnya
jalankan:
bash
php artisan serve

Aplikasi akan berjalan di: *http://127.0.0.1:8000/penjualan*

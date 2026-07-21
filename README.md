# 🌿 SIWAK - Sistem Informasi Wisata dan UMKM Kabupaten Kebumen

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.x-red?logo=laravel">
  <img src="https://img.shields.io/badge/PHP-8.1+-blue?logo=php">
  <img src="https://img.shields.io/badge/MySQL-Database-orange?logo=mysql">
  <img src="https://img.shields.io/badge/Bootstrap-5-purple?logo=bootstrap">
  <img src="https://img.shields.io/badge/Leaflet.js-Digital%20Map-green">
</p>

---

# 📖 Deskripsi

**SIWAK (Sistem Informasi Wisata dan UMKM Kabupaten Kebumen)** merupakan aplikasi berbasis web yang dikembangkan menggunakan framework **Laravel 12** sebagai media informasi terintegrasi mengenai destinasi wisata dan UMKM di Kabupaten Kebumen. Sistem ini menyediakan informasi berupa nama, deskripsi, lokasi, galeri, kontak, serta peta digital sehingga masyarakat maupun wisatawan dapat memperoleh informasi secara mudah, cepat, dan terpusat.

Selain halaman publik, SIWAK juga dilengkapi dengan dashboard admin yang digunakan untuk mengelola seluruh data wisata, UMKM, kategori, kecamatan, galeri, dan kontak.

---

# 📌 Latar Belakang

Kabupaten Kebumen memiliki potensi besar dalam sektor pariwisata dan Usaha Mikro, Kecil, dan Menengah (UMKM). Namun, informasi mengenai objek wisata dan UMKM masih tersebar di berbagai media sehingga masyarakat maupun wisatawan sering mengalami kesulitan dalam memperoleh informasi yang lengkap dan akurat.

Untuk mengatasi permasalahan tersebut, dikembangkan SIWAK sebagai sebuah sistem informasi berbasis web yang mampu mengintegrasikan data wisata dan UMKM ke dalam satu platform sehingga informasi dapat diakses dengan lebih mudah dan efisien.

---

# ❗ Permasalahan

Permasalahan yang menjadi dasar pengembangan sistem ini meliputi:

- Informasi wisata dan UMKM belum tersedia dalam satu platform yang terintegrasi.
- Masyarakat kesulitan memperoleh informasi wisata dan UMKM secara lengkap.
- Lokasi wisata dan UMKM belum tersaji dalam peta digital yang mudah diakses.
- Belum tersedia media digital yang memudahkan admin dalam mengelola seluruh data secara terpusat.

---

# 🎯 Tujuan

Tujuan pengembangan SIWAK adalah:

- Mengintegrasikan informasi wisata dan UMKM Kabupaten Kebumen dalam satu sistem.
- Memudahkan masyarakat dan wisatawan memperoleh informasi secara cepat dan akurat.
- Menyediakan peta digital sebagai penunjuk lokasi wisata dan UMKM.
- Membantu admin dalam mengelola data secara terpusat.
- Menjadi media promosi digital bagi potensi wisata dan UMKM Kabupaten Kebumen.

---

# 🚧 Batasan Sistem

Pengembangan SIWAK dibatasi pada:

- Website responsif berbasis Laravel.
- Menampilkan data wisata dan UMKM Kabupaten Kebumen.
- Menampilkan nama, deskripsi, alamat, galeri, kontak, dan lokasi.
- Menggunakan Leaflet.js sebagai peta digital.
- Pengelolaan data hanya dilakukan oleh admin.

Sistem ini **tidak mencakup**:

- Pemesanan tiket.
- Pembayaran online.
- Aplikasi Android.
- Sistem berbasis Artificial Intelligence (AI).

---

# ✨ Fitur Sistem

## Pengunjung

- Beranda
- Daftar Wisata
- Detail Wisata
- Daftar UMKM
- Detail UMKM
- Peta Digital
- Pencarian Data

### Administrator

- Login
- Dashboard
- CRUD Wisata
- CRUD UMKM
- CRUD Kategori
- CRUD Kecamatan
- CRUD Galeri
- CRUD Kontak
- Global Search
- Logout

---

# 🏗 Arsitektur Sistem

SIWAK menerapkan konsep **Model-View-Controller (MVC)** menggunakan framework Laravel.

Komponen utama sistem terdiri atas:

- Halaman Publik
- Dashboard Admin
- Controller
- Model
- Database MySQL

---

# 💻 Teknologi yang Digunakan

- Laravel 12
- PHP 8.1+
- MySQL
- Bootstrap 5
- HTML5
- CSS3
- JavaScript
- Leaflet.js
- Laravel Breeze
- Git & GitHub
- Visual Studio Code
- XAMPP

---

# 🗂 Struktur Database

Database terdiri dari beberapa tabel utama:

- Users
- Wisata
- UMKM
- Kategori
- Kecamatan
- Galeri
- Kontak

---

# ⚙️ Kebutuhan Sistem

## Kebutuhan Fungsional

### Pengunjung

- Melihat halaman beranda.
- Melihat daftar wisata.
- Melihat detail wisata.
- Melihat daftar UMKM.
- Melihat detail UMKM.
- Melakukan pencarian data.
- Melihat lokasi pada peta digital.
- Melihat informasi kontak.

### Administrator

- Login.
- Mengelola data wisata.
- Mengelola data UMKM.
- Mengelola kategori.
- Mengelola kecamatan.
- Mengelola galeri.
- Mengelola kontak.
- Logout.

---

## Kebutuhan Non Fungsional

### Perangkat Lunak

- Windows 10/11
- Laravel 12
- PHP 8.1+
- MySQL
- Bootstrap 5
- Visual Studio Code
- XAMPP
- Git
- Google Chrome
- Microsoft Edge

### Perangkat Keras

- Laptop ASUS Zenbook 13

---

# 🚀 Instalasi

Clone repository

```bash
git clone https://github.com/username/siwak.git
```

Masuk ke folder project

```bash
cd siwak
```

Install dependency

```bash
composer install
```

Salin file environment

```bash
cp .env.example .env
```

Generate application key

```bash
php artisan key:generate
```

Migrasi database

```bash
php artisan migrate
```

Membuat symbolic link storage

```bash
php artisan storage:link
```

Menjalankan aplikasi

```bash
php artisan serve
```

---

# 👨‍💻 Developer

**Misky Anjana Lubis**

Mahasiswa Program Studi Teknologi Informasi

Universitas Islam Negeri Walisongo Semarang

---

# 📌 Keterangan

Proyek ini dikembangkan sebagai bagian dari kegiatan **Magang di Dinas Komunikasi dan Informatika (Diskominfo) Kabupaten Kebumen Tahun 2026** dengan tujuan mendukung digitalisasi informasi sektor pariwisata dan UMKM melalui platform berbasis web.

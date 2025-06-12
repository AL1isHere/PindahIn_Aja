# Proyek Aplikasi "PindahIn Aja"

Aplikasi ini adalah implementasi dari studi kasus untuk membangun sebuah website pemesanan jasa pindahan berbasis web. Dibangun menggunakan **Laravel**, aplikasi ini menyediakan antarmuka yang bersih untuk pengguna melihat dan memesan paket layanan, serta panel admin yang komprehensif untuk mengelola seluruh aspek website.

**Link Repositori:** [https://github.com/AL1isHere/PindahIn_Aja.git](https://github.com/AL1isHere/PindahIn_Aja.git)

---

## Fitur Utama

Aplikasi ini memiliki dua peran utama dengan fitur yang berbeda:

### Untuk Pengguna (Publik)
-   **Beranda:** Menampilkan ringkasan layanan, paket unggulan, dan testimoni.
-   **Halaman Layanan:** Daftar lengkap semua paket layanan pindahan yang tersedia beserta harganya.
-   **Detail Paket:** Halaman khusus untuk melihat deskripsi dan foto detail dari setiap paket.
-   **Formulir Pemesanan:** Pengguna dapat memesan layanan dengan mengisi formulir yang terstruktur.
-   **Desain Responsif:** Tampilan yang menyesuaikan dengan perangkat desktop maupun mobile, dilengkapi dengan navigasi bawah untuk kemudahan akses di mobile.

### Untuk Admin (Akses Terbatas)
-   **Login & Keamanan:** Halaman login yang aman untuk mengakses panel admin.
-   **Dashboard:** Ringkasan statistik pesanan (Request, Approved, Selesai) dan jumlah total paket.
-   **CRUD Paket Layanan:** Admin dapat **Menambah**, **Melihat**, **Mengedit**, dan **Menghapus** paket layanan.
-   **Upload Gambar:** Fungsionalitas untuk mengunggah dan memperbarui gambar untuk setiap paket.
-   **Kelola Pesanan:** Melihat semua pesanan yang masuk dan mengubah statusnya.
-   **Generate Laporan:** Membuat laporan daftar pesanan dalam format PDF.
-   **Kelola Profil Website:** Mengubah konten dinamis pada halaman "Tentang Kami".

---

## Teknologi yang Digunakan

-   **Backend:**
    -   PHP 8+
    -   Laravel 10
    -   MySQL
-   **Frontend:**
    -   HTML5 & Blade Templating Engine
    -   Tailwind CSS
    -   Font Awesome (untuk ikon)
-   **Development Tools:**
    -   Composer
    -   XAMPP
    -   Git & GitHub
-   **Paket Tambahan:**
    -   `barryvdh/laravel-dompdf` (Untuk generate PDF)

---

## Panduan Instalasi Lokal

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di lingkungan lokal Anda.

### 1. Prasyarat
-   PHP (versi 8 atau lebih tinggi)
-   Composer
-   Server lokal (XAMPP/WAMP/MAMP)
-   Git

### 2. Clone Repositori
Buka terminal dan clone repositori ini:
```bash
git clone [https://github.com/AL1isHere/PindahIn_Aja.git](https://github.com/AL1isHere/PindahIn_Aja.git)
cd PindahIn_Aja
```

### 3. Instal Dependensi
Instal semua dependensi PHP yang dibutuhkan dengan Composer.
```bash
composer install
```

### 4. Konfigurasi Lingkungan
-   Salin file `.env.example` menjadi `.env`.
    ```bash
    cp .env.example .env
    ```
-   Buka file `.env` dan sesuaikan konfigurasi database Anda.
    ```dotenv
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=pindahin_aja_db
    DB_USERNAME=root
    DB_PASSWORD=
    ```
-   Buat *application key* baru.
    ```bash
    php artisan key:generate
    ```

### 5. Migrasi Database & Seeding
-   Buat database baru di phpMyAdmin dengan nama `pindahin_aja_db`.
-   Jalankan migrasi untuk membuat semua tabel dan isi dengan data awal (termasuk akun admin).
    ```bash
    php artisan migrate --seed
    ```

### 6. Buat Symbolic Link
Agar gambar yang diunggah bisa diakses, jalankan perintah ini:
```bash
php artisan storage:link
```

### 7. Jalankan Server
Terakhir, jalankan server pengembangan Laravel.
```bash
php artisan serve
```
Aplikasi Anda sekarang dapat diakses di **http://127.0.0.1:8000**.

---

## Kredensial Admin Default

-   **URL Login:** `http://127.0.0.1:8000/admin/login`
-   **Username:** `admin`
-   **Password:** `password`

---

## Kontributor

Dibuat oleh ([AL1isHere](https://github.com/AL1isHere)).


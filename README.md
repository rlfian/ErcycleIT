# eRecycleIT - Sistem Daur Ulang & Manajemen Aset Perangkat IT

**eRecycleIT** adalah aplikasi berbasis web yang dirancang untuk mengelola siklus daur ulang perangkat teknologi informasi (E-Waste) dan pengarsipan inventaris perangkat elektronik. Aplikasi ini memfasilitasi pencatatan perangkat yang sudah tidak terpakai, pemilahan komponen yang dapat digunakan kembali, hingga pelaporan dan masukan dari civitas institusi.

---

## 🌟 Fitur Utama

- **Portal Publik & Edukasi E-Waste**: Landing page informatif seputar daur ulang limbah elektronik.
- **Autentikasi Multi-Peran**:
  - **Admin**: Mengelola seluruh inventaris perangkat, verifikasi status daur ulang, melihat dan mengekspor laporan, serta memproses masukan pengguna.
  - **Pengguna / Bagian Unit**: Mengajukan perangkat IT yang rusak atau tidak digunakan untuk didaur ulang.
- **Sistem Feedback & Interaksi**: Formulir umpan balik langsung untuk evaluasi program daur ulang.
- **Database Terintegrasi**: Menggunakan MySQL untuk tracking status, spesifikasi barang, dan riwayat permohonan.
- **Dashboard Responsif**: Dibangun dengan Bootstrap dan template Gentelella Admin yang ramah perangkat seluler maupun desktop.

---

## 🛠️ Teknologi yang Digunakan

- **Bahasa Pemrograman**: PHP (Native)
- **Database**: MySQL / MariaDB
- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap 3
- **Komponen & UI**: FontAwesome, jQuery, Gentelella Admin Theme, DataTables
- **Server**: Apache (XAMPP / LAMP / WampServer)

---

## 🚀 Panduan Instalasi & Menjalankan Proyek

### Prasyarat
1. Web server lokal (misalnya **XAMPP** dengan PHP 7.4 / 8.x dan MySQL).
2. Web browser modern (Chrome, Edge, Firefox).

### Langkah-langkah
1. **Clone Repositori**:
   ```bash
   git clone https://github.com/rlfian/ErcycleIT.git
   ```
2. **Pindahkan Folder Proyek**:
   Pindahkan folder `ErcycleIT` ke dalam direktori `htdocs` XAMPP Anda:
   - Windows: `C:\xampp\htdocs\ErcycleIT`
3. **Import Database**:
   - Buka browser dan akses `http://localhost/phpmyadmin/`.
   - Buat database baru dengan nama `db_surat`.
   - Pilih menu **Import**, lalu pilih file `db_surat.sql` yang berada di root folder proyek ini.
4. **Konfigurasi Koneksi (Opsional)**:
   Periksa file `koneksi/koneksi.php`:
   ```php
   $server   = "localhost";
   $username = "root";
   $password = "";
   $database = "db_surat";
   ```
5. **Jalankan Aplikasi**:
   Buka browser dan buka:
   ```
   http://localhost/ErcycleIT/
   ```

---

## 👨‍💻 Pengembang

- **Nama**: Rio Alfian
- **Institusi**: Teknik Informatika, UIN Sunan Gunung Djati Bandung
- **GitHub**: [@rlfian](https://github.com/rlfian)
- **LinkedIn**: [Rio Alfian](https://linkedin.com/in/rio-alfian)
- **Website Portofolio**: [rioalfian.vercel.app](https://rioalfian.vercel.app)

---

## 📄 Lisensi
Proyek ini dibuat untuk keperluan akademik dan portofolio pengembangan perangkat lunak.

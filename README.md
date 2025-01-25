# Project SDIT

Project SDIT adalah sebuah proyek pengelolaan sistem informasi sekolah berbasis web yang dirancang untuk mempermudah administrasi dan manajemen data di Sekolah Dasar Islam Terpadu.

## Fitur Utama

- **Manajemen Pendaftaran Siswa Baru**: Pendaftaran, Persyaratan, Pembayaran.
- **Manajemen Data Pendaftaran Siswa Baru**: Mengelola data pendaftaran siswa baru.
- **Manajemen Data Persyaratan Siswa Baru**: mengelola data persyarata siswa baru.
- **Manajemen Data Pembayaran Siswa Baru**: Mengelola data pembayaran siswa baru.
- **Laporan**: Menyediakan laporan data pendaftaran siswa baru.

## Instalasi

Ikuti langkah-langkah berikut untuk menjalankan proyek ini di komputer lokal Anda:

1. **Clone Repositori**
   ```bash
   git clone https://github.com/ariienf/project_sdit.git
   ```

2. **Masuk ke Direktori Proyek**
   ```bash
   cd project_sdit
   ```

3. **Setup Server**
   - Pastikan Anda memiliki server lokal seperti XAMPP atau Laragon.
   - Pindahkan folder proyek ini ke direktori `htdocs` (jika menggunakan XAMPP).
   - Pindahkan folder proyek ini ke direktori `www` (jika menggunakan Laragon).

4. **Import Database**
   - Buka phpMyAdmin.
   - Buat database baru (contoh: `project_sdit`).
   - Import file SQL yang tersedia di folder `database/`.

5. **Konfigurasi Koneksi Database**
   - Buka file `config.php` (atau file konfigurasi lainnya).
   - Sesuaikan pengaturan database (nama, username, password).

6. **Jalankan Proyek**
   - Akses proyek di browser Anda melalui `http://localhost/project_sdit`.

## Penggunaan

Setelah instalasi selesai, Anda dapat mulai menggunakan aplikasi ini dengan fitur-fitur yang tersedia, seperti:

1. Tampilan Website Homepage SDIT.
2. Fitur Login untuk Pendaftaran Siswa Baru.
3. Fitur Login untuk Admin mengelola dan melihat informasi pendaftaran.

## Kontribusi

Kami menyambut kontribusi dari siapa saja. Jika Anda ingin berkontribusi:

1. Fork repositori ini.
2. Buat branch baru untuk fitur atau perbaikan Anda.
   ```bash
   git checkout -b nama-fitur-baru
   ```
3. Commit perubahan Anda.
   ```bash
   git commit -m "Deskripsi perubahan"
   ```
4. Push ke branch Anda.
   ```bash
   git push origin nama-fitur-baru
   ```
5. Buat Pull Request ke branch utama.

## Lisensi

Proyek ini dilisensikan di bawah [MIT License](LICENSE).

## Kontak

Jika Anda memiliki pertanyaan atau masukan, jangan ragu untuk menghubungi:
- **Nama**: Ariienf
- **GitHub**: [ariienf](https://github.com/ariienf)
- **Email**: [bangariew@gmail.com].


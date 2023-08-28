# Pendaftaran Beasiswa - README
Selamat datang di aplikasi Pendaftaran Beasiswa. Aplikasi ini adalah sebuah formulir pendaftaran beasiswa yang dibangun dengan menggunakan bahasa pemrograman PHP. Pemohon dapat mengirimkan informasi mereka dan mendaftar untuk berbagai jenis beasiswa berdasarkan semester dan Indeks Prestasi Kumulatif (IPK) mereka.

## **Cara Memulai** ##
Untuk menjalankan formulir pendaftaran beasiswa, ikuti langkah-langkah berikut:
1. Pastikan Anda memiliki lingkungan pengembangan web yang sesuai (misalnya, XAMPP) yang telah diinstal dan berjalan.
   
2. Unduh repository ini atau salin kode-kode yang diberikan ke dalam proyek web Anda.
   
3. Pastikan Anda memiliki database MySQL yang sudah dibuat dengan nama "ujikom". Anda dapat mengganti pengaturan koneksi database di file connection.php jika diperlukan.
   
4. Impor tabel pendaftar ke dalam database Anda dari file pendaftar.sql yang tersedia.
   
5. Buka proyek Anda menggunakan server web Anda (misalnya, dengan mengakses http://localhost/pendaftaran-beasiswa/index.php).

## **Penggunaan** ##
* Halaman awal (index.php) adalah titik masuk ke aplikasi. Di sini, Anda dapat memilih jenis beasiswa yang ingin Anda daftar (Akademik atau Non-Akademik) dan melihat grafik pendaftar beasiswa.
  
* Pada halaman "Pilihan Beasiswa," Anda dapat membaca informasi tentang kedua jenis beasiswa dan jika ingin mendaftar, klik tombol "Daftar Sekarang" sesuai dengan jenis beasiswa yang Anda pilih.
  
* Halaman "Form Pendaftaran" memungkinkan Anda untuk mengisi formulir pendaftaran. Email yang Anda masukkan akan digunakan untuk mengidentifikasi jenis beasiswa dan mengisi nama dan IPK secara otomatis. Perhatikan bahwa email "drayy23@gmail.com" akan memberikan IPK yang memungkinkan pendaftaran, sedangkan email "jack@gmail.com" akan memunculkan peringatan.
  
* Setelah mengisi formulir pendaftaran, Anda dapat mengunggah berkas terkait (seperti transkrip nilai). Tombol "Daftar" akan aktif jika syarat IPK terpenuhi.

* Pada halaman "Hasil," Anda dapat melihat daftar pendaftar beserta detailnya. Status awalnya adalah "belum diverifikasi."

## **Penjelasan Code** ##
* index.php adalah file utama aplikasi web ini. Di dalamnya terdapat PHP untuk mengatur navigasi, menampilkan konten yang sesuai, dan menghubungkan ke database.
  
* connection.php berisi kode untuk menghubungkan ke database MySQL.

* add_pendaftar.php adalah file yang memproses data pendaftaran dan mengunggah berkas terkait ke server.

* myjs.js menggunakan jQuery untuk mengisi otomatis nama dan IPK berdasarkan email yang dimasukkan dalam formulir pendaftaran.

* mycss.css berisi aturan CSS untuk tampilan aplikasi.

## **Berkontribusi** ##
Anda dapat berkontribusi dengan memperbaiki atau memperluas fitur aplikasi ini dan mengirimkan permintaan tarik (pull request) melalui GitHub. Pastikan untuk mengikuti pedoman pengembangan yang telah ditentukan dalam proyek ini.

Selamat berkontribusi!

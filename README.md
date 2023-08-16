Web CRUD sederhana

## Proyek apa ini?
Proyek ini adalah contoh implementasi sebuah website CRUD sederhana yang memanfaatkan PHP sebagai bahasa pemrograman server dan MySQL sebagai basis data. Website ini memiliki fungsi untuk menambahkan, melihat, mengedit, dan menghapus data biodata pribadi seperti nama, umur, dan email.

## Fitur-fitur
- `add` &mdash; menambahkan data baru dengan informasi nama, umur, dan email.
- `homepage` &mdash; melihat daftar data yang sudah ada dengan informasi nama, umur, dan email.
- `edit` &mdash; mengedit data yang sudah ada dengan memperbarui nama, umur, dan email.
- `delete` &mdash; menghapus data yang sudah ada dari daftar.

## Skema
- Tabel "users"
  - [id] Primary Key
  - name
  - age
  - email

## Penjelasan Setiap File
1. add.php: Halaman ini menampilkan formulir untuk menambahkan data biodata pribadi seperti nama, umur, dan email. Setelah mengisi formulir, pengguna dapat menekan tombol "Add" untuk menyimpan data ke database.
1. addAction.php: File ini melakukan pengecekan terhadap data yang dimasukkan oleh pengguna dalam formulir. Jika semua data terisi, data tersebut akan dimasukkan ke dalam tabel "users" dalam database. Jika ada data yang kosong, akan ditampilkan pesan error.
1. database.sql: File ini berisi perintah SQL untuk membuat basis data "test" dan tabel "users" yang menyimpan biodata pribadi.
1. dbConnection.php: File ini digunakan untuk menghubungkan aplikasi ke database MySQL. Menggunakan parameter seperti nama host, nama database, username, dan password untuk melakukan koneksi.
1. delete.php: File ini menghapus data dari tabel "users" berdasarkan id yang diberikan dalam URL. Setelah menghapus data, pengguna akan diarahkan kembali ke halaman utama.
1. edit.php: Halaman ini menampilkan formulir yang memungkinkan pengguna untuk mengedit data biodata pribadi. Data yang diambil dari database akan ditampilkan dalam formulir.
1. editAction.php: File ini melakukan pengecekan terhadap data yang dimasukkan oleh pengguna dalam formulir edit. Jika data lengkap, data tersebut akan diperbarui dalam tabel "users" dalam database.
1. index.php: Halaman utama menampilkan daftar data biodata pribadi yang ada dalam tabel "users". Pengguna dapat melihat, mengedit, atau menghapus data.

## Konsep
- Create (Tambah Data)
  - Pengguna mengakses halaman "add.php" untuk menambahkan data baru.
  - Formulir pada halaman ini memungkinkan pengguna untuk mengisi nama, umur, dan email.
  - Data yang dimasukkan akan dikirim ke "addAction.php" saat pengguna menekan tombol "Add".
  - "addAction.php" memvalidasi data yang dimasukkan, lalu memasukkan data ke dalam tabel "users".
- Read (Baca Data)
  - Halaman utama "index.php" menampilkan daftar data yang sudah ada dalam tabel "users".
  - Setiap data menampilkan informasi nama, umur, dan email.
  - Pengguna dapat melihat, mengedit, atau menghapus data dari halaman ini.
- Update (Ubah Data)
  - Pengguna dapat mengklik tombol "Edit" pada halaman utama untuk mengakses halaman "edit.php".
  - Formulir pada halaman "edit.php" menampilkan data yang ingin diubah.
  - Pengguna dapat mengedit data yang diperlukan (nama, umur, dan email).
  - Saat tombol "Update" ditekan, data di "editAction.php" akan memperbarui data di tabel "users".
- Delete (Hapus Data)
  - Pengguna dapat mengklik tombol "Delete" pada halaman utama untuk menghapus data.
  - Pengguna akan diminta konfirmasi sebelum data dihapus.
  - Data akan dihapus dari tabel "users" saat pengguna mengonfirmasi.

## General
- File-file PHP (add.php, edit.php, delete.php, editAction.php, addAction.php, index.php) bertindak sebagai "Controller" yang mengatur alur kerja.
- Halaman HTML (add.php, edit.php, index.php) bertindak sebagai "View" yang menampilkan tampilan ke pengguna.
- Basis data MySQL dengan tabel "users" berfungsi sebagai "Model" yang menyimpan data.
- File "dbConnection.php" menyediakan koneksi ke database untuk digunakan di seluruh proyek.
- Penggunaan formulir HTML memungkinkan interaksi antara pengguna dan aplikasi.
- Penggunaan tautan "Edit" dan "Delete" memungkinkan pengguna melakukan operasi CRUD pada data.

## Penggunaan
1. Clone agar dapat menjalankan skrip ini
   ```
	$ git clone git@github.com:jenyta-id/crudtest.git```
 
1. Letakkan seluruh file proyek ini dalam direktori web server Anda
	File php yang akan dijalankan harus berada di dalam folder `C:\xampp\htdocs`. Jika file php berada di luar folder htdocs, maka web server tidak bisa mengaksesnya.
1. Akses proyek melalui browser dengan mengganti alamat C:\xampp\htdocs menjadi localhost melalui URL
	```http://localhost/nama-direktori-proyek/index.php```


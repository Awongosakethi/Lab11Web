# Praktikum 11 - Pemrograman Web (PHP Framework)

## Nama   : Awong osakethi
## NIM    : 311910499
## Kelas  : TI.19.A2

### Laporan Praktikum

#### 1.	Membuat folder baru lab11_php_ci setelah itu jalankan XAMPP dan ubah file yang ada di dalam file php.ini seperti berikut :
![1 0](https://user-images.githubusercontent.com/56240483/122004331-78ea8000-cdde-11eb-9b06-e72ed5dfdfef.png)
![1](https://user-images.githubusercontent.com/56240483/122004334-7ab44380-cdde-11eb-90ee-d92117c952ce.png)
#### 2. Download Codeigniter dapat di https://codeigniter.com/download  Lalu ekstrak file zip ke direktori htdocs/lab11_php_ci. Ubah nama folder menjadi ci4. Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/
![2](https://user-images.githubusercontent.com/56240483/122004048-18f3d980-cdde-11eb-842c-0c8f32d04b81.png)
#### 3.	Membuka cmd pada XAMPP Shell lalu buka php spark, untuk menjalankan server ketik "php spark serve" :
![3](https://user-images.githubusercontent.com/56240483/122004051-198c7000-cdde-11eb-8271-9fbe980d97d2.png)
![4](https://user-images.githubusercontent.com/56240483/122004055-1a250680-cdde-11eb-8015-c0f9a912357b.png)
#### 4.	Codeigniter sudah menyediakan mode debungging/development yang dapat menampilkan error/kesalahan pada program. Dengan cara mengubah nama file env menjadi .env kemudian buka file nya dan bah menjadi development. 
![5](https://user-images.githubusercontent.com/56240483/122004056-1abd9d00-cdde-11eb-83be-65f58e851d1b.png)
#### 5.	Membuat Route
-	Router berasa di file app/config/Routes.php
-	Untuk mengetahui route yang ada atau telah berjalan dapat menggunakan perintah php spark routes. Lalu akses route yang telah dibuat dengan akses http://localhost:8080/about jika terjadi error karena tidak ada file untuk halaman about.
![6](https://user-images.githubusercontent.com/56240483/122004063-1db88d80-cdde-11eb-9396-ef05ee01ab62.png)
![7](https://user-images.githubusercontent.com/56240483/122004079-23ae6e80-cdde-11eb-86e3-eded11c28a0f.png)
#### 6.	Membuat Controller
-	Membuat file page.php didalam directory Controller (/app/Controllers) kemudian refresh pada browser maka halaman akan muncul
![8](https://user-images.githubusercontent.com/56240483/122004083-24470500-cdde-11eb-8a92-a37ed4e4b3ae.png)
#### 7.	Menambahkan method baru pada controller page.
-	Method ini dapat diakses dengan menggunakan alamat: http://localhost:8080/page/tos
![9](https://user-images.githubusercontent.com/56240483/122004090-27da8c00-cdde-11eb-9b42-96b4907b94bd.png)
#### 8.	Membuat View
- Membuat file about.php di dalam directory View (/app/view/about) dan mengubah method about dalam controller page.
![10](https://user-images.githubusercontent.com/56240483/122004101-2ad57c80-cdde-11eb-992f-6cd74c442ed7.png)
#### 9.	Membuat Layout Web dengan CSS
-	Membuat file css pada directory public dengan nama style.css (coppy file praktikum lab4_layout), kemudian buat folder template pada directori view, lalu buat file ```header.php``` dan ```footer.php```
![11 0](https://user-images.githubusercontent.com/56240483/122005453-da5f1e80-cddf-11eb-9ab4-99e078a97af6.png)
![11](https://user-images.githubusercontent.com/56240483/122005444-d6330100-cddf-11eb-912f-bd6773754fc6.png)
- Kemudian ubah file about.php (/app/view/about.php) seperti berikut:
```
<?= $this->include('template/header'); ?>
<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>
<?= $this->include('template/footer'); ?>
```
- refresh browser pada akses alamat http://localhost:8080/about
![12](https://user-images.githubusercontent.com/56240483/122005449-d92df180-cddf-11eb-8045-34ddb208a950.png)

#### Pertanyaan dan Tugas
````
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga 
semua link pada navigasi header dapat menampilkan tampilan dengan layout yang 
sama.
````
#### Hasilnya :
- Tampilan About
![Screenshot (181)](https://user-images.githubusercontent.com/56240483/122054557-fc719480-ce11-11eb-9d9a-bbaf70a79daf.png)

- Tampilan Contact
![Screenshot (180)](https://user-images.githubusercontent.com/56240483/122054551-fbd8fe00-ce11-11eb-9d5d-5ed8224503c7.png)

- Tampilan Artikel
![Screenshot (179)](https://user-images.githubusercontent.com/56240483/122054529-f7ace080-ce11-11eb-82b6-dc3f3740aaad.png)


# Praktikum 12 - Pemrograman Web (Framework Lanjutan - CRUD)

## Nama   : Awong Osakethi
## NIM    : 311910499
## Kelas  : TI.19.A2

## Laporan Praktikum
### Persiapan
Pastikan MySQL sudah aktif atau berjalan lalu buat database sebagai berikut :
![1](https://user-images.githubusercontent.com/56240483/122759058-b742dc00-d2c3-11eb-9361-f77d1cc53e8d.png)
### Langkah 1 - Konfigurasi Database
Membuat konfigurasi penghubung ke database server dengan menggunakan file ```.env```
![2](https://user-images.githubusercontent.com/56240483/122759099-c2960780-d2c3-11eb-9571-08c12243c6b1.png)
### Langkah 2 - Membuat Model
Membuat file baru pada direktori /app/Models dengan nama ArtikelModel.php
![3](https://user-images.githubusercontent.com/56240483/122760028-d857fc80-d2c4-11eb-813b-ad67ae165cce.png)
### Langkah 3 - Membuat Controller
Membuat Controller baru dengan nama Artikel.php pada direktori /app/Controller
![4](https://user-images.githubusercontent.com/56240483/122759159-d3df1400-d2c3-11eb-92a0-0cc79c7342c5.png)
### Langkah 4 - Membuat View
Membuat direktori baru dengan nama artikel pada direktori /app/Views, lalu membuat file baru dengan nama index.php
![5](https://user-images.githubusercontent.com/56240483/122759179-d9d4f500-d2c3-11eb-91e7-ed030ddc2973.png)
Kemudian membuka browser kembali, dan akses url : http://localhost:8080/artikel
![6](https://user-images.githubusercontent.com/56240483/122759193-e0fc0300-d2c3-11eb-8fb4-1e088f95b946.png)
Belum ada data yang di tampilkan, kemudian tambah beberapa data pada database agar dapat menampilkan data.
![7](https://user-images.githubusercontent.com/56240483/122759222-e8231100-d2c3-11eb-85f8-e9ac0644eb41.png)
Setelah mengisi database, refresh kembali browser dan akan muncul tampilan seperti ini :
![8](https://user-images.githubusercontent.com/56240483/122759266-f2450f80-d2c3-11eb-9510-152442446ad7.png)
### Langkah 5 - Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda. Tambahkan sebuah fungsi baru pada Controller Artikel (/app/Controllers/Artikel.php) dengan nama view().
![9](https://user-images.githubusercontent.com/56240483/122759292-f96c1d80-d2c3-11eb-8fb8-45133cfa8a29.png)
### Langkah 6 - Membuat View Detail
Buat file baru dalam folder artikel (/app/Views/artikel/) dengan nama detail.php untuk menampilkan halaman detail.
![10](https://user-images.githubusercontent.com/56240483/122759318-00932b80-d2c4-11eb-9efa-9a3258273f57.png)
### Langkah 7 - Membuat Route
Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail.
![11](https://user-images.githubusercontent.com/56240483/122759333-038e1c00-d2c4-11eb-9ad6-37859facdaf7.png)
Maka akan tampil halaman artikel yang di klik :
![12](https://user-images.githubusercontent.com/56240483/122762012-148c5c80-d2c7-11eb-87bd-d789a906f0b5.png)
### Langkah 8 - Membuat Menu Admin
Menu admin adalah untuk proses CRUD data artikel.
Buat method atau fungsi baru pada Controller Artikel dengan nama admin_index().
![13](https://user-images.githubusercontent.com/56240483/122762065-2110b500-d2c7-11eb-8f42-f1d587e53498.png)
Kemudian membuat file admin_index.php dalam folder (/app/Views/artikel/) untuk tampilan halaman admin.
![14](https://user-images.githubusercontent.com/56240483/122762069-2241e200-d2c7-11eb-86b2-d5ed63af1abd.png)
Lalu tambahkan routing untuk menu admin sebagai berikut :
![15](https://user-images.githubusercontent.com/56240483/122762071-22da7880-d2c7-11eb-87b6-aa763daef611.png)
Kemudian menu admin dapat diakses dengan alamat http://localhost:8080/admin/artikel
![16](https://user-images.githubusercontent.com/56240483/122762076-23730f00-d2c7-11eb-974b-953a7d29d4f2.png)
### Langkah 9 - Menambah Data Artikel
Tambahkan fungsi/method baru pada Controller Artikel dengan nama add().
![17](https://user-images.githubusercontent.com/56240483/122762078-23730f00-d2c7-11eb-8b43-029576df309e.png)
Kemudian buat view untuk form tambah dengan nama form_add.php dalam folder (/app/Views/artikel/).
![18](https://user-images.githubusercontent.com/56240483/122762079-240ba580-d2c7-11eb-9f3e-18a976de9d4d.png)
Berikut tampilan form untuk menambah data artikel :
![19](https://user-images.githubusercontent.com/56240483/122762083-24a43c00-d2c7-11eb-8e1b-7b9dcf532baf.png)
### Langkah 10 - Mengubah Data
Menambahkan fungsi/method baru pada Controller Artikel dengan nama edit().
![20](https://user-images.githubusercontent.com/56240483/122762084-253cd280-d2c7-11eb-82e6-031d12d9dbe0.png)
Kemudian buat view untuk form tambah dengan nama form_edit.php dalam folder (/app/Views/artikel/).
![21](https://user-images.githubusercontent.com/56240483/122762089-25d56900-d2c7-11eb-8c1d-3770e620a128.png)
Berikut tampilan form untuk mengubah data artikel :
![22](https://user-images.githubusercontent.com/56240483/122762093-27069600-d2c7-11eb-870f-d2bde8687fb4.png)
### Langkah 11 - Menghapus Data
Menambahkan fungsi/method baru pada Controller Artikel dengan nama delete().
![23](https://user-images.githubusercontent.com/56240483/122762096-279f2c80-d2c7-11eb-9646-426803e60982.png)


# Praktikum 13 - Pemrograman Web (Framework Lanjutan - Modul Login)

## Nama   : Awong Osakethi
## NIM    : 311910499
## Kelas  : TI.19.A2

## Laporan Praktikum

### Persiapan
Pastikan MySQL server sudah berjalan dan buat sebuah tabel sebagai berikut :
![1](https://user-images.githubusercontent.com/56240483/123633530-86265680-d843-11eb-8965-8f8addc3003c.png)
### Langkah 1 - Membuat Model User
Membuat file baru pada direktori app/Models dengan nama UserModel.php untuk memproses data login :
![2](https://user-images.githubusercontent.com/56240483/123633578-94747280-d843-11eb-87d3-f8f483a15791.png)
### Langkah 2 - Membuat Controller User
Buat Controller baru dengan nama `User.php` pada direktori `app/Controllers`. Kemudian tambahkan method `index()`untuk menampilkan daftar user, dan method `login()` untuk proses login.
![3](https://user-images.githubusercontent.com/56240483/123633580-950d0900-d843-11eb-8a61-44e09ead77e0.png)
### Langkah 3 - Membuat View Login
Membuat direktori baru dengan nama `user` pada direktori `app/views`, kemudian buat file baru dengan nama `login.php`.
![4](https://user-images.githubusercontent.com/56240483/123633587-976f6300-d843-11eb-9c50-4670e7643ed3.png)
### Langkah 4 - Membuat Database Seeder
Untuk keperluan ujicoba modul login, kita perlu memasukkan data user dan password ke dalam database. Untuk itu buat database seeder untuk tabel user. Buka CLI, kemudian tulis perintah berikut: `php spark make:seeder UserSeeder`
![5](https://user-images.githubusercontent.com/56240483/123633592-99392680-d843-11eb-85e2-7cc7c2bb2ae2.png)
Selanjutnya, buka file `UserSeeder.php` yang berada di lokasi direktori `/app/Database/Seeds/UserSeeder.php` kemudian isi dengan kode berikut:
![6](https://user-images.githubusercontent.com/56240483/123633593-99392680-d843-11eb-8e46-69d2c8f6e1a0.png)
Selanjutnya buka kembali CLI dan ketik perintah berikut `php spark db:seed UserSeeder`
![7](https://user-images.githubusercontent.com/56240483/123633595-99d1bd00-d843-11eb-96fe-13ed6a4e690c.png)
Kemudian lakukan uji coba login dengan mengakses url : http://localhost:8080/user/login
![8](https://user-images.githubusercontent.com/56240483/123633598-9a6a5380-d843-11eb-8a21-0acf57508a2a.png)
### Langkah 5 - Menambah Auth Filter
Selanjutnya membuat file baru dengan nama Auth.php pada direktori app/Filters untuk memfilter halaman admin.
![9](https://user-images.githubusercontent.com/56240483/123633600-9b02ea00-d843-11eb-8ac2-3553cab95f50.png)
Kemudian buka file `app/Config/Filters.php` tambahkan kode berikut:
![10](https://user-images.githubusercontent.com/56240483/123633605-9b9b8080-d843-11eb-9db2-7db1bf851d18.png)
Selanjutnya buka file `app/Config/Routes.php` dan sesuaikan kodenya seperti berikut :
![11](https://user-images.githubusercontent.com/56240483/123633609-9cccad80-d843-11eb-9e3e-b77fed52040e.png)
Maka ketika mengakses alamat http://localhost:8080/admin/artikel akan dibawa ke halaman login.
![12](https://user-images.githubusercontent.com/56240483/123633612-9d654400-d843-11eb-924f-4579451ad058.png)
### Langkah 6 - Menambah Fungsi Logout
Tambahkan method logout pada Controller User seperti berikut :
![13](https://user-images.githubusercontent.com/56240483/123633616-9dfdda80-d843-11eb-92b0-ad09e0a88f5b.png)
Tambahkan menu logout di header admin. Ke direktori `app\view\template` lalu buka file `admin_header.php` tambahkan kode berikut :
![Screenshot (237)](https://user-images.githubusercontent.com/56240483/123636044-9855c400-d846-11eb-92f4-69a5fca4e4c0.png)
Tambahkan `route` logout dengan cara ke direktori `app\Config\Routes.php` lalu tambahkan kode berikut :
![Screenshot (236)](https://user-images.githubusercontent.com/56240483/123636566-38abe880-d847-11eb-878a-216e550e23a4.png)
### Langkah 7 - Percobaan Akses 
Mengakses http://localhost:8080/admin/artikel jika sudah di akses akan dimuculkan halaman login.
- Tampilan Login
![12](https://user-images.githubusercontent.com/56240483/123633612-9d654400-d843-11eb-924f-4579451ad058.png)
- Tampilan Setelah Login 
![14](https://user-images.githubusercontent.com/56240483/123637141-e0c1b180-d847-11eb-97e8-2bfe7fa67385.png)

# Praktikum 14 - Pemrograman Web (Framework Lanjutan - Pagination dan Pencarian)

## Nama   : Awong Osakethi
## NIM    : 311910499
## Kelas  : TI.19.A2

## Laporan Praktikum
### Langkah 1 - Membuat Pagination
- Pagination digunakan untuk membatasi tampilan data pada sebuah halaman menjadi beberapa halaman tergantung banyaknya data yang akan ditampilkan. Untuk membuat pagination, buka kembali `Controller Artikel`, kemudian modifikasi kode pada method `admin_index` seperti berikut :
![1](https://user-images.githubusercontent.com/56240483/124372965-ba24d000-dcb8-11eb-87d7-c7f66f1970a6.png)
- Lalu buka file `views/artikel/admin_index.php` dan tambahkan kode berikut : 
![2](https://user-images.githubusercontent.com/56240483/124372967-c6a92880-dcb8-11eb-9548-0a2e20310a5a.png)
- Tambahkan beberapa artikel untuk melihat hasilnya, seperti berikut :
![3](https://user-images.githubusercontent.com/56240483/124372968-c7da5580-dcb8-11eb-8431-d2880f167027.png)
### Langkah 2 - Membuat Pencarian
- Pencarian data digunakan untuk memfilter data. Untuk membuat pencarian data, buka kembali `Controller Artikel`, pada method `admin_index` ubah kodenya seperti berikut :
![4](https://user-images.githubusercontent.com/56240483/124372969-c90b8280-dcb8-11eb-8c4c-5f2b849b6330.png)
- Kemudian buka kembali file `views/artikel/admin_index.php` dan tambahkan form pencarian sebelum deklarasi tabel seperti ini.
![5](https://user-images.githubusercontent.com/56240483/124372970-ca3caf80-dcb8-11eb-8f1b-384b7352383c.png)
- Lalu ubah link pager menjadi `<?= $pager->only(['q'])->links(); ?>`.
![6](https://user-images.githubusercontent.com/56240483/124372971-cad54600-dcb8-11eb-8722-3476598676a5.png)
- Selanjutnya kita kembali membuka halaman admin artikel dan masukkan kata tertentu pada form pencarian. seperti berikut :
![7](https://user-images.githubusercontent.com/56240483/124372972-cb6ddc80-dcb8-11eb-8be6-708fe78555ab.png)
### Langkah 3 - Membuat Upload Gambar
- Menambahkan fungsi unggah gambar pada tambah artikel. Buka kembali Controller Artikel, sesuaikan kode pada method add seperti berikut :
![8](https://user-images.githubusercontent.com/56240483/124372973-cc067300-dcb8-11eb-8ac0-c9cff0cf8533.png)
- Kemudian pada file `views/artikel/form_add.php` tambahkan field input file serta sesuaikan tag form dengan menambahkan ecrypt type `<form action="" method="post" enctype="multipart/form-data">` dan tambahkan field input file:
![9](https://user-images.githubusercontent.com/56240483/124372975-cd37a000-dcb8-11eb-9556-83836d0a619a.png)
- Lalu melakukan uji coba menambahkan artikel dengan upload gambar :
![10](https://user-images.githubusercontent.com/56240483/124372976-cdd03680-dcb8-11eb-8438-f3da22030ac1.png)
- Berikut artikel yang dibuat dengan upload gambar :
![11](https://user-images.githubusercontent.com/56240483/124372977-ce68cd00-dcb8-11eb-8818-762f7cb75c69.png)




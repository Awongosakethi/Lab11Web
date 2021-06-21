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

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

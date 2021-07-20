# UJIAN AKHIR SEMESTER GENAP 2020/2021
# PEMROGRAMAN WEB

# Nama : Recha Irfan Trijianto
# NIM : 311910257
# Kelas : TI.19.B2
# Link demo : https://platzsnow.my.id/  


## Aplikasi Sederhana "Kas RT PERUM DDN Berbasis" Codeigniter 4

### Install codeigniter 4
Download codeigniter dari website resmi, kemudian extract pada folder htdocs yang ada di xampp.

### Jalankan webserver local
Start service http dan mysql pada aplikasi xampp. Kemudian jalankan php spark serve pada terminal untuk menjalankan webserver localhost codeigniter.

### Membuat database dan hubungkan dengan CI4
Membuat database sesuai dengan instruksi yaitu terdiri dari 2 table. Berikut ini desain database nya.
![desain database]![image](https://user-images.githubusercontent.com/81579730/126353029-f8940a9e-c9a7-4ef0-ba07-abfaf09e514a.png)

Setelah berhasil membuat database, selanjutnya adalah menghubungkan CI4 ke database tersebut. Edit file /app/Config/Database.php kemudian masukan nama database di line database.

### Membuat halaman warga
Halaman warga berisi table list warga. Kemudian akan ada juga tombol tambah, edit dan delete.
#### Membuat model warga
Membuat model warga dengan cara membuat file baru /app/Models/Warga_model.php. Model ini berfungsi untuk 
- Mengambil data dari table warga yang ada di database.
- Membuat fungsi untuk update di halaman edit warga.
- Membuat fungsi save warga untuk memproses save data pada saat tambah data warga.
- Dan fungsi hapus data warga.
![image](https://user-images.githubusercontent.com/81579730/126353535-f1f28c3d-0897-4a1e-8bdc-705c34edc911.png)

#### Membuat Controller Warga
Membuat controller baru /app/Controllers/Warga.php. Controller ini berfungsi untuk mengatur tampilan website dan juga untuk memanggil class yang sudah di buat pada Model. Di dalam Controller warga terdapat beberapa controller, antara lain:
- index -> untuk tampilan halaman warga atau yang berisi table list warga.
- tambah -> untuk menampilkan halaman tambah warga.
- add -> berfungsi sebagai aksi tambah warga yang kemudian di insert ke database.
- edit -> untuk menampilkan halaman edit warga.
- update -> berfungsi sebagai aksi update warga yang kemudian di insert ke database.
- hapus -> berfungsi untuk menghapus data warga.
![image](https://user-images.githubusercontent.com/81579730/126354018-0d964ac9-9996-425b-ab6c-69d626defe8a.png)

#### Membuat view
Setelah membuat controller, selanjutnya adalah membuat view atau tampilan websitenya. Buat file view di /app/Views. Untuk CRUD warga view yang di buat antara lain:
- header_view.php -> header yang nantinya di pakai semua halaman yang berisi title dan link CSS bootstrap.
- footer_view.php -> footer yang nantinya di pakai semua halaman berisi link javascripts dari bootstrap.
- warga_view.php -> untuk menampilkan table list warga.
![image](https://user-images.githubusercontent.com/81579730/126356137-4e43b183-8b7b-45d5-b82d-9fcc5ba638d9.png)

- tambah_view.php -> untuk menampilkan form tambah warga.
![image](https://user-images.githubusercontent.com/81579730/126355254-e2d820ef-79c0-41e3-91b2-9d39f8515060.png)

- edit_view.php -> untuk menampilkan form edit warga.
![image](https://user-images.githubusercontent.com/81579730/126354927-b499c1b0-f0d9-49dd-a41d-4c9cd5cc33ae.png)

### Membuat halaman iuran
Halaman iuran berisi table transaksi iuran warga. Di dalam halaman iuran hanya ada tombol tambah untuk menambahkan transaksi baru. Tidak ada tombol untuk update dan delete.

#### Membuat model iuran
Membuat model iuran dengan membuat file baru di /app/Models/Iuran_model.php. Model ini berfungsi untuk:
- Mengambil data dari table iuran yang ada di database.
- Membuat fungsi tambah transaksi iuran baru.
![image](https://user-images.githubusercontent.com/81579730/126356558-8ad6dcf4-9699-4e88-815d-c7b5c5eae911.png)

#### Membuat Controller Iuran
Membuat controller baru /app/Controllers/Iuran.php. Controller ini berfungsi untuk mengatur tampilan website yang ada di Views dan juga memanggil class yang sudah di buat pada model. Di dalam controller ini terdapat beberapa controller, antara lain :
- index -> Menampilkan tamble transaksi iuran.
- tambah -> Menampilkan halaman tambah iuran.
- add -> berfungsi untuk melakukan aksi tambah iuran dari halaman tambah iuran.
![image](https://user-images.githubusercontent.com/81579730/126357090-9471e6eb-9cb7-4d0c-9fd2-b8999b12f8c3.png)

#### Membuat view iuran
Setelah membuat controller, selanjutnya adalah membuat view atau tampilan websitenya. Buat file view di /app/Views/iuran.
- iuran_view.php -> untuk menampilkan table list transaksi iuran.
![image](https://user-images.githubusercontent.com/81579730/126357325-95b942a6-380d-4a93-9b68-b759d2b0a002.png)

- tambah_view.php -> untuk menampilkan form tambah iuran.
![image](https://user-images.githubusercontent.com/81579730/126357440-239e9fa1-0531-4225-87e4-1455b05ec18c.png)

### Membuat halaman laporan
Halaman laporan berisi informasi jumlah iuran per bulan dan per tahun, serta daftar warga yang belum melakukan iuran perbulan.
#### Membuat model laporan
Membuat model baru dengan membuat file /app/Models/Iuran_model.php. Model ini berfungsi untuk:
- getLaporanTahun -> Untuk mengambil data jumlah iuran dalam satu tahun.
- getListBulan -> Untuk mengambil list bulan dalam table iuran.
- getListTahun -> Untuk mengambil list tahun dalam table iuran.
![image](https://user-images.githubusercontent.com/81579730/126357606-a94b0647-aaff-495b-a350-9f96c7d6951c.png)

#### Membuat controller laporan
Membuat controller baru /app/Controllers/Laporan.php. Controller ini berfungsi untuk mengatur tampilan website yang ada di views dan juga memanggil class yang sudah di buat pada Laporan_model. Di dalam controller lapora terdapat beberapa controller, antara lain.
- index -> Menampilkan table laporan jumlah iuran pertahun dan juga form select untuk memilik bulan dan tahun untuk menampilkan laporan bulanan.
- total -> Menampilkan jumlah iuran perbulan dan daftar warga yang belum melakukan iuran pada bulan yang di pilih pada select di halaman laporan.
![image](https://user-images.githubusercontent.com/81579730/126357660-8fe31bc7-9c96-4400-a1e6-38f1e90a7e5b.png)

#### Membuat View Laporan
Selanjutnya adalah membuat view atau tampilan website laporan. Buat file baru di /app/Views/iuran.
- Laporan_view.php -> untuk menampilkan table laporan jumlah kas pertahun dan form select untuk menampikan data kas perbulan.
![image](https://user-images.githubusercontent.com/81579730/126358206-080596c0-ad86-4120-bf2e-b0d882881d75.png)
![image](https://user-images.githubusercontent.com/81579730/126358271-846e2a65-7d83-43ab-aa35-6e92d532d171.png)

- total_view.php -> Untuk menampilkan table jumlah kas perbulan dan list warga yang belum melakukan pembayaran kas di bulan tersebut.
![image](https://user-images.githubusercontent.com/81579730/126358416-f24562b6-7339-4bac-9c7f-c55cfb340f99.png)

### Upload ke hosting
Untuk pembuatan aplikasinya sudah selesai. Langkah selanjutnya adalah upload ke hosting, supaya bisa di akses dari internet.
#### Hosting dan Domain
Hosting yang saya pakai adalah cPanel

#### Buat database dan user database
Pertama buat database dan user database terlebih dahulu pada hosting. 
#### Export dan import database
Kemudian export database dari phpmyadmin localhost, kemudian export pada phpmyadmin hosting.
#### Upload data
- Upload isi dari folder public CI4 yang sudah di compress menjadi ZIP melalui file manager cPanel ke dalam folder public_html
![image](https://user-images.githubusercontent.com/81579730/126358959-0d1a0e66-187f-4a46-a333-204b5617d117.png)

- Kemudian buat folder /ci4 di root hosting. Lalu upload data CI4 selain folder public yang sudah di compress menjadi ZIP ke folder tersebut. Setelah di upload file ZIP nya jangan lupa di extract.
![image](https://user-images.githubusercontent.com/81579730/126359041-227e5501-a505-48fe-8c88-fed36bce24fa.png)

#### Konfigurasi database
Setelah upload data selesai, selanjutnya adalah konfigurasi database. Edit file database yang ada di /app/Config/Database.php. Kemudian untuk kolom, user, password dan database nya di sesuaikan dengan database yang sebelumnya sudah di buat.
#### Konfigurasi base_url
Base_url adalah alamat untuk mengakses websitenya. Edit file /app/Config/App.php.
Kemudian edit line `public $baseURL = 'http://localhost:8080/';` Menjadi `public $baseURL = 'https://platzsnow.my.id/';`
#### Konfigurasi PATH
- Konfigurasi ini bertujuan untuk menentukan lokasi folder app dari ci4. 
- Edit file index.php yang ada di folder public subdomain atau domain.
- Kemudian edit line `$pathsConfig = FCPATH . '../app/Config/Paths.php';` menjadi `$pathsConfig = FCPATH . '../ci4/app/Config/Paths.php';`

#### Website sudah online
Setelah semua langkah di atas sudah di lakukan maka website sudah berhasil online.

### Penutup
Demikian laporan pembuatan aplikasi sederhana kas RT PERUM DDN berbasis Codeigniter 4.

# Terima Kasih

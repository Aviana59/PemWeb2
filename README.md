# WEBSITE ALOKASA

## Tujuan
Dokumen ini merupakan Spesifikasi Kebutuhan Perangkat Lunak (SKPL) atau Software Requirement Specification (SRS) untuk Website Alokasa. Tujuan dari penulisan dokumen ini adalah untuk memberikan penjelasan mengenai website yang akan dibangun baik berupa gambaran umum maupun penjelasan detail dan menyeluruh. Pengguna dari dokumen ini adalah para pengembang (developer) perangkat lunak aplikasi pengumpulan tugas dan pengguna (user) dari perangkat lunak ini atau mereka yang terlibat dalam sistem. Dokumen ini akan digunakan sebagai bahan acuan dalam proses pengembangan dan sebagai bahan evaluasi pada saat proses pengembangan perangkat lunak maupun di akhir pengembangannya. Dengan adanya dokumen SKPL ini diharapkan pengembangan perangkat lunak akan lebih terarah dan lebih terfokus serta tidak menimbulkan ambiguitas terutama bagi pengembang perangkat lunak ini.

## Perspektif Produk
Website Alokasa merupakan website untuk membuat linimasa baik pribadi atau organisasi. Nama Alokasa sendiri diambil dari kata “aloka” dari bahasa sansekerta yang berarti cahaya dan “samsara” yang biasa disebut dalam beberapa agama seperti Hindu dan Budha untuk menggambarkan siklus hidup. Sehingga nama Alokasa sendiri bisa diartikan siklus hidup yang penuh cahaya yang dianggap relevan dengan website yang kami rancang untuk memberi ruang kepada semua orang agar bisa membuat jejak digital berupa linimasa di dalam website yang bisa terus diupdate dan dibuka kembali. Privasi pengguna website ini terjaga dengan artian linimasa pengguna tidak akan ditampilkan kepada pengguna lain, tapi pengguna tetap bisa membagikan linimasanya kepada orang-orang tertentu saja melalui link yang di generate dari situs web ini. Situs web ini dirancang sebagai sistem yang mandiri, bukan anggota lanjutan dari aplikasi atau situs website lainnya. 

## Fungsi Produk
A. Sistem 
   1. Upload Foto
      Sistem menyediakan fitur upload untuk mengunggah foto yang akan disimpan ke dalam alokasa sebagai arsip untuk kenangan-kenangan yang dapat dilihat kapanpun dimanapun.
   2. Penggunaan Template
      Sistem dalam alokasa menyediakan template untuk mengedit foto ataupun dibuat video. Template yang menarik akan membuat arsip foto yang diupload pengguna lebih indah. Pengguna juga dapat membuat sendiri templatenya sesuai keinginan.
   3. Tambah Deskripsi singkat
      Alokasa memiliki fitur deskripsi singkat untuk memberikan keterangan terhadap foto yang akan diupload sebagai penanda ataupun pengingat momen yang diabadikan dan disimpan arsip di alokasa.
   4. Kategori foto

B. Pengguna
   1. Fungsi Upload Foto
      Pengguna dapat mengupload foto yang akan dijadikan arsip sebagai kenangan kenangan.
   2. Fungsi Template
      Template ini dapat digunakan pengguna untuk mengedit foto foto mereka agar terlihat lebih indah. Pengguna juga dapat membuat sendiri template yang ingin digunakan sesuai dengan kreasi pengguna.
   3. Fungsi Deskripsi Singkat
      Deskripsi singkat dapat ditambahkan oleh pengguna untuk memberikan keterangan atau tanda foto agar dapat diingat momen yang diabadikan
   4. Fungsi Kategori
      Fungsi kategori dapat dibuat oleh pengguna untuk mengorganisir foto yang sudah diupload. Seperti foto sendiri, keluarga, teman, sahabat, dapat juga kategori seperti tempat atau suasana.
      
## Karakteristik Pengguna
Analisis pengguna sistem dimaksudkan untuk mengetahui siapa saja aktor yang terlibat dalam menjalankan sistem. Website linimasa ini sendiri menggunakan platform web browser. Pengguna sistem ini yaitu  individu atau organisasi dengan menggunakan username  yang terdaftar di dalam sistem. Pengguna harus memiliki koneksi internet  dan akun email yang digunakan untuk membuat akun di Alokasa.

## Lingkungan Operasi
Website ini dirancang untuk bisa diakses di web browser. Untuk itu diperlukan sebuah platform untuk mendukung pembuatan website ini. Platform yang digunakan untuk membuat website ini ada software VS Code dengan menggunakan HTML, CSS, dan Java Script untuk membuat tampilan website, blablabla untuk membuat program yang berjalan dibalik layar, serta blablabla untuk database sistem.

## Flowchart
![flowchart](assets/images/flowchart.jpeg)

Proses dimulai dengan user mengupload foto pada form yang disediakan.Setelah foto dipilih, maka user akan memilih apakah memakai template bingkai yang telah disediakan atau lewati proses tersebut dan langsung menuju proses selanjutnya.Jika user memilih untuk memakai bingkai yang disediakan, maka user akan melakukan proses editing untuk menyesuaikan foto yang telah diupload dengan bingkai yang telah dipilih.Setelah melakukan editing maka user dapat memberikan deskripsi pada foto tersebut untuk memberikan konteks atau hanya sebagai pelengkap.Lalu user melakukan konfirmasi untuk mengupload foto, dan setelah itu user akan memilih apakah perlu melakukan upload lagi atau tidak.
Jika memilih untuk melakukan upload lagi, maka akan mengulang proses-proses sebelumnya.Lalu akan ada pemilihan kategori oleh user untuk mempermudah melakukan navigasi pada linimasa yang telah dibuat nantinya.Proses terakhir adalah pemilihan apakah user akan membuat foto foto yang telah diupload dapat diakses oleh publik atau tidak.Jika iya maka server akan mengonfirmasi dan membuat foto foto tersebut terbuka ke publik, jika tidak maka proses telah selesai.

## Usecase Diagram
![usecase](assets/images/usecase.jpeg)

Pengguna : Orang yang mengakses website, melakukan upload foto, memilih template, editing, menambahkan deskripsi, dan menentukan kategori foto tersebut.

Admin : Merupakan orang yang melakukan pemeliharaan dan shutdown website jika diperlukan

Server : Server berfungsi sebagai penyedia tampilan website, database penyimpan foto, penyedia template bingkai, dan media untuk menampilkan foto dari pengguna ke publik (jika user memilih opsi publikasi)

Foto : Pengguna melakukan proses upload foto.proses ini dilakukan dalam bentuk form dimana pengguna akan memilih foto lewat file explorer mereka.

Penambahan Deskripsi : Pengguna dapat menambah deskripsi pada foto untuk mengingat latar belakang dari foto tersebut sebagai kenang-kenangan (opsional)

Penentuan Kategori : Pengguna juga memilih kategori dari foto tersebut untuk mempermudah melakukan navigasi pada arsip foto foto yang telah diupload

Template dari Web : Pengguna disediakan dengan template dari server untuk digunakan sebagai bingkai.Setelah memilih template, pengguna dapat menyesuaikan foto dengan template agar terlihat bagus.

File yang terupload : file yang telah diedit akan disimpan sementara sebelum konfirmasi upload agar pengguna dapat melihat seperti apa foto yang telah diubah (jika pengguna memakai template) beserta tampilan deskripsi dan kategori yang dipilih.

Publikasi ke internet : pengguna dapat memilih untuk membuat foto/album terlihat oleh publik.

## Activity Diagram
![usecase](assets/images/activity_diagram.png)

## Penjelasan Program
### Index
#### Tag Head
- Kode HTML ini memuat file CSS `style.css` dan memuat font dari Google Fonts. Font yang dimuat adalah font Merriweather dan Poppins.
  ```
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,300&family=Poppins:wght@400;600;700&display=swap"
        rel="stylesheet">
   ```
   
- Kode HTML ini akan menghasilkan halaman web dengan judul "Alokasa" dan dengan font Merriweather dan Poppins.
  ```
   <title>Alokasa</title>
  ```

#### Tag Body
- Kode HTML ini untuk mengatur di style.css
```
<header class="text-center" style="top: 0; position: absolute;"> // tag header digunakan untuk membuat sebuah header untuk dokumen atau bagian
        <nav class="navbar bg-transparent" id="navbar"> // tag nav untuk membuat navigation bar
            <div class="logo text-primary text-bold" id="logo">Alokasa</div> // tag div membuat sebuah bagian dalam dokumen
```

- Kode HTML ini untuk membuat navigation menu menggunakan hamburger menu toggle pada layar kecil
```
<!-- NAVIGATION MENU -->
            <ul class="nav-links">
               // tampilan navigation menu pada layar kecil
                <!-- USING CHECKBOX HACK -->
                <input type="checkbox" id="checkbox_toggle" />
                <label for="checkbox_toggle" id="hamburger" class="hamburger">&#9776;</label>

                //tampilan navigation menu pada layar besar
                <!-- NAVIGATION MENUS -->
                <div class="menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </div>
            </ul>
```

- Kode HTML ini untuk mengarahkan tombol sign in pada halaman index ke halaman sign in
  ```
            <a href="signin.html" class="button-primary btn-signin">Sign In</a>
  ```
  
- Kode HTML ini untuk membuat sub judul
```
<div class="content text-primary" id="header-text" style="margin-top: 20vh; padding: 50px;">
            <h2 style="font-size: 3em;">Simpan kenangan indah anda</h2>
            <h3>Karena moment, sulit diulang kembali</h3>
        </div>
```
   
- Kode HTML ini untuk mengatur style di style.css
```
<main style="padding: 20px;  margin-top: 50vh;">
        <section class="flex" id="about">
            <div style="margin: 20px;">
                <img src="assets/images/asset.png" alt="" width="400vh"
                    style="background-size: cover; border-radius: 10px">
            </div>
            <div class="grow-4 text-center" style="margin: 20px">
                <div class="content" style="margin-top: 15vh;">
                    <h1 style="font-size: 2em;">About Us</h1>

                   // 	Tag <p> untuk membuat paragraf
                    <p style="font-weight: 1; font-size: 0.8em; margin-top: 5vh;">Alokasa hadir untuk membantu Anda
                        mengabadikan momen-momen berharga dalam hidup Anda. Kami memahami bahwa setiap pengalaman
                        memiliki nilai pribadi yang unik, dan itulah mengapa kami memberikan alat yang kuat untuk
                        merangkumnya. Linimasa pribadi Anda adalah kanvas untuk mengungkapkan kreativitas Anda.</p>
                </div>
            </div>
        </section>
        <hr style="width: 70%; margin: auto;  margin-top: 10vh;">
   ```

- Kode HTML ini untuk membuat tampilan linimasa dan mengatur kelas card di style.css
```
<section style="padding: 20px; margin-top: 10vh; position: relative;" id="linimasa">
            <div class="flex" style="justify-content: space-between;">
                <h1 style="font-size: 2em;">Linimasa</h1>
                <a href="upload.html" class="button button-seccondary">Tambah linimasa &plus;</a>
            </div>
            <div class="flex linimasa-data" style="justify-content: space-evenly;">
                <div class="card">
                    <img src="assets/images/kelasBDL.jpeg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>Kelas basis data lanjutan</b></h4>
                        <small>Senin, 11 September 2023</small>
                        <div class="action" style="margin-top: 2vh;">
                            <button class="button-action">lihat &rarr;</button>
                            <button class="button-action">download &darr;</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/kelasBDL.jpeg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>Kelas basis data lanjutan</b></h4>
                        <small>Senin, 11 September 2023</small>
                        <div class="action" style="margin-top: 2vh;">
                            <button class="button-action">lihat &rarr;</button>
                            <button class="button-action">download &darr;</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/kelasBDL.jpeg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>Kelas basis data lanjutan</b></h4>
                        <small>Senin, 11 September 2023</small>
                        <div class="action" style="margin-top: 2vh;">
                            <button class="button-action">lihat &rarr;</button>
                            <button class="button-action">download &darr;</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img src="assets/images/kelasBDL.jpeg" alt="Avatar" style="width:100%">
                    <div class="container">
                        <h4><b>Kelas basis data lanjutan</b></h4>
                        <small>Senin, 11 September 2023</small>
                        <div class="action" style="margin-top: 2vh;">
                            <button class="button-action">lihat &rarr;</button>
                            <button class="button-action">download &darr;</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
```
- Kode HTML ini untuk membuat tampilan review dan mengatur kelas comment di style.css
```
<section style="padding: 20px; margin-top: 10vh;">
            <h1 style="font-size: 2em;">Review</h1>
            <div class="flex review-data" style="justify-content: space-evenly; margin-top: 5vh;">
                <div class="card-review flex" style="align-items: center;">
                    <div class="icon">
                        <img src="assets/images/profile.png" alt="" srcset="" width="60vh">
                    </div>
                    <div class="comments">
                        <strong>User</strong>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
                <div class="card-review flex" style="align-items: center;">
                    <div class="icon">
                        <img src="assets/images/profile.png" alt="" srcset="" width="60vh">
                    </div>
                    <div class="comments">
                        <strong>User</strong>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </p>
                    </div>
                </div>
                <div class="card-review flex" style="align-items: center;">
                    <div class="icon">
                        <img src="assets/images/profile.png" alt="" srcset="" width="60vh">
                    </div>
                    <div class="comments">
                        <strong>User</strong>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
                <div class="card-review flex" style="align-items: center;">
                    <div class="icon">
                        <img src="assets/images/profile.png" alt="" srcset="" width="60vh">
                    </div>
                    <div class="comments">
                        <strong>User</strong>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
```
### Index2
### Login
### Upload
### CSS



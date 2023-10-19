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
![flowchart](https://github.com/Aviana59/PemWeb2/blob/master/flowchart.jpeg)
Proses dimulai dengan user mengupload foto pada form yang disediakan.Setelah foto dipilih, maka user akan memilih apakah memakai template bingkai yang telah disediakan atau lewati proses tersebut dan langsung menuju proses selanjutnya.Jika user memilih untuk memakai bingkai yang disediakan, maka user akan melakukan proses editing untuk menyesuaikan foto yang telah diupload dengan bingkai yang telah dipilih.Setelah melakukan editing maka user dapat memberikan deskripsi pada foto tersebut untuk memberikan konteks atau hanya sebagai pelengkap.Lalu user melakukan konfirmasi untuk mengupload foto, dan setelah itu user akan memilih apakah perlu melakukan upload lagi atau tidak.
Jika memilih untuk melakukan upload lagi, maka akan mengulang proses-proses sebelumnya.Lalu akan ada pemilihan kategori oleh user untuk mempermudah melakukan navigasi pada linimasa yang telah dibuat nantinya.Proses terakhir adalah pemilihan apakah user akan membuat foto foto yang telah diupload dapat diakses oleh publik atau tidak.Jika iya maka server akan mengonfirmasi dan membuat foto foto tersebut terbuka ke publik, jika tidak maka proses telah selesai.

## Usecase Diagram
![usecase](https://github.com/Aviana59/PemWeb2/blob/master/use%20case.jpeg)
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
## Penjelasan Program



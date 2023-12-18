<?php 
 
	 $host = "localhost";
	 $uname = "root"; // username database mu
	 $pass = ""; // password database mu klo ada
	 $db = "cobaalokasa"; //sesuaiin sm tabel mu
	
	 $koneksi = mysqli_connect($host, $uname, $pass, $db);
	 if($koneksi){
		// panggil class auth
		include_once 'Auth.php';

		// inisialisasi class auth
		$auth = new Auth($koneksi);
	 } else {
		echo 'gagal koneksi';
	 }
	
?>
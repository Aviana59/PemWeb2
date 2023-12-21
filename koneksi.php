<?php 
 
	 $host = "localhost";
	 $uname = "root"; // username database mu
	 $pass = ""; // password database mu klo ada
	 $db = "alokasa"; //sesuaiin sm tabel mu
	
	 $koneksi = mysqli_connect($host, $uname, $pass, $db);
	 if($koneksi){
		// panggil class auth
		include_once 'Auth.php';
		include_once 'linimasa_controller.php';

		// inisialisasi class auth
		$auth = new Auth($koneksi);
		$linimasa= new LinimasaController($koneksi);
		
	 } else {
		echo 'gagal koneksi';
	 }
	
?>
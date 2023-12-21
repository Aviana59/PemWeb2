<?php 
 
	 $host = "localhost";
	 $uname = "root"; // username database
	 $pass = ""; // password database
	 $db = "alokasa"; //nama database
	
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
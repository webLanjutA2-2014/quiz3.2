<?php
	//konfigurasi database
	$host = 'localhost';
	$dbname = 'persewaan';
	$user = 'root';
	$pass = '';

	//membuat koneksi ke database
	$con = mysqli_connect($host, $user, $pass, $dbname);
	//cek ada kesalahan koneksi atau tidak?
	if (mysqli_connect_errno()) {
		echo "Koneksi Error : " . mysqli_connect_error();
	}
?>
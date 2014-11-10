<!DOCTYPE html>
<html>
<head>
	<title>Penyewaan Buku</title>
	</head>
	<body>
	<?php
		session_start();
		if((isset($_SESSION['login'])) && ($_SESSION['login'] ==1)){
		echo "<h3>Welcome, ".$_SESSION['name']."</h2>";
		echo "Pilih menu :";
		echo "<br>";
		echo "<a href=\"lihat_transaksi.php\">- Lihat Transaksi</a>";
		echo "<br>";
		echo "<a href=\"tambah.php\">- Tambah Transaksi</a>";
		echo "<br>";
		echo "<a href=\"cari.php\">- Cari Transaksi</a>";
		echo "<br>";
		echo "<a href=\"logout.php\">Keluar</a>";
		
		}else{
			header('location:login_form.php');
			}
	?>
	</body>
	</html>
			
			
			
			
			
			
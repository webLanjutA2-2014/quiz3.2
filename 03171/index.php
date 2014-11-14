<!DOCTYPE html>
<html>
<head>
	<title>Penyewaan Buku</title>
	<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 50px;
}
th {
    text-align: left;
}</style>

	
	</head>
	<body>
	<br>
	<br>
	<br>
	<center><table border="1"><tr><th>
	<?php
		session_start();
		if((isset($_SESSION['login'])) && ($_SESSION['login'] ==1)){
		echo "<h2>SISTEM INFORMASI PENYEWAAN BUKU</h2>";
		echo "Pilih menu :";
		echo "<br>";
		echo "<a href=\"lihat_transaksi.php\">- Lihat Transaksi</a>";
		echo "<br>";
		echo "<a href=\"tambah.php\">- Tambah Transaksi</a>";
		echo "<br>";
		echo "<a href=\"pengembalian.php\">- Pengembalian</a>";
		echo "<br>";
		echo "<a href=\"cek.php\">- Cek Transaksi</a>";
		echo "<br>";
		echo "<a href=\"logout.php\">Keluar</a>";
		
		}else{
			header('location:login_form.php');
			}
	?>
	</th></tr></table></center>
	</body>
	</html>
			
			
			
			
			
			
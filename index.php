<!DOCTYPE html>
<html>
<head>
<title>Daftar Peminjaman Buku</title>
</head>
<body>

<?php
session_start();
if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){
	echo "<h2>Daftar Peminjaman Barang</h2>";
	echo "Pilih menu <a href = \"user.php\">Data User</a>";
	echo " ";
	echo ", <a href = \"transaksi.php\">Daftar Peminjam</a>";
	echo " ";
	echo " Atau <a href = \"pengembalian.php\">Cek Daftar Pembayaran</a>";
	}else{
	header ('location:login.php');
	}
	echo "<br/> <a href = \"logout.php\">Logout</a>";
	?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
</head>
<body>

<?php
session_start();
	if ((isset($_SESSION['login'])) && ($_SESSION ['login'] == 1)){
	echo "<h2>Selamat Datang"."</h2>";
	echo "Pilih menu <a href = \"user.php\">Data User</a>";
	echo " ";
	echo "ATAU <a href = \"transaksi.php\">Transaksi</a>";
	echo " ";
	echo "ATAU <a href = \"pencarian.php\">Pencarian</a>";
	}else{
		header ('location:login.php');
	}
	echo "<br/> <a href = \"logout.php\">Logout</a>";
?>
</body>
</html>
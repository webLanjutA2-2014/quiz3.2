<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
</head>
<body>

<?php
session_start();
	if ((isset($_SESSION['login'])) && ($_SESSION ['login'] == 1)){
		echo "<h3>Welcome, ".$_SESSION['name']."</h3>";
		echo "Pilih menu :";
		echo "<br>";
		echo "<a href=\"user.php\">- User</a>";
		echo "<br>";
		echo "<a href=\"transaksi.php\">- Transaksi</a>";
		echo "<br>";
		echo "<a href=\"logout.php\">Keluar</a>";
		
	}else{
		header ('location:login.php');
	}
	echo "<br/> <a href = \"logout.php\">Logout</a>";
?>
</body>
</html>
<?php
session_start();
if(!isset($_SESSION['login']))
	header('location:login.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>MENU</title>
</head>

<body>
<h1>Welcome admin :)</h1>
<p><b>Menu</b><p>
<p><a href="adminAkses/menu.php">Kelola Data</a></p>
<p><a href="datapeminjam/inputId.php">Cek Bayar</a> <br></p>

<br>
<br>
<form action="" method="POST">
<input type="submit" value="LOGOUT">
</form>

<?php
if($_SERVER['REQUEST_METHOD'] == "POST")
{
	session_unset(); 
	session_destroy(); 
	header('location:main.php');
}
?>
</body>
</html>
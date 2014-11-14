<form action ="" method ="post">
	<p>Id User :
		<input type = "text" name = "id_user"></p>
	<p>Nama User:
		<input type = "text" name = "username"></p>
	<p>Password:
		<input type = "password" name = "password"></p>
	<p>No Telepon:
		<input type = "text" name = "no_telepon"></p>
	<p><input type = "submit" value = "Tambah user" name = "tambah"></p>
</form>

<?php
	
	require ('koneksi.php');
	if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
		$id_user = $_POST ['id_user'];
		$username= $_POST ['username'];
		$password = $_POST ['password'];
		$no_telepon = $_POST ['no_telepon'];
		
		$sql = "INSERT INTO user(id_user, username, password, no_telepon) VALUES ('$id_user', '$username', '$password', '$no_telepon')";
		
		mysqli_query($con, $sql) or die ('Insert data error' . mysqli_query ($con));
		
		header ('location:user.php');
	}
?>
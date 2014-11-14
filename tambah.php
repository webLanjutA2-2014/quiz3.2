<form action="" method="post" enctype = "multipart/form-data">
	<p>Nama : 
		<input type="text" name="nama"></p>
	<p>Password : 
		<input type="password" name="password"></p>
	<p>Id User : 
		<input type="text" name="id_user"></p>
	<p>No telepon: 
		<input type = "text" name ="no_telepon"></p>
	<p><input type="submit" value="Tambah Data" 
		name="tambah"></p> 
</form>

<?php

	require('koneksi.php');
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nama = $_POST['nama'];
		$password = md5($_POST['password']);
		$id_user = $_POST[id_user];
		$no_telepon = $_POST[no_telepon];
		

		$sql = "INSERT INTO user(nama, password, id_user, no_telepon)
				VALUES('$nama', '$password', '$id_user', '$no_telepon')";

		mysqli_query($con, $sql) or die ('Insert data error '. mysqli_error($con));

		header('location:user.php');

	}
	
?>

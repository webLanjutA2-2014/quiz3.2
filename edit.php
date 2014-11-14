<h2>Edit Data User</h2>
<?php 
	require('koneksi.php');
	if (isset($_GET['id'])) {
		$sql = "SELECT * FROM user WHERE id_user=". $_GET['id_user'];

		$query = mysqli_query($con, $sql);

		$result = mysqli_fetch_assoc($query);
	}

?>


<form action="" method="post">
	<p>Nama : 
		<input type="text" name="nama" value="<?=$result['nama'];?>"></p>
	<p>Password : 
		<input type="password" name="password" value="<?=$result['password']?>"></p>
	<p>No Telepon : 
		<input type="text" name="no_telepon" value="<?=$result['no_telepon']?>"></p>
		<input type="hidden" name="id_user" value="<?=$result['id_user']?>">
	<p><input type="submit" value="Update Data" 
		name="tambah"></p> 
</form>

<?php
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nama = $_POST['nama'];
		$password = md5($_POST['password']);
		$no_telepon = $_POST['no_telepon'];
		$id_user = $_POST['id_user'];

		$sql = "UPDATE pengguna 
				SET nama='$nama', password='$password',
				no_telepon = '$no_telepon'
				WHERE id_user = $id_user";

		mysqli_query($con, $sql) 
		or die ('Insert data error '. mysqli_error($con));

		header('location:user.php');

	}
	
?>

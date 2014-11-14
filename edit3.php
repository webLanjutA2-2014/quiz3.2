<h2>Edit User</h2>

<?php
	require ('koneksi.php');
	if (isset($_GET['id'])){
		$sql = "SELECT * FROM user WHERE id_user=".$_GET['id'];
		
		$query = mysqli_query($con, $sql);
		
		$result = mysqli_fetch_assoc($query);
	}
?>

<form action ="" method ="post">
<input type = "hidden" name ="id_user" value = "<?=$result['id_user'];?>">
	<p>Nama User :
		<input type = "text" name = "user" value = "<?=$result['user'];?>"></p>
	<p>Password :
		<input type = "password" name = "password" value = "<?=$result['password'];?>"></p>
	<p>No Telepon :
		<input type = "text" name = "no_telp" value = "<?=$result['no_telp'];?>"></p>
	<p><input type = "submit" value = "save" name = "save"></p>
</form>

<?php
	
	
	if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
		$id_user = $_POST ['id_user'];
		$user= $_POST ['user'];
		$password = $_POST ['password'];
		$no_telp = $_POST ['no_telp'];
		
		$sql = "UPDATE user SET user = '$user', password = '$password', no_telp = '$no_telp'  WHERE id_user = $id_user";
		
		mysqli_query($con, $sql) or die ('Insert data error' . mysqli_query ($con));
		
		header ('location:user.php');
	}
?>
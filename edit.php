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
		<input type = "text" name = "username" value = "<?=$result['username'];?>"></p>
	<p>Password :
		<input type = "password" name = "password" value = "<?=$result['password'];?>"></p>
	<p>No Telepon :
		<input type = "text" name = "no_telepon" value = "<?=$result['no_telepon'];?>"></p>
	<p><input type = "submit" value = "save" name = "save"></p>
</form>

<?php
	
	
	if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
		$id_user = $_POST ['id_user'];
		$username= $_POST ['username'];
		$password = $_POST ['password'];
		$no_telepon = $_POST ['no_telepon'];
		
		$sql = "UPDATE user SET username = '$username', password = '$password', no_telepon = '$no_telepon'  WHERE id_user = $id_user";
		
		mysqli_query($con, $sql) or die ('Insert data error' . mysqli_query ($con));
		
		header ('location:user.php');
	}
?>
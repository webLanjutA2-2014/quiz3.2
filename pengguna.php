
<form action="" method="post" enctype="multipart/form-data"> 
	<p>Masukan Nama:
		<input type="text" name="nama"></p>
	<p>Password:
		<input type="text" name="pass"></p>
	<p>Nama ID:
		<input type="text" name="id"></p>
	<p>Judul Buku:
		<input type="text" name="buku"></p>
	<p><input type="submit" value="simpan" name="tambah">
	<input type="submit" value="reset" name="tambah"></p>
	
</form>
 
 <?php
 
	require('konek.php');
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$nama = $_POST['nama'];
	$pass = $_POST['pass'];
	$id  = $_POST['id'];
	$buku= $_POST['buku'];
	
	
	
	$sql="insert into user(nama, pass, id,buku)values
	('$nama', '$pass', '$id', '$buku')";
	
	mysqli_query($con, $sql) or die('gagal'.mysqli_error($con));
	
	header('location:index.php');
	
	}
	
	
 ?>
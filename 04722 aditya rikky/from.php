
<form action="" method="post" enctype="multipart/form-data"> <!---untuk nambah foto-->
	<p>username:
		<input type="text" name="user"></p>
	<p>password..:
		<input type="text" name="password"></p>
	<p>nama
		<input type="text" name="nama"></p>
	<p>telp:
		<input type="text" name="telep"></p>
	<p><input type="submit" value="simpan" name="tambah">
	<input type="submit" value="reset" name="tambah"></p>
</form>
 
 <?php
 
	require('konek.php');//memanggil koneksi database atau require(jika filenya gak ada maka akan error)bisa juga dengan include
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$usernamee = $_POST['user'];
	$paass  = $_POST['password'];
	$nama  = $_POST['nama'];
	$telpo  = $_POST['telep'];
	
	
	
	$sql="insert into peminjam(username, password, nama, telp)values
	('$usernamee', '$paass', '$nama', '$telpo')";
	
	mysqli_query($con, $sql) or die('gagal'.mysqli_error($con));
	
	header('location:data_pendaftar.php');
	}
	
	
 ?>
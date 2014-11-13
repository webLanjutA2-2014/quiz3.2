
<form action="" method="post" enctype="multipart/form-data"> <!---untuk nambah foto-->
	<p>id_peminjam:
		<input type="text" name="id_peminjam"></p>
	<p>nama:
		<input type="text" name="nama"></p>
	<p>nomor telphone
		<input type="text" name="no_hp"></p>
	<p><input type="submit" value="simpan" name="tambah">
	<input type="submit" value="reset" name="tambah"></p>
</form>
 
 <?php
 
	require('koneksi.php');//memanggil koneksi database atau require(jika filenya gak ada maka akan error)bisa juga dengan include
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$id = $_POST['id_peminjam'];
	$namane  = $_POST['nama'];
	$telp  = $_POST['no_hp'];
		
	
	$sql="insert into peminjam(id_peminjam, nama, no_hp)values
	('$id', '$namane', '$telp')";
	
	mysqli_query($con, $sql) or die('gagal'.mysqli_error($con));
	
	header('location:menu.php');
	}
	
	
 ?>
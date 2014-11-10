
<form action="" method="post">
	<p>Judul Buku:
		<input type="text" name="judul"></p>
	<p>id Pengguna:
		<input type="text" name="id_pengguna"></p>
	<p>tanggal pinjam :
		<input type="text" name="tanggal_pinjam"></p>
		<p>tanggal kembali :
		<input type="text" name="tanggal_kembali"></p>
	<p><input type="submit" value="tambah Barang" name="tambah"></p>
</form>
 
 <?php
 
	require('konek.php');//memanggil koneksi database atau require(jika filenya gak ada maka akan error)bisa juga dengan include
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$nama_barang = $_POST['nama_barang'];
	$kuantitas = $_POST['kuantitas'];
	$harga  = $_POST['harga'];
	
	$sql="insert into barang(nama_barang,kuantitas,harga)values
	('$nama_barang', $kuantitas, $harga)";
	
	mysqli_query($con, $sql) or die('gagal'.mysqli_error($con));
	
	header('location:index.php');
	
	
	}
 ?>
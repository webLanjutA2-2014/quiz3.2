
<form action="" method="post">
	<p>Nama Peminjam:
		<input type="text" name="nama_peminjam"></p>
	<p>No Telpon:
		<input type="text" name="no_telpon"></p>
	<p>ID Pengguna:
		<input type="text" name="id_pengguna"></p>
	<p>ID Transaksi:
		<input type="text" name="id_transaksi"></p>
	<p><input type="submit" value="tambah Barang" name="tambah"></p>
</form>
 
 <?php
 
	require('koneksi.php');//memanggil koneksi database atau require(jika filenya gak ada maka akan error)bisa juga dengan include
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$nama_pengguna = $_POST['nama_pengguna'];
	$no_telpon = $_POST['no_telpon'];
	$id_pengguna  = $_POST['id_pengguna'];
	$id_transaksi  = $_POST['id_transaksi'];
	
	$sql="insert into user(nama_barang,kuantitas,harga)values
	('$nama_barang', $kuantitas, $harga)";
	
	mysqli_query($con, $sql) or die('gagal'.mysqli_error($con));
	
	header('location:index.php');
	
	
	}
 ?>
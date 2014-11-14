
<form action="" method="post">
	<p>id:
		<input type="text" name="id"></p>
	<p>Nama:
		<input type="text" name="nama"></p>
	<p>no_telp :
		<input type="text" name="no_telp"></p>
	<p>judul_buku :
		<input type="text" name="judul_buku"></p>
	<p>tgl_pinjam :
		<input type="text" name="tgl_pinjam"></p>
	<p>tgl_kembali :
		<input type="text" name="tgl_kembali"></p>
		
	<p><input type="submit" value="Input Data" name="tambah"></p>
</form>
 
 <?php
 
	require('koneksi.php');
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$id  = $_POST['id'];
	$nama  = $_POST['nama'];
	$no_telp  = $_POST['no_telp'];
	$judul_buku  = $_POST['judul_buku'];
	$tgl_pinjam  = $_POST['tgl_pinjam'];
	$tgl_kembali  = $_POST['tgl_kembali'];
	
	$sql="insert into transaksi(id,nama,no_telp,judul_buku,tgl_pinjam,tgl_kembali) 
	values ('$id','$nama','$no_telp','$judul_buku','$tgl_pinjam','$tgl_kembali')";
	
	mysqli_query($con, $sql) or die('gagal'.mysqli_error($con));
	
	header('location:utama.php');
	
	
	}
 ?>
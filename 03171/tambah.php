<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 50px;
}
th {
    text-align: Left;
}</style>
<br>
<br>
<br>
<center><table border="1"><tr><th>
<h2>Tambah Data Transaksi Peminjaman Buku </h2>
<form action="" method="post">
	<p>Nama Peminjam : 
		<input type="text" name="nama_peminjam"></p>
	<p>No Telepon : 
		<input type="text" name="no_telp"></p>
	<p>Judul Buku : 
		<input type="text" name="judul_buku"></p>
	<p>Tanggal Pinjam(thn-bln-tgl) : 
		<input type="text" name="tgl_pinjam"></p>
	<p><input type="submit" value="OK" name="tambah"></p>
</form></th></tr></table></center>

<?php
	//include('koneksi.php');
	require('koneksi.php');
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$nama_peminjam = $_POST['nama_peminjam'];
		$no_telp = $_POST['no_telp'];
		$judul_buku = $_POST['judul_buku'];
		$tgl_pinjam = $_POST['tgl_pinjam'];
		$tgl_kembali = $_POST['tgl_kembali'];
		
	
	$sql = "INSERT INTO transaksi(nama_peminjam, no_telp, judul_buku,tgl_pinjam,tgl_kembali)
	VALUES ('$nama_peminjam', '$no_telp', '$judul_buku', '$tgl_pinjam', '$tgl_kembali')";
	
	mysqli_query($con, $sql) or die ('Insert data error '. mysql_error($con));
	
	header('location:index.php');
	}
?>
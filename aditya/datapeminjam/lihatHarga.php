<!DOCTYPE html>
<?php
require_once("../system/koneksi.php");
if(isset($_GET['id']))
{
	$sqlquery = "SELECT * FROM peminjam WHERE id_peminjam =".$_GET['id'];
	$query = mysqli_query($con, $sqlquery) or die ("GET DATA ERROR". mysqli_error($con));
	$data = mysqli_fetch_assoc($query);	
	$sqlharga = "SELECT SUM(day(keluar)-day(masuk + 3)) as bayar from peminjam where id_peminjam=".$_GET['id'];
	$queryHarga = mysqli_query($con, $sqlharga) or die ("GET DATA ERROR". mysqli_error($con));
	$harga = mysqli_fetch_assoc($queryHarga);

}

?>
<html>
<head>
	<title>Struk Barang</title>
</head>
<body>
<h1>Struk Barang</h1>
	<form action="" method="POST" enctype="multipart/form-data">
		<p>ID Peminjam : <input type="text" name="id" value="<?=$data['id_peminjam']?>" readonly="readonly"></p>
		<p>Nama  : <input type="text" name="nama_penitip" value="<?=$data['nama']?>" readonly="readonly"></p>
		<p>Contact Person: <input type="text" name="no_hp" value="<?=$data['no_hp']?>" readonly="readonly"></p>
		<p>Nama Buku: <input type="text" name="no_loker" value="<?=$data['judul_buku']?>" readonly="readonly"></p>
		<p>Waktu Masuk: <input type="text" name="waktu_masuk" value="<?=$data['masuk']?>" readonly="readonly"></p>
		<p>Waktu Keluar: <input type="text" name="waktu_masuk" value="<?=$data['keluar']?>" readonly="readonly"></p>
		<p><h3>Denda :</h3>Rp . <input type="text" name="bayar" value="<?=$harga['bayar'] * 2000 ?>" readonly="readonly"></p>
	</form>
	<p><a href="inputId.php">Kembali</a></p>
	<p><a href="../main.php">Menu Utama</a></p>
</body>
</html>
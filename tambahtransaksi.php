<form action ="" method ="post">
	<p>id User :
		<input type = "text" name = "id_user"></p>
	<p>Judul Buku :
		<input type = "text" name = "judul_buku"></p>
	<p>Tanggal:
		<input type = "date" name = "tanggal"></p>
	<p>Id Transaksi:
		<input type = "text" name = "id_transaksi"></p>
	<p><input type = "submit" value = "Tambah transaksi" name = "tambah"></p>
</form>

<?php
	
	require ('koneksi.php');
	if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
		$id_user = $_POST ['id_user'];
		$judul_buku = $_POST ['judul_buku'];
		$tanggal = $_POST ['tanggal'];
		$id_transaksi = $_POST ['id_transaksi'];
		
		$sql = "INSERT INTO transaksi(id_user, judul_buku, tanggal, id_transaksi) VALUES ($id_user, '$judul_buku', '$tanggal', '$id_transaksi')";
		
		mysqli_query($con, $sql) or die ('Insert data error' . mysqli_query ($con));
		
		header ('location:transaksi.php');
	}
?>
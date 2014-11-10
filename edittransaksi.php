<h2>Edit Transaksi</h2>

<?php
	require ('koneksi.php');
	if (isset($_GET['id'])){
		$sql = "SELECT * FROM transaksi WHERE id_transaksi=".$_GET['id_transaksi'];
		
		$query = mysqli_query($con, $sql);
		
		$result = mysqli_fetch_assoc($query);
	}
?>

<form action ="" method ="post">
	<p>Id User :
		<input type = "text" name = "id_user" value = "<?=$result['id_user'];?>"></p>
	<p>Judul Buku :
		<input type = "text" name = "judul_buku" value = "<?=$result['judul_buku'];?>"></p>
	<p>Tanggal:
		<input type = "date" name = "tanggal" value = "<?=$result['tanggal'];?>"></p>
	<p>Id Transaksi:
		<input type = "text" name = "id_transaksi" value = "<?=$result['id_transaksi'];?>"></p>
	<p><input type = "submit" value = "Tambah transaksi" name = "tambah"></p>
</form>

<?php
	
	
	if ($_SERVER ['REQUEST_METHOD'] == 'POST'){
		$id_user = $_POST ['id_user'];
		$judul_buku = $_POST ['judul_buku'];
		$tanggal = $_POST ['tanggal'];
		$id_transaksi = $_POST['id_transaksi'];
		
		$sql = "UPDATE transaksi SET id_user = '$id_user', judul_buku = '$judul_buku', tanggal='$tanggal' WHERE id_transaksi = $id_transaksi";
		
		mysqli_query($con, $sql) or die ('Insert data error' . mysqli_query ($con));
		
		header ('location:transaksi.php');
	}
?>
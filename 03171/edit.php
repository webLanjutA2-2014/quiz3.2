<?php 
	require('koneksi.php');
	if (isset($_GET['id'])) {
		$sql = "SELECT * FROM transaksi WHERE id_transaksi=". $_GET['id'];

		$query = mysqli_query($con, $sql);

		$result = mysqli_fetch_assoc($query);
	}

?>

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
<h2>Edit Data Transaksi Peminjaman Buku </h2>
<form action="" method="post">
	<p>Nama Peminjam : 
		<input type="text" name="nama_peminjam" value="<?=$result['nama_peminjam'];?>"></p>
	<p>No Telepon : 
		<input type="text" name="no_telp" value="<?=$result['no_telp']?>"></p>
	<p>Judul Buku : 
		<input type="text" name="judul_buku" value="<?=$result['judul_buku']?>"></p>
	<p>Tanggal Pinjam(thn-bln-tgl) : 
		<input type="text" name="tgl_pinjam" value="<?=$result['tgl_pinjam']?>"></p>
	<p>Tanggal Kembali(thn-bln-tgl) : 
		<input type="text" name="tgl_kembali" value="<?=$result['tgl_kembali']?>"></p>
		<input type="hidden" name="id_transaksi" value="<?=$result['id_transaksi']?>">
	<p><input type="submit" value="OK" name="tambah"></p> 
</form></th></tr></table></center>

<?php
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nama_peminjam = $_POST['nama_peminjam'];
		$no_telp = $_POST['no_telp'];
		$judul_buku = $_POST['judul_buku'];
		$tgl_pinjam = $_POST['tgl_pinjam'];
		$tgl_kembali = $_POST['tgl_kembali'];
		$id_transaksi = $_POST['id_transaksi'];

		$sql = "UPDATE transaksi 
				SET nama_peminjam='$nama_peminjam', no_telp='$no_telp',
				judul_buku = '$judul_buku', tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali'
				WHERE id_transaksi = $id_transaksi";

		mysqli_query($con, $sql) 
		or die ('Insert data error '. mysql_error($con));

		header('location:index.php');

	}
	
?>

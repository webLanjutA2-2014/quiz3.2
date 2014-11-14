<!DOCTYPE html>
<html>
<head>
	<title>Daftar Transaksi Peminjaman Buku</title>
	<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
th {
    text-align: left;
}
</style>
</head>
<body>

<?php
require('koneksi.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
$id_dicari=$_POST['id_transaksi'];

$query="SELECT * from transaksi where id_transaksi='$id_dicari'";
$hasil = mysql_query($query) or die("Gagal melakukan query.".mysql_error());
?>

<center><h2>Daftar Transaksi Peminjaman Buku</h2>
	<table border="1"><tr>
		<th>No.</th>
		<th>Id Transaksi</th>
		<th>Nama Peminjam</th>
		<th>No Telepon</th>
		<th>Judul Buku</th>
		<th>Tanggal Pinjam</th>
		<th>Tanggal Kembali</th>
	</tr>
	
<?php
	$i = 1;
	while ($data = mysqli_fetch_assoc($query)) {
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$data['id_transaksi']."</td>";
		echo "<td>".$data['nama_peminjam']."</td>";
		echo "<td>".$data['no_telp']."</td>";
		echo "<td>".$data['judul_buku']."</td>";
		echo "<td>".$data['tgl_pinjam']."</td>";
		echo "<td>".$data['tgl_kembali']."</td>";
		
		$i++;
	}
	?>
	</table><a href="index.php">Kembali</a></center>

</body>
</html>
<html>
<head>
<title>Daftar Peminjaman</title>
</head>
<body>
<table><tr>
	<th><a href="tambah_peminjam.php" align="right">Tambah Data Peminjam</a></th>
	<th><a href="pengembalian.php" align="right">Pengembalian Buku</a></th>
	<th><th><a href="logout.php" align="right">Logout</a></th></th>
</tr></table>
<?php
require('koneksi.php');
session_start();
if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){
	echo "<h2>Daftar Peminjam Buku</h2>";
	?>
	<table border="2"><tr>
		<th>No</th>
		<th>Judul Buku</th>
		<th>Tanggal Pinjam</th>
		<th>Id Transaksi</th>
		<th>Nama Peminjam</th>
		<th>Nomor Telepon</th>
		<th>Batas Kembali</th>
		<th>Tanggal Kembali</th>
		<th>Denda</th>
	</tr>
	
	<?php
	$i=1;
	$query= mysqli_query($con, "SELECT * From transaksi");
	while ($data =mysqli_fetch_assoc($query)){
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$data['judul_buku']."</td>";
		echo "<td>".$data['tanggal_pinjam']."</td>";
		echo "<td>".$data['id_transaksi']."</td>";
		echo "<td>".$data['nama_pelanggan']."</td>";
		echo "<td>".$data['no_telepon']."</td>";
		echo "<td>".$data['batas_kembali']."</td>";
		echo "<td>".$data['tanggal_kembali']."</td>";
		echo "<td>".$data['denda']."</td>";
		$i++;
	}
?>
</table>
<tr>
	<td><a href="index.php">Kembali ke Awal</a></td>
</tr>
</body>
</html>

<?php
	}else{
		header('location:login.php');
	}
?>
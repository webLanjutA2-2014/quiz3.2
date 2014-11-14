<!DOCTYPE html>
<html>
<head>
	<title>Transaksi</title>
</head>
<body>
<?php
	$host = 'localhost';
	$dbname = 'perpustakaan';
	$user = 'root';
	$pass = '';
	
	//membuat koneksi ke database
	$con = mysqli_connect($host, $user, $pass,$dbname);
	
	//query
	$query = mysqli_query($con, "SELECT * FROM transaksi");
	
	//mengambil data hasil query dan menampilkannya
	echo"<h2>Daftar Transaksi</h2>";
	?>
	<a href="tambah_transaksi.php">Tambah Data Peminjam</a>
	<table border = 1><tr>
	<th>NO.</th>
	<th>Id Transaksi</th>
	<th>Judul</th>
	<th>Nama Peminjam</th>
	<th>No Telp</th>
	<th>Tangggal Pinjam</th>
	<th>Tanggal Kembali</th>
	<?php
	$i=1;
	while($data = mysqli_fetch_assoc($query)){
		echo "<tr>";
		echo"<td>".$i."</td>";
		echo "<td>".$data['id_transaksi']."</td>";
		echo "<td>".$data['judul']."</td>";
		echo "<td>".$data['nama_peminjam']."</td>";
		echo "<td>".$data['no_telp']."</td>";
		echo "<td>".$data['tanggal_pinjam']."</td>";
		echo "<td>".$data['tanggal_kembali']."</td>";
		
		echo "</tr>";
		$i++;
	}
?>

</table>
<tr><td><a href="index.php">Kembali Ke Awal</a></td></tr>
<tr><td><a href="logout.php">Logout</a></td></tr>
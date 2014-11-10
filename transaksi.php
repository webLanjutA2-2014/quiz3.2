<html>
<head>
	<title>Daftar Transaksi</title>
</head>
<body>
<?php 

	//konfigurasi database
	$host = 'localhost';
	$dbname = 'persewaan';
	$user = 'root';
	$pass = '';

	//membuat koneksi ke database
	$con = mysqli_connect($host, $user, $pass, $dbname);
	//cek ada kesalahan koneksi atau tidak?
	if (mysqli_connect_errno()) {
		echo "Koneksi Error : " . mysqli_connect_error();
	}

	//membuat query
	$query = mysqli_query($con, "SELECT * FROM transaksi");

	//mengambil data hasil query dan menampilkannya
	
	echo "<h2>DAFTAR TRANSAKSI</h2>";
	?>
	<a href="tambahtransaksi.php">Tambah Data Transaksi</a>
	<table><tr>
		<th>Id_transaksi</th>
		<th>Judul Buku</th>
		<th>Tanggal</th>
		<th>id_penyewa</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	$i = 1;
	while ($data = mysqli_fetch_assoc($query)) {
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$data['id_transaksi']."</td>";
		echo "<td>".$data['judul']."</td>";
		echo "<td>".$data['tanggal']."</td>";
		echo "<td><a href=\"edittransaksi.php?id=".$data['id']."\">Edit</a><td>";
		echo "<td><a href=\"hapustransaksi.php?id="
			.$data['id']."\" 
			onclick=\"alert('Anda Akan Menghapus Data pengguna!')\"> Hapus</a><td>";
		echo "</tr>";
		$i++;
	}
	?>
	</table>
</body>
</html>
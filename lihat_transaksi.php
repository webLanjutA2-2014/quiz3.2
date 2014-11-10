<!DOCTYPE html>
<html>
<head>
	<title>Daftar Transaksi Peminjaman Buku</title>
</head>
<body>
<?php 

	//konfigurasi database
	$host = 'localhost';
	$dbname = 'sewa_buku';
	$user = 'root';
	$pass = '';

	//membuat koneksi ke database
	$con = mysqli_connect($host, $user, $pass, $dbname);
	//cek ada kesalahan koneksi atau tidak?
	if (mysqli_connect_errno()) {
		echo "Koneksi Error : " . mysqli_connect_error();
	}

	//membuat query
	//$sql_query = "SELECT * FROM barang";
	$query = mysqli_query($con, "SELECT * FROM transaksi");

	//mengambil data hasil query dan menampilkannya
	//mysqli_fetch_row();
	//mysqli_fetch_array();
	echo "<h2>Daftar Transaksi Peminjaman Buku</h2>";
	?>
	<table><tr>
		<th>No.</th>
		<th>Nama Peminjam</th>
		<th>No Telepon</th>
		<th>Judul Buku</th>
		<th>Tanggal Pinjam</th>
		<th>Tanggal Kembali</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	$i = 1;
	while ($data = mysqli_fetch_assoc($query)) {
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$data['nama_peminjam']."</td>";
		echo "<td>".$data['no_telp']."</td>";
		echo "<td>".$data['judul_buku']."</td>";
		echo "<td>".$data['tgl_pinjam']."</td>";
		echo "<td>".$data['tgl_kembali']."</td>";
		echo "<td><a href=\"edit.php?id=".$data['id_transaksi']."\">Edit</a><td>";
		echo "<td><a href=\"hapus.php?id="
			.$data['id_transaksi']."\" 
			onclick=\"alert('Anda Akan Menghapus Barang!')\"> Hapus</a><td>";
		echo "</tr>";
		$i++;
	}
	?>
	</table>
</body>
</html>
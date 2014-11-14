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
		<th colspan="2">Aksi</th>
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
		echo "<td><a href=\"edit.php?id=".$data['id_transaksi']."\">Edit</a>
			<a href=\"hapus.php?id="
			.$data['id_transaksi']."\" 
			onclick=\"alert('Anda Akan Menghapus Transaksi!')\"> Hapus</a></td>";
		
		$i++;
	}
	?>
	</table><a href="index.php">Kembali</a></center>
	
</body>
</html>
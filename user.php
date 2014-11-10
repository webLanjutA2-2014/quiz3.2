<html>
<head>
	<title>Daftar Penyewa</title>
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
	$query = mysqli_query($con, "SELECT * FROM user");

	//mengambil data hasil query dan menampilkannya
	
	echo "<h2>DAFTAR Penyewa</h2>";
	?>
	<a href="tambahuser.php">Tambah Data Penyewa</a>
	<table><tr>
		<th>Id</th>
		<th>Nama</th>
		<th>Password</th>
		<th>No Telepon</th>
		<th colspan="2">Aksi</th>
	</tr>
	<?php
	$i = 1;
	while ($data = mysqli_fetch_assoc($query)) {
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$data['id_user']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['password']."</td>";
		echo "<td>".$data['no_telepon']."</td>";
		echo "<td><a href=\"edituser.php?id=".$data['id_user']."\">Edit</a><td>";
		echo "<td><a href=\"hapususer.php?id="
			.$data['id_user']."\" 
			onclick=\"alert('Anda Akan Menghapus Data pengguna!')\"> Hapus</a><td>";
		echo "</tr>";
		$i++;
	}
	?>
	</table>
</body>
</html>
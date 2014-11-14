<html>
<head>
	<title>Daftar User</title>
</head>
<body>
<?php 

	//konfigurasi database
	$host = 'localhost';
	$dbname = 'persewaan';
	$user = 'root';
	$pass = '';
	
	//koneksi ke datbase
	$con = mysqli_connect ($host ,$user,$pass,$dbname);
	
	//query
	$query = mysqli_query($con, "SELECT * FROM user");
	
	//megngambil data hasil query dan menampilkannya
	echo"<h2>Daftar User</h2>";
	?>
	<a href="tambah_user.php" >Tambah User</a>
	<table border = 1><tr>
		<th>No</th>
		<th>Id User</th>
		<th>Nama User</th>
		<th>Password</th>
		<th>No Telepon</th>
		<th colspan="2" align="center">Aksi</th>
	</tr>
	
	<?php
	$i=1;
	while ($data = mysqli_fetch_assoc($query)){
		echo "<tr>"	;
		echo "<td>"	.$i."</td>";
		echo "<td>".$data['id_user']."</td>";
		echo "<td>".$data['username']."</td>";
		echo "<td>".$data['password']."</td>";
		echo "<td>".$data['no_telepon']."</td>";
		echo "<td><a href=\"edit.php?id=".$data['id_user']."\">Edit</a></td>";
		echo "<td><a href=\"hapus.php?id="
			.$data['id_user']."\" 
			onclick=\"alert('Anda Akan Menghapus Data User!')\"> Hapus</a></td>";
		echo "</tr>";
		$i++;
	}
	?>
	</table>
	<tr><td><a href="index.php">Kembali ke Awal</a></td></tr>

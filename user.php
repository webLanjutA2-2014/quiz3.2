<!DOCTYPE html>
<html>
<head>
	<title>Daftar User</title>
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
	$query = mysqli_query($con, "SELECT * FROM user");
	
	//mengambil data hasil query dan menampilkannya
	echo"<h2>Daftar User</h2>";
	?>
	<a href="tambah_user.php">Tambah Data User</a>
	<table border = 1><tr>
	<th>NO.</th>
	<th>User</th>
	<th>Id user</th>
	<th>Password</th>
	<th>No Telp</th>
	<th colspan="2" align="center" >Aksi</th>
	</tr>
	<?php
	$i=1;
	while($data = mysqli_fetch_assoc($query)){
		echo "<tr>";
		echo"<td>".$i."</td>";
		echo "<td>".$data['user']."</td>";
		echo "<td>".$data['id_user']."</td>";
		echo "<td>".$data['password']."</td>";
		echo "<td>".$data['no_telp']."</td>";
		echo "<td><a href=\"edit3.php?id=".$data['id_user']."\">Edit</a></td>";
		echo "<td><a href=\"hapus2.php?id=".$data['id_user']."\">Hapus</a></td>";
		echo "</tr>";
		$i++;
	}
?>

</table>
<tr><td><a href="index.php">Kembali Ke Awal</a></td></tr>
<tr><td><a href="logout.php">Logout</a></td></tr>
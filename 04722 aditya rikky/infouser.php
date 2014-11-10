<html>
<head>
	<title>info user</title>
	</head>
	<body>
	<?php
		$host='localhost';
		$dbname='perpustakaan';
		$user='root';
		$pass='';
		
		$con = mysqli_connect($host, $user, $pass, $dbname);
		
		if(mysqli_connect_errno()){
			echo "koneksi error: ". mysqli_connect_error();
		
		}else{
		
		echo "";
		}
		
		//membuat koneksi database dengan php
		$query = mysqli_query($con, "select p.nama,p.nama_buku from peminjam p, khusus k, user u where 
		u.username=k.username and k.id_peminjam=p.id_peminjam and u.username=".$_POST['username']);
		
		echo "<h2> Daftar pengguna</h2>";
	?>
			<a href="pengguna.php">tambah data pengguna</a>
			<table>
			<tr><th>No.</th>
			<th>id peminjam</th>
			<th>nama</th>
			<th>telephone</th>
			<th>nama buku</th>
			<th colspan="2"> aksi</th>
			</tr>
			
		<?php
		$i=1;
		while ($row = mysqli_fetch_array($query)){
		
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['id_peminjam']."</td>";
		echo "<td>".$row['nama']."</td>";
		echo "<td>".$row['telp']."</td>";
		echo "<td>".$row['nama_buku']."</td>";
		echo "</tr>";
		$i++;
		}
	
	
	?>
	</table>
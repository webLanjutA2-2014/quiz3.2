<html>
<head>
	<title>Form Peminjam</title>
	</head>
	<body>
	<?php
		$host='localhost';
		$dbname='kuskus';
		$user='root';
		$pass='';
		
		$con = mysqli_connect($host, $user, $pass, $dbname);
		
		if(mysqli_connect_errno()){
			echo "koneksi error: ". mysqli_connect_error();
		
		}else{
		
		echo "";
		}
		
		$query = mysqli_query($con, "select * from transaksi");
	
		
		echo "<h2> Daftar User</h2>";
		?>
			
			<table border = 2>
			<tr><th>No.</th>
			<th>ID Transaksi</th>
			<th>Nama User</th>
			<th>No HP</th>
			<th>Buku</th>
			
	
			</tr>
		<?php
		$i=1;
		while ($row = mysqli_fetch_array($query)){
		
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['id_tran']."</td>";
		echo "<td>".$row['nama']."</td>";
		echo "<td>".$row['nohp']."</td>";
		echo "<td>".$row['buku']."</td>";
	

		echo "</tr>";
		$i++;
		}
	
	
	?>
	</table>
	<a href="buku.php">Pinjam Lagi</a>
</head>
</html>
	
	
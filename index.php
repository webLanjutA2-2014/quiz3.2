<html>
<head>
	<title>Daftar Buku yang TERSEDIA !!!</title>
	</head>
	<body>
	<?php
		$host='localhost';
		$dbname='kuis';
		$user='root';
		$pass='';
		
		$con = mysqli_connect($host, $user, $pass, $dbname);
		
		if(mysqli_connect_errno()){
			echo "koneksi error: ". mysqli_connect_error();
		
		}else{
		
		echo "";
		}

		$query = mysqli_query($con, "select * from buku");
	
		echo "<h2> Daftar Buku</h2>";
		?>
		
			<table>
			<tr><th>No.</th>
			<th>Judul Buku</th>
			<th>Pengarang</th>
			<th>Id Buku</th>
			<a href="pengguna.php">Pinjam Buku</a>
			<a href="login.php">   Lihat Status</a>
			</tr>
		<?php
		$i=1;
		while ($row = mysqli_fetch_array($query)){
		
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['judul']."</td>";
		echo "<td>".$row['pengarang']."</td>";
		echo "<td>".$row['id_buk']."</td>";
	
		echo "</tr>";
		$i++;
		}
	
		
		
		
	?>
	
	
	</table>
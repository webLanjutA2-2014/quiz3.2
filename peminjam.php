<html>
<head>
	<title>STATUS PEMINJAMAN</title>
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
		
		
		$query = mysqli_query($con, "select * from user");
	
		
		echo "<h2> Daftar Peminjaman</h2>";
		?>
			<a href="index.php">Pinjam Buku Lagi</a>
			<table>
			<tr><th>No.</th>
			<th>Nama</th>
			<th>Password</th>
			<th>ID</th>
			<th>Judul Buku</th>
		
			</tr>
		<?php
		$i=1;
		while ($row = mysqli_fetch_array($query)){
		
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['nama']."</td>";
		echo "<td>".$row['pass']."</td>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['buku']."</td>";
		echo "</tr>";
		$i++;
		}
	
	
	
		
	?>
	
	</table>
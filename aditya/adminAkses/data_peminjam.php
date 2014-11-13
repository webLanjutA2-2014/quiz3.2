<html>
<head>
	<title>data peminjam</title>
	</head>
	<body>
	<?php
		$host='localhost';
		$dbname='sewabuku';
		$user='root';
		$pass='';
		
		$con = mysqli_connect($host, $user, $pass, $dbname);
		
		if(mysqli_connect_errno()){
			echo "koneksi error: ". mysqli_connect_error();
		
		}else{
		
		echo "";
		}
		
		//membuat koneksi database dengan php
		$query = mysqli_query($con, "select nama,no_hp,judul_buku,masuk,keluar from peminjam");
		//mysqli_fetch_row();   menampilkan database yang akan di import
		//mysqli_fetch_array();	menampilkan database yang akan di import
		
		echo "<h2> Daftar pengguna</h2>";
		?>
			<a href="menu.php">back</a>
			<table>
			<tr><th>No.</th>
			<th>nama</th>
			<th>telephone</th>
			<th>nama buku</th>
			<th>waktu meminjam</th>
			<th>waktu mengembalikan</th>
			<th colspan="2"> </th>
			</tr>
			
		<?php
		$i=1;
		while ($row = mysqli_fetch_array($query)){
		
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['nama']."</td>";
		echo "<td>".$row['no_hp']."</td>";
		echo "<td>".$row['judul_buku']."</td>";
		echo "<td>".$row['masuk']."</td>";
		echo "<td>".$row['keluar']."</td>";
		echo "</tr>";
		$i++;
		}
	
	
	?>
	</table>
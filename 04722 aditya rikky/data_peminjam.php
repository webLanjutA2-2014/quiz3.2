<html>
<head>
	<title>data peminjam</title>
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
		$query = mysqli_query($con, "select p.nama,p.telp,t.nama_buku from peminjam p,transaksi t where p.username=t.username");
		//mysqli_fetch_row();   menampilkan database yang akan di import
		//mysqli_fetch_array();	menampilkan database yang akan di import
		
		echo "<h2> Daftar pengguna</h2>";
		?>
			<a href="from.php">tambah data pengguna</a>
			<table>
			<tr><th>No.</th>
			<th>nama</th>
			<th>telephone</th>
			<th>nama buku</th>
			<th colspan="2"> </th>
			</tr>
			
		<?php
		$i=1;
		while ($row = mysqli_fetch_array($query)){
		
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['nama']."</td>";
		echo "<td>".$row['telp']."</td>";
		echo "<td>".$row['nama_buku']."</td>";
		echo "</tr>";
		$i++;
		}
	
	
	?>
	</table>
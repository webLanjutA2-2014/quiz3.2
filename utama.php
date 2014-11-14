<html>
<head>
	<title>DATA MAHASISWA</title>
	</head>
	<body>
	<?php
		include ("koneksi.php");
		//membuat koneksi database dengan php
		$query = mysqli_query($con, "select * from transaksi");
		//mysqli_fetch_row();   menampilkan database yang akan di import
		//mysqli_fetch_array();	menampilkan database yang akan di import
		
		echo "<h2>Data Mahasiswa</h2>";
		?>
			<a href="pinjam.php">Pinjam Buku</a>
			<table border=1>

			<tr>
			<th>no</th>
			<th>id</th>
			<th>nama</th>
			<th>no telp</th>
			<th>judul buku</th>
			<th>tanggal pinjam</th>
			<th>tanggal kembali</th>
			
			
			</tr>
		<?php
		$i=1;
		while ($row = mysqli_fetch_array($query)){
		
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['nama']."</td>";
		echo "<td>".$row['no_telp']."</td>";
		echo "<td>".$row['judul_buku']."</td>";
		echo "<td>".$row['tgl_pinjam']."</td>";
		echo "<td>".$row['tgl_kembali']."</td>";
	/*	echo "<td><a href=\"edit.php?&id=".$row['niu']."\">edit</a></td>";
		echo "<td><a href=\"hapus.php?&id=".$row['niu']."\"onclick=\"alert('anda akan menghapus data mahasiswa!')\">hapus</a></td>"; */
		echo "</tr>";
		$i++;
		}
			?>
</table>
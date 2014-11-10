<html>
	<head>
		<title></title>
	
	</head>
	<body>
		<?
			require('koneksi.php');
		
		if(mysqli_connect_errno()){
			echo "koneksi error: ". mysqli_connect_error();
		
		}else{
		
		echo "";
		}
		
		//membuat koneksi database dengan php
		$query = mysqli_query($con, "select * from Transaksi");
		//mysqli_fetch_row();   menampilkan database yang akan di import
		//mysqli_fetch_array();	menampilkan database yang akan di import
		
		echo "<h2> Daftar Peminjam</h2>";
		?>
			
			<table>
			<tr><th>id</th>
			<th>nama</th>
			<th>no_telp</th>
			<th>judul_buku</th>
			<th>pinjam</th>
			<th>kembali</th>
			</tr>
				
		<?php
		$i=1;
		while ($row = mysqli_fetch_array($query)){
		
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['id']."</td>";
		echo "<td>".$row['nama']."</td>";
		echo "<td>".$row['judul buku']."</td>";
		echo "<td>".$row['pinjam']."</td>";
		echo "<td>".$row['kembali']."</td>";
		/*echo "<td><img style=\"width:50px\" src=\"".$row['foto']."\"></td>";
		echo "<td><a href=\"edit2.php?&id=".$row['id']."\">edit</a></td>";
		echo "<td><a href=\"hapus2.php?&id=".$row['id']."\"onclick=\"alert('anda akan menghapus barang!')\">hapus</a></td>";
		echo "</tr>"; */
		$i++;
		}
	</table>
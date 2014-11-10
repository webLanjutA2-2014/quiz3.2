<html>
<head>
	<title>tabel perpustakaan</title>
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
		
		//membuat koneksi database dengan php
		$query = mysqli_query($con, "select * from kuis");
		//mysqli_fetch_row();   menampilkan database yang akan di import
		//mysqli_fetch_array();	menampilkan database yang akan di import
		
		echo "<h2> Daftar Peminjaman di Perpustakaan</h2>";
		?>
			<a href="tambah.php">tambah data barang</a>
			<table>
			<tr><th>No id</th>
			<th>Nama </th>
			<th>No Telp</th>
			<th>Judul</th>
			<th>Waktu Pinjam</th>
			<th colspan="2"> aksi</th>
			</tr>
		<?php
		$i=1;
		while ($row = mysqli_fetch_array($query)){
		
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$row['id_peminjam']."</td>";
		echo "<td>".$row['nama']."</td>";
		echo "<td>".$row['judul']."</td>";
		echo "<td>".$row['waktu_pinjam']."</td>";
		echo "<td><a href=\"edit.php?&id=".$row['id_peminjam']."\">edit</a></td>";
		echo "<td><a href=\"hapus.php?&id=".$row['id_peminjam']."\"onclick=\"alert('anda akan menghapus barang!')\">hapus</a></td>";
		echo "</tr>";
		$i++;
		}
	
	
		
		//$query=mysqli_query($con, "select *from barang");
		//$result=mysqli_fetch_array($query);
		
		//foreach ($result as $item){
			//echo $item[1];
			//echo $item[2];
			//echo $item[3];
		
	?>
	<?php
		//if($_SERVER['REQUEST_METHOD'] == 'GET'){
		/*if(isset($_GET['aksi'])){
			$aksi = $_GET['aksi'];
			
			switch($aksi){
				case 'hapus':
					hapus_barang($con, $_GET['id']);
					break;
				case 'edit':
					edit_barang($_GET['id']);
					break;
				case 'tambah':
					tambah_barang();
					break;
				default:
					tambah_barang();
					break;
			}
			
		}
		
	function hapus_barang($con, $id){
		$query = mysqli_query($con,"DELETE FROM barang
		WHERE id_barang = $id");
		
	
	}*/
	
	?>
	</table>
<html> 
	<head>
		<title>Buku Kembali</title>
	</head>
	<body>
	<?php
	session_start();
	if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){
	 ?>
		<form action=" " method="POST" enctype="multipart/form-data">
 	    <table align="center"; margin="100">
 	    <tr>
 	    	<td><H2>Pengembalian Buku</H2></td>
 	    </tr>
   		<tr>
        	<td align="right">Kode Transaksi Peminjam</td>
        	<td align="left"><input type="text" name="id_transaksi"></td>
    	</tr>
    	<tr>
    		<td align="right"><input type="submit" value="Telah Kembali"></td>
    	</tr>
    	<tr>
    		<td><a href="index.php">Kembali ke Awal</a></td>
    	</tr>
		<tr>
    		<td><a href="transaksi.php">Kembali</a></td>
    	</tr>
  		</table>
		</form>
<?php
	require('koneksi.php');
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id_transaksi=$_POST['id_transaksi'];
		
	
	$sql="Update transaksi set tanggal_kembali = now() ,
	 durasi =(select datediff(now(),tanggal_pinjam)) where id_transaksi=".$_POST['id_transaksi'];
	
	mysqli_query($con, $sql) or die(' Error'.mysqli_error($con));
	
	
	}
?>
	<?php

	require('koneksi.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$i=1;
	$query= mysqli_query($con, "SELECT * From transaksi where id_transaksi= ".$_POST['id_transaksi']);
	function denda($con, $id, $durasi){
		if ($durasi > 3) {
			$denda = ($durasi - 3) * 2000;
			
			return $denda;
		}else{
			$denda = 0;
			return $denda;
		}
	}


	while ($data =mysqli_fetch_assoc($query)){
		$denda = denda($con, $_POST['id_transaksi'], $data['durasi']);
		echo "<table border='2'><tr>";
		echo "<th>No</th>";
		echo "<th>Judul Buku</th>";
		echo "<th>Tanggal Pinjam</th>";
		echo "<th>Id Transaksi</th>";
		echo "<th>Nama Peminjam</th>";
		echo "<th>Nomor Telepon</th>";
		echo "<th>Tanggal Kembali</th>";
		echo "<th>Denda</th>";
	    echo "</tr>";
		echo "<tr>";
		echo "<td>".$i."</td>";
		echo "<td>".$data['judul_buku']."</td>";
		echo "<td>".$data['tanggal_pinjam']."</td>";
		echo "<td>".$data['id_transaksi']."</td>";
		echo "<td>".$data['nama_pelanggan']."</td>";
		echo "<td>".$data['no_telepon']."</td>";
		echo "<td>".$data['tanggal_kembali']."</td>";
		echo "<td>".$denda."</td>";

		$i++;
		echo "</table>";
		
	}
	$s = "Update transaksi set denda = $denda where id_transaksi =".$_POST['id_transaksi'];
	$q = mysqli_query($con, $s);
	
	 
}
	
	?>
<?php
	}else{
		header('location:login.php');
	}
?>
	</body>
</html>

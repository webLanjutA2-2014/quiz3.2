
	<?php

	require('konek.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$i=1;
	$query= mysqli_query($con, "SELECT * From transaksi where id_tran= ".$_POST['id_tran']);
	}
	?>
	
<?php
	require('konek.php');
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id_transaksi=$_POST['id_tran'];
		
	
	$sql="Update transaksi set tanggal_kembali = now(), 
	 durasi =(select datediff(now(),tanggal_pinjam)) where id_tran=".$_POST['id_tran'];
	
	mysqli_query($con, $sql) or die(' Error'.mysqli_error($con));
	
	
	}
?>

<?php

	require('konek.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$i=1;
	$query= mysqli_query($con, "SELECT * From transaksi where id_tran= ".$_POST['id_tran']);
	function denda($con, $id, $durasi){
		if ($durasi > 3) {
			$denda = ($durasi - 3) * 2000;
			
			return $denda;
		}else{
			$denda = 0;
			return $denda;
		}
	}
	

	while ($data =mysqli_fetch_assoc($query))
	{
		$denda = denda($con, $_POST['id_tran'], $data['durasi']);
		echo "<table border='2'><tr>";
		echo "<th>ID Transaksi</th>";
		echo "<th>Nama </th>";
		echo "<th>No HP</th>";
		echo "<th>Buku</th>";
		echo "<th>Tanggal Pinjam</th>";
		echo "<th>Tanggal Kembali</th>";
		echo "<th>Denda</th>";
		echo "</tr>";
		
		echo "<tr>";
		echo "<td>".$data['id_tran']."</td>";
		echo "<td>".$data['nama']."</td>";
		echo "<td>".$data['nohp']."</td>";
		echo "<td>".$data['buku']."</td>";
		echo "<td>".$data['tanggal_pinjam']."</td>";
		echo "<td>".$data['tanggal_kembali']."</td>";
		echo "<td>".$denda."</td>";
	
	
		echo "</table>";
	}
	$s = "Update transaksi set denda = $denda where id_tran =".$_POST['id_tran'];
	$q = mysqli_query($con, $s);
}
	
?>

<a href="pencarian.php">Cari Lagi</a>
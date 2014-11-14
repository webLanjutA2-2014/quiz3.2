<html> 
	<head>
		<title>Laman Tambah Peminjam</title>
	</head>
	<body>

	<?php session_start();
if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){ ?>
		
		<form action=" " method="POST" enctype="multipart/form-data">
 	    <table align="center"; margin="100">
 	    <tr>
 	    	<td><H2>Tambah Peminjam Baru</H2></td>
 	    </tr>
   		<tr>
        	<td align="right">Id Transaksi	: </td>
        	<td align="left"><input type="text" name="id_transaksi"></td>
    	</tr>
		<tr>
        	<td align="right">Nama Peminjam	: </td>
        	<td align="left"><input type="text" name="nama_peminjam"></td>
    	</tr>
		<tr>
        	<td align="right">Judul	: </td>
        	<td align="left"><input type="text" name="judul"></td>
    	</tr>
		<tr>
        	<td align="right">No Telp	: </td>
        	<td align="left"><input type="text" name="telp"></td>
    	</tr>
    	<tr>
        	<td align="right">Tanggal Pinjam	: </td>
        	<td align="left"><input type="text" name="tanggal_pinjam"></td>
    	</tr>
		<tr>
        	<td align="right">Tanggal Kembali	: </td>
        	<td align="left"><input type="text" name="tanggal_kembali"></td>
    	</tr>
    	
    	<tr>
    		<td align="right"><input type="submit" value="Tambah"></td>
    	</tr>
    	<tr>
    		<td><a href="index.php">Kembali ke Awal</a></td>
    	</tr>
  		</table>
		</form>
<?php
	require('koneksi.php');
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id_transaksi=$_POST['id_transaksi'];
		$nama_peminjam=$_POST['nama_peminjam'];
		$judul=$_POST['judul'];
		$no_telp=$_POST['no_telp'];
		$tanggal_pinjam=$_POST['tanggal_pinjam'];
		$tanggal_kembali=$_POST['tanggal_kembali'];
		
		
	
	$sql="INSERT INTO transaksi(id_transaksi,nama_peminjam, judul, no_telp, tanggal_pinjam, tanggal_kembali) 
	VALUES ('$id_transaksi', '$nama_peminjam',  '$judul', '$no_telp', '$tanggal_pinjam', '$tanggal_kembali')";
	
	mysqli_query($con, $sql) or die('Insert Data Error '.mysqli_error($con));
	
	header('location:transaksi.php');
	}
?>


<?php
	}else{
		header('location:login.php');
	}
?>
	</body>
</html>

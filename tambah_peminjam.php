<html> 
	<head>
		<title>Tambah Peminjam</title>
	</head>
	<body>
	<?php session_start();
if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){ ?>
		
		<form action=" " method="POST" enctype="multipart/form-data">
 	    <table align="center"; margin="100">
 	    <tr>
 	    	<td><h2>Tambah Peminjam</h2></td>
 	    </tr>
   		<tr>
        	<td align="right">Judul Buku	: </td>
        	<td align="left"><input type="text" name="judul_buku"></td>
    	</tr>
    	<tr>
        	<td align="right">Nama Peminjam: </td>
        	<td align="left"><input type="text" name="nama_pelanggan"></td>
    	</tr>
    	<tr>
        	<td align="right">Nomor Telepon	: </td>
        	<td align="left"><input type="text" name="no_telepon"></td>
    	</tr>
		<tr>
        	<td align="right">Batas Kembali	: </td>
        	<td align="left"><input type="text" name="batas_kembali"></td>
    	</tr>
    	<tr>
    		<td align="right"><input type="submit" value="pinjam"></td>
    	</tr>
    	<tr>
    		<td><a href="transaksi.php">Kembali ke Awal</a></td>
    	</tr>
  		</table>
		</form>
<?php
	require('koneksi.php');
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$judul_buku=$_POST['judul_buku'];
		$nama_pelanggan=$_POST['nama_pelanggan'];
		$no_telepon=$_POST['no_telepon'];
		$batas_kembali=$_POST['batas_kembali'];
	
	$sql="INSERT INTO transaksi(judul_buku, nama_pelanggan, no_telepon, batas_kembali, tanggal_pinjam) 
	VALUES ('$judul_buku', '$nama_pelanggan', '$no_telepon', '$batas_kembali', now())";
	
	mysqli_query($con, $sql) or die ('Insert data error '. mysqli_error($con));
	
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

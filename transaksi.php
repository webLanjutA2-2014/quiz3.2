
<form action="" method="post">
	<p>Id Transaksi:
		<input type="text" name="id_tran"></p>
	<p>Nama Peminjam:
		<input type="text" name="nama"></p>
	<p>No HP :
		<input type="text" name="nohp"></p>
	<p>Buku Di Pinjam :
		<input type="text" name="buku"></p>
	<p><input type="submit" value="ok" name="OK"></p>
</form>
 
 <?php
 
$tgl_pinjam = date('Y-m-d');
$lama_pinjam = 7;

$query = mysql_query("SELECT DATE_ADD('$tgl_pinjam',
                      INTERVAL '$lama_pinjam' DAY) 
                      AS tanggal_kembali"
                    );
$hasil = mysql_fetch_object($query);
$tgl_kembali = $hasil->tanggal_kembali;
 
	require('konek.php');
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$transaksi = $_POST['id_tran'];
	$nam = $_POST['nama'];
	$hp  = $_POST['nohp'];
	$buk = $_POST['buku'];
	
	$sql="insert into transaksi(id_tran,nama,nohp ,buku,tanggal_pinjam,tanggal_kembali	)values
	('$transaksi', '$nam', '$hp','$buk','$tgl_pinjam','$tgl_kembali')";
	
	mysqli_query($con, $sql) or die('gagal'.mysqli_error($con));
	
	header('location:form.php');
	
	
	}
 ?>
 
 <a href="buku.php">Kembali</a>
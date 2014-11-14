<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 50px;
}
th {
    text-align: center;
}</style>
<br>
<br>
<br>
<center><table border="1"><tr><th><h2>Detail Pengembalian</h2>
<?php
$host = 'localhost';
	$dbname = 'sewa_buku';
	$user = 'root';
	$pass = '';

// Create connection
$conn = mysqli_connect($host, $user, $pass, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$cari=$_POST['id'];
$sql = "UPDATE transaksi SET tgl_kembali=CURDATE() WHERE id_transaksi=".  $cari."";
$query = mysqli_query($conn, $sql);
$sqlharga = "SELECT SUM(day(tgl_kembali)-day(tgl_pinjam)) as bayar from transaksi where id_transaksi=".$cari."";
	$queryHarga = mysqli_query($conn, $sqlharga) or die ("GET DATA ERROR". mysqli_error($conn));
	$harga = mysqli_fetch_assoc($queryHarga);

if(!$query){
			echo mysql_error($conn);
		}else{
			echo "<h4>Buku telah dikembalikan.</h4>";
			
			
			
			}
	

if($harga['bayar']>3){
			echo "<h4>Denda = Rp. ". ($harga['bayar']-3) * 2000 ."</h4>";
			}else{
			echo "<h4>Denda =Rp. 0</h4>";}
echo "<h4><a href=\"index.php\">Kembali</a></h4>";
mysqli_close($conn);
?>

</th></tr></table></center>
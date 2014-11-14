	<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
th {
    text-align: left;
}
</style><center>
<?php
mysql_connect("localhost","root","");
mysql_select_db("sewa_buku");

require('koneksi.php');

	
?>

<?php
$cari=$_POST['id'];
$query = mysql_query("SELECT * FROM transaksi WHERE id_transaksi=".  $cari."");
echo "<h2>Hasil Cek Transaksi</h2>";
while($hasil = mysql_fetch_array($query)){

	echo "<table border='2'><tr>";
	echo "<th>Id Transaksi</th>";
	echo "<th>Nama Peminjam</th>";
	echo "<th>No Telepon</th>";
	echo "<th>Judul Buku</th>";
	echo "<th>Tanggal Pinjam</th>";
	echo "<th>Tanggal Kembali</th>";
	echo "</tr>";
echo "<td>". $hasil['id_transaksi']."</td>";
echo "<td>". $hasil['nama_peminjam']."</td>";
echo "<td>".$hasil['no_telp']."</td>";
echo "<td>".$hasil['judul_buku']."</td>";
echo "<td>".$hasil['tgl_pinjam']."</td>";
echo "<td>".$hasil['tgl_kembali']."</td>";

}
?>
<a href="index.php">Kembali</a></center>
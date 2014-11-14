	<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 50px;
}
th {
    text-align: left;
}</style>

	
	</head>
	<body>
	<br>
	<br>
	<br>
	<center><table border="1"><tr><th>

<?php
		$host='localhost';
		$dbname='sewa_buku';
		$user='root';
		$pass='';
		
		$con = mysqli_connect($host, $user, $pass, $dbname);
		
		if(mysqli_connect_errno()){
			echo "koneksi error: ". mysqli_connect_error();
		
		}

	if(isset($_GET['id'])){
		$sql = "DELETE FROM transaksi WHERE id_transaksi = ".$_GET['id'];
		$query = mysqli_query($con, $sql);
		
		if(!$query){
			echo mysql_error($con);
		}else{
			echo "Data berhasil dihapus.";
			echo "<a href=\"index.php\">Kembali</a>";
			}
	}
?>
</th></tr></table></center>
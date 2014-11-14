<html>
<head>
	<title>Daftar Buku yang TERSEDIA !!!</title>
	</head>
	<body>
	<?php
		$host='localhost';
		$dbname='kuskus';
		$user='root';
		$pass='';
		
		$con = mysqli_connect($host, $user, $pass, $dbname);
		
		if(mysqli_connect_errno()){
			echo "koneksi error: ". mysqli_connect_error();
		
		}else{
		
		echo "";
		}

		$query = mysqli_query($con, "select * from buku");
	
		echo "<h2> Daftar Buku</h2>";
		?>
		
			

	
		<html>
<head>
<body>
    <form method="POST" action="pengguna.php">
        <table border="1" cellspacing="0" cellpadding="5">
            <tr bgcolor="red" style="color: white; font-weight: bold;">	
                <td>No.</td>
                <td>Kode</td>
                <td>Judul Buku</td>
				<td>Pengarang</td>
            </tr>
            <?php
            mysql_connect('localhost', 'root', '');
            mysql_select_db('kuis');
            $query = mysql_query("SELECT * FROM buku ORDER BY id_buk ASC");
            $no = 1;
            while($data = mysql_fetch_object($query))
            {
                echo "<tr>";
                    echo "<td>".$no."</td>";
						echo "<td>".$data->id_buk."</td>";
                    echo "<td>".$data->pengarang."</td>";
                    echo "<td>".$data->judul."</td>";      
									
                echo "</tr>";
                $no++;
            }
            ?>            
        </table>
        <button type="submit"><a href="transaksi.php">Pinjam Buku</a> </button>
		 <button type="submit"><a href="form.php">Lihat Daftar Peminjam</a> </button>

		 
    </form>
			 <button type="submit"><a href="index.php">Keluar</a> </button>
</body>
</head>
</html>
	
	
	</table>
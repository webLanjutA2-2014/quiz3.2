<?php

		$host='localhost';
		$dbname='barang';
		$user='root';
		$pass='';
		
		//membuat koneksi
		$con = mysqli_connect($host, $user, $pass, $dbname);
		if(mysqli_connect_errno()){
			echo "koneksi error: ". mysqli_connect_error();
		}

	if(isset($_GET['id'])){
		$sql="delete from pengguna where id= ". $_GET['id'];
		$query=mysqli_query($con,$sql);
		
		if(!query){
			echo mysqli_error($con);
			}else{
				echo "data berhasil dihapus.";
				echo "<a href=\"utama.php\">kembali</a>";
				
			}
		}
	
?>
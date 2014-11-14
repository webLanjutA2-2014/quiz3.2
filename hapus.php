<?php 
	//konfigurasi database
	$host = 'localhost';
	$dbname = 'persewaan';
	$user = 'root';
	$pass = '';

	//membuat koneksi ke database
	$con = mysqli_connect($host, $user, $pass, $dbname);
	//cek ada kesalahan koneksi atau tidak?
	if (mysqli_connect_errno()) {
		echo "Koneksi Error : " . mysqli_connect_error();
	}


	if (isset($_GET['id'])) {
		$sql = "DELETE FROM user 
				WHERE id_user = ". $_GET['id'];
		$query = mysqli_query($con, $sql);

		if (!$query) {
			echo mysqli_error($con);
		} else {
			echo "Data berhasil dihapus. ";
			echo "<a href=\"user.php\">Kembali</a>";
		}
	}

?>

<form action="" method="post" enctype="multipart/form-data"> <!---untuk nambah foto-->
	<p>Nama Peminjam:
		<input type="text" name="nama_peminjam"></p>
	<p>No Telpon:
		<input type="text" name="no_telpon"></p>
	<p>ID Pengguna:
		<input type="text" name="id_pengguna"></p>
	<p>ID Transaksi:
		<input type="text" name="id_transaksi"></p>
	<p>Profil foto:
		<input type="file" name="foto"></p>
	<p><input type="submit" value="simpan" name="tambah">
	<input type="submit" value="reset" name="tambah"></p>
</form>
 
 <?php
 
	require('konek.php');//memanggil koneksi database atau require(jika filenya gak ada maka akan error)bisa juga dengan include
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$nama_pengguna = $_POST['nama_pengguna'];
	$no_telpon = $_POST['no_telpon'];
	$id_pengguna  = $_POST['id_pengguna'];
	$id_transaksi  = $_POST['id_transaksi'];

	if($_FILES['foto']['error'] < 1){
		if(($_FILES['foto']['type'] == 'image/jpeg')&&
		($_FILES['foto']['size'] <= 200000)){
			
			if(file_exists("uploads/".$_FILES['foto']['name'])){
			echo "file ada dengan data yang sama";
			}else{
				move_uploaded_file($_FILES['foto']['tmp_name'], "uploads/".$_FILES['foto']
				['name']) or die("move error");
				$profil_foto = "uploads/".$_FILES['foto']['name'];
			}
		}else{
			echo "periksa tipe file dan ukuran";
		}
		}else{
			echo "file upload error";
			break;
	}
	
	$sql="insert into user(nama_pengguna, no_telpon, id_pengguna, id_transaksi, foto)values
	('$nama_pengguna', '$no_telpon', '$id_pengguna', '$id_transaksi', '$profil_foto')";
	

	mysqli_query($con, $sql) or die('gagal'.mysqli_error($con));
	
	header('location:utama.php');
	}
	
	
 ?>
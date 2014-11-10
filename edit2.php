</h2>edit barang</h2>
<?php
	require('konek.php');
	
	if(isset($_GET['id'])){
		$sql="select *from pengguna where id=".$_GET['id'];
		$query = mysqli_query($con, $sql);
		
		$result = mysqli_fetch_assoc($query);
		}
?>
<form action="" method="post">
	<p>email akun :
		<input type="text" name="email" value="<?=$result['email'];?>"></p>
	<p>password :
		<input type="text" name="password" value="<?=$result['password']?>"></p>
	<p>nama akun :
		<input type="text" name="nama_pengguna" value="<?=$result['nama_pengguna']?>"></p>
		
		<input type="hidden" name="id" value="<?=$result['id']?>">
	<p><input type="submit" value="tambah pengguna" name="tambah"></p>
</form>
 
 <?php
 
	require('konek.php');//memanggil koneksi database atau require(jika filenya gak ada maka akan error)bisa juga dengan include
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$nama_barang = $_POST['email'];
	$kuantitas = $_POST['password'];
	$harga  = $_POST['nama_pengguna'];
	$id_barang = $_POST['id'];
	
	$sql="update pengguna set email='$nama_barang', password='$kuantitas', nama_pengguna='$harga'
	where id=$id_barang";
	
	mysqli_query($con, $sql) or die('gagal'.mysqli_error($con));
	
	header('location:utama.php');
	
	
	}
 ?>
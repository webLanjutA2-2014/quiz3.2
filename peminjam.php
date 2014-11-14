<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<H2 align="center">Selamat Datang</H2>
<form action=" " method="POST" enctype="multipart/form-data">
  <table align="center"; margin="100">
    <tr>
      <td align="right">Masukkan Nama Peminjam : </td>
      <td align="left"><input type="text" name="nama_pelanggan"></td>
    </tr>
    <tr>
      <td align="right">Password : </td>
      <td align="left"><input type="password" name="id_transaksi"></td>
    </tr>
    <tr>
    	<td align="right"><input type="submit" value="Login"></td>
    </tr>
  </table>
</form>

<?php 		
	session_start();
	require('koneksi.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$sql="SELECT *FROM transaksi where nama_pelanggan='".$_POST['nama_pelanggan']."' AND id_transaksi='".$_POST['id_transaksi']."'";
		$query=mysqli_query($con, $sql) or die (mysqli_error($con));
		
	if(mysqli_num_rows($query)){
		while($data=mysqli_fetch_assoc($query)){
			$_SESSION['login']=1;
			$_SESSION['name']=$data['nama_pengguna'];
			
			header('location:pencarianpeminjam.php');
			}
			
			}else{
				echo "username atau password salah";
				}
			}
?> 
</body>
</html>
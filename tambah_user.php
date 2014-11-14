<html> 
	<head>
		<title>Laman Tambah Peminjan</title>
	</head>
	<body>

	<?php session_start();
if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){ ?>
		
		<form action=" " method="POST" enctype="multipart/form-data">
 	    <table align="center"; margin="100">
 	    <tr>
 	    	<td><H2>Tambah User Baru</H2></td>
 	    </tr>
   		<tr>
        	<td align="right">Nama User	: </td>
        	<td align="left"><input type="text" name="user"></td>
    	</tr>
		<tr>
        	<td align="right">Id User	: </td>
        	<td align="left"><input type="text" name="id_user"></td>
    	</tr>
		<tr>
        	<td align="right">Password	: </td>
        	<td align="left"><input type="text" name="password"></td>
    	</tr>
    	<tr>
        	<td align="right">No Telp	: </td>
        	<td align="left"><input type="text" name="no_telp"></td>
    	</tr>
    	
    	<tr>
    		<td align="right"><input type="submit" value="Tambah"></td>
    	</tr>
    	<tr>
    		<td><a href="index.php">Kembali ke Awal</a></td>
    	</tr>
  		</table>
		</form>
<?php
	require('koneksi.php');
	
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$user=$_POST['user'];
		$id_user=$_POST['id_user'];
		$password=$_POST['password'];
		$no_telp=$_POST['no_telp'];
		
		
	
	$sql="INSERT INTO user(user, id_user, password, no_telp) 
	VALUES ('$user', '$id_user', '$password', $no_telp)";
	
	mysqli_query($con, $sql) or die('Insert Data Error '.mysqli_error($con));
	
	header('location:user.php');
	}
?>


<?php
	}else{
		header('location:login.php');
	}
?>
	</body>
</html>

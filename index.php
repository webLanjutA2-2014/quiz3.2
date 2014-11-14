<!DOCTYPE html>
<html>
	<head>
	<title> LOGIN </title>
	</head> 
	<body>
	<form action = "" method="post">
		<p>Masukan Nama (admin)
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="id"></p>
		<p>Masukan Password (admin)
			<input type="password" name="pass"></p>
		<p><input type="submit" name="submit" value="Enter"></p>
		
		</form>
		<a href="pencarian.php">Cari ID</a
		<?php
			session_start();
			require('konek.php');
			if($_SERVER['REQUEST_METHOD']=="POST"){
						$sql="select * from admin where id='".$_POST['id']."'
						and pass='".$_POST['pass']."'";
				$query=mysqli_query($con, $sql)or die(mysqli_error($con));
				if(mysqli_num_rows($query)){
					while($row=mysqli_fetch_assoc($query)){
						$_SESSION['login']  = 1;
						$_SESSION['username']  = $row['id'];
						
						echo "berhasil";
						
						header('location:buku.php');
					}
				}else{
					echo "username atau password anda salah";
				}
			}
			
		?>
		
	</body>
</html>
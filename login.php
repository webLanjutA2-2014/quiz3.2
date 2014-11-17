<!DOCTYPE html>
<html>
	<head>
	<title> Login Penyewa</title>
	<body>
	<form action = "" method="post">
		<p>Masukan Nama  
			&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp;<input type="text" name="nama"></p>
		<p>Masukan Password
			<input type="password" name="password"></p>
		<p><input type="submit" name="submit" value="Enter"></p>
		
		</form>
		<?php
			session_start();
			require('koneksi.php');
			if($_SERVER['REQUEST_METHOD']=="POST"){
						$sql="select *from user where nama='".$_POST['nama']."'
						and password='".$_POST['password']."'";
				$query=mysqli_query($con, $sql)or die(mysqli_error($con));
				if(mysqli_num_rows($query)){
					while($row=mysqli_fetch_assoc($query)){
						$_SESSION['login']  = 1;
						$_SESSION['username']  = $row['nama'];
						
						echo "berhasil";
						
						header('location:index.php');
					}
				}else{
					echo "username atau password salah";
				}
			}
			
		?>
		
	</body>
</html>
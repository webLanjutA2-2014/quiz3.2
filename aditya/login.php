<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body>
	
	<form action="" method="POST">
		<p>Username   : <input type="text" name="username"></p>
		<p>Password : <input type="password" name="password"></p>
		<p><input type="submit" value="Login"></p>
	</form>
	<h5>Note : username dan passwornya : aditya</h5>
<?php
	require_once("system/koneksi.php");
	
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
		
		$query = mysqli_query($con, $sql) or die (mysqli_error($con));
		
		if(mysqli_num_rows($query))
		{
			while($data = mysqli_fetch_assoc($query))
			{
				$_SESSION['login'] = 1;
				$_SESSION['name'] = $data['username'];
			}
			
			header('location:mainMenu.php');
		}
		else
		{
			echo "check your email or password";
		}
	}

?>
	
	
</body>
</html>
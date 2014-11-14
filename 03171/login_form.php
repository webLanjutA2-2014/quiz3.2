<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 50px;
}
th {
    text-align: center;
}</style>
<br>
<br>
<br>
<center><table border="1"><tr><th><h2>LOGIN</h2>
<form action=" " method="POST" enctype="multipart/form-data">
			<p>Username <input type="text" name="username"></p>
			<p>Password   <input type="password" name="password"></p>
			<p><input type="submit" value="Login"></p>
			Anda belum punya account? <a href="sign_up.php">Sign up</a>
		</form></th></tr></table></center>
		
		
<?php		
	session_start();
	require('koneksi.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$sql="SELECT *FROM user where username='".$_POST['username']."' AND password='".$_POST['password']."'";
		
		$query=mysqli_query($con, $sql) or die (mysqli_error());
		
	if(mysqli_num_rows($query)){
		while($data=mysqli_fetch_assoc($query)){
			$_SESSION['login']=1;
			$_SESSION['name']=$data['username'];
			
			header('location:index.php');
			
			
			}
			
			}else{
				echo "username atau password salah";
				}
			}
	

?>
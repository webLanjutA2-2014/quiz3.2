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
<center><table border="1"><tr><th><h2>SIGN UP</h2>
<form action="" method="post" enctype="multipart/form-data">
	<p>Username  
		<input type="text" name="username"></p>
	<p>Password  
		<input type="password" name="password"></p>
	<p><input type="submit" value="Simpan" name="tambah">
		<input type="reset" value="Reset" name="tambah"></p>
</form></th></tr></table></center>

<?php

	require('koneksi.php');
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$sql = "INSERT INTO user(username, password)
	VALUES ('$username', '$password')";
	
	mysqli_query($con, $sql) or die ('Insert data error '. mysql_error($con));
	
	header('location:login_form.php');
	}
?>

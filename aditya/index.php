<?php
session_start();
if(isset($_SESSION['login']))
	header('location:mainMenu.php');
else
	header('location:login.php');
?>
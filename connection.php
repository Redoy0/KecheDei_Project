<?php
error_reporting(0);
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "signup_form";
	
	$conn=mysqli_connect($servername,$username,$password,$dbname);
	if($conn)
	{
		//echo "Connection Okey";
	}
	else
	{
		echo "Connection Failed".mysqli_connect_error();
	}
?>
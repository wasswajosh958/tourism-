<?php
	$sn="localhost";
	$un="root";
	$pass="";
	$db="tourism";
	
	$conn=mysqli_connect($sn, $un, $pass, $db);
	
	if(!$conn)
	{
		die('Not Connected!'.mysqli_connect_error());
	}
?>
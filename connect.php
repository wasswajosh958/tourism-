<?php
	$sn="localhost";
	$un="root";
	$pass="";
	//create connection
	
	$conn=mysqli_connect($sn, $un, $pass);
	
	//check connection
		if(!$conn)
		{
		die('Not Connected!' .mysql_connect_error());
		}
?>
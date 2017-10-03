<?php 
	$dbconnection = mysqli_connect("localhost", "root", "", "db");

	if (!$dbconnection) {
		die("Connection failed: ".mysqli_connect_error());
	}


	/*if (mysql_errno()) {
		echo "Connection failed:".mysql_error();
		exit;
	}*/	
?>



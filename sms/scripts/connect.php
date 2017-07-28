<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$dbase = "student";
	$db = mysqli_connect($host, $user, $pass, $dbase);		
	//check connection
	if(!($db)){
		echo "Error connecting to DB Server!";
	}
?>
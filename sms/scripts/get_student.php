<?php
	include "connect.php";
	$sql = "SELECT * FROM student_info where ID_yr = '".$_GET["idyr"]."' and ID_crs = '".$_GET["idcrs"]."' and ID_num = '".$_GET["idnum"]."'";		
	$result = mysqli_query($db, $sql);
	$f = "";	//first name
	$m = "";	//middle name
	$l = ""; 	//last name
	$s = "";	//sex
	$c = ""; 	//course
	if($row = mysqli_fetch_array($result)){
		do{
			$f = $row["Fname"];
			$m = $row["Mname"];
			$l = $row["Lname"];
			$s = $row["Sex"];
			$c = $row["Course"];
		}while($row = mysqli_fetch_array($result));
	}
?>
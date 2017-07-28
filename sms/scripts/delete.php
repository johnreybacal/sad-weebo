<?php
	include "connect.php";
	$sql = "delete from student_info where ID_yr = '".$_GET["idyr"]."' and ID_crs = '".$_GET["idcrs"]."' and ID_num = '".$_GET["idnum"]."'";
	if ($db->query($sql) == TRUE) {
		echo "Record deleted successfully<br />";				
		header("Location: students.php");
		exit;
	}
	else{
		echo "Error: " . $sql . "<br>" . $db->error;
	}
	
?>
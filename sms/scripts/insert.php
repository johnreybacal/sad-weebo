<?php	
	if($_POST["lastname"] && $_POST["firstname"] && $_POST["middlename"] && $_POST["sex"] && isset($_POST["course"])){
		include "assign_ID.php";
		include "connect.php";
		$sql = "INSERT INTO student_info (ID_yr, ID_crs, ID_num, Fname, Mname, Lname, Sex, Course) 
		VALUES ('$id_yr', '$id_crs', '$id_num', '".
		$_POST["firstname"]."', '".$_POST["middlename"]."', '".$_POST["lastname"]."', '". 
		$_POST["sex"]."', '".$_POST["course"]."')";
		if ($db->query($sql) == TRUE) {
			echo "New record created successfully<br />";
			echo "Assigned ID: ".$id_yr."-".$id_crs."-".$id_num;
		}
		else{
			echo "Error: " . $sql . "<br>" . $db->error;
		}
	}
	else{
		echo "Please fill all the fields";
	}
?>
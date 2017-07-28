<?php	
	if($_POST["lastname"] && $_POST["firstname"] && $_POST["middlename"] && isset($_POST["course"])){
		include "connect.php";
		$yr = $_GET["idyr"]; //id
		$crs = $_GET["idcrs"]; //id
		$num = $_GET["idnum"]; //id
		$siopao = $c; //course lmao
		if($c != $_POST["course"]){ //kapag lumipat ng course. 		
			include "assign_ID.php";
			$yr = $id_yr;
			$crs = $id_crs;
			$num = $id_num;
			$siopao = $_POST["course"];
			echo "New ID assigned: ".$yr."-".$crs."-".$num."<br />";
		}
		$sql = "update student_info set ID_yr = '".$yr."', ID_crs = '".$crs."', ID_num = '".$num."',  
		Fname = '".$_POST["firstname"]."', Mname = '".$_POST["middlename"]."', 
		Lname = '".$_POST["lastname"]."', Course = '".$siopao."' where 
		ID_yr = '".$_GET["idyr"]."' and ID_crs = '".$_GET["idcrs"]."' and ID_num = '".$_GET["idnum"]."'";
		if ($db->query($sql) == TRUE) {
			echo "Record updated successfully<br />";			
		}
		else{
			echo "Error: " . $sql . "<br>" . $db->error;
		}
	}
	else{
		echo "Please fill all the fields";
	}	
?>
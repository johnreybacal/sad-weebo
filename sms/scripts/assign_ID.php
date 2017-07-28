<?php
	include "connect.php";
	$id_yr = date("Y") - 2000;
	$id_crs = "000";
	$id_num = "000";
	if($_POST["course"]){		
		switch($_POST["course"]){
			case "BSIT": $id_crs = "037"; break;
			case "BSCS": $id_crs = "038"; break;
			case "BTIT": $id_crs = "004"; break;
			case "ESET": $id_crs = "028"; break;
		}
	}
	$sql = "SELECT ID_num FROM student_info where ID_crs = $id_crs order by ID_num ASC"; //get latest counter for a specific course
	$result = mysqli_query($db, $sql);
	if($row = mysqli_fetch_array($result)){
		do{
			$id_num = $row["ID_num"];
		}while($row = mysqli_fetch_array($result));
	}	
	$temp = (int)$id_num + 1;
	$id_num = "000".$temp;
	$id_num = substr($id_num,strlen($id_num)-3,strlen($id_num));
?>
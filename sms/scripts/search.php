<?php
include "connect.php";
$sql = "SELECT * FROM student_info";	
$search = strtolower($_GET["search"]);
$result = mysqli_query($db, $sql);		
if($row = mysqli_fetch_array($result)){
	do{
		if(strpos($search, strtolower($row["Lname"])) !== false||strpos(strtolower($row["Lname"]), $search) !== false || strpos($search, strtolower($row["Fname"])) !== false || strpos(strtolower($row["Fname"]), $search) !== false || strpos($search, strtolower($row["Mname"])) !== false || strpos(strtolower($row["Mname"]), $search) !== false || strpos($search, strtolower($row["Course"])) !== false || strpos(strtolower($row["Course"]), $search) !== false || strcmp($search, $row["ID_yr"]."-".$row["ID_crs"]."-".$row["ID_num"]) == 0 || strcmp($search, $row["ID_yr"]."-".$row["ID_crs"]) == 0 || strcmp($search, $row["ID_yr"]) == 0){
			echo 
				"<tr>
					<td class=\"center\">".$row["ID_yr"]."-".$row["ID_crs"]."-".$row["ID_num"]."</td>
					<td style=\"font-size: 13px;\">".$row["Lname"].", ".$row["Fname"]." ".substr($row["Mname"],0,1).".</td>
					<td class=\"center\">".$row["Sex"]."</td>
					<td class=\"center\">".$row["Course"]."</td>
					<td class=\"center\">
					  <a href=\"students.php?mode=view&idyr=".$row["ID_yr"]."&idcrs=".$row["ID_crs"]."&idnum=".$row["ID_num"]."&del=no\">View</a> 
					| <a href=\"students.php?mode=update&idyr=".$row["ID_yr"]."&idcrs=".$row["ID_crs"]."&idnum=".$row["ID_num"]."&del=no\">Update</a> 
					| <a href=\"students.php?mode=delete&idyr=".$row["ID_yr"]."&idcrs=".$row["ID_crs"]."&idnum=".$row["ID_num"]."&del=yes\">Delete</a></td>
				</tr>"				
			;
		}
	}while($row = mysqli_fetch_array($result));
}
?>
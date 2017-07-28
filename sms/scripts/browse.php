<?php
	include "connect.php";
	$sql = "SELECT * FROM student_info";		
	$result = mysqli_query($db, $sql);		
	if($row = mysqli_fetch_array($result)){
		do{
			echo 
				"<tr>
					<td class=\"center\">".$row["ID_yr"]."-".$row["ID_crs"]."-".$row["ID_num"]."</td>
					<td style=\"font-size: 13px;\">".$row["Lname"].", ".$row["Fname"]." ".substr($row["Mname"],0,1).".</td>
					<td class=\"center\">".$row["Sex"]."</td>
					<td class=\"center\">".$row["Course"]."</td>
					<td class=\"center\">
					  <a href=\"students.php?mode=view&idyr=".$row["ID_yr"]."&idcrs=".$row["ID_crs"]."&idnum=".$row["ID_num"]."\">View</a> 
					| <a href=\"students.php?mode=update&idyr=".$row["ID_yr"]."&idcrs=".$row["ID_crs"]."&idnum=".$row["ID_num"]."\">Update</a> 
					| <a href=\"students.php?mode=delete&idyr=".$row["ID_yr"]."&idcrs=".$row["ID_crs"]."&idnum=".$row["ID_num"]."\">Delete</a></td>
				</tr>"				
			;
		}while($row = mysqli_fetch_array($result));
	}
?>
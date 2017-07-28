<div id="workspace">
	<h2>Student information</h2>
	<div id="top-menu">
		<a href="students.php">Go back</a>
	</div>
	<br />
	<?php include "../scripts/get_student.php"; ?>
	<p>ID No.: <?php echo $_GET["idyr"]."-".$_GET["idcrs"]."-".$_GET["idnum"]; ?></p>
	<p>Last Name: <?php echo $l; ?></p>
	<p>First Name: <?php echo $f; ?></p>	
	<p>Middle Name: <?php echo $m; ?></p>
	<p>Sex: <?php echo ($s == "M")?"Male":"Female"; ?></p>
	<p>Course: <?php echo $c; ?></p>		
	<a href="<?php echo "students.php?mode=update&idyr=".$_GET["idyr"]."&idcrs=".$_GET["idcrs"]."&idnum=".$_GET["idnum"]; ?>">Update</a> | 
	<a href="<?php echo "students.php?mode=delete&idyr=".$_GET["idyr"]."&idcrs=".$_GET["idcrs"]."&idnum=".$_GET["idnum"]; ?>">Delete</a>		
</div>
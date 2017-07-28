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
	<p>Middle Name: <?php echo $m ?></p>
	<p>Sex: <?php echo ($s == "M")?"Male":"Female"; ?></p>
	<p>Course: <?php echo $c; ?></p>
	<form action = "" method = "post">
		Delete this student?
		<br /><input type = "radio" name = "ans" value = "y">Yes</input>
		<br /><input type = "radio" name = "ans" value = "n">No</input>
		<br /><input type = "submit" name = "submit" Value = "Ok" />
	</form>
</div>
<?php	
	if(isset($_POST["submit"]) && isset($_POST["ans"])){
		if($_POST["ans"] == "y"){
			include "../scripts/delete.php";
		}
		else{
			header("Location: students.php?mode=browse");
			exit;
		}
	}
?>		
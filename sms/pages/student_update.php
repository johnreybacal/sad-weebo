<div id="workspace">
	<h2>Update student record</h2>
	<div id="top-menu">
		<a href="students.php">Go back</a>
	</div>
	<?php
		include "../scripts/get_student.php";
	?>
	<form action="" method="post">
		<p>ID No.: 
			<?php
				echo $_GET["idyr"]."-".$_GET["idcrs"]."-".$_GET["idnum"];
			?>
		</p>
		<p>Last Name:
			<br /><input type="text" name="lastname" placeholder = "<?php echo $l; ?>" value = "<?php echo $l; ?>" />
		</p>	
		<p>First Name:
			<br /><input type="text" name="firstname" placeholder = "<?php echo $f; ?>" value = "<?php echo $f; ?>"/>
		</p>
		<p>Midle Name:
			<br /><input type="text" name="middlename" placeholder = "<?php echo $m; ?>" value = "<?php echo $m; ?>"/>
		</p>	
		<p>Sex: <?php echo $s; ?>						
		</p>					
		<p>Course: <?php echo $c; ?>
			<table class = "course">
				<tr><td>COS</td><td>CIT</td></tr>
				<tr>
					<td>
						<input type = "radio" name = "course" value = "BSIT" <?php echo ($c == "BSIT")?"checked":""; ?>>BSIT</input>
					</td>
					<td>
						<input type = "radio" name = "course" value = "BTIT" <?php echo ($c == "BTIT")?"checked":""; ?>>BTIT</input>
					</td>
				</tr>
				<tr>								
					<td>
						<input type = "radio" name = "course" value = "BSCS" <?php echo ($c == "BSCS")?"checked":""; ?>>BSCS</input>
					</td>
					<td>
						<input type = "radio" name = "course" value = "ESET" <?php echo ($c == "ESET")?"checked":""; ?>>ESET</input>
					</td>
				</tr>											
			</table>
		</p>
		<input type = "submit" name = "submit" Value = "Finish" />
	</form>
	<?php
		if(isset($_POST["submit"])){
			include "../scripts/update.php";
		}
	?>
</div>
<div id="workspace">
	<h2>Students</h2>
	<div id="top-menu">
		<a href="students.php">Go back</a>
	</div>
	<form action="" method="post">
		<p>ID No.: (Finish the form first)</p>
		<p>Last Name:
			<br /><input type="text" name="lastname" />
		</p>	
		<p>First Name:
			<br /><input type="text" name="firstname" />
		</p>
		<p>Midle Name:
			<br /><input type="text" name="middlename" />
		</p>	
		<p>Sex:
			<br /><input type="radio" name="sex" value="M" />Male
			<input type="radio" name="sex" value="F" />Female
		</p>
		<p>Course:
			<table class = "course">
				<tr><td>COS</td><td>CIT</td></tr>
				<tr>
					<td><input type = "radio" name = "course" value = "BSIT">BSIT</input></td>
					<td><input type = "radio" name = "course" value = "BTIT">BTIT</input></td>
				</tr>
				<tr>								
					<td><input type = "radio" name = "course" value = "BSCS">BSCS</input></td>
					<td><input type = "radio" name = "course" value = "ESET">ESET</input></td>
				</tr>											
			</table>
		</p>
		<input type = "submit" name = "submit" Value = "Finish" />
	</form>
	<?php
		if(isset($_POST["submit"])){
			include "../scripts/insert.php";
		}
	?>
</div>
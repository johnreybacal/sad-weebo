<html>
	<head>
		<?php
			include "header.php";
		?>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<h1>Student Management System</h1>
				<img id = "top-logo" src = "../images/logo.png" />
			</div>
			<div id="lefty">
			<?php
				include "menu.php";
			?>
			</div>
			<?php				
				if(isset($_GET["mode"])){
					switch($_GET["mode"]){						
						case "new":
							include "student_new.php";
							break;
						case "view":
							include "student_view.php";
							break;
						case "update":
							include "student_update.php";
							break;
						case "delete":
							include "student_delete.php";
							break;						
					}
				}
				else{
					include "student_browse.php";
				}
			?>
		</div>
	</body>
</html>
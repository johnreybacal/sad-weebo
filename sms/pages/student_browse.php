<div id="workspace">
	<h2>Students</h2>
	<div id="top-menu">
		<a href="students.php?mode=new">New Student</a>
	</div>
	<form action = "students.php?mode=browse" method = "get">	
		<input type="text" name="search" class="search" placeholder = "Search" /> 
		<input type="submit" value="Find / Clear search" />					
	</form>		
	<table id = "table" class="tbl-search">
		<thead>
			<tr>
				<th>ID No.</th>
				<th>Name</th>
				<th>Sex</th>
				<th>Course</th>
				<th>Action</th>
			</tr>
		</thead>
	<tbody>
	<?php						
		if(isset($_GET["search"]) && $_GET["search"] != ""){						
			include "../scripts/search.php";
		}
		else{
			include "../scripts/browse.php";			
		}
	?>
	</tbody>
	</table>
</div>
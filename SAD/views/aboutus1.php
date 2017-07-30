<!DOCTYPE html>
<html lang="en">
<head>
  <title>BFF</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
 
</head>
<!--body style="height:1500px; background-color:#afafaf;"-->
<style>

a.about {
	width:40%;
	margin-left:3%;
	margin-right:3%;
	
	font-family:helvetica;
    border-style: double;
    border-width: thick;
	background-color:#123132;
	color:#aa7868;
}
p.div{
    width: 84%;
	height:30%;
    border: 1px solid green;
	padding: 3% 5%;
    text-align:center;
    margin: 2% 0% 2% 8%;
	float:left;
	
}

</style>
</head>
<body>

	<?php
		include "../views/carouselsample.php";
		include "../views/nav.php";
			
	?>
<div class ="div" >
	<div class="center">			
		<p class="div "><b>About lang</b><br/>I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page. I’m a great place for you to tell a story and let your users know a little more about you.
 
This is a great space to write long text about your company and your services. You can use this space to go into a little more detail about your company. Talk about your team and what services you provide.</p>
	</div>
</div>	
	
	<!--Jscripts should be inserted before the end of the body tag-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>

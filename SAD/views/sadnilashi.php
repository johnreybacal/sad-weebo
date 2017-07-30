<HTML>
<head>
	<title>BFF </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style type="text/css">
	* { margin: 0px; padding: 0px; }
	html { height: 100%; }
	body { background-color: #dafbf8; font-family: Georgia; }
	#container { width: 100%; }


	#header { width: 55%; float: left; background-color: #f8dafb;
				height: 18%; padding-top: 10px; margin-left: 10px; margin-top: 10px
	}	

	#menu { width: 50%; height: 18%; margin: 0px 20% 0px 50%; padding-top: 10px;
	position: relative;	}
	
	#menu ul{
	margin: 0px;

}
#menu ul li{
	list-style: none;
	margin: 3px;
	padding: 8px;
	
	height: 39px;
	width: 165px;
	background-color: #daddfb;
	text-align:center;
	float: left;
}
#menu ul li a{
	font-size: 20px;
	text-decoration: none;
	
	padding: 15px;
	color: white;
}
	#title{ width: 120px; height: 100px; margin-top: 17px; margin-left: 55px; font-size: 20px; 
	text-align:center; border: solid 2px; border-radius: 4em; padding: 10px;
	background-color: #e8dafb;
		
	}
	#categories{
		margin-top: 13px; border: solid 1px; width: 17%; height: 55%; margin-left: 15px;
		font-size: 20px; text-align: center; background-color: #e8dafb; border-radius: 1em;
	}
	
	
	
	</style>
	</head>
<body>
	<?php
		include "../views/carouselsample.php";
		include "../views/nav.php";
	?>
<div id="title"> Services</div>
<div id="categories"> Categories</div>
	<!--Jscripts should be inserted before the end of the body tag-->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</HTML>
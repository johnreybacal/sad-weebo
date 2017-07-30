<!Doctype html>
<html lang = "en">

<head>
<title>BFF</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  
</head>

<body>
<div class = "container">
	<div id = "myCarousel" class="carousel slide"  data-ride="carousel">
		<ol class = "carousel-indicators">
			<!--data-target is equal to sa id ng carousel -->
			<!--data-slide-to kung pang ilang bilog equivalent from 0 not 1 -->
			<!-- mag set ng kahit isang active para gumana -->
			<li data-target = "#myCarousel" data-slide-to="0" class = "active"></li>
			<li data-target = "#myCarousel" data-slide-to="1"></li>
			<li data-target = "#myCarousel" data-slide-to="2" ></li>
			<li data-target = "#myCarousel" data-slide-to="3"></li>
			<li data-target = "#myCarousel" data-slide-to="4"></li>
		
		</ol>
		<div class = "carousel-inner">
			<!-- carousel-inner kung saan ilalagay ang carousel-->
			<!-- maglagay ulit ng kahit isang active i-align sa nakaactive sa taas -->
			<div class="item active ">
				<img src="images/1.jpg" alt="photo ko0" style= "margin:auto;width:50%;">
				<div class = "carousel-caption">
				<p>message mo to0</p>
				</div>
			</div>
			
			<div class="item ">
				<img src="images/3.jpg" alt="photo ko1" style= "margin:auto;width:50%;">
				<div class="carousel-caption">
				<p>message mo to1</p>
				</div>
			</div>
			
			<div class="item ">
				<img src="images/1.jpg" alt="photo ko2" style= "margin:auto;width:50%;">
				<div class = "carousel-caption">
				<p>message mo to2</p>
				</div>
			</div>
			<div class="item ">
				<img src="images/3.jpg" alt="photo ko3" style= "margin:auto;width:50%;">
				<div class = "carousel-caption">
				<p>message mo to3</p>
				</div>
			</div>
			<div class="item ">
				<img src="images/1.jpg" alt="photo ko4" style= "margin:auto;width:50%;">
				<div class = "carousel-caption">
				<p>message mo to4</p>
				</div>
			</div>
		</div>
	
		<a class = "left carousel-control" href="#myCarousel" data-slide= "prev">	
			<span class = "glyphicon glyphicon-chevron-left"></span>
			<span class = "sr-only">Previous</span>
		</a>
		
		<a class = "right carousel-control" href="#myCarousel" data-slide="next">
			<span class = "glyphicon glyphicon-chevron-right"></span>
			<span class = "sr-only">Next</span>
		</a>
		
	</div>
</div>
	<!--Jscripts should be inserted before the end of the body tag-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>
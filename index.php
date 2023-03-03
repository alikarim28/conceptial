<?php
	require('includes/connection.php');
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
	<title>Conceptial | S T R E E T W E A R </title>
	<link rel = "icon" href ="images/icon-1.png" type = "image/x-icon">
</head>
<body>
<?php require "components/header.php";
?>			</div>
			<div class="row">
				<div class="col-2">
					<img src="images2/hero-2.png">
				</div>
				<div class="col-2">
					<h1>Caring for your clothes is caring for the environment.</h1>
					<p> Success isn't always about greatness. It's about consistency. Consistent har work gains success. Greatness will come.</p>
					<a href="shop.php" class="btn"> Explore Now &#8594</a>
				</div>
			</div>
		</div>
	</div><!--------------------------/header----------------------->
	
	<div class="categories"><!--------------------categories------------------->
		<div class="small-container">
			<div class="row">
				<div class="col-5">
					<img src="images/category-1.jpg">
				</div>
				<div class="col-5">
					<img src="images/category-2.jpg">
				</div>
				<div class="col-5">
					<img src="images/category-3.jpg">
				</div>
				<div class="col-5">
					<img src="images/category-3.jpg">
				</div>
			</div>
		</div>
	</div><!-------------------categories---------------------------->
	<div><!--------------------products------------------->
		<div class="small-container" id="	product">
			<h2 class="title">Featured Products</h2>
			<div class="row">
				<div class="col-4"	onclick="window.location.href='sproduct.php'">
					<img src="images2/product-1.jpg">
					<h4>Black Wave T-shirt</h4>
					<p>$15.00</p>
				</div>
				<div class="col-4" onclick="window.location.href='sproduct2.html'">
					<img src="images2/product-2.jpg">
					<h4>Black Pijama</h4>
					<p>$20.00</p>
				</div>
				<div class="col-4" onclick="window.location.href='sproduct3.html'">
					<img src="images2/product-3.jpg" onclick="window.location.href='sproduct3.html'">
					<h4>Black Printed T-shirt</h4>
					<p>$15.00</p>
				</div>
				<div class="col-4">
					<img src="images2/product-4.jpg" onclick="window.location.href='sproduct4.html'">
					<h4>Black Printed T-shirt</h4>
					<p>$50.00</p>
				</div>
				<div class="col-4">
					<img src="images2/product-5.jpg" onclick="window.location.href='sproduct5.html'">
					<h4>Black Printed T-shirt</h4>
					<p>$50.00</p>
				</div>
				<div class="col-4">
					<img src="images2/product-6.jpg" onclick="window.location.href='sproduct6.html'">
					<h4>Black Printed T-shirt</h4>
					<p>$50.00</p>
				</div>
				<div class="col-4">
					<img src="images2/product-7.jpg" onclick="window.location.href='sproduct7.html'">
					<h4>Black Printed T-shirt</h4>
					<p>$50.00</p>
				</div>
				<div class="col-4">
					<img src="images2/product-8.jpg" onclick="window.location.href='sproduct8.html'">
					<h4>Black Printed T-shirt</h4>
					<p>$50.00</p>
				</div>
				<div class="col-4">
					<img src="images2/product-9.jpg" onclick="window.location.href='sproduct9.html'">
					<h4>Black Printed T-shirt</h4>
					<p>$50.00</p>
				</div>
				<div class="col-4">
					<img src="images2/product-10.jpg" onclick="window.location.href='sproduct10.html'">
					<h4>Black Printed T-shirt</h4>
					<p>$50.00</p>
				</div>
				<div class="col-4">
					<img src="images2/product-11.jpg" onclick="window.location.href='sproduct11.html'">
					<h4>Black Printed T-shirt</h4>
					<p>$50.00</p>
				</div>
				<div class="col-4">
					<img src="images2/product-12.jpg" onclick="window.location.href='sproduct12.html'">
					<h4>Black Printed T-shirt</h4>
					<p>$50.00</p>
				</div>
			</div>
		</div>
	</div><!------------/product---------------------------------------->
	<?php 
	require "components/offer.php";
	?>
	<?php
	require "components/brand.php";
	?>
	<?php
	require "components/footer.php";
	?>
	
</body>
</html>
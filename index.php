<?php
	require('includes/connection.php');
	 include("functions/common_functions.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
	<script src="functions/js_common_functions.js"></script>
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
	
	<div><!--------------------products------------------->
		<div class="small-container" id="product">
			<h2 class="title">Featured Products</h2>
			<div class="row">
				<?php
					get_9_first_products_intersection();
				?>
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
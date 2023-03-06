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
				<div class="filter-menu">
					<div class="filter-item">
						<label for="category">Category:</label>
						<select id="category">
						<option value="">All</option>
						<?php 
							getcategories();
						?>
						</select>
					</div>
				</div>
				</div>
				<div class="col-5">
					<div class="filter-menu">
					<div class="filter-item">
					<label for="brand">brand:</label>
						<select id="brand">
							<option value="">All</option>
							<?php 
							getbrands();
						?>
						</select>
					</div>
					</div>
				</div>
				<div class="col-5">
				<div class="filter-menu">
				<div class="filter-item">
					<label for="size">Size:</label>
					<select id="size">
						<option value="">All</option>
						<option value="small">Small</option>
						<option value="medium">Medium</option>
						<option value="large">Large</option>
					</select>
  				</div>
				</div>
				</div>
				<div class="col-5">
				<div class="filter-menu">
				<div class="filter-item">
					<label for="gender">Gender:</label>
					<select id="gender">
						<option value="">All</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="unisex">Unisex</option>
					</select>
				</div>
				</div>
				</div>
				<div class="col-5">
				<div class="filter-menu">
				<div class="filter-item">
					<label for="price">Price:</label>
					<select id="price">
						<option value="">All</option>
						<option value="0-25">$0 - $25</option>
						<option value="25-50">$25 - $50</option>
						<option value="50-100">$50 - $100</option>
						<option value="100+">$100+</option>
					</select>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div><!-------------------categories---------------------------->
	<div><!--------------------products------------------->
		<div class="small-container" id="product">
			<h2 class="title">Featured Products</h2>
			<div class="row">
				<?php
					getproducts();
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
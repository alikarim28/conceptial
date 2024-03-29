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
	<link rel = "icon" href ="images/icon-1.png" type = "image/x-icon" >
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
	<form action="" method="get">
  		<div class="search-container">
    		<input type="text" name="search_data" placeholder="Search...">
    		<button type="submit" class="search-button" name="search_data_product" value="Search">Search</button>
  		</div>
	</form>
	<div class="categories"><!--------------------categories------------------->
		<div class="small-container">
			<div class="row">
				<div class="col-5">
				<div class="filter-menu">
					<div class="filter-item">
						<label for="category">Category:</label>
						<select id="category" onchange="changecategory()">
						<option value="-1">All</option>
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
						<select id="brand" onchange="changebrand()">
							<option value="-1">All</option>
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
					<select id="size" onchange="changesize()">
					<option value="-1">All</option>
						<?php
							getsizes();
						?>
					</select>
  				</div>
				</div>
				</div>
				<div class="col-5">
				<div class="filter-menu">
				<div class="filter-item">
					<label for="gender">Gender:</label>
					<select id="gender" onchange="changegender()">
						<option value="-1">All</option>
						<?php
							getgenders();
						?>
					</select>
				</div>
				</div>
				</div>
				<div class="col-5">
				<div class="filter-menu">
				<div class="filter-item">
					<label for="pricef">Price:</label>
					<select id="pricef" onchange="changepricef()">
						<option value="-1">All</option>
						<?php
							getpricef();
						?>
					</select>
				</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	<!-------------------categories---------------------------->
	<div><!--------------------products------------------->
		<div class="small-container" id="product">
			<h2 class="title">Featured Products</h2>
			<div class="row">
				<?php
				    search_products();
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
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
					<select id="size">
						<option value="-1">All</option>
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
						<option value="-1">All</option>
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
						<option value="-1">All</option>
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
					// getproducts();
					// get_unique_categories();
					// get_unique_brands();
					// get_unique_gender();
					get_all_products_intersection();
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
	

<script>
	function changecategory(){
		console.log(window.location.href);
		var selectElement = document.getElementById("category");
		var category_id = selectElement.value;
		if(category_id == -1){
			var url =window.location.href.replace(/[?|&]category=\d+/, "");
			if(url.indexOf("?") ===-1 ){
				let index = url.indexOf("&");
				if (index !== -1) {
				let firstPart = url.substr(0, index);
				let secondPart = url.substr(index + 1);
				url = firstPart + "?" + secondPart;
			}
		}
			window.location.href=url;

		
		}else{
		if(window.location.href.indexOf("category=") ===-1 ){
			if(!isNaN(window.location.href.charAt(window.location.href.length - 1)))
			window.location.href = window.location.href+"&category="+ category_id;
			else{
				window.location.href = window.location.href+"?category="+ category_id;
			}
		}else{
			window.location.href=window.location.href.replace(/category=\d+/, "category="+category_id);
		}
	}
	} 
	function changebrand(){
		console.log(window.location.href);
		var selectElement = document.getElementById("brand");
		var brand_id = selectElement.value;
		if(brand_id == -1){
			var url =window.location.href.replace(/[?|&]brand=\d+/, "");
			if(url.indexOf("?") ===-1 ){
				let index = url.indexOf("&");
				if (index !== -1) {
				let firstPart = url.substr(0, index);
				let secondPart = url.substr(index + 1);
				url = firstPart + "?" + secondPart;
			}
		}
			window.location.href=url;

		
		}else{
		if(window.location.href.indexOf("brand=") ===-1 ){
			if(!isNaN(window.location.href.charAt(window.location.href.length - 1)))
			window.location.href = window.location.href+"&brand="+ brand_id;
			else{
				window.location.href = window.location.href+"?brand="+ brand_id;
			}
		}else{
			window.location.href=window.location.href.replace(/brand=\d+/, "brand="+brand_id);
		}
	}
	}

</script>
</body>
</html>
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
	<?php
	require "components/header.php";
	echo "</div> </div>";
	?>
    <div id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="images2/offer-0.jpg" width="100%" id="MainImg">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="images2/product-3.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images2/product-4.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images2/product-5.jpg" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="images2/product-6.jpg" width="100%" class="small-img">
                </div>
            </div>

        </div>
        <div class="single-pro-details">
            <h6>Home / Hoodies</h6>
            <h4>Angels Wings</h4>
            <h2> 20.00$</h2>
            <select>
                <option> Select Size</option>
                <option> XL</option>
                <option> XXL</option>
                <option> Small</option>
                <option> Large</option>
            </select>    
            <input type="number" value="1">
            <a href="" class="btn">Add To Cart</a><br>
            <h4>Product Details</h4>
            <span>The green to Wear 2.0 Standard aims to minimize the environmental impact of textile manufacturing.
                 To that end, we have developed Inditex's The List Programme,
                 which helps guarantee both that production processes are clean and that pur garments are safe and healthy.
            </span>
        </div>
    </div>
	<?php 
	require "components/offer.php";
	?>
	<?
	require "components/brand.php"
	?>

	<?php
	require "components/footer.php"
	?>
	<script>
        var MainImg = document.getElementById("MainImg");
        var smallimg = document.getElementsByClassName("small-img");

        smallimg[0].onclick = function(){
            MainImg.src = smallimg[0].src;
        }
        smallimg[1].onclick = function(){
            MainImg.src = smallimg[1].src;
        }
        smallimg[2].onclick = function(){
            MainImg.src = smallimg[2].src;
        }
        smallimg[3].onclick = function(){
            MainImg.src = smallimg[3].src;
        }
    </script>
</body>
</html>
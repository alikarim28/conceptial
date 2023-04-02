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
    <style>
		table {
			width: 100%;
			border-collapse: collapse;
			margin: 20px 0;
		}
		th, td {
			padding: 10px;
			text-align: left;
			border: 1px solid #ddd;
		}
		th {
			background-color: #f2f2f2;
			color: #555;
		}
		tr:hover {
			background-color: #f5f5f5;
		}
	</style>
</head>
<body>
	<?php require "components/header.php";
	echo "</div> </div>";?>
    <div id="newpageheader">
        <h2>#StayHome</h2>
        <p>Save more by buying online</p>
	</div>
	
    <table>
	  <thead>
	    <tr>
	      <th>Product</th>
	      <th>Size</th>
	      <th>Price</th>
	      <th>Quantity</th>
	      <th>Update</th>
	      <th>Remove</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>
	      <td>Product 1</td>
	      <td>Medium</td>
	      <td>$10.00</td>
	      <td>  1</td>
	      <td><button>Update</button></td>
	      <td><button>Remove</button></td>
	    </tr>
	    <tr>
	      <td>Product 2</td>
	      <td>Large</td>
	      <td>$20.00</td>
	      <td>  1</td>
	      <td><button>Update</button></td>
	      <td><button>Remove</button></td>
	    </tr>
	    <!-- Add more rows as needed -->
	  </tbody>
	</table>

	<?php

		require "components/brand.php";
		require "components/footer.php";
	?>
	
</body>

</html>
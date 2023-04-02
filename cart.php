<?php
	require('includes/connection.php');
	 include("functions/common_functions.php");
?>
<?php
	if(isset($_POST['remove'])){
		$cart=$_POST['cart_id'];
	}
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
		.pay-button {
		font-size: 20px;
		padding: 10px 20px;
		background-color: #4CAF50;
		color: white;
		border: none;
		float: right;
		border-radius: 5px;
		cursor: pointer;
	}
	.pay-button:hover {
		background-color: #3e8e41;
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
	<form action="" method="POST" enctype="multipart/form-data">
		
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
		<?php 
			global $con;
			$ip=getIPAddress();
			$total=0;
			$cart_query="select * from `cart_details` where ip_address='$ip'";
			$result_query=mysqli_query($con,$cart_query);
			while($row=mysqli_fetch_array($result_query)){
				$cart_id=$row['cart_id'];
				$product_id=$row['product_id'];
				$quantity=$row['quantity'];
				$size=$row['size_id'];
				$select_product="select * from `product` where product_id=$product_id";
				$result_query1=mysqli_query($con,$select_product);
				while($row_product=mysqli_fetch_array($result_query1)){
					$product_price=$row_product['product_price'];
					$total+=$product_price*$quantity;
					$product_name=$row_product['product_title'];
				
		?>
	    <tr>
		<input type="hidden" name="cart_id" value='<?php echo"$cart_id"?>'>
	      <td><?php echo"$product_name" ?></td>
	      <td><?php echo"$size" ?></td>
	      <td><?php echo"$product_price" ?>$</td>
	      <td>  <?php echo"$quantity" ?></td>
	      <td><input type="number" name="value" id="value" value='<?php echo"$quantity"?>'>      <input type="submit" name="update_quantity" value="update quantity <?php echo"$cart_id"?>"></td>
	      <td><input type="submit" name="remove" value="remove <?php echo"$cart_id"?>"></td>
	    </tr>
	    <?php 
			}
		}
		?>
	  </tbody>
	  <tfoot>
		<tr>
			<th colspan="2"></th>
			<th>Total: <?php echo"$total"?>$</th>
			<th colspan="3"><button class="pay-button" onclick="pay()">Pay</button></th>
		</tr>
	</tfoot>
	</table>
	</form>
	<?php
		require "components/brand.php";
		require "components/footer.php";
	?>
	
</body>

</html>
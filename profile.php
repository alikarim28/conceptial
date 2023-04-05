<?php
	require('includes/connection.php');
	include("functions/common_functions.php");
	session_start();
	if(isset($_POST['ca'])){
		$address= $_POST['address'];
		$user=$_SESSION['username'];
		$query = "UPDATE `user_table` SET user_address='$address' WHERE username='$user'";
		mysqli_query($con, $query);
		
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
		.buttons {
  display: flex;
  justify-content: center;
  margin-top: 16px;
}

button {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
  padding: 8px 16px;
  border: none;
  border-radius: 4px;
  margin: 0 8px;
}

button:hover {
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
	<div class="buttons">
<h3>Welcome <?php 

	if(isset($_SESSION['username'])){
		$user=$_SESSION['username'];
	echo"$user";}
?></h3>
  <form action="logout.php" method="POST">
    <button type="submit">Log Out</button>
  </form>
  <button onclick="window.location.href='payment.php'">PAY</button>
</div>


<form action="" method="POST">
  <label for="address">New Address:</label>
  <input type="text" id="address" name="address" required>
  <button type="submit" name="ca">Update Address</button>
  
</form>

	

<h3 class ="text-center">All my orders</h3>
<?php
			global $con;
			$id_querry="select * from `user_table` where username='$user'";
			$result_id=mysqli_query($con,$id_querry);
			$row_id=mysqli_fetch_array($result_id);
			$user_id=$row_id['user_id'];
			$queryy="select * from `user_orders` where user_id='$user_id'";
			$result=mysqli_query($con,$queryy);
			$nb_count=mysqli_num_rows($result);
			if($nb_count>0){
		echo"
    <table>
	  <thead>
	    <tr>
	      <th>amount_due </th>
	      <th>invoice_number	</th>
	      <th>total_products</th>
	      <th>order_date	</th>
	      <th>order_status</th>
	    </tr>
	  </thead>

	  <tbody>";
			
			while($row=mysqli_fetch_array($result)){
				$amount_due=$row['amount_due'];
				$invoice_number=$row['invoice_number'];
				$total_products=$row['total_products'];
				$order_date=$row['order_date'];
				$order_status=$row['order_status'];
				
		?>
	    <tr>
		<input type="hidden" name="cart_id_<?php echo"$cart_id"?>" value='<?php echo"$cart_id"?>'>
	      <td><?php echo"$amount_due" ?>$</td>
	      <td><?php echo"$invoice_number" ?></td>
	      <td><?php echo"$total_products" ?></td>
	      <td>  <?php echo"$order_date" ?></td>
		  <td>  <?php echo"$order_status" ?></td>
	     
	    </tr>
	    <?php 
			}
		
		
	  echo "</tbody>
	</table>";
			}	
	?>
	<?php
		require "components/brand.php";
		require "components/footer.php";
	?>
	
</body>

</html>
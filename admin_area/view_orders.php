<?php
    include("../includes/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link href="../css/stylesheet.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/c161cb1301.js" crossorigin="anonymous"></script>

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
        
        .product_img{
            width: 100px;
            object-fit: contain;

        } 
	</style>

</head>
<body>
    <h1 class="text-center">View Products</h1>
    <div class="container">
    <?php
			global $con;
			$queryy="select * from `orders_pending`";
			$result=mysqli_query($con,$queryy);
			$nb_count=mysqli_num_rows($result);
			if($nb_count>0){
		echo"
    <table>
	  <thead>
	    <tr>
	      <th>user_id </th>
	      <th>invoice_number</th>
	      <th>product_id</th>
	      <th>quantity	</th>
		  <th>size</th>
	      <th>order_status</th>
          <th>change status<th>
	    </tr>
	  </thead>

	  <tbody>";
			
			while($row=mysqli_fetch_array($result)){
				$user_id=$row['user_id'];
				$invoice_number=$row['invoice_number'];
				$product_id=$row['product_id'];
				$quantity=$row['quantity'];
				$size=$row['size'];
				$order_status=$row['order_status'];
				
		?>
	    <tr>
		<input type="hidden" name="cart_id_<?php echo"$cart_id"?>" value='<?php echo"$cart_id"?>'>
	      <td><?php echo"$user_id" ?></td>
	      <td><?php echo"$invoice_number" ?></td>
	      <td><?php echo"$product_id" ?></td>
	      <td>  <?php echo"$quantity" ?></td>
		  <td>  <?php echo"$size" ?></td>
		  <td>  <?php echo"$order_status" ?></td>
          <td><a href='index.php?edit_status=<?php echo $invoice_number?>'><i class='fa-solid fa-pen-to-square' style='color: #000;'></i></a></td>
	    </tr>
	    <?php 
			}
		
		
	  echo "</tbody>
	</table>";
			}	
	?>
    </div>
</body>
</html>
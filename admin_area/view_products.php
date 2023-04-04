<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <h1>View Products</h1>
    <table>
        <thead>
        <tr>
            <th>Product Id</th>
            <th>Product title</th>
            <th>Product image</th>
            <th>Product Price</th>
            <th>Total sold</th>
            <th>Status</th>
            <th>edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $get_products = "SELECT * FROM `products`";
            $result = mysqli_query($con,$get_products);
            $number = 0;
            while($row = mysqli_fetch_assoc($result)){
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $prduct_image = $row['prduct_image'];
                $product_price = $row['product_price'];
                $status = $row['status'];
                ?>
            <tr>
                <td><?php echo $number;?></td>    
                <td><?php echo $product_id;?></td>
                <td><?php echo $product_title;?></td>
                <td><img src='./product_images/<?php echo $product_image;?>'></td>
                <td><?php echo $product_price;?></td>
                <td><?php echo $status;?></td>
                <td><a href='index.php?edit_products'><i class='fa-solid fa-pen-to-square' style='color: #fffff;'></i></a></td>
                <td><a href=''><i class='fa-solid fa-trash' style='color: #ffffff;'></i></a></td>
                <td><?php 
                    $get_count = "SELECT * From `orders_pending` where product_id = $product_id";
                    $result = mysqli_query($con,$get_count);
                    $rows_count=mysqli_num_rows($result);
                    echo $rows_count;             
                    ?></td>
            </tr>
            <?php }?>

        </tbody>    
    </table>
</body>
</html>
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
    <table>
        <thead>
        <tr>
            <th>Slno</th>
            <th>brand title</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $get_categories= " select * from `brands` ";
            $result = mysqli_query($con,$get_categories);
            while($rows = mysqli_fetch_assoc($result)){
                $brand_id = $rows['brand_id'];
                $brand_title = $rows['brand_title'];
                echo"
            <tr>
                <td>$brand_id</td>
                <td>$brand_title</td>
                <td><a href='index.php?edit_brand=$brand_id'><i class='fa-solid fa-pen-to-square' style='color: #000;'></i></a></td>
                <td><a href='index.php?delete_brand=$brand_id'><i class='fa-solid fa-trash' style='color: #000000;'></i></a></td>
                
            </tr>";
        }
        ?>
        </tbody>    
    </table>
    </div>
</body>
</html>
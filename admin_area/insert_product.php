<?php
require "../includes/connection.php";
if(isset($_POST['insert_product'])){
        $product_title = $_POST['product_title'];
        $description = $_POST['description'];
        $product_keywords = $_POST['product_keywords'];
        $product_category = $_POST['product_category'];
        $product_brand = $_POST['product_brand'];
        $product_price = $_POST['product_price'];


        $product_image1 = $_FILES['product_image1']['name'];
        $product_image2= $_FILES['product_image2']['name'];
        $product_image3 = $_FILES['product_image3']['name'];


        $temp_image1 = $_FILES['product_image1']['tmp_name'];
        $temp_image2= $_FILES['product_image2']['tmp_name'];
        $temp_image3 = $_FILES['product_image3']['tmp_name'];
    if($product_title=='' or $description=='' or $product_keywords==''or $product_category==''
    or $product_brand==''or $product_price=='' or $product_image1=='' or $product_image2==''or $product_image3==''){
        echo "<script>alert('please fill all the available fields')</script>";
    }else{
        move_uploaded_file($temp_image1,"./product_images/$product_image1");
        move_uploaded_file($temp_image2,"./product_images/$product_image2");
        move_uploaded_file($temp_image3,"./product_images/$product_image3");

        $insert_product = "insert into `product`(product_title,product_description,
        product_keywords,category_id,brand_id,product_image1,product_image2,
        product_image3,product_price,date,status) 
        values('$product_title','$description','$product_keywords', '$product_category'
        ,'$product_brand','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'true')";
        $result_query=mysqli_query($con,$insert_product);
        if($result_query){
            echo "<script>alert('Successfully inserted the products')</script>";
        }else{
            echo"error in the querry";
        }
    }

}


?>

<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
    <title> Insert Products</title>
</head>
<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">
            Insert Products
        </h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">
                        Product title
                </label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Enter Product title" autocomplete="off" required>
            </div>

            <div class="form-outline mb-4 w-50 m-auto"><!--------description-------->
                <label for="description" class="form-label">
                        Product Description
                </label>
                <input type="text" name="description" id="description" class="form-control" placeholder="Enter Product Description" autocomplete="off" required>
            </div>

            <div class="form-outline mb-4 w-50 m-auto"><!--------keywords-------->
                <label for="product_keywords" class="form-label">
                        Product keywords
                </label>
                <input type="text" name="product_keywords" id="product_keywords" class="form-control" placeholder="Enter Product keywords" autocomplete="off" required>
            </div>

            <div class="form-outline mb-4 w-50 m-auto"><!--------Category-------->
            <select class="form-select" name="product_category">
                <option selected>Select a Category</option>
                <?php 
                    $select_query="Select * from `categories`";
                    $result_query=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $category_title=$row['category_title'];
                        $category_id=$row['category_id'];
                        echo"<option value='$category_id'>$category_title</option>";
                    }             
                ?>
            </select>
            </div>
            <div class="form-outline mb-4 w-50 m-auto"><!--------brand-------->
            <select class="form-select" name="product_brand">
                <option selected>Select a Brand</option>
                <?php 
                    $select_query="Select * from `brands`";
                    $result_query=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $brand_title=$row['brand_title'];
                        $brand_id=$row['brand_id'];
                        echo"<option value='$brand_id'>$brand_title</option>";
                    }             
                ?>
            </select>
            </div>
            <div class="form-outline mb-4 w-50 m-auto"><!--------image1-------->
                <label for="product_image1" class="form-label">
                        Product Image 1
                </label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required>
            </div>
            <div class="form-outline mb-4 w-50 m-auto"><!--------image2-------->
                <label for="product_image2" class="form-label">
                        Product Image 2
                </label>
                <input type="file" name="product_image2" id="product_image2" class="form-control" required>
            </div>
            <div class="form-outline mb-4 w-50 m-auto"><!--------image3-------->
                <label for="product_image3" class="form-label">
                        Product Image 3
                </label>
                <input type="file" name="product_image3" id="product_image3" class="form-control" required>
            </div>
            <div class="form-outline mb-4 w-50 m-auto"><!--------price-------->
                <label for="product_price" class="form-label">
                        Product price
                </label>
                <input type="text" name="product_price" id="product_price" class="form-control" placeholder="Enter Product price" autocomplete="off" required>
            </div>
            <div class="form-outline mb-4 w-50 m-auto"><!--------price-------->
                <input type="submit" name="insert_product" value="Insert product" class="btn btn-info">
            </div>
            
        </form>
    </div>
</body>


</html>
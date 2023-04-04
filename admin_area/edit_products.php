<?php
    include("../includes/connection.php");
    if(isset($_GET['edit_products'])){
        $edit_id = $_GET['edit_products'];
        $get_product = "Select * from `product` where product_id = $edit_id";
        $result = mysqli_query($con,$get_product);
        $row = mysqli_fetch_assoc($result);
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_keywords = $row['product_keywords'];
        $small_quantity = $row['small_quantity'];
        $medium_quantity = $row['medium_quantity'];
        $large_quantity = $row['large_quantity'];
        $gender_id = $row['gender_id'];
        $brand_id = $row['brand_id'];
        $category_id = $row['category_id'];
        $product_image1 = $row['product_image1'];
        $product_image2 = $row['product_image2'];
        $product_image3 = $row['product_image3'];
        $product_price = $row['product_price'];




        $select_category = "Select * from `categories` where category_id=$category_id";
        $result_category = mysqli_query($con,$select_category);
        $row_category = mysqli_fetch_assoc($result_category);
        $category_title = $row_category['category_title'];

        $select_brand = "Select * from `brands` where brand_id=$brand_id";
        $result_brand = mysqli_query($con,$select_brand);
        $row_brand = mysqli_fetch_assoc($result_brand);
        $brand_title = $row_brand['brand_title'];

        $select_gender = "Select * from `gender` where gender_id=$gender_id";
        $result_gender = mysqli_query($con,$select_gender);
        $row_gender = mysqli_fetch_assoc($result_gender);
        $gender_title = $row_gender['gender_title'];



    }
?>
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link href="../css/stylesheet.css" rel="stylesheet">    
<style>
    .product_img{
        width: 100px;
        object-fit: contain;
    }
</style>
</head>
  
  <div class="container mt-5">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline w-50 m-auto mb-4">
                <label for="product_image3" class="form-label">Product title</label>
                <input type="text" id="product_title" name= "product_title" class="form-control" value ="<?php echo $product_title?>"required>

            </div>
            <div class="form-outline w-50 m-auto mb-4">
                <label for="product_desc" class="form-label">Product Description</label>
                <input type="text" id="product_desc" name= "product_desc" class="form-control" value ="<?php echo $product_description?>" required>
            </div>
            <div class="form-outline w-50 m-auto mb-4">
                <label for="product_keywords" class="form-label">Product Keywords</label>
                <input type="text" id="product_keywords" name= "product_keywords" class="form-control" value ="<?php echo $product_keywords?>" required>
            </div>
            <div class="form-outline mb-4 w-50 m-auto"><!--------small quantity-------->
                <label for="small_quantity" class="form-label">
                    Small quantity
                </label>
                <input type="number" name="small_quantity" id="small_quantity"" class="form-control" placeholder="Enter small quantity"  autocomplete="off" value ="<?php echo $small_quantity?>"required>
            </div>
            <div class="form-outline mb-4 w-50 m-auto"><!--------medium quantity-------->
                <label for="medium_quantity" class="form-label">
                    Medium quantity
                </label>
                <input type="number" name="medium_quantity" id="medium_quantity" class="form-control" placeholder="Enter medium quantity" autocomplete="off" value ="<?php echo $medium_quantity?>" required>
            </div>
            <div class="form-outline mb-4 w-50 m-auto"><!--------large quantity-------->
                <label for="large_quantity" class="form-label">
                    Large quantity
                </label>
                <input type="number" name="large_quantity" id="large_quantity" class="form-control" placeholder="Enter large quantity" autocomplete="off" value ="<?php echo $large_quantity?>" required >
            </div>
            <div class="form-outline w-50 m-auto mb-4">
                <select name="product_category" class="form-select">
                    <option value="<?php echo $category_id?>"><?php echo $category_title?>  </option>
                    <?php
                     $select_query="Select * from `categories` where category_title != '$category_title'";
                     $result_query=mysqli_query($con,$select_query);
                     while($row=mysqli_fetch_assoc($result_query)){
                         $category_title=$row['category_title'];
                         $category_id=$row['category_id'];
                         echo"<option value='$category_id'>$category_title</option>";
                     }          
                    ?> 
                </select>
            </div>
            <div class="form-outline w-50 m-auto mb-4">
                <select name="product_brand" class="form-select">
                    <option value="<?php echo $brand_id?>"><?php echo $brand_title?></option>
                    <?php 
                    $select_query="Select * from `brands` where brand_title != '$brand_title'";
                    $result_query=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $brand_title=$row['brand_title'];
                        $brand_id=$row['brand_id'];
                        echo"<option value='$brand_id'>$brand_title</option>";
                    }             
                ?>
                </select>
            </div>
            <div class="form-outline w-50 m-auto mb-4">
                <select name="product_category" class="form-select">
                    <option value="<?php echo $gender_id?>"><?php echo $gender_title?></option>
                    <?php 
                    $select_query="Select * from `gender` where gender_title != '$gender_title'";
                    $result_query=mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $gender_title=$row['gender_title'];
                        $gender_id=$row['gender_id'];
                        echo"<option value='$gender_id'>$gender_title</option>";
                    }             
                ?>
                </select>
            </div>
            <div class="form-outline w-50 m-auto mb-4">
                <label for="product_image1" class="form-label">Product image 1</label>
                <div class="d-flex">
                <input type="file" id="product_image1" name= "product_image1" class="form-control w-90 m-auto" required>
                <img src="./product_images/<?php echo $product_image1?>" alt="" class="product_img">
                </div>
            </div>
            <div class="form-outline w-50 m-auto mb-4">
                <label for="product_image1" class="form-label">Product image 2</label>
                <div class="d-flex">
                <input type="file" id="product_image1" name= "product_image1" class="form-control w-90 m-auto" required>
                <img src="./product_images/<?php echo $product_image2?>" alt="" class="product_img">
                </div>
            </div>
            <div class="form-outline w-50 m-auto mb-4">
                <label for="product_image1" class="form-label">Product image 3</label>
                <div class="d-flex">
                <input type="file" id="product_image1" name= "product_image1" class="form-control w-90 m-auto" required>
                <img src="./product_images/<?php echo $product_image3?>" alt="" class="product_img">
                </div>
            </div>
            <div class="form-outline w-50 m-auto mb-4">
                <label for="product_price" class="form-label">Product Price</label>
                <input type="text" id="product_price" name= "product_price" class="form-control" value ="<?php echo $product_price?>"required>
            </div>
            <div class="text_center">
                <input type="submit" name ="edit_product" value="Update Product" class="btn btn-info px-3 mb-3">
            </div>
        </form>
    </div>
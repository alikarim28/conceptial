<?php
    require "./includes/connection.php";
    function getproducts(){
        global $con;


        //conditon:
        if(!isset($_GET['category'])){
            if(!isset($_GET['brand'])){
                $select_query= "Select * from `product` ORDER BY rand()";
                $result_query= mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query)){
                    $product_id=$row['product_id'];
                    $product_title=$row['product_title'];
                    $product_description = $row['product_description'];
                    $product_image1 = $row['product_image1'];
                    $product_price = $row['product_price'];
                    echo"<div class=\"col-4\"	onclick=\"window.location.href='sproduct.php'\">
                    <img src=\"./admin_area/product_images/$product_image1\" alt='$product_image1'>
                    <h4>$product_title</h4>
                    <h5>$product_description</h5>
                    <p>$product_price</p>
                    </div>";
                }
            }
        }
    }
    function getcategories(){
        global $con;
        $select_categories = "Select * from `categories`";
        $result_query = mysqli_query($con,$select_categories);
        while($row=mysqli_fetch_assoc($result_query)){
            $category_title = $row['category_title'];
            $category_id = $row['category_id'];
            echo "<option value='$category_id'>$category_title</option>";
        }
    }

    //getting categories
    function get_unique_categories(){
        global $con;
        if(isset($_GET['category'])){
            $category_id = $_GET['category'];
                $select_query= "Select * from `product` where category_id = $category_id";
                $result_query= mysqli_query($con,$select_query);
                while($row=mysqli_fetch_assoc($result_query)){
                    $product_id=$row['product_id'];
                    $product_title=$row['product_title'];
                    $product_description = $row['product_description'];
                    $product_image1 = $row['product_image1'];
                    $product_price = $row['product_price'];
                    echo"<div class=\"col-4\"	onclick=\"window.location.href='sproduct.php'\">
                    <img src=\"./admin_area/product_images/$product_image1\" alt='$product_image1'>
                    <h4>$product_title</h4>
                    <h5>$product_description</h5>
                    <p>$product_price</p>
                    </div>";
                }
            }
        }

        function get_unique_gender(){
            global $con;
            if(isset($_GET['gender'])){
                $gender_id = $_GET['gender'];
                    $select_query= "Select * from `product` where product_gender = $gender_id";
                    $result_query= mysqli_query($con,$select_query);
                    while($row=mysqli_fetch_assoc($result_query)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_description = $row['product_description'];
                        $product_image1 = $row['product_image1'];
                        $product_price = $row['product_price'];
                        echo"<div class=\"col-4\"	onclick=\"window.location.href='sproduct.php'\">
                        <img src=\"./admin_area/product_images/$product_image1\" alt='$product_image1'>
                        <h4>$product_title</h4>
                        <h5>$product_description</h5>
                        <p>$product_price</p>
                        </div>";
                    }
                }
            }
    function getbrands(){
        global $con;
        $select_brand = "Select * from `brands`";
        $result_query = mysqli_query($con,$select_brand);
        while($row=mysqli_fetch_assoc($result_query)){
            $brand_title = $row['brand_title'];
            $brand_id = $row['brand_id'];
            echo "<option value='$brand_id'>$brand_title</option>";
        }
    }

?>
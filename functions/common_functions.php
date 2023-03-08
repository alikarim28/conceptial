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
                    <p>$product_price$</p>
                    </div>";
                }
            }
        }
    }
    function getcategories(){
        global $con;
        $t="";
        $select_categories = "Select * from `categories`";
        if(isset($_GET['category'])){
            $category_id_selected = $_GET['category'];
            $t = "selected"; 
        }
        $result_query = mysqli_query($con,$select_categories);
        while($row=mysqli_fetch_assoc($result_query)){
            $category_title = $row['category_title'];
            $category_id = $row['category_id'];
            if($category_id == $category_id_selected){
                echo "<option value='$category_id' selected>$category_title</option>";
            }else{
            echo "<option value='$category_id' >$category_title</option>";
            }
        }
    }

    //getting categories
    function get_unique_categories(){
        global $con;
        if(isset($_GET['category'])){
            $category_id = $_GET['category'];
                $select_query= "Select * from `product` where category_id = $category_id";
                $result_query= mysqli_query($con,$select_query);
                $num_rows=mysqli_num_rows($result_query);
                if($num_rows==0){
                    echo"<h2> NO STOCK FOR THIS CATEGORY";
                }
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
                    <p>$product_price$</p>
                    </div>";
                }
            }
        }

        function get_unique_brands(){
            global $con;
        if(isset($_GET['brand'])){
            $brand_id = $_GET['brand'];
                $select_query= "Select * from `product` where brand_id = $brand_id";
                $result_query= mysqli_query($con,$select_query);
                $num_rows=mysqli_num_rows($result_query);
                if($num_rows==0){
                    echo"<h2> NO STOCK FOR THIS BRAND";
                }
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
                    <p>$product_price$</p>
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
                    $num_rows=mysqli_num_rows($result_query);
                    if($num_rows==0){
                        echo"<h2> NO STOCK FOR THIS GENDER";
                    }
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
        if(isset($_GET['brand'])){
            $brand_id_selected = $_GET['brand'];
        }
        $result_query = mysqli_query($con,$select_brand);
        while($row=mysqli_fetch_assoc($result_query)){
            $brand_title = $row['brand_title'];
            $brand_id = $row['brand_id'];
            if($brand_id == $brand_id_selected){
                echo "<option value='$brand_id' selected>$brand_title</option>";
            }else{
            echo "<option value='$brand_id' >$brand_title</option>";
            }
        }
    }


    function get_all_products_intersection(){
        global $con;
        if(isset($_GET['brand'])){
            $brand_id=$_GET['brand']; 
        }
        if(isset($_GET['category'])){
            $category_id=$_GET['category']; 
        }

        
       
        $select_query = "SELECT * FROM `product` WHERE 1=1";
        if(!empty($category_id)){
            $select_query .= " AND `category_id` IN ('$category_id') ";
        }
        if(!empty($brand_id)){
            $select_query .= " AND `brand_id` IN ('$brand_id') ";
        }
        $result_query= mysqli_query($con,$select_query);
                    $num_rows=mysqli_num_rows($result_query);
                    if($num_rows==0){
                        echo"<h2> NO STOCK FOR THIS GENDER";
                    }
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

?>
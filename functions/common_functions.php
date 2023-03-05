<?php
    require "./includes/connection.php";
    function getproducts(){
        global $con;
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





?>
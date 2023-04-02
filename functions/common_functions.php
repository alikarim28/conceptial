<?php
    require "./includes/connection.php";
    function search_products(){
        global $con;
        if(isset($_GET['search_data_product'])){
            $search_data_value=$_GET['search_data'];
            $select_query= "Select * from `product` WHERE product_keywords like '%$search_data_value%' ";
            $result_query= mysqli_query($con,$select_query);
            if(mysqli_num_rows($result_query)){
                while($row=mysqli_fetch_assoc($result_query)){
                    $product_id=$row['product_id'];
                    $product_title=$row['product_title'];
                    $product_description = $row['product_description'];
                    $product_image1 = $row['product_image1'];
                    $product_price = $row['product_price'];
                    echo"<div class=\"col-4\"	onclick=\"window.location.href='sproduct.php?product_id=$product_id'\">
                    <img src=\"./admin_area/product_images/$product_image1\" alt='$product_image1'>
                    <h4>$product_title</h4>
                    <h5>$product_description</h5>
                    <p>$product_price$</p>
                    </div>";
                }
            }else{
                echo"<h2 style ='color:red'> NO STOCK for this Search";
            }
        }
    }
    //get categories for select
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
    //get brands for select
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
    function getsizes(){
        global $con;
        $select_size = "Select * from `sizes`";
        if(isset($_GET['size'])){
            $size_id_selected = $_GET['size'];
        }
        $result_query = mysqli_query($con,$select_size);
        while($row=mysqli_fetch_assoc($result_query)){
            $size_title = $row['size_title'];
            $size_id = $row['size_id'];
            if($size_id == $size_id_selected){
                echo "<option value='$size_id' selected>$size_title</option>";
            }else{
            echo "<option value='$size_id' >$size_title</option>";
            }
        }
    }
    function getgenders(){
        global $con;
        $select_gender = "Select * from `gender`";
        if(isset($_GET['gender'])){
            $gender_id_selected = $_GET['gender'];
        }
        $result_query = mysqli_query($con,$select_gender);
        while($row=mysqli_fetch_assoc($result_query)){
            $gender_title = $row['gender_title'];
            $gender_id = $row['gender_id'];
            if($gender_id == $gender_id_selected){
                echo "<option value='$gender_id' selected>$gender_title</option>";
            }else{
            echo "<option value='$gender_id' >$gender_title</option>";
            }
        }
    }
        function getpricef(){
        global $con;
        $select_pricef = "Select * from `pricef`";
        if(isset($_GET['pricef'])){
            $pricef_id_selected = $_GET['pricef'];
        }
        $result_query = mysqli_query($con,$select_pricef);
        while($row=mysqli_fetch_assoc($result_query)){
            $pricef_title = $row['pricef_title'];
            $pricef_id = $row['pricef_id'];
            if($pricef_id == $pricef_id_selected){
                echo "<option value='$pricef_id' selected>$pricef_title</option>";
            }else{
            echo "<option value='$pricef_id' >$pricef_title</option>";
            }
        }
    }
    
    

   
        
        function get_all_products_intersection(){
            global $con;
            if(isset($_GET['size'])){
                $size_id=$_GET['size']; 
            }
            if(isset($_GET['brand'])){
                $brand_id=$_GET['brand']; 
            }
            if(isset($_GET['category'])){
                $category_id=$_GET['category']; 
            }
            if(isset($_GET['pricef'])){
                $pricef_id=$_GET['pricef']; 
            }
            if(isset($_GET['gender'])){
                $gender_id=$_GET['gender']; 
            }
            $select_query = "SELECT * FROM `product` WHERE 1=1";
            if(!empty($category_id)){
                $select_query .= " AND `category_id` IN ('$category_id') ";
            }
            if(!empty($gender_id)){
                $select_query .= " AND `gender_id` IN ('$gender_id') ";
            }
            if(!empty($brand_id)){
                $select_query .= " AND `brand_id` IN ('$brand_id') ";
            }
            if(!empty($size_id)){
                if($size_id==1){
                $select_query .= " AND `small_quantity`> 0 ";
                }else if($size_id==2){
                    $select_query .= " AND `medium_quantity`> 0 ";
                    }else if($size_id==3){
                        $select_query .= " AND `large_quantity`> 0 ";
                        }
            }if(!empty($pricef_id)){
                if($pricef_id==1){
                $select_query .= " AND `product_price` BETWEEN 0 AND 25 ";
                }else if($pricef_id==2){
                    $select_query .= " AND `product_price` BETWEEN 25 AND 50 ";
                    }else if($pricef_id==3){
                        $select_query .= " AND `product_price` BETWEEN 50 AND 100";
                        }else if($pricef_id==4){
                            $select_query .= " AND `product_price` >100";
                            }
            }
    
        $result_query= mysqli_query($con,$select_query);
                    $num_rows=mysqli_num_rows($result_query);
                    if($num_rows==0){
                        echo"<h2 style ='color:red'> NO STOCK for this FILTER";
                    }
                    while($row=mysqli_fetch_assoc($result_query)){
                        $product_id=$row['product_id'];
                        $product_title=$row['product_title'];
                        $product_description = $row['product_description'];
                        $product_image1 = $row['product_image1'];
                        $product_price = $row['product_price'];
                        echo"<div class=\"col-4\"	onclick=\"window.location.href='sproduct.php?product_id=$product_id'\">
                        <img src=\"./admin_area/product_images/$product_image1\" alt='$product_image1'>
                        <h4>$product_title</h4>
                        <h5>$product_description</h5>
                        <p>$product_price</p>
                        </div>";
                    }
    }

    function get_9_first_products_intersection(){
        global $con;
        $select_query= 'Select * from `product` order by rand() LIMIT 0,9';
    $result_query2= mysqli_query($con,$select_query);
                $num_rows=mysqli_num_rows($result_query2);
                if($num_rows==0){
                    echo"<h2 style ='color:red'> NO STOCK for this FILTER";
                }
                while($row=mysqli_fetch_assoc($result_query2)){
                    $product_id=$row['product_id'];
                    $product_title=$row['product_title'];
                    $product_description = $row['product_description'];
                    $product_image1 = $row['product_image1'];
                    $product_price = $row['product_price'];
                    echo"<div class=\"col-4\"	onclick=\"window.location.href='sproduct.php?product_id=$product_id'\">
                    <img src=\"./admin_area/product_images/$product_image1\" alt='$product_image1'>
                    <h4>$product_title</h4>
                    <h5>$product_description</h5>
                    <p>$product_price</p>
                    </div>";
                }
}
    function view_product(){
        global $con;
        if(isset($_GET['product_id'])){
        if(!isset($_GET['category'])){
            if(!isset($_GET['brand'])){
                if(!isset($_GET['size'])){
                    if(!isset($_GET['gender'])){
                        if(!isset($_GET['pricef'])){
                            $product_id=$_GET['product_id'];
                            $select_query= "Select * from `product` where product_id=$product_id";
                            $result_query= mysqli_query($con,$select_query);
                            while($row=mysqli_fetch_assoc($result_query)){
                                $product_id=$row['product_id'];
                                $product_title=$row['product_title'];
                                $product_description = $row['product_description'];
                                $product_image1 = $row['product_image1'];
                                $product_image2 = $row['product_image2'];
                                $product_image3 = $row['product_image3'];
                                $product_price = $row['product_price'];
                                $small_quantity=$row['small_quantity'];
                                $medium_quantity=$row['medium_quantity'];
                                $large_quantity=$row['large_quantity'];
                                $category_id=$row['category_id'];
                                $brand_id=$row['brand_id'];
                                $gender_id=$row['gender_id'];
                                $select_query1= "Select * from `categories` where category_id=$category_id";
                                $result_query1= mysqli_query($con,$select_query1);
                                $row1=mysqli_fetch_assoc($result_query1);
                                $category=$row1['category_title'];
                                if($gender_id==1){
                                    $gender='Men';
                                }
                                else{
                                    $gender='Female';
                                }
                                echo' <div id="prodetails" class="section-p1">
                                <div class="single-pro-image">
                                    <img src="./admin_area/product_images/'.$product_image1.'" width="100%" id="MainImg">

                                    <div class="small-img-group">
                                        <div class="small-img-col">
                                            <img src="./admin_area/product_images/'.$product_image2.'" width="100%" class="small-img">
                                        </div>
                                        <div class="small-img-col">
                                            <img src="./admin_area/product_images/'.$product_image3.'" width="100%" class="small-img">
                                        </div>
                                        <div class="small-img-col">
                                            <img src="./admin_area/product_images/'.$product_image1.'" width="100%" class="small-img">
                                        </div>
                                    </div>
                        
                                </div>
                                <div class="single-pro-details">
                                    <h6>Home / '.$product_title.'</h6>
                                    <h4>'.$gender.'\'s Fashion '.$category.'</h4>
                                    <h2> '.$product_price.'$</h2>
                                    <select name="select_size" id="select">
                                        <option> Select Size</option>';
                                        if($small_quantity>0)
                                        echo'<option> Small</option>';
                                        if($medium_quantity>0)
                                        echo'<option> Medium</option>';
                                        if($large_quantity>0)
                                        echo'<option> Large</option>';
                                        echo'</select>    
                                    
                                    <input type="number" name="value" id="value" value="1">
                                    <button type="submit" class="btn" onclick="addToCart()">Add To Cart</button>
                                    <script>
                                    function addToCart() {
                                    var select = document.getElementById("select");
                                    var size = select.options[select.selectedIndex].value;
                                    var v = document.getElementById("value");
                                    var val = v.value;
                                    var url = "sproduct.php?product_id='.$product_id.'&add_to_cart='.$product_id.'&select_size=" + size+ "&value="+val;
                                    window.location.href = url;
                                    }
                                    </script>
                                    <h4>Product Details</h4>
                                    <span>
                                    '.$product_description.'
                                    </span>
                                </div>
                            </div>';
                            }
                        }
                    }
                }
            }
        }
    }
    }

    // get ip address
    function getIPAddress() {  
        //whether ip is from the share internet  
         if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                    $ip = $_SERVER['HTTP_CLIENT_IP'];  
            }  
        //whether ip is from the proxy  
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
         }  
    //whether ip is from the remote address  
        else{  
                 $ip = $_SERVER['REMOTE_ADDR'];  
         }  
         return $ip;  
    }  


    function cart(){
        if(isset($_GET['add_to_cart']) && isset($_GET['select_size']) && isset($_GET['value']) ){
            
            global $con;
            $ip=getIPAddress();
            $size= $_GET["select_size"];
            $quantity= $_GET["value"];

            $get_product_id= $_GET['add_to_cart'];
            $select_query= "select * from `cart_details` where ip_address='$ip' and product_id =$get_product_id  and size_id='$size'";
            $result_query=mysqli_query($con,$select_query);
            $row=mysqli_num_rows($result_query);
            if($row>0){
                echo"<script>alert('already present in your cart')</script>";
                echo"<script>window.open('index.php','_self')</script>";
            }else{
                $insert_query="insert into `cart_details` (product_id,ip_address,quantity,size_id) values ($get_product_id,'$ip',$quantity,'$size')";
                $result_query=mysqli_query($con,$insert_query);
                echo"<script>alert('your item has beeen added')</script>";
                echo"<script>window.open('index.php','_self')</script>";
            }

        }
    }

    function get_total_price(){
        global $con;
        $ip=getIPAddress();
        $total_price=0;
        $cart_query="select * from `cart_details` where ip_address='$ip'";
        $result_query=mysqli_querry($con,$cart_query);
        while($row=mysqli_fetch_array($result_query)){
            $product_id=$row['product_id'];
            $quantity=$row['quantity'];
            $select_product="select * from `product` where product_id=$product_id";
            $result_query1=mysqli_querry($con,$select_product);
            while($row_product=mysqli_fetch_array($result_query1)){
                $product_price=array($row_product['product_price']);
                $product_value=array_sum($product_price);
                $tolal+=$product_value*$quantity;
            }
        }
        return $tolal;
    }
?>
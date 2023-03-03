<?php
    include("../includes/connection.php");
    if(isset($_POST['insert_brand'])){
        if(!empty($_POST['brand_title'])){ 
            $brand_title=$_POST['brand_title'];
            $select_query = "Select * from `brands` where brand_title ='$brand_title'";
            $resut_query = mysqli_query($con,$select_query);
            $number = mysqli_num_rows($resut_query);
            if($number>0){
                echo "<script>alert('Brand already in the database')</script>";
            }else{
                $insert_querry="insert into `brands` (brand_title) values('$brand_title')";
                $result = mysqli_query($con,$insert_querry);
                if($result){
                    echo "<script>alert('Brand has been inserted seccessfully')</script>";
                } 
            }
        }
    }

?>
<div class="form-inner">
<form action="" method="post" style="margin-bottom:2px" >
    <div>
        <div class="field">
            <input type="text" placeholder="New Brand Name" name="brand_title" required>
        </div>
        <div class="field btn1"style=" margin-top:10px">
            <div class="btn1-layer"></div>
            <input type="submit" name='insert_brand'  value="Insert Brands">
        </div>
    </div>
</form> 
</div>
<?php
    include("../includes/connection.php");
    if(isset($_POST['insert_cat'])){
        $category_title=$_POST['cat_title'];
        $select_query = "Select * from `categories` where category_title ='$category_title'";
        $resut_query = mysqli_query($con,$select_query);
        $number = mysqli_num_rows($resut_query);
        if($number>0){
            echo "<script>alert('Category already in the database')</script>";
        }else{
            $insert_querry="insert into `categories` (category_title) values('$category_title')";
            $result = mysqli_query($con,$insert_querry);
            if($result){
                echo "<script>alert('Category has been inserted seccessfully')</script>";
            }else {
                echo "error";
            }
        }
    }
?>
<div class="form-inner">
<form action="" method="post" style="margin-bottom:2px">
    <div>
        <div class="field">
            <input type="text" placeholder="New Category name" name="cat_title">
        </div>
        <div class="field btn1"style=" margin-top:10px">
            <div class="btn1-layer"></div>
                <input type="submit" name='insert_cat'  value="Insert Categories">
            </div>
    </div>
</form> 
</div>
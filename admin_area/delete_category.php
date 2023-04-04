<?php
include("../includes/connection.php");
    if(isset($_GET['delete_category'])){
        $delete_id = $_GET['delete_category'];

        $delete_qery = 'DELETE from `categories`  where category_id = '.$delete_id;
        $result_product =  mysqli_query($con,$delete_qery);
        if($result_product){
            echo "<script>alert('category deleted successfully')</script>";
            echo "<script>window.open('./index.php','_self')</script>";
        }else{
            die("error");
        }
    }

?>
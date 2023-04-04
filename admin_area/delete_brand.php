<?php
    include("../includes/connection.php");
    if(isset($_GET['delete_brand'])){
        $delete_id = $_GET['delete_brand'];

        $delete_qery = 'DELETE from `brands`  where brand_id = '.$delete_id;
        $result_product =  mysqli_query($con,$delete_qery);
        if($result_product){
            echo "<script>alert('brands deleted successfully')</script>";
            echo "<script>window.open('./index.php','_self')</script>";
        }else{
            die("error");
        }
    }

?>
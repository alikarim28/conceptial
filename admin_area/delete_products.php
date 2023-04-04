<?php
    if(isset($_GET['delete_products'])){
        $delete_id = $_GET['delete_products'];

        $delete_qery = 'DELETE from `product`  where product_id = $delete_id';
        $result_product =  mysqli_query($con,$delete_qery);
        if($result_product){
            echo "<script>alert('product deleted successfully')</script>";
            echo "<script>window.open('./index.php','_self')</script>";
        }else{
            die("error");
        }
    }

?>
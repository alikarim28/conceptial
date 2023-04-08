<?php 
include "../includes/connection.php";
    if(isset($_GET['edit_status'])){
        $invoice = $_GET['edit_status'];
    }
?>

<div class="container mt-5">
        <form action="" method="post" enctype="multipart/form-data">
            <select name='status'>
                <option value='pending'>Pending</option>
                <option value = 'delivered'>delivered</option>
                <option value = 'Checked'>Checked</option>
            </select>
        </form>
        <div class="text_center">
                <input type="submit" name ="edit_status" value="Update Product" class="btn btn-info px-3 mb-3">
        </div>
</div>

<?php
    if(isset($_POST['edit_status'])){
            $value= $_POST['status'];
    }
    $sql = "Update `orders_pending` set order_status= '$value' where invoice_number = '$invoice'";
    $result = mysqli_query($con,$sql);
    if($result){
        echo "<script>alert('status has been changed seccessfully')</script>";
    }else{
        echo "error";
    }
?>
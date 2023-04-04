<?php
include"../includes/connection.php";
    if(isset($_GET['edit_brand'])){
        $edit_brand = $_GET['edit_brand'];
        $select_brand = "Select * from `brands` where brand_id=$edit_brand";
        $result_brand = mysqli_query($con,$select_brand);
        $row_brand = mysqli_fetch_assoc($result_brand);
        $brand_title = $row_brand['brand_title'];
    }
    if(isset($_POST['edit_cat'])){
        $cat_title = $_POST['brand_title'];
        $update_brand = "update `brands` set brand_title = '$cat_title' where brand_id = $edit_brand";
        $result_cat = mysqli_query($con,$update_brand);
        if($result_cat){
            echo "<script>alert('brand updated successfully')</script>";
            echo "<script>window.open('./index.php','_self')</script>";
        }
    }
?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
<div class="container mt-5">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline w-50 m-auto mb-4">
                <label for="brand" class="form-label">brand title</label>
                <input type="text" id="brand_title" name= "brand_title" class="form-control" value ="<?php echo $brand_title?>"required>
            </div>
            <div class="text_center">
                <input type="submit" name ="edit_cat" value="Update brand" class="btn btn-info px-3 mb-3">
            </div>
        </form>
    </div>
<?php
include"../includes/connection.php";
    if(isset($_GET['edit_category'])){
        $edit_category = $_GET['edit_category'];
        $select_category = "Select * from `categories` where category_id=$edit_category";
        $result_category = mysqli_query($con,$select_category);
        $row_category = mysqli_fetch_assoc($result_category);
        $category_title = $row_category['category_title'];
    }
    if(isset($_POST['edit_cat'])){
        $cat_title = $_POST['category_title'];
        $update_category = "update `categories` set category_title = '$cat_title' where category_id = $edit_category";
        $result_cat = mysqli_query($con,$update_category);
        if($result_cat){
            echo "<script>alert('category updated successfully')</script>";
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
                <label for="category" class="form-label">category title</label>
                <input type="text" id="category_title" name= "category_title" class="form-control" value ="<?php echo $category_title?>"required>
            </div>
            <div class="text_center">
                <input type="submit" name ="edit_cat" value="Update category" class="btn btn-info px-3 mb-3">
            </div>
        </form>
    </div>
<?php
    if(isset($_GET['edit_products'])){
        $edit_id = $_GET['edit_products'];
    }
?>
  
  <div class="container mt-5">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-outline w-50 m-auto">
                <label for="product_title" class="form-label">Product title</label>
                <input type="text" id="product_title" name= "product_title" class="form-control" required>

            </div>
            <div class="form-outline w-50 m-auto">
                <label for="product_desc" class="form-label">Product Description</label>
                <input type="text" id="product_desc" name= "product_desc" class="form-control" required>
            </div>
            <div class="form-outline w-50 m-auto">
                <label for="product_keywords" class="form-label">Product Keywords</label>
                <input type="text" id="product_keywords" name= "product_keywords" class="form-control" required>
            </div>
            <div class="form-outline w-50 m-auto">
                <select name="product_category" class="form-select">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                </select>
            </div>
            <div class="form-outline w-50 m-auto">
                <select name="product_category" class="form-select">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                    <option value="">5</option>
                </select>
            </div>
            <div class="form-outline w-50 m-auto">
                <label for="product_image1" class="form-label">Product Keywords</label>
                <input type="file" id="product_image1" name= "product_image1" class="form-control w-90 m-auto" required>
                <img src="../product_images/sadasd.jpg" alt="" class="product_img">
            </div>
            <div class="form-outline w-50 m-auto">
                <label for="product_image2" class="form-label">Product Keywords</label>
                <input type="file" id="product_image2" name= "product_image2" class="form-control w-90 m-auto" required>
                <img src="../product_images/sadasd.jpg" alt="" class="product_img">
            </div>
            <div class="form-outline w-50 m-auto">
                <label for="product_image3" class="form-label">Product Keywords</label>
                <input type="file" id="product_image3" name= "product_image3" class="form-control w-90 m-auto" required>
                <img src="../product_images/sadasd.jpg" alt="" class="product_img">
            </div>
            <div class="form-outline w-50 m-auto">
                <label for="product_price" class="form-label">Product Keywords</label>
                <input type="text" id="product_price" name= "product_price" class="form-control" required>
            </div>
            <div class="form-outline w-50 m-auto">
                <label for="product_price" class="form-label">Product Keywords</label>
                <input type="text" id="product_price" name= "product_price" class="form-control" required>
            </div>
            <div class="text_center">
                <input type="submit" name ="edit_product" value="Update Product" class="btn btn-info px-3 mb-3">
            </div>
        </form>
    </div>
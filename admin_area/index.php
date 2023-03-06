<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="../css/stylesheet.css" rel="stylesheet">
</head>
<body>
<div class="header" id="header1"> <!-----------header----------->
        <div class="container">
             <div class="navbar">
                <button style="background-color:#171b20; border: none;" >
                    <div class="logo">
                        <img src="../images2/icon-1.png" width="100px">
                            <a href="index"></a>
                    </div>
                </button>
                <nav>
                   <ul>
                    <li>
                        <a href="">Welcome guest</a>
                    </li>
                   </ul>
                </nav>
                
            </div>
        </div>
</div>
<div>
    <div class="container" style="background-color:#171b20; max-width:100%;">
        <div class="title">
            <h2 style="color: #555">Manage Details</h2>
        </div>
        <div class="row">
            <div class="col-md-12" style="display:flex; align-items:center">
                <div style="padding-right:5px;">
                    <a href="#"><img style="width:100px;object-fit:contain"src="../images2/hero-1.png" alt=""></a>
                    <p>Ali Krayem</p>
                </div>
                <div style="margin-left :10px">
                <a href="insert_product.php" class="btn" style="margin:5px 0">Insert Products</a>
                <a href="" class="btn" style="margin:5px 0">View Products</a>
                <a href="index.php?insert_categories" class="btn" style="margin:5px 0">Insert Categories</a>
                <a href="" class="btn" style="margin:5px 0">View Categories</a>
                <a href="index.php?insert_brands" class="btn" style="margin:5px 0">Insert Brands</a>
                <a href="" class="btn" style="margin:5px 0">View Brands</a>
                <a href="" class="btn" style="margin:5px 0">All Orders</a>
                <a href="" class="btn" style="margin:5px 0">All Payments</a>
                <a href="" class="btn" style="margin:5px 0">List Users</a>
                <a href="" class="btn" style="margin:5px 0">Logout</a>
                </div>

        </div>
    </div>
</div>
<div class="container" style="margin-top: 5px;">
    <?php
    if(isset($_GET['insert_categories'])){
        include('insert-categories.php');
    }
    if(isset($_GET['insert_brands'])){
        include('insert-brands.php');
    }
    ?>
</div>
</body>

</html>

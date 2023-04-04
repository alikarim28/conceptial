<?php require_once "controllerUserData.php"; 
include("./functions/common_functions.php")?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
        <title>Conceptial | S T R E E T W E A R </title>
        <link rel = "icon" href ="images/icon-1.png" type = "image/x-icon">
    </head>
    <body style = "background : #171b20; ">
       
    <?php 
    require "components/header.php";
    echo "</div> </div>";
    ?>
    <div class="account-background">
            <div class="wrapper">
                <div class="title-text">
                <div class="title login">
                    Login Form
                </div>
                <div class="title signup">
                    Signup Form
                </div>
                </div>
                <div class="form-container">
                <div class="slide-controls">
                    <input type="radio" name="slide" id="login" checked>
                    <input type="radio" name="slide" id="signup">
                    <label for="login" class="slide login">Login</label>
                    <label for="signup" class="slide signup">Signup</label>
                    <div class="slider-tab"></div>
                </div>
                <div class="form-inner">
                    <form action="account.php"  method="post" autocomplete="" class="login">
                        <?php
                        if(count($errors) > 0){
                            ?>
                            <div class="alert alert-danger text-center">
                                <?php
                                foreach($errors as $showerror){
                                    echo $showerror;
                                }
                                ?>
                            </div>
                            <?php
                        }
                        ?>
                        <div class="field">
                        <input type="text" placeholder="Email Address" required>
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Password" required>
                        </div>
                        <div class="pass-link">
                            <a href="#">Forgot password?</a>
                        </div>
                        <div class="field btn1">
                            <div class="btn1-layer"></div>
                            <input type="submit" name = 'signin' value="Login">
                        </div>
                        <div class="signup-link">
                            Not a member? <a href="sign-up.php">Signup now</a>
                        </div>
                    </form>
                    <form action="" method="post"  autocomplete="" class="signup" enctype="multipart/form-data">
                        <div class="field">
                            <input type="text" placeholder="Username" required name="user_username">
                        </div>
                        <div class="field">
                            <input type="email" placeholder="Email Address" required name="user_email">
                        </div>
                        <div class="field">
                            <input type="file" placeholder="Email Address" required name="user_image">
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Password" required name="user_password">
                        </div>
                        <div class="field">
                            <input type="password" placeholder="Confirm password" required name="conf_user_password">
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Address" required name="user_address">
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Mobile number" required name="user_contact">
                        </div>
                        <div class="field btn1">
                            <div class="btn1-layer"></div>
                            <input type="submit" name='user_register'  value="Signup">
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
         <script>
            const loginText = document.querySelector(".title-text .login");
            const loginForm = document.querySelector("form.login");
            const loginbtn1 = document.querySelector("label.login");
            const signupbtn1 = document.querySelector("label.signup");
            const signupLink = document.querySelector("form .signup-link a");
            signupbtn1.onclick = (()=>{
              loginForm.style.marginLeft = "-50%";
              loginText.style.marginLeft = "-50%";
            });
            loginbtn1.onclick = (()=>{
              loginForm.style.marginLeft = "0%";
              loginText.style.marginLeft = "0%";
            });
            signupLink.onclick = (()=>{
              signupbtn1.click();
              return false;
            });
         </script>
</body >
</html>


<?php
    if(isset($_POST['user_register'])){
        $user_username = $_POST['user_username'];
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];
        $hash_pass=password_hash($user_password,PASSWORD_DEFAULT);
        $conf_user_password = $_POST['conf_user_password'];
        $user_address = $_POST['user_address'];  
        $user_contact = $_POST['user_contact'];
        $user_image = $_FILES['user_image']['name'];
        $user_image_tmp = $_FILES['user_image']['tmp_name'];
        $user_ip=getIPAddress();


        $sql_querry = "Select * from `user_table` where username = '$user_username' or user_email= '$user_email' ";
        $result=mysqli_query($con,$sql_querry);
        $rw=mysqli_num_rows($result);
        if($rw>0){
            echo"<script> alert('Username or email already exist')";
        }else if($user_password!=$conf_user_password){
            echo"<script> alert('password doesn't match')";

        }
        else{
        move_uploaded_file($user_image_tmp,'./users_area/user_images');
        $insert_querry = "insert into `user_table`(username,user_email,user_password,user_image,user_ip,user_address,user_mobile)
         values('$user_username','$user_email','$hash_pass','$user_image','$user_ip','$user_address','$user_contact') ";
         $sql_execute = mysqli_query($con,$insert_querry);
        if($sql_execute){
            echo"<script> alert('Data inserted Seccussfully')";
        }else{
            die(mysqli_error($con));
        }
    }
    } 
?>
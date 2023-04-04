<?php
	require('includes/connection.php');
	include("functions/common_functions.php");
	session_start();
	if(isset($_POST['ca'])){
		$address= $_POST['address'];
		$user=$_SESSION['username'];
		$query = "UPDATE `user_table` SET user_address='$address' WHERE username='$user'";
		mysqli_query($con, $query);
		
	}
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
	<script src="functions/js_common_functions.js"></script>
	<title>Conceptial | S T R E E T W E A R </title>
	<link rel = "icon" href ="images/icon-1.png" type = "image/x-icon" >
    <style>
		.buttons {
  display: flex;
  justify-content: center;
  margin-top: 16px;
}

button {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
  padding: 8px 16px;
  border: none;
  border-radius: 4px;
  margin: 0 8px;
}

button:hover {
  background-color: #3e8e41;
}
	</style>
</head>
<body>
	<?php require "components/header.php";
	echo "</div> </div>";?>
    <div id="newpageheader">
        <h2>#StayHome</h2>
        <p>Save more by buying online</p>
	</div>
	<div class="buttons">
<h3>Welcome <?php 

	if(isset($_SESSION['username'])){
		$user=$_SESSION['username'];
	echo"$user";}
?></h3>
  <form action="logout.php" method="POST">
    <button type="submit">Log Out</button>
  </form>
  <button onclick="window.location.href='payment.php'">PAY</button>
</div>


<form action="" method="POST">
  <label for="address">New Address:</label>
  <input type="text" id="address" name="address" required>
  <button type="submit" name="ca">Update Address</button>
  
</form>





<h3 class ="text-center">All my orders</h3>

	<?php
		require "components/brand.php";
		require "components/footer.php";
	?>
	
</body>

</html>
<?php
	require('includes/connection.php');
	include("functions/common_functions.php");
    
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
        form {
  display: flex;
  flex-direction: column;
  max-width: 500px;
  margin: 0 auto;
}

label {
  font-weight: bold;
  margin-bottom: 8px;
}

input[type="text"],
button {
  padding: 8px;
  margin-bottom: 16px;
  border: none;
  border-radius: 4px;
  font-size: 16px;
}

input[type="text"] {
  border: 1px solid #ccc;
}

button {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

button:hover {
  background-color: #3e8e41;
}

.stripe-button-el {
  display: block;
  margin: 0 auto;
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
    <form action="charge.php" method="POST">
    <h4 class="text-center">Payment</h4>

  <input type="text" name="name" placeholder="Name">
  <input type="text" name="email" placeholder="Email">
  <input type="text" name="amount" placeholder="Amount">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="YOUR_PUBLIC_KEY_HERE"
    data-amount="1000"
    data-name="Your Website Name"
    data-description="Payment"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-currency="usd"
  ></script>
</form>
	
    
	<?php
		require "components/brand.php";
		require "components/footer.php";
	?>
	
</body>

</html>
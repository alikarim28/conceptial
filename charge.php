<?php 
    require('includes/connection.php');
    include("functions/common_functions.php");
    if(isset($_GET['user_id'])){
    $user_id=$_GET['user_id'];
    global $con;
    $ip=getIPAddress();
    $total=0;
    $cart_query="select * from `cart_details` where ip_address='$ip'";
    $result_query=mysqli_query($con,$cart_query);
    $nb_count=mysqli_num_rows($result_query);
    if($nb_count>0){
    while($row=mysqli_fetch_array($result_query)){
      $cart_id=$row['cart_id'];
      $product_id=$row['product_id'];
      $quantity=$row['quantity'];
      $size=$row['size_id'];
      $invoice_number=mt_rand();
      $status='pending';
      $select_product="select * from `product` where product_id=$product_id";
      $result_query1=mysqli_query($con,$select_product);
      while($row_product=mysqli_fetch_array($result_query1)){
        $product_price=$row_product['product_price'];
        $total+=$product_price*$quantity;
        $product_name=$row_product['product_title'];
      }
    }
    $insert_query="insert into `user_orders` (user_id,amount_due,invoice_number,total_products,order_date,order_status) values 
    ($user_id,$total,$invoice_number,$nb_count,NOW(),'$status')";
    $result=mysqli_query($con,$insert_query);
    if($result){
      $empty_cart="delete from `cart_details` where ip_address='$ip'";
      $delet=mysqli_query($con,$empty_cart);
      echo"<script>window.open('profile.php','_self')</script>"; 
    }
  }}
  //   require_once('vendor/autoload.php');
    
  //   \Stripe\Stripe::setApiKey('YOUR_SECRET_KEY_HERE');
    
  //   $token = $_POST['stripeToken'];
  //   $name = $_POST['name'];
  //   $email = $_POST['email'];
  //   $amount = $_POST['amount'];
    
  //   $customer = \Stripe\Customer::create(array(
  //     'email' => $email,
  //     'source' => $token
  //   ));
    
  //   $charge = \Stripe\Charge::create(array(
  //     'customer' => $customer->id,
  //     'amount' => $amount,
  //     'currency' => 'usd',
  //     'description' => 'Payment'
  //   ));
    
  //   echo "<h1>Payment Successful</h1>";

    
    
    
    
    
    
?>
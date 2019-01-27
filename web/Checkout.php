<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="styler.css" rel="stylesheet" type="text/css"/>
<title>Checkout</title>

</head>

<body data-gr-c-s-loaded="true">


<div class="bg_img-2">
<div class="caption">
  <span class="border">Checkout</span>
  </div>
</div>

<div class="d">
  <h3 class="p1">Shipping Address</h3>
  <form action="confirmation.php" method="post">
  Street Address: <input type="text" name="address"><br>
  City:           <input type="text" name="city"><br>
  State:          <input type="text" name="state"><br>
  Zip:            <input type="text" name="zip"><br>
  <input type="submit">
</div>



<div class="bg_img-1">
  <a href="view_cart.php">
  <div class="caption">
  <span class="border">Back</span>
  </div>
  </a>
</div>



</body>
</html>


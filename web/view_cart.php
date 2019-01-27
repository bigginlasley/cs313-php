<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="styler.css" rel="stylesheet" type="text/css"/>
<title>Browse</title>

</head>

<body data-gr-c-s-loaded="true">


<div class="bg_img-1">
  <div class="caption">
  <span class="border">Cart</span>
  </div>
</div>


<div class="d">
  <h3 class="p1">Your Items</h3>
  <?php
  if (!empty($_SESSION['boots'])||!empty($_SESSION['gloves'])||!empty($_SESSION['bibs'])||!empty($_SESSION['goggles'])||!empty($_SESSION['sled'])) {
    echo "You have the following items in your cart: <br>";
}
else{
    echo "Your cart is empty";
}
if (isset($_SESSION['boots'])) {
    echo $_SESSION["boots"]."<br>";
} 
if (isset($_SESSION['gloves'])) {
    echo $_SESSION["gloves"]."<br>";
} 
if (isset($_SESSION['bibs'])) {
    echo $_SESSION["bibs"]."<br>";
} 
if (isset($_SESSION['goggles'])) {
    echo $_SESSION["goggles"]."<br>";
} 
if (isset($_SESSION['sled'])) {
    echo $_SESSION["sled"]."<br>";
} 

  ?>
</div>



<div class="bg_img-1">
  <a href="Checkout.php">
  <div class="caption">
  <span class="border">Checkout</span>
  </div>
  </a>
  <br>

  <a href="browse_items.php">
  <div class="caption">
  <span class="border">Back to Store</span>
  </div>
  </a>

</div>



</body>
</html>

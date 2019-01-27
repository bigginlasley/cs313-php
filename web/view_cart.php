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
<a href="browse_items.php">
<div class="caption">
  <span class="border">Back to Store</span>
  </div>
  </a>
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
    echo '<button Name="boots" id="boots" onClick='.'location.href="?boots=1"'.'>remove</button>';
    echo $_SESSION["boots"]."<br>";
} 
if (isset($_SESSION['gloves'])) {
    echo '<button Name="gloves" id="gloves" onClick='.'location.href="?gloves=1"'.'>remove</button>';
    echo $_SESSION["gloves"]."<br>";
} 
if (isset($_SESSION['bibs'])) {
    echo '<button Name="bibs" id="bibs" onClick='.'location.href="?bibs=1"'.'>remove</button>';
    echo $_SESSION["bibs"];
    
} 
if (isset($_SESSION['goggles'])) {
    echo '<button Name="goggles" id="goggles" onClick='.'location.href="?goggles=1"'.'>remove</button>';
    echo $_SESSION["goggles"]."<br>";
} 
if (isset($_SESSION['sled'])) {
    echo '<button Name="sled" id="sled" onClick='.'location.href="?sled=1"'.'>remove</button>';
    echo $_SESSION["sled"]."<br>";
} 

  ?>

<?php
function setVar($name)
{
    switch($name)
    {
        case "boots":
            $_SESSION["boots"] = NULL;
            break;
        case "gloves":
            $_SESSION["gloves"] = NULL;
            break;
        case "bibs":
            $_SESSION["bibs"] = NULL;
            break;
        case "goggles":
            $_SESSION["goggles"] = NULL;
            break;
        case "sled":
            $_SESSION["sled"] = NULL;
            break;
    }
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


</div>



</body>
</html>

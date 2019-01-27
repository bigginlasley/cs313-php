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
  <span class="border">Complete</span>
  </div>
</div>

<div class="d">
  <h3 class="p1">Thank You</h3>
    <?php
    echo "The following items will be shipped: <br>";
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
    echo "shipping address:<br> ". $_POST["address"]. "<br>";
    echo $_POST["city"]. "<br>";
    echo $_POST["state"]. "<br>";
    echo $_POST["zi"]. "<br>";
    ?>
  
</div>
</body>
</html>
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
  <table>
        <tr>
            <th>Street Address: </th>
            <th><input type="text" name="address"></th>
        </tr>
        <tr>
            <th>City: </th>
            <th><input type="text" name="city"></th>
        </tr>
        <tr>
            <th>State: </th>
            <th><input type="text" name="state"></th>
        </tr>
        <tr>
            <th>Zip: </th>
            <th><input type="text" name="zip"></th>
        </tr>
    </table>
  <input type="submit">
</div>
</body>
</html>


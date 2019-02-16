<?php 
session_start();
require "dbConnect.php";
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="styler.css" rel="stylesheet" type="text/css"/>
<title>Activity search</title>
</head>

<?php



?>

<body data-gr-c-s-loaded="true">

<?php
require("navbar.php");
?>


<div class="bg_img-1">
        <div class="d4">
        <form action="display.php" method="post">
                       
                       <label for="activity">activity</label>
                       <select id="activity" name="activity">
                         <option value="Lifting">Lifting</option>
                         <option value="Basketball">Basketball</option>
                         <option value="Bridge_Jumping">Bridge Jumping</option>
                         <option value="Snowmobiling">Snowmobiling</option>
                       </select>
                     
                       <input type="submit" value="Submit">
                     </form>
        </div>
    </div> 

</body>
</html>
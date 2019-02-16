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
<title>Person search</title>
</head>



<body data-gr-c-s-loaded="true">


<?php
require("navbar.php");
?>


<div class="bg_img-1">
<div class="d4">
                        <form action="displayperson.php" method="post">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">
                        
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                            
                            <input type="submit" value="Submit">
                          </form>
                </div>
    </div> 

</body>
</html>
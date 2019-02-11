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

<?php 
$fname = $_SESSION['fname'] = htmlspecialchars($_POST["firstname"]);
$lname = $_SESSION['lname'] = htmlspecialchars($_POST["lastname"]);
?>

<body data-gr-c-s-loaded="true">


<ul>
        <li><a class="active" href="LFG.php">Home</a></li>
        <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Search</a>
    <div class="dropdown-content">
      <a href="person_search.php">By Person</a>
      <a href="activity_search.php">By Activity</a></li>
    </ul>


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
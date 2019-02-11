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
    <ul>
        <li><a class="active" href="LFG.php">Home</a></li>
        <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Search</a>
        <div class="dropdown-content">
        <a href="person_search.php">By Person</a>
        <a href="activity_search.php">By Activity</a></li>
    </ul>
        
    <div class="bg_img-1">
        <div class="caption">
        <span class="border">Welcome<br>  Our mission is to help bring future friends together </span>
        </div>
    </div>    
</body>
</html>

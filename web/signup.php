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
<title>sign up</title>
</head>

<body data-gr-c-s-loaded="true">
<div id="id01" class="modal" display="block">
        <form class="modal-content" id="sign_up" action="LFG.php" method="POST">
          <div class="holder">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="first_name"><b>First Name</b></label>
            <input type="text" placeholder="Enter First Name" name="first_name" required>

            <label for="last_name"><b>Last Name</b></label>
            <input type="text" placeholder="Enter Last Name" name="last_name" required>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>
      
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
      
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

            <label for="address"><b>Address</b></label>
            <input type="text" placeholder="Enter Address" name="address" required>

            <label for="city"><b>City</b></label>
            <input type="text" placeholder="Enter City" name="city" required>

            <label for="state"><b>State</b></label>
            <input type="text" placeholder="Enter State" name="state" required>

            <label for="zip"><b>Zip</b></label>
            <input type="text" placeholder="Enter Zip" name="zip" required>

      
            <div class="clearfix">
              <button type="button" onclick="location.href='LFG.php';" class="cancelbtn">Cancel</button>
              <button onclick="submitForm('sign_up')" class="signupbtn">Sign Up</button>
            </div>
          </div>
        </form>
      </div>

      </body>
</html>

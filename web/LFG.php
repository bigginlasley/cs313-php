<?php 
session_start();
require "dbConnect.php";
$db = get_db();

$usrname = $_SESSION['username'];

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="styler.css" rel="stylesheet" type="text/css"/>
<title>LFG</title>
</head>



<body data-gr-c-s-loaded="true">

<ul>
        <li><a class="active" href="LFG.php">Home</a></li>

        <?php 
        if (isset($_SESSION['loggedin'])){

          echo " <li class=\"dropdown floatright\">";
          echo "<a href=\"javascript:void(0)\" class=\"dropbtn\">$usrname</a>";
          echo "<div class=\"dropdown-content\">";
          echo "<a href=\"logout_handler.php\">Logout</a>";
          echo "<a href=\"removeuser.php\">Delete User</a>";
          echo "<a href=\"attending.php\">Attending</a></li>";

          echo "<li class=\"dropdown\">";
          echo "<a href=\"javascript:void(0)\" class=\"dropbtn\">Search</a>";
          echo "<div class=\"dropdown-content\">";
          echo "<a href=\"person_search.php\">By Person</a>";
          echo "<a href=\"activity_search.php\">By Activity</a></li>";
          echo "<li><a href=\"create_activity.php\">Create Activity</a></li>";
        }
        else
        {
            echo '<li class="floatright"><button class="clicker" onclick="document.getElementById(\'id02\').style.display=\'block\'" style="width:auto;">Login</button></li>';
            echo '<li class="floatright"><button class="clicker" onclick="location.href=\'signup.php\';">Sign Up</button></li>';
        }
        ?>

       
</ul>



        
    <div class="bg_img-1">
        <div class="caption">
        <span class="border">Welcome<br>  Our mission is to help bring future friends together </span>
        </div>
    </div>    

    
      <div id="id02" class="modal">
  
      <form class="modal-content animate" id="login" action="loginhandler.php" method="POST">
          
      
          <div class="holder">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
      
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
              
            <button type="submit">Login</button>
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
          </div>
      
          <div class="holder" style="background-color:#f1f1f1">
            <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cnclbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>
      </div>
      
      <script>
      // Get the modal

      var modal2 = document.getElementById('id02');
      
      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal2) {
          modal2.style.display = "none";
        }
      }
      </script>



</body>
</html>

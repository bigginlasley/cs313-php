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
<title>sign up</title>
</head>

<body data-gr-c-s-loaded="true">
<div id="id01" class="modal2">
        <form class="modal2-content" id="sign_up" action="activityhandler.php" method="POST">
          <div class="holder">
            <h1>Create Activity</h1>
            <p>Please fill in this form to create an Activity.</p>
            <hr>

            <label for="name"><b>Name of Activity</b></label>
            <input type="text" placeholder="Enter Activity Name" name="name" required>

            <label for="activity">Activity</label>
                       <select id="activity" name="activity">
                         <?php
                         try{
                           $statement=$db->prepare('SELECT type_name FROM type_activity');
                           $statement->execute();
                           while($row = $statement->fetch(PDO::FETCH_ASSOC))
                           {
                             echo '<option value=' . $row['type_name']. '>' . $row['type_name'] . '</option>';
                           }
                         }
                         catch(PDOException $ex)
                         {
                           echo "Error with DB. Details: $ex";
                           die();
                         }
                         
                         ?>
                         <option value=""> </option>
                       </select>
            <label for="custom">Custom Activity</label>
            <input type="text" name="custom">

            <label for="time"><b>Time of Event</b></label>
            <input type="time" name="time" required>
            <br>
            
            <label for="address"><b>Address</b></label>
            <input type="text" placeholder="Enter Address" name="address" required>

            <label for="city"><b>City</b></label>
            <input type="text" placeholder="Enter City" name="city" required>
      
            <label for="state"><b>State</b></label>
            <input type="text" placeholder="Enter State" name="state" required>
      
            <label for="zip"><b>Zip</b></label>
            <input type="text" placeholder="Enter Zip" name="zip" required>

            <label for="capacity"><b>Capacity</b></label>
            <input type="text" placeholder="Enter the maximum capacity" name="capacity" required>

            <label for="count"><b>Count</b></label>
            <input type="text" placeholder="Enter how many are currently going" name="count" required>

      
            <div class="clearfix">
              <button type="button" onclick="location.href='LFG.php';" class="cancelbtn">Cancel</button>
              <button type="submit" class="signupbtn">Submit</button>
            </div>
          </div>
        </form>
      </div>
      </body>
</html>















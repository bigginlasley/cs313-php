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
<title>Activity search</title>
</head>






<body data-gr-c-s-loaded="true">

<ul>
        <li><a class="active" href="LFG.php">Home</a></li>
        <li class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">Search</a>
        <div class="dropdown-content">
        <a href="person_search.php">By Person</a>
        <a href="activity_search.php">By Activity</a></li>
        <li><a href="create_activity.php">Create Activity</a></li>

        <?php
                  echo " <li class=\"dropdown floatright\">";
                  echo "<a href=\"javascript:void(0)\" class=\"dropbtn\">$usrname</a>";
                  echo "<div class=\"dropdown-content\">";
                  echo "<a href=\"logout_handler.php\">Logout</a>";
                  echo "<a href=\"removeuser.php\">Delete User</a></li>";
        ?>


  </ul>



<div class="bg_img-1">
        <div class="d4">
          <div>
          
        <form action="display.php" method="post">
                       
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
                       </select>

                       <input type="submit" value="Submit">
                     </form>
                        </div>


                      <table>
                      <tr>
                          <th> Mark </th>
                          <th> Activity Name </th>
                          <th> Activity Type </th>
                          <th> Time </th>
                          <th> Activity Location </th>
                          <th> Capacity </th>
                          <th> Count </th>

                      </tr>

                     <?php

                      try{
                        $statement = $db->prepare("SELECT * FROM activity");
                        $statement->execute();

                        while ($row = $statement->fetch(PDO::FETCH_ASSOC))
                        {
                            $name = $row['activity_name'];
                            $id = $row['activity_type'];
                            $time = $row['time'];
                            $location = $row['activity_address'];
                            $cap = $row['activity_capacity'];
                            $count = $row['activity_count'];

                            try{
                            $query = $db->prepare("SELECT type_name FROM type_activity WHERE type_of_activity_id = '$id'");
                            $query->execute();
                            while($row2 = $query->fetch(PDO::FETCH_ASSOC))
                            {
                              $activity = $row2['type_name'];
                            }

                            if($cap==$count)
                            {
                                echo "<tr><td>Full</td><td>$name</td><td>$activity</td><td>$time</td><td>$location</td><td>$cap</td><td>$count</td></tr>";
                            }
                            else
                            {
                                echo "<tr><td>
                                </td><td>$name</td><td>$activity</td><td>$time</td><td>$location</td><td>$cap</td><td>$count</td></tr>";
                            }
                          }
                          catch(Exception $ex)
                          {
                            echo "Error with DB. Details: $ex";
                            die();
                          }
                                    
                        }
                      }
                      catch(Exception $ex)
                      {
                        echo "Error with DB. Details: $ex";
                        die();
                      }
                     ?>
              </table>
        </div>
    </div> 

</body>
</html>

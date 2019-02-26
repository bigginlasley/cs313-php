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
<title>Checkout</title>

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

<div class="bg_img-2">

</div>

<div class="d">
  <h3 class="p1">Results</h3>
 

<table>
    <tr>
        <th> Activity Name </th>
        <th> Time </th>
        <th> Activity Location </th>
        <th> Capacity </th>
        <th> Count </th>
    </tr>
    <?php
        try{

            $statement=$db->prepare("SELECT person_id FROM person WHERE usrname='$usrname'");
            $statement->execute();

            $row=$statement->fetch(PDO::FETCH_ASSOC);
            $p_id = $row['person_id'];

            $query=$db->prepare("SELECT a_id FROM person_activity WHERE p_id ='$p_id'");
            $query->execute();
            while($row2=$query->fetch(PDO::FETCH_ASSOC))
            {
                $a_id = $row2['a_id'];
                $query2=$db->prepare("SELECT * FROM activity WHERE activity_id='$a_id'");
                $query2->execute();
                while($row3=$query2->fetch(PDO::FETCH_ASSOC))
                {
                    $name = $row3['activity_name'];
                    $time = $row3['time'];
                    $location = $row3['activity_address'];
                    $cap = $row3['activity_capacity'];
                    $count = $row3['activity_count'];
                    echo "<tr><td>$name</td><td>$time</td><td>$location</td><td>$cap</td><td>$count</td></tr>";
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
</body>
</html>
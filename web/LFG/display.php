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
<link href="../styler.css" rel="stylesheet" type="text/css"/>
<title>Checkout</title>

</head>

<body data-gr-c-s-loaded="true">


<ul>
        <li><a class="active" href="LFG.php">Home</a></li>
        <li><a href="activity_search.php">Activity Search</a></li>
        <li><a href="create_activity.php">Create Activity</a></li>
        <?php
                  echo " <li class=\"dropdown floatright\">";
                  echo "<a href=\"javascript:void(0)\" class=\"dropbtn\">$usrname</a>";
                  echo "<div class=\"dropdown-content\">";
                  echo "<a href=\"attending.php\">Attending</a>";
                  echo "<a href=\"logout_handler.php\">Logout</a>";
                  echo "<a href=\"removeuser.php\">Delete User</a></li>";
        ?>
</ul>


<?php 
$activity = $_SESSION['activity'] = htmlspecialchars($_POST["activity"]);
$fname = $_SESSION['fname'] = htmlspecialchars($_POST["firstname"]);
$lname = $_SESSION['lname'] = htmlspecialchars($_POST["lastname"]);
?>

<div class="bg_img-2">

</div>

<div class="d">
  <h3 class="p1">Results</h3>
  <form action="adder_handler.php" method="post">
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
    if (isset($_SESSION['activity'])) {

        try{
            $statement=$db->prepare("SELECT type_of_activity_id FROM type_activity WHERE type_name='$activity'");
            $statement->execute();
            while($row=$statement->fetch(PDO::FETCH_ASSOC))
            {
                $id=$row['type_of_activity_id'];
            }
        }
        catch(Excetion $ex)
        {
            echo "Error with DB. Details: $ex";
            die();
        }
        try{
            $statement = $db->prepare("SELECT * FROM activity WHERE activity_type = '$id'");
            $statement->execute();

            while ($row = $statement->fetch(PDO::FETCH_ASSOC))
            {
                $name = $row['activity_name'];
                $time = $row['time'];
                $location = $row['activity_address'];
                $cap = $row['activity_capacity'];
                $count = $row['activity_count'];

        
                if($cap==$count)
                {
                    echo "<tr><td>Full</td><td>$name</td><td>$activity</td><td>$time</td><td>$location</td><td>$cap</td><td>$count</td></tr>";
                }
                else
                {
                    echo "<tr><td><input type=\"radio\"name=\"idbtn\" value=\"$actID\">
                    </td><td>$name</td><td>$activity</td><td>$time</td><td>$location</td><td>$cap</td><td>$count</td></tr>";
                }
                        
            }
        }
        catch(Exception $ex)
        {
            echo "Error with DB. Details: $ex";
            die();
        }
    }
    ?>
    <tr><td></td><td></td><td></td><td><input type="submit" value="Submit"></td></tr>
    </table>
    </form>
  

</div>
</body>
</html>
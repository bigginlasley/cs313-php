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

<?php 
$fname = $_SESSION['fname'] = htmlspecialchars($_POST["firstname"]);
$lname = $_SESSION['lname'] = htmlspecialchars($_POST["lastname"]);


?>

<div class="bg_img-2">

</div>

<div class="d">
  <h3 class="p1"></h3>
  <table>
    <tr>
        <th> First Name </th>
        <th> Last Name </th>
        <th> Email </th>
    </tr>

    <?php
    echo "Results listed below: <br>";
    if (isset($_SESSION['lname'])) {

        $statement = $db->prepare("SELECT * FROM person WHERE last_name = '$lname'");
        $statement->execute();
        }

        

       while ($row = $statement->fetch(PDO::FETCH_ASSOC))
       {
           $first = $row['first_name'];
           $last = $row['last_name'];
           $email = $row['email'];

            echo "<tr><th>$first</th><th>$last</th><th>$email</th></tr>";
                     
       }
    ?>
    </table>
  

</div>
</body>
</html>
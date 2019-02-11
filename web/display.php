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
<title>Checkout</title>

</head>

<body data-gr-c-s-loaded="true">

<?php 
$activity = $_SESSION['activity'] = htmlspecialchars($_POST["activity"]);
$fname = $_SESSION['fname'] = htmlspecialchars($_POST["firstname"]);
$lname = $_SESSION['lname'] = htmlspecialchars($_POST["lastname"]);
?>

<div class="bg_img-2">

</div>

<div class="d">
  <h3 class="p1">Thank You</h3>
  <table>
    <tr>
        <th> Activity Name </th>
        <th> Time </th>
    </tr>

    <?php
    echo "Results listed below: <br>";
    if (isset($_SESSION['activity'])) {

        switch($activity)
        {
            case "Lifting":
                $statement = $db->prepare("SELECT * FROM activity WHERE activity_type = 1");
                $statement->execute();
                break;

            case "Basketball":
                $statement = $db->prepare("SELECT * FROM activity WHERE activity_type = 2");
                $statement->execute();
                break;

            case "Bridge_Jumping":
                $statement = $db->prepare("SELECT * FROM activity WHERE activity_type = 3");
                $statement->execute();
                break;

            case "snowmobiling":
                $statement = $db->prepare("SELECT * FROM activity WHERE activity_type = 4");
                $statement->execute();
                break;
        }

        

       while ($row = $statement->fetch(PDO::FETCH_ASSOC))
       {
           $name = $row['activity_name'];
           $time = $row['activity_time'];

            echo "<tr><th>$name</th><th>$time</th></tr>";
                     
       }
    }
    ?>
    </table>
  

</div>
</body>
</html>
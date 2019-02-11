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

        $statement = $db->prepare("SELECT * FROM person WHERE last_name = $lname");
        $statement->execute();
        }

        

       while ($row = $statement->fetch(PDO::FETCH_ASSOC))
       {
           $first = $row['first_name'];
           $last = $row['last_name'];
           $email = $row['email'];

            echo "<tr><th>$name</th><th>$time</th><th>$email</th></tr>";
                     
       }
    ?>
    </table>
  

</div>
</body>
</html>
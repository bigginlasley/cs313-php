<?php 
session_start();
require "dbConnect.php";
$db = get_db();
?>

<?php

$username = $_SESSION['username'];

$query = "DELETE FROM person WHERE usrname='$username'";

try{
$statement=$db->prepare($query);
$statement->execute();

session_unset(); 
session_destroy(); 
}

catch(Excetion $ex)
{
    echo "Error with DB. Details: $ex";
    die();
}

header("Location: LFG.php");
die(); 
?>
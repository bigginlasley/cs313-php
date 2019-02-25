<?php 
session_start();
require "dbConnect.php";
$db = get_db();

$usrname = $_SESSION['username'];

$query = 'DELETE FROM person WHERE usrname=$usrname';

try{
$statement=$db ->prepare($query);
$statement->execute();
}

catch(Excetion $ex)
{
    echo "Error with DB. Details: $ex";
    die();
}

header("Location: LFG.php");
die();
?>
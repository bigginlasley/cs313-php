<?php 
session_start();
require "dbConnect.php";
$db = get_db();
?>

<?php

$id=$_POST['idbtn'];

try{
    $statement=$db->prepare("SELECT * FROM activity WHERE activity_id='$id'");
    $statement->execute();
    while($row=$statement->fetch(PDO::FETCH_ASSOC))
    {
        
        $count=$row['activity_count'];
        $count++;
        try{
            $query=$db->prepare("UPDATE activity SET activity_count='$count' WHERE activity_id='$id");
            $query->execute();
        }
        catch(Exception $ex )
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

header("Location: activity_search.php");
die();

?>
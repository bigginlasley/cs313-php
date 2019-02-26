<?php 
session_start();
require "dbConnect.php";
$db = get_db();
$usrname = $_SESSION['username'];
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

            $query=$db->prepare("UPDATE activity SET activity_count='$count' WHERE activity_id='$id'");
            $query->execute();

            $statement2=$db->prepare("SELECT person_id FROM person WHERE usrname='$usrname'");
            $statement2->execute();

            $row2=$statement2->fetch(PDO::FETCH_ASSOC);
            $p_id = $row2['person_id'];



            $query2=$db->prepare("INSERT INTO person_activity(p_id, a_id) VALUES(:p_id, :a_id)");
            $query2->bindValue(':p_id', $p_id);
            $query2->bindValue(':a_id', $id);
            $query2->execute();

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
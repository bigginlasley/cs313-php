<?php 
session_start();
require "dbConnect.php";
$db = get_db();
?>

<?php
    $username=$_POST['username'];
    $password=$_POST['psw'];


try{

    $statement = $db->prepare("SELECT * FROM person WHERE usrname ='$username' and password ='$password'");
    $statement->execute();
   
    $count=0;

    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        $count++;
    }
    if($count==1){
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
    }
}
catch(Exception $ex)
{
    echo "Error with DB. Details: $ex";
    die();
}

header("Location: LFG.php");
die(); 

?>


"SELECT * FROM person WHERE usrname='$username' and password='$password'"
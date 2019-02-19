<?php 
session_start();
require "dbConnect.php";
$db = get_db();
?>

<?php
    $username=$_POST['username'];
    $password=$_POST['psw'];
    #$password=password_verify();


try{

    

    $statement = $db->prepare("SELECT * FROM person WHERE usrname ='$username' and password ='$password'");
    $statement->execute();
   
    $count=0;

    while ($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
        $checker=$row['password'];

        $pass=password_verify($password, $checker);

        $count++;
    }
    if($pass==true){
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



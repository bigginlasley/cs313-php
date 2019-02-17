<?php 
session_start();
require "dbConnect.php";
$db = get_db();
?>

<?php
    $username=$_POST['username'];
    $password=$_POST['psw'];
    
echo"$username , $password";

try{
    $username=$_POST['username'];
    $password=$_POST['psw'];

    $username = stripslashes($username);
    $password = stripslashes($password);
    $username = mysql_real_escape_string($username);
    $password = mysql_real_escape_string($password);

    echo"$username , $password";

    $sql="SELECT * FROM person WHERE usrname='$username' and password='$password';";
    $result=mysql_query($sql,$db);

    $count=mysql_num_rows($result);

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


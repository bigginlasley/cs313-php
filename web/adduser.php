<?php 
session_start();
require "dbConnect.php";
$db = get_db();
?>


<?php 
$f_name=$_POST['first_name'];
        $l_name=$_POST['last_name'];
        $username=$_POST['username'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $zip=$_POST['zip'];

        try{
            $query = 'INSERT INTO person(last_name, first_name, email, usrname, person_address, person_city, person_state, person_zip) VALUES(:last_name, :first_name, :email, :usrname, :person_address, :person_city, :person_state, :person_zip)';
            $statement =$db->prepare($query);

            $statement->bindValue(':last_name', $l_name);
            $statement->bindValue(':first_name', $f_name);
            $statement->bindValue(':email', $email);
            $statement->bindValue(':usrname', $username);
            $statement->bindValue(':password', $password);
            $statement->bindValue(':address', $address);
            $statement->bindValue(':city', $city);
            $statement->bindValue(':state', $state);
            $statement->bindValue(':zip', $zip);

            $statement->execute();


        }
        catch(Exception $ex)
        {
            echo "Error with DB. Details: $ex";
            die();
        }
        header("Location: LFG.php");
        die(); 
      ?>
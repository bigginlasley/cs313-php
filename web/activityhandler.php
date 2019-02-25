<?php 
session_start();
require "dbConnect.php";
$db = get_db();
?>


<?php 
        $name=$_POST['name'];
        $time=$_POST['time'];
        $address=$_POST['address'];
        $city=$_POST['city'];
        $state=$_POST['state'];
        $zip=$_POST['zip'];
        $capacity=$_POST['capacity'];
        $count=$_POST['count'];
        $activity=$_POST["activity"];
        $custom=$_POST['custom'];

        if($custom != NULL)
        {
            
            try{
            $activity=$custom;
            $query='INSERT INTO type_activity(type_name) VALUES(:name)';
            $statement=$db->prepare($query);
            
            $statement->bindValue(':name', $custom);
            $statement->execute();
            
           
            }
            catch(Exception $ex)
            {
                echo "Error with DB. Details: $ex";
                die();
            }
        }


        try{
            $statement=$db->prepare("SELECT type_of_activity_id FROM type_activity WHERE type_name='$activity'");
            $statement->execute();
            while($row=$statement->fetch(PDO::FETCH_ASSOC))
            {
                $activity=$row['type_of_activity_id'];
            }
        }
        catch(Excetion $ex)
        {
            echo "Error with DB. Details: $ex";
            die();
        }


        try{
            $query = 'INSERT INTO activity(activity_name, activity_type, activity_city, activity_state, activity_zip, activity_address, activity_capacity, activity_count, time) VALUES(:activity_name, :activity_type, :activity_city, :activity_state, :activity_zip, :activity_address, :activity_capacity, :activity_count, :time)';
            $statement =$db->prepare($query);

            $statement->bindValue(':activity_name', $name);
            $statement->bindValue(':activity_type', $activity);
            $statement->bindValue(':time', $time);
            $statement->bindValue(':activity_capacity', $capacity);
            $statement->bindValue(':activity_address', $address);
            $statement->bindValue(':activity_city', $city);
            $statement->bindValue(':activity_state', $state);
            $statement->bindValue(':activity_zip', $zip);
            $statement->bindValue(':activity_count', $count);

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
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

        switch($activity)
        {
            case "Lifting":
                $activity = 1;
                break;

            case "Basketball":
                $activity = 2;
                break;

            case "Bridge_Jumping":
                $activity = 3;
                break;

            case "snowmobiling":
                $activity = 4;
                break;
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
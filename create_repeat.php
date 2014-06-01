<?php
   $host = "us-cdbr-azure-west-a.cloudapp.net";
   $user = "b06ad6f8f7d08b";
   $pwd = "86682b84";
   $db = "phpcaleAvsfwvgD7";
   try {
       $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
   }
   catch(Exception $e){
       die(var_dump($e));
   }

   try {
        $user_id = 1; // TOOO: Get this from the session
        $duration_id = 1;
        $repeat_interval = 2;
        $repeat_on_monday = true;
        $repeat_on_tuesday = false;
        $repeat_on_wednesday = true; 
        $repeat_on_thursday = true;
        $repeat_on_friday = true;
        $repeat_on_saturday = false;
        $repeat_on_sunday = false;
        $starts_on = "2013-04-01";

        $sql_insert = "INSERT INTO `repeat` (user_id, duration_id, repeat_interval, repeat_on_monday, repeat_on_tuesday, repeat_on_wednesday, repeat_on_thursday, repeat_on_friday, repeat_on_saturday, repeat_on_sunday, starts_on) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql_insert);
        $stmt->bindValue(1, $user_id);
        $stmt->bindValue(2, $duration_id);
        $stmt->bindValue(3, $repeat_interval);
        $stmt->bindValue(4, $repeat_on_monday);
        $stmt->bindValue(5, $repeat_on_tuesday);
        $stmt->bindValue(6, $repeat_on_wednesday);
        $stmt->bindValue(7, $repeat_on_thursday);
        $stmt->bindValue(8, $repeat_on_friday);
        $stmt->bindValue(9, $repeat_on_saturday);
        $stmt->bindValue(10, $repeat_on_sundaye);
        $stmt->bindValue(11, $starts_on);
        $stmt->execute();
    }
    catch(Exception $e) {
        die(var_dump($e));
    }
?>

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
        $repeat_on_monday = 1;
        $repeat_on_tuesday = 0;
        $repeat_on_wednesday = 1; 
        $repeat_on_thursday = 1;
        $repeat_on_friday = 1;
        $repeat_on_saturday = 0;
        $repeat_on_sunday = 1;
        $starts_on = "2013-04-01";

        $sql_insert = "INSERT INTO `repeat` (user_id, duration_id, repeat_interval, repeat_on_monday, repeat_on_tuesday, repeat_on_wednesday, repeat_on_thursday, repeat_on_friday, repeat_on_saturday, repeat_on_sunday, starts_on) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql_insert);
        $stmt->bindValue(1, $user_id, PDO::PARAM_INT);
        $stmt->bindValue(2, $duration_id, PDO::PARAM_INT);
        $stmt->bindValue(3, $repeat_interval, PDO::PARAM_BOOL);
        $stmt->bindValue(4, $repeat_on_monday, PDO::PARAM_BOOL);
        $stmt->bindValue(5, $repeat_on_tuesday, PDO::PARAM_BOOL);
        $stmt->bindValue(6, $repeat_on_wednesday, PDO::PARAM_BOOL);
        $stmt->bindValue(7, $repeat_on_thursday, PDO::PARAM_BOOL);
        $stmt->bindValue(8, $repeat_on_friday, PDO::PARAM_BOOL);
        $stmt->bindValue(9, $repeat_on_saturday, PDO::PARAM_BOOL);
        $stmt->bindValue(10, $repeat_on_sunday, PDO::PARAM_BOOL);
        $stmt->bindValue(11, $starts_on, PDO::PARAM_STR);
        $stmt->execute();
    }
    catch(Exception $e) {
        die(var_dump($e));
    }
?>

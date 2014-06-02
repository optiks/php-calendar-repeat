<?php
   $host = "us-cdbr-azure-west-a.cloudapp.net";
   $user = "b06ad6f8f7d08b";
   $pwd = "86682b84";
   $db = "phpcaleAvsfwvgD7";

   try {
       $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
       $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   catch(Exception $e){
       die(var_dump($e));
   }

   try {
      $sql_select = "SELECT id AS repeat_id, duration_id, repeat_interval, repeat_on_monday, repeat_on_tuesday, repeat_on_wednesday, repeat_on_thursday, repeat_on_friday, repeat_on_saturday, repeat_on_sunday, starts_on FROM `repeat` WHERE user_id = 1";
      $stmt = $conn->query($sql_select);
      $repeats = $stmt->fetchAll(); 
      echo json_encode($repeats);
    }
    catch(Exception $e) {
        die(var_dump($e));
    }
?>

<?php
   include_once('db.php');
   $conn = createConnection();

   try {
        $user_id = 1; // TOOO: Get this from the session
        $duration_id = 1; // TODO: link to weekly, monthly?
        $repeat_interval = 1;
        $repeat_on_monday = $_POST["chk_monday"] ? 1 : 0;
        $repeat_on_tuesday = $_POST["chk_tuesday"] ? 1 : 0;
        $repeat_on_wednesday = $_POST["chk_wednesday"] ? 1 : 0; 
        $repeat_on_thursday = $_POST["chk_thursday"] ? 1 : 0;
        $repeat_on_friday = $_POST["chk_friday"] ? 1 : 0;
        $repeat_on_saturday = $_POST["chk_saturday"] ? 1 : 0;
        $repeat_on_sunday = $_POST["chk_sunday"] ? 1 : 0;
        $starts_on = $_POST["dt_starts_on"] ?: date('Y-m-d');

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

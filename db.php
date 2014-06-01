<?php
   $host = "us-cdbr-azure-west-a.cloudapp.net";
   $user = "b06ad6f8f7d08b";
   $pwd = "86682b84";
   $db = "phpcaleAvsfwvgD7";

   function createConnection() {
      try {
          $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pwd);
          $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

          return $conn;
      }
      catch(Exception $e){
          die(var_dump($e));
      }
   }
?>

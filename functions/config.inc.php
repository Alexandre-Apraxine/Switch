<?php

  $hostname = "mysql51-142.perso";
  $dbUser = "alexandrxedbase";
  $passwords = "alex1106";
  $databaseName= "alexandrxedbase";
                

    // $hostname = "localhost";
    // $dbUser = "root";
    // $passwords = "root";
    // $databaseName= "bouya";
                
    try {
        $db = new PDO("mysql:dbname=$databaseName;host=$hostname", $dbUser, $passwords);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Error : " . $e->getMessage();
    }
    
?>
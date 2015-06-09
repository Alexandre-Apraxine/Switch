<?php

  // $hostname = "";
  // $dbUser = "";
  // $passwords = "";
  // $databaseName= "";
                

    $hostname = "localhost";
    $dbUser = "root";
    $passwords = "root";
    $databaseName= "bouya";
                
    try {
        $db = new PDO("mysql:dbname=$databaseName;host=$hostname", $dbUser, $passwords);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Error : " . $e->getMessage();
    }
    
?>
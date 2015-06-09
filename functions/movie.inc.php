<?php
  
  if(isset($_POST['submit-movie'])){

    include "config.inc.php";

    $movieID = ($_POST['value']);

    $db->query("INSERT INTO movies(apid)
                            VALUES ('$movieID')");

    // $SQL = "INSERT INTO chosenitems (ID, Name, Price) VALUES ('', '4-6 Days', '£75.00')";

    // $result = mysql_query($SQL);

  }
?>
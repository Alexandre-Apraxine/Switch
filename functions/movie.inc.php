<?php
  
  if(isset($_POST['submit-movie'])){

    include "config.inc.php";

    $movieID = ($_POST['value']);
    $username = $_SESSION["username"];

    $db->query("INSERT INTO watchlist(apid, user)
                            VALUES ('$movieID','$username')");


  }

  if(isset($_POST['submit-movie-seen'])){

    include "config.inc.php";

    $movieID = ($_POST['value']);
    $username = $_SESSION["username"];

    $db->query("INSERT INTO watched(apid, user)
                            VALUES ('$movieID','$username')");


  }
  
?>
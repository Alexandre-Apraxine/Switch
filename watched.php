<?php session_start();  

  if (empty($_SESSION['username'])) {
      echo '<script>window.location = "index.php";</script>';
  } else {
    include "functions/is-logged.php";
    };

    include "functions/getmovie.inc.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Your movies - Switch</title>
    <meta name="viewport" content="initial-scale=1.0,width=device-width">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta charset="UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/app.css"/>
    <link rel="stylesheet" type="text/css" href="fonts/fonts.css"/>
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
  </head>

  <body class="watchlist-bg">
  <a class="logo-home" href="index.php">Switch</a>
  

  <input class="watched-total" name="watched-total" value=<?php echo $totalWatched ?> style="display: none"/>
    <div class="watchlist-list">
    <h5>Seen movies</h5>

        
      

      
    </div>
    <a class="watchlist-back" href="index.php">back home</a>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/jquery.sudoSlider.min.js"></script>
    <script src="js/slider-similar.js"></script>
    <script src="js/get-watched-all.js"></script>
    <script src="js/main.js"></script>

  </body>

</html>
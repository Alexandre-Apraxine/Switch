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
    <title>Switch - Browse</title>
    <meta name="viewport" content="initial-scale=1.0,width=device-width">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta charset="UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Montserrat:700,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/app.css"/>
    <link rel="stylesheet" type="text/css" href="fonts/fonts.css"/>
    <!-- <link rel="icon" type="image/png" href="assets/img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="assets/img/favicon-16x16.png" sizes="16x16" /> -->
  </head>

  <body class="watchlist-bg">

 
    <div class="browse-cat watchlist-list">

        <div class="a-movie movie-three"> </div>
        <div class="a-movie movie-two"> </div>
        <div class="a-movie movie-one"> </div>

        <input class="lolilol" name="value" value=<?php echo $result ?> style="display: none"/>
        <input class="lolilo" name="value" value=<?php echo $resultt ?> style="display: none"/>
        <input class="lolil" name="value" value=<?php echo $resulttt ?> style="display: none"/>

      
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/jquery.sudoSlider.min.js"></script>
    <script src="js/slider-similar.js"></script>
    <script src="js/watchlist-get.js"></script>
    <script src="js/main.js"></script>

  </body>

</html>
<?php session_start();  

  if (empty($_SESSION['username'])) {
      include "functions/function.inc.php";
      include "functions/register.inc.php";
      include "functions/login.inc.php";
      include "functions/isnot-logged.php";
  } else {
    include "functions/is-logged.php";
    };

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

  <body class="popular-slide block-scroll">

    <div class="login-overlay"></div>
    <div class="log-midbar"></div>
    <div class="login-box">
      <!-- <a class="log-button connect" href="logged.php">Login</a> --><button class="log-button connect">Login</button>
      <button class="log-button register">Register</button>
    </div>


      <!-- form pop up -->


    <div class="error-box">

      <?php if( isset( $errors['username'] ) ) echo error_mess($errors, 'username'); ?>
    <?php if(isset($errors['password'])) echo error_mess($errors, 'password'); ?>
        
      </div>

    <form method="POST" action="browse-popular.php" class="register-form">
      <input type="text" name="username" placeholder="username" autocomplete="off" value="<?php if(!empty($_POST['username'])) echo $_POST['username']; ?>"><br>
      <input type="password" name="password" placeholder="password" autocomplete="off" value="<?php if(!empty($_POST['password'])) echo $_POST['password']; ?>"><br>
      <input class="submit-form" type='submit' value="GO" name="submit-register"/>
    </form>


    <form method="POST" action="browse-popular.php" class="login-form">
      <input type="text" name="username" placeholder="username" autocomplete="off" value="jurydwm"><br>
      <input type="password" name="password" placeholder="password" autocomplete="off" value="jury111215"><br>
      <input class="submit-form" type='submit' value="GO" name="submit-login"/>
    </form>


    <div id="slider" >
       <ul>
          <li class="browse-popular-trending"></li>
          <li class="browse-popular-top-rated"></li>
          <li class="browse-popular-250"></li>
          <li class="browse-popular-oscar"></li>
       </ul>
    </div>
    <div class="browse-thumb-overlay">
      <div class="browse-thumb-overlay-container">
        <ul class="browse-thumbnail genre-thumb">
          <li><a class="browse-popular-trending-thumb" href="trending.php">Trending</a></li>
          <li><a class="browse-popular-top-rated-thumb" href="top-rated.php">Top Rated</a></li>
          <li><a class="browse-popular-250-thumb" href="top-imdb.php">Imdb 250</a></li>
          <li><a class="browse-popular-oscar-thumb" href="oscar-winner.php">Oscar Winner</a></li>
        </ul>
      </div>
    </div>
    <div class="browse-cat browse-popular">
      <a class="logo-home-fixed-cat" href="index.php">Switch</a>
      <!-- <a class="btn btn-smaller login" href="index.php">Logout</a> -->
      <div class="container">
        <div class="selected-sub-vertical-center">
          <div class="sub-filter-select">
            <div class="sub-filter-container">
              <span>Trending</span>
            </div>
          </div>
          <a class="btn btn-normal explore-cat" href="trending.php"><span class="btn-hover"><!-- any movie --></span>explore</a>
        </div>
      </div>
      <div class="major-filter-select">
        <ul>
          <li>
            <a href="browse-genre.php">Genre</a>
          </li>
          <li>
            <a class="active-cat" href="browse-popular.php">Popular</a>
          </li>
          <li>
            <a href="browse-list.php">Similar</a>
          </li>
        </ul>
      </div>
      <div class="display-mode">
        <!-- <p>Fullscreen</p> -->
        <a class="thumbnail-view-btn" href="#"></a>
        <a class="fullscreen-view-btn display-slide" href="#"></a>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/jquery.sudoSlider.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/main.js"></script>

  </body>

</html>
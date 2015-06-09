<?php session_start();  

  if (empty($_SESSION['username'])) {
      echo '<script>window.location = "index.php";</script>';
  } else {
    $username = $_SESSION['username']; 
    };

    include "functions/getmovie.inc.php";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Switch - Home</title>
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

  <body>

    <div class="browse-overlay">
      <div class="browse-overlay-container">
        <p>Pick a category to start navigate</p>
        <ul>
          <li>
            <a class="browse-overlay-a-one" href="browse-genre.php">Genre</a>
          </li>
          <li>
            <a class="browse-overlay-a-two" href="browse-popular.php">Popular</a>
          </li>
          <li>
            <a class="browse-overlay-a-three" href="browse-list.php">Similar</a>
          </li>
          <li class="more-cat-li">
            More to come
          </li>
        </ul>
      </div>
    </div>

    <div class="header header-logged">
      <a class="logo-home" href="index.php">Switch</a>
      <div class="container container-header container-header-logged">
        <a class="btn btn-smaller login" href="functions/logout.inc.php">Logout</a>
        <!-- <button class="btn btn-smaller login">Logout</button> -->
        <div class="header-content">
          <h1>what 's up <?php echo $username; ?></h1>
          <div class="btn-two-hor">
            <a class="btn btn-normal" href="movie.php"><span class="btn-hover"></span>Random</a>
            <button class="btn btn-normal browse-transit"><span class="btn-hover"><!-- categories --></span>Browse</button>
          </div>
        </div>
      </div>
    </div>

    <div class="logged-content-container">
      <div class="triangle-logged"></div>
      <div class="last-watchlist">
        <div class="container">
          <h2>Watchlist</h2>
          <div class="poster-box poster-one">
            <div class="poster-box-hover-content">
              <div class="poster-box-btn-container">
                <button class="btn-poster btn-checked"></button>
                <button class="btn-poster btn-view"></button>
                <button class="btn-poster btn-remove"></button>
              </div>
            </div>
          </div>
          <div class="poster-box poster-two">
            <div class="poster-box-hover-content">
              <div class="poster-box-btn-container">
                <button class="btn-poster btn-checked"></button>
                <button class="btn-poster btn-view"></button>
                <button class="btn-poster btn-remove"></button>
              </div>
            </div>
          </div>
          <div class="poster-box poster-three">
            <div class="poster-box-hover-content">
              <div class="poster-box-btn-container">
                <button class="btn-poster btn-checked"></button>
                <button class="btn-poster btn-view"></button>
                <button class="btn-poster btn-remove"></button>
              </div>
            </div>
          </div>
          <a href="#">Check Watchlist</a>
        </div>
        <input class="lolilol" name="value" value=<?php echo $result ?> style="display: none"/>
        <input class="lolilo" name="value" value=<?php echo $resultt ?> style="display: none"/>
        <input class="lolil" name="value" value=<?php echo $resulttt ?> style="display: none"/>
      </div>

      <div class="last-seen">
        <div class="container">
          <h2>Watched</h2>
          <div class="poster-box poster-one-seen">
            <div class="poster-box-hover-content">
              <div class="poster-box-btn-container">
                <button class="btn-poster btn-view"></button>
                <button class="btn-poster btn-remove"></button>
              </div>
            </div>
          </div>
          <div class="poster-box poster-two-seen">
            <div class="poster-box-hover-content">
              <div class="poster-box-btn-container">
                <button class="btn-poster btn-view"></button>
                <button class="btn-poster btn-remove"></button>
              </div>
            </div>
          </div>
          <div class="poster-box poster-three-seen">
            <div class="poster-box-hover-content">
              <div class="poster-box-btn-container">
                <button class="btn-poster btn-view"></button>
                <button class="btn-poster btn-remove"></button>
              </div>
            </div>
          </div>
          <a href="#">Check them all</a>
        </div>
      </div>

      <div class="your-list">
        <div class="container">
          <h2>Your lists</h2>
          <p>You don't have any list for the moment.</p>
          <button class="btn btn-normal create-list">Create list</button>
        </div>
      </div>
    </div>

    <div class="get-started">
      <div class="container">
        <div class="section left-section">
          <div class="btn-two-hor">
            <button class="btn btn-normal"><span class="btn-hover"></span>Facebook</button>
            <button class="btn btn-normal"><span class="btn-hover"></span>twitter</button>
          </div>
        </div>
        <div class="section right-section">
          <div class="triangle-style"></div>
          <h3>Spread the word !</h3>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="container">
        <div class="section left-section">
          <a href="index.php">Switch</a>
          <span>Created and developed by <a href="http://alexandreapraxine.be/" target="_blank">Alexandre Apraxine</a></span>
        </div>
        <div class="section right-section">
          <div class="btn-two-hor">
            <button class="btn-social btn-facebook"></button>
            <button class="btn-social btn-twitter"></button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/watchlist-get.js"></script>

  </body>

</html>
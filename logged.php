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
    <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16" />
  </head>

  <body class="logged-body">

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
          <h1>what's up <?php echo $username; ?></h1>
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
          <p class="empty-list">You don't have any movies in your watchlist.</p>
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
          <a href="watchlist.php">See all (<span class="total-watchlisted"></span>)</a>
        </div>
        <input class="lolilol" name="value" value=<?php echo $result ?> style="display: none"/>
        <input class="lolilo" name="value" value=<?php echo $resultt ?> style="display: none"/>
        <input class="lolil" name="value" value=<?php echo $resulttt ?> style="display: none"/>
        <input class="number-watchlisted" name="value" value=<?php echo $totalwatchlist ?> style="display: none"/>
      </div>

      <div class="last-seen">
        <div class="container">
          <h2>Watched</h2>
          <p class="empty-list">You still didn't add any movies you have seen.</p>
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
          <a href="watched.php">See all (<span class="total-watched"></span>)</a>
        </div>
        <input class="ptr" name="value" value=<?php echo $resullt ?> style="display: none"/>
        <input class="ptdr" name="value" value=<?php echo $resulllt ?> style="display: none"/>
        <input class="ptdrr" name="value" value=<?php echo $resullllt ?> style="display: none"/>
        <input class="number-watched" name="value" value=<?php echo $totalWatched ?> style="display: none"/>
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
            <a class="btn btn-normal btn-facebook pop-it-up" href="http://www.facebook.com/share.php?u=<full page url to share" onClick="return fbs_click(575, 400)" target="_blank" title="Share This on Facebook"><span class="btn-hover"></span>Facebook</a>
            <a class="btn btn-normal btn-twitter pop-up-twitter" href="http://twitter.com/share?text=Don't know what to watch ? Find the movie you need with Switch !"><span class="btn-hover"></span>twitter</a>
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
          <span>Created and developed by <a href="https://twitter.com/apraxinealex" target="_blank">Alexandre Apraxine</a></span>
        </div>
        <div class="section right-section">
          <div class="btn-two-hor">
            <a class="btn-social btn-facebook pop-it-up" href="http://www.facebook.com/share.php?u=<full page url to share" onClick="return fbs_click(575, 400)" target="_blank" title="Share This on Facebook"></a>
            <a class="btn-social btn-twitter pop-up-twitter" href="http://twitter.com/share?text=Don't know what to watch ? Find the movie you need with Switch !"></a>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/watchlist-get.js"></script>
    <script src="js/watched-get.js"></script>

    <script type="text/javascript">
function fbs_click(width, height) {
    var leftPosition, topPosition;
    //Allow for borders.
    leftPosition = (window.screen.width / 2) - ((width / 2) + 10);
    //Allow for title and status bars.
    topPosition = (window.screen.height / 2) - ((height / 2) + 50);
    var windowFeatures = "status=no,height=" + height + ",width=" + width + ",resizable=yes,left=" + leftPosition + ",top=" + topPosition + ",screenX=" + leftPosition + ",screenY=" + topPosition + ",toolbar=no,menubar=no,scrollbars=no,location=no,directories=no";
    u=location.href;
    t=document.title;
    window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer', windowFeatures);
    return false;
}
</script>

  </body>

</html>
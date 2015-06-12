<?php session_start(); 

  if (empty($_SESSION['username'])) {
      include "functions/function.inc.php";
      include "functions/register.inc.php";
      include "functions/login.inc.php";
  } else {
      echo '<script>window.location = "logged.php";</script>';
    };

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

  <body>

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
    

    <form id="register" method="POST" action="index.php" class="register-form">
      <input type="text" name="username" placeholder="username" autocomplete="off" value="<?php if(!empty($_POST['username'])) echo $_POST['username']; ?>"><br>
      <input type="password" name="password" placeholder="password" autocomplete="off" value="<?php if(!empty($_POST['password'])) echo $_POST['password']; ?>"><br>
      <input class="submit-form" type='submit' value="GO" name="submit-register"/>
    </form>


    <form method="POST" action="index.php" class="login-form">
      <input type="text" name="username" placeholder="username" autocomplete="off" value="jurydwm"><br>
      <input type="password" name="password" placeholder="password" autocomplete="off" value="jury111215"><br>
      <input class="submit-form" type='submit' value="GO" name="submit-login"/>
    </form>




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


    <div class="header">
      <!-- <button class="btn-burger"></button> -->
      <a class="logo-home" href="index.php">Switch</a>
      <div class="container container-header">
        <button class="btn btn-smaller login">Login</button>
        <div class="header-content">
          <h1>Need a movie ?</h1>
          <p class="first-p-intro">Switch lends you a hand to find the right movie for the right occasion.</p>
          <p>From browsing genre to selections and picks, no way you’re leaving empty handed.</p>
          <p class="getstartedd">Alright ! Let’s get started !</p>
          <div class="btn-two-hor">
            <a class="btn btn-normal" href="movie.php"><span class="btn-hover"><!-- any movie --></span>Random</a>
            <button class="btn btn-normal browse-transit"><span class="btn-hover"><!-- categories --></span>Browse</button>
            <!-- <a class="btn btn-normal" href="browse-genre.php">Browse</a> -->
          </div>
        </div>
        <button class="btn-arrow"></button>
      </div>
    </div>

    <div class="info-random">
      <div class="container">
        <div class="section left-section">
          <div class="random-box">
            <button class="btn btn-small">Random</button>
          </div>
        </div>
        <div class="section right-section">
          <h2>Let the wind blow</h2>
          <p>Switch goes to the point.</p>
          <p>With its full random tool, don’t lose time.</p>
          <p>Need a movie ?  Get a movie !</p>
        </div>
      </div>
    </div>

    <div class="info-navigate">
      <div class="container">
        <div class="section left-section">
          <h2>Browse &amp; Navigate</h2>
          <p>You wanna get more specific and filter your options.</p>
          <p>Simply navigate through major categories</p>
          <p>and theirs subs to find the perfect match for the night.</p>
        </div>
        <div class="section right-section">
          <div class="filter-box">
            <div class="filter-one">
              <div class="filter-box-major">
                <span>Popular</span>
                <span>Genre</span>
                <span>User list</span>
              </div>
              <div class="sub-box">
                <button class="btn-arrow-slide-left"></button>
                <div class="subs-container">
                  <span>Now available</span>
                </div>
                <button class="btn-arrow-slide-right"></button>
              </div>
            </div>
            <div class="filter-box-veil"></div>
            <button class="btn btn-small">Browse</button>
          </div>
        </div>
      </div>
    </div>

    <div class="info-actions">
      <div class="container">
        <div class="section left-section">
          <div class="actions-box">
            <button class="btn-action action-watched"><!-- Already  -->Seen</button>
            <button class="btn-action action-watchlist"><!-- Add  -->Later</button>
            <button class="btn-action action-next">Next <!-- movie --></button>
          </div>
        </div>
        <div class="section right-section">
          <h2>Quick Actions</h2>
          <p>Once a movie has been suggested to you,</p>
          <p>differents actions can be taken.</p>
          <p>Not interested ? Get a new one !</p>
          <p>Not in the mood ? Add it to your watchlist !</p>
          <p>Seen it ? Signal it and it won't appear again.</p>
        </div>
      </div>
    </div>

    <div class="get-started">
      <div class="container">
        <div class="section left-section">
          <div class="btn-two-hor">
            <button class="btn btn-normal quick-register"><span class="btn-hover"></span>Register</button>
            <a class="btn btn-normal quick-try" href="movie.php"><span class="btn-hover"></span>Quick Try</a>
          </div>
        </div>
        <div class="section right-section">
          <div class="triangle-style"></div>
          <h3>Let's get started !</h3>
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
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/waypoints.js"></script>
    <script src="js/main.js"></script>

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
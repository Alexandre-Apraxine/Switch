<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Sci-Fi Movies - Switch</title>
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
    <a class="logo-home-cheat" href="index.php">Switch</a> 

    <div class="trailer-overlay-quit"></div>
    <div class="video-trailer-container">
      <iframe id="video" width="854" height="480" src="" frameborder="0" allowfullscreen></iframe>
    </div>

    <p class="no-trailer">No trailer available for this movie.</p>

    <div class="movie-container">
      <!-- <iframe id="video" width="420" height="315" src="http://www.youtube.com/embed/9B7te184ZpQ?rel=0" frameborder="0" allowfullscreen></iframe> -->
      <div class="left-zone"></div>
      <div class="left-zone-overlay">
        <a class="logo-home-fixed" href="index.php">Switch</a>
        <button class="play-vid-container">
           <svg class="play-icon" width="67px" height="66px" viewBox="0 0 67 66"> <path d="M33.2,66 C14.9989691,66 0.2,51.1819355 0.2,32.9574194 C0.2,14.7329032 14.9989691,0 33.2,0 C51.4010309,0 66.2,14.8180645 66.2,33.0425806 C66.2,51.2670968 51.4010309,66 33.2,66 L33.2,66 Z M33.2,1.83096774 C16.0069962,1.83096774 2.11365979,15.742231 2.11365979,32.9574194 C2.11365979,50.1726077 16.0069962,64.083871 33.2,64.083871 C50.3930038,64.083871 64.2863402,50.1726077 64.2863402,32.9574194 C64.2863402,15.742231 50.3930038,1.83096774 33.2,1.83096774 L33.2,1.83096774 Z M41.9216495,35.8141935 L30.2876289,43.0709677 C30.192268,43.1664516 30.0969072,43.1664516 30.0015464,43.1664516 L30.0015464,43.1664516 C29.9061856,43.1664516 29.8108247,43.2619355 29.7154639,43.2619355 L29.7154639,43.2619355 L29.6201031,43.2619355 L29.6201031,43.2619355 L29.5247423,43.2619355 L29.5247423,43.2619355 L29.4293814,43.2619355 L29.4293814,43.2619355 L29.3340206,43.2619355 C28.0943299,43.2619355 27.1407216,42.3070968 27.1407216,41.0658065 L27.1407216,41.0658065 L27.1407216,26.5522581 C27.1407216,25.3109677 28.0943299,24.356129 29.3340206,24.356129 C29.8108247,24.356129 30.192268,24.4516129 30.5737113,24.7380645 L42.1123711,31.9948387 C42.7798969,32.3767742 43.256701,33.0451613 43.256701,33.9045161 C43.0659794,34.6683871 42.5891753,35.4322581 41.9216495,35.8141935 L41.9216495,35.8141935 Z" id="Shape" fill="#FFFFFF" sketch:type="MSShapeGroup"></path> </svg>
           <span class="trailer-span trailer-span-slide">Watch trailer</span>
        </button>
      </div>
      <div class="right-zone">
        <div class="container-movie-info">
          <div class="title-rate">
            <div class="movie-title-left">
              <p class="page-map"><a class="bread-home" href="index.php">Home</a><a class="bread-cat" href="browse-genre.php">Genre</a><span>Sci-Fi</span></p>
              <h4 class="movie-title"></h4>
              <span class="movie-date"></span>
            </div>
            <div class="rate">
              <div class="pie_progress" role="progressbar" data-goal="64">
                <div class="pie_progress__number"></div>
              </div>
              <a class="imdb-rating" href="#" target="_blank">IMDb Link</a>
            </div>
          </div>
          <div class="genre-time">
            <div class="info-genre">
            </div>
            <div class="info-time">
            </div>
          </div>
          <div class="info-cast">
            <p>Directed by <span class="director"></span></p>
            <p>Written by <span class="writer"></span></p>
            <p>Staring <span class="staring"></span></p>
          </div>
          <div class="info-plot">
            <p></p>
          </div>
          <div class="actions-container">
              <button class="actions-box actions-box-one">Already watched</button>
              <button class="actions-box actions-box-two">Add watchlist</button>
              <a class="actions-box actions-box-three" data-next-movie href="#">Next movie</a>
          </div>
          <div class="arrow-scrollable"></div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/jquery-asPieProgress.js"></script>
    <script src="js/main.js"></script>
    <script src="js/genre-scifi.js"></script>

  </body>

</html>
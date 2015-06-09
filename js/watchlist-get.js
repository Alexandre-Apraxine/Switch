$(document).ready(function () {

  // api

  var keyPrefix = "?api_key=";
  var key = "c98c71001f1c094dc49d12e10f34a768";
  var baseUrl = "https://api.themoviedb.org/3/";
  var imdbLink = "http://www.imdb.com/title/";
  var youtubeLink = "https://www.youtube.com/embed/";

  // var idStorage = '100';

      var bou = $('.lolilol').attr('value');
      var bout = $('.lolilo').attr('value');
      var boutt = $('.lolil').attr('value');
      // console.log(bou);
      movieWatchlist = bou;
      movieWatchlistt = bout;
      movieWatchlisttt = boutt;

      $.ajax({
      url: baseUrl + 'movie/' + movieWatchlist + keyPrefix + key, // random movie ID
      statusCode: {
          404: function() {
            // never blank - 404
            getRandom();
          }
        }

    }).done(function(data){
      console.log('________________');
      console.log('-- movie credits ');
      console.log(data);
      // console.log(data.results.length);



            $('.poster-one, .movie-one').css({'background': 'url(http://image.tmdb.org/t/p/original'+ data.poster_path +') no-repeat center', 'background-size':'cover'});
      


    });

    $.ajax({
      url: baseUrl + 'movie/' + movieWatchlistt + keyPrefix + key, // random movie ID
      statusCode: {
          404: function() {
            // never blank - 404
            getRandom();
          }
        }

    }).done(function(data){
      console.log('________________');
      console.log('-- movie credits ');
      console.log(data);
      // console.log(data.results.length);



            $('.poster-two').css({'background': 'url(http://image.tmdb.org/t/p/original'+ data.poster_path +') no-repeat center', 'background-size':'cover'});
      


    });

    $.ajax({
      url: baseUrl + 'movie/' + movieWatchlisttt + keyPrefix + key, // random movie ID
      statusCode: {
          404: function() {
            // never blank - 404
            getRandom();
          }
        }

    }).done(function(data){
      console.log('________________');
      console.log('-- movie credits ');
      console.log(data);
      // console.log(data.results.length);



            $('.poster-three').css({'background': 'url(http://image.tmdb.org/t/p/original'+ data.poster_path +') no-repeat center', 'background-size':'cover'});
      


    });


});


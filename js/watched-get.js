$(document).ready(function () {

  // api

  var keyPrefix = "?api_key=";
  var key = "c98c71001f1c094dc49d12e10f34a768";
  var baseUrl = "https://api.themoviedb.org/3/";
  var imdbLink = "http://www.imdb.com/title/";
  var youtubeLink = "https://www.youtube.com/embed/";

  // var idStorage = '100';

      var tic = $('.ptr').attr('value');
      var tac = $('.ptdr').attr('value');
      var tictac = $('.ptdrr').attr('value');
      // console.log(bou);
      movieSeenlist = tic;
      movieSeenlistt = tac;
      movieSeenlisttt = tictac;

      var totalseenmovies = $('.number-watched').attr('value');
      console.log(totalseenmovies);

      $('.total-watched').html(totalseenmovies);

      $.ajax({
      url: baseUrl + 'movie/' + movieSeenlist + keyPrefix + key, // random movie ID
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



            $('.poster-one-seen').css({'background': 'url(http://image.tmdb.org/t/p/original'+ data.poster_path +') no-repeat center', 'background-size':'cover'});
      


    });

    $.ajax({
      url: baseUrl + 'movie/' + movieSeenlistt + keyPrefix + key, // random movie ID
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



            $('.poster-two-seen').css({'background': 'url(http://image.tmdb.org/t/p/original'+ data.poster_path +') no-repeat center', 'background-size':'cover'});
      


    });

    $.ajax({
      url: baseUrl + 'movie/' + movieSeenlisttt + keyPrefix + key, // random movie ID
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



            $('.poster-three-seen').css({'background': 'url(http://image.tmdb.org/t/p/original'+ data.poster_path +') no-repeat center', 'background-size':'cover'});
      


    });


});


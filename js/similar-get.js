$(document).ready(function () {

  // api

  var keyPrefix = "?api_key=";
  var key = "c98c71001f1c094dc49d12e10f34a768";
  var baseUrl = "https://api.themoviedb.org/3/";
  var imdbLink = "http://www.imdb.com/title/";
  var youtubeLink = "https://www.youtube.com/embed/";
  var search = "search/movie";
  var query = "&query=";
  var queryValue = "";

  // var idStorage = '100';


  $(".query-input").keypress(function (e) {

      var keyDown = e.which;
 if(keyDown == 13)  // the enter key code
  {

      var queryValue = $('.query-input').val()
      console.log(queryValue);
      $.ajax({
            url: baseUrl + search + keyPrefix + key + query + queryValue,
        }).done(function(data) {
      console.log('________________');
      console.log('-- movie credits ');
      console.log(data);
      console.log(data.results.length);

      // if (data.results.length > 3) {
      //       console.log('okokoko');
      //     }else{
      //       console.log('nop');
      //     }

          if (data.results.length > 3) {
            console.log('okokoko');
            $('.similar-current-action').html('Select a movie');
            $('.prop-one, .prop-two, .prop-three').addClass('prop-display prop-pointer');
            $('.prop-three').addClass('prop-margin');
            $('.prop-one, .prop-two').removeClass('prop-margin');
            $('.prop-one').css({'background': 'url(http://image.tmdb.org/t/p/original'+ data.results[0].poster_path +') no-repeat center', 'background-size':'cover'});
      $('.prop-two').css({'background': 'url(http://image.tmdb.org/t/p/original'+ data.results[1].poster_path +') no-repeat center', 'background-size':'cover'});
      $('.prop-three').css({'background': 'url(http://image.tmdb.org/t/p/original'+ data.results[2].poster_path +') no-repeat center', 'background-size':'cover'});
      var choiceOne = data.results[0].id;
      var choiceOneTitle = data.results[0].title;
        var choiceTwo = data.results[1].id;
        var choiceTwoTitle = data.results[1].title;
        var choiceThree = data.results[2].id;
        var choiceThreeTitle = data.results[2].title;
          }

          if (data.results.length == 2) {
            console.log('2');
            $('.similar-current-action').html('Select a movie');
            $('.prop-one, .prop-two').addClass('prop-display prop-pointer');
            $('.prop-two').addClass('prop-margin');
            $('.prop-one').css({'background': 'url(http://image.tmdb.org/t/p/original'+ data.results[0].poster_path +') no-repeat center', 'background-size':'cover'});
      $('.prop-two').css({'background': 'url(http://image.tmdb.org/t/p/original'+ data.results[1].poster_path +') no-repeat center', 'background-size':'cover'});
      $('.prop-three').removeClass('prop-display prop-margin');
      var choiceOne = data.results[0].id;
      var choiceOneTitle = data.results[0].title;
        var choiceTwo = data.results[1].id;
        var choiceTwoTitle = data.results[1].title;
    
          }

          if (data.results.length == 1) {
            console.log('1');
            $('.similar-current-action').html('One match found');
            $('.prop-one').addClass('prop-display prop-pointer prop-margin');
           $('.prop-one').css({'background': 'url(http://image.tmdb.org/t/p/original'+ data.results[0].poster_path +') no-repeat center', 'background-size':'cover'});
           $('.prop-two').removeClass('prop-display prop-margin');
           $('.prop-three').removeClass('prop-display prop-margin');
           var choiceOne = data.results[0].id;
           var choiceOneTitle = data.results[0].title;
     
          }

          if (data.results.length == 0) {
            console.log('0');
            $('.similar-current-action').html('No match. Retry');
            $('.prop-one').removeClass('prop-display');
            $('.prop-two').removeClass('prop-display');
           $('.prop-three').removeClass('prop-display');
          }

      // console.log(choiceOne);
      console.log(data.results[0].id);
      // console.log(choiceOneTitle);
      console.log(data.results[0].title);

      
        
        
        var idPick = "0";

          $(".prop-one").click(function() {

            window.location.href = "similar.php"           

            localStorage.setItem("chosenOne", choiceOne);
            localStorage.setItem("chosenOneTitle", choiceOneTitle);
            });

          $(".prop-two").click(function() {

              window.location.href = "similar.php"  

              localStorage.setItem("chosenOne", choiceTwo);
              localStorage.setItem("chosenOneTitle", choiceTwoTitle);

            });

          $(".prop-three").click(function() {

              window.location.href = "similar.php"  

              localStorage.setItem("chosenOne", choiceThree);
              localStorage.setItem("chosenOneTitle", choiceThreeTitle);

            });


    });

  }
  });


});


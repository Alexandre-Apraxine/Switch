$(document).ready(function () {

  // api

  var keyPrefix = "?api_key=";
  var key = "c98c71001f1c094dc49d12e10f34a768";
  var baseUrl = "https://api.themoviedb.org/3/";
  var imdbLink = "http://www.imdb.com/title/";
  var youtubeLink = "https://www.youtube.com/embed/";

  // var idStorage = '100';

      var watchedNum = $('.watchlist-total').attr('value');
      console.log(watchedNum);
      // var numItems = $('.watched-totals').length;
      // console.log(numItems);


      for(var i = 0; i < watchedNum; i++) {
          if(i === watchedNum) {
            console.log('full');
          } else {
            // var ziggy = watchedNum - i;
            // console.log(ziggy);
            $('.watchlist-list').append('<div class="a-movie a-movie'+ i +'"></div>');

    //         $.ajax({
    //   url: baseUrl + 'movie/' + watchedNum + keyPrefix + key, // random movie ID
    //   statusCode: {
    //       404: function() {
    //         // never blank - 404
    //         getRandom();
    //       }
    //     }

    // }).done(function(data){
    //   console.log('________________');
    //   console.log('-- movie credits ');
    //   console.log(data);
    //   // console.log(data.results.length);



    //         $('.a-movie').css({'background': 'url(http://image.tmdb.org/t/p/original'+ data.poster_path +') no-repeat center', 'background-size':'cover'});
      


    // });
          }
        }


        // for(var i = 0; i < watchedNum; i++) {
        //     var iad = $('.a-movie'+i);
        //   if(i === watchedNum) {
        //     console.log('prout');
        //   } else {
        //     var jasir = $('.watched-totals:nth-child( n +'+ i +')').attr('value');
        //     console.log(jasir);


        //     $.ajax({
        //       url: baseUrl + 'movie/' + jasir + keyPrefix + key, // random movie ID
        //       statusCode: {
        //           404: function() {
        //             // never blank - 404
        //             getRandom();
        //           }
        //         }

        //     }).done(function(data){
        //       console.log('________________');
        //       console.log('-- movie credits ');
        //       console.log(data);
        //       // console.log(data.results.length);



        //             $(iad).css({'background': 'url(http://image.tmdb.org/t/p/original'+ data.poster_path +') no-repeat center', 'background-size':'cover'});
                    
              


        //     });
            
        //   }
        // }


        for(var i = 0; i < watchedNum; i++) {
            var iad = '.a-movie'+i;
            console.log(iad);
            var jasir = $('.watchlist-totals'+i+'').attr('value');
            console.log(jasir);

          if(i === watchedNum) {
            console.log('full');
          } else {
            $.ajax({
      url: baseUrl + 'movie/' + jasir + keyPrefix + key, // random movie ID
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
      console.log(data.poster_path);
      var baboon = i--;
      var iad = '.a-movie'+i;



            $(iad).css({'background': 'url(http://image.tmdb.org/t/p/original'+ data.poster_path +') no-repeat center', 'background-size':'cover'});
      


    });

            
          }
        }

//         var biss = '.a-movie0';
//         console.log(biss);


// $(biss).css('background','red');


    
        //     console.log(jasir);
      
      

    // $.ajax({
    //   url: baseUrl + 'movie/' + jasir + keyPrefix + key, // random movie ID
    //   statusCode: {
    //       404: function() {
    //         // never blank - 404
    //         getRandom();
    //       }
    //     }

    // }).done(function(data){
    //   console.log('________________');
    //   console.log('-- movie credits ');
    //   console.log(data);
    //   // console.log(data.results.length);



    //         $('.a-movie0').css({'background': 'url(http://image.tmdb.org/t/p/original'+ data.poster_path +') no-repeat center', 'background-size':'cover'});
      


    // });

    // $.ajax({
    //   url: baseUrl + 'movie/' + movieSeenlisttt + keyPrefix + key, // random movie ID
    //   statusCode: {
    //       404: function() {
    //         // never blank - 404
    //         getRandom();
    //       }
    //     }

    // }).done(function(data){
    //   console.log('________________');
    //   console.log('-- movie credits ');
    //   console.log(data);
    //   // console.log(data.results.length);



    //         $('.poster-three-seen').css({'background': 'url(http://image.tmdb.org/t/p/original'+ data.poster_path +') no-repeat center', 'background-size':'cover'});
      


    // });


});


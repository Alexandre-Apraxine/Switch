$(document).ready(function () {

  // var idStorage = localStorage;

  // $(".actions-box-three").html(idStorage);

  // console.log(idStorage);

  var keyPrefix = "?api_key=";
  var key = "c98c71001f1c094dc49d12e10f34a768";
  var baseUrl = "https://api.themoviedb.org/3/";
  var imdbLink = "http://www.imdb.com/title/";
  var youtubeLink = "https://www.youtube.com/embed/";

  // var idPick = localStorage.getItem("chosenOne");
  // console.log(idPick);

  // $.ajax({
  //                 url: baseUrl + 'movie/' + idPick + '/similar' + keyPrefix + key,
  //               }).done(function(data) {
  //             console.log('________________');
  //             console.log('-- movie credits ');
  //             console.log(data);


                
  //             });

  
    function getRandomSimilar() {


      var idPick = localStorage.getItem("chosenOne");
      var idPickTitle = localStorage.getItem("chosenOneTitle");
      console.log(idPick);
      console.log(idPickTitle);

  $.ajax({
                  url: baseUrl + 'movie/' + idPick + '/similar' + keyPrefix + key,
                }).done(function(data) {
              console.log('________________');
              console.log('-- movie credits ');
              console.log(data);

      

      var pageNumber = [];
      var pageTotal = data.total_pages;
      // for (var i = 0; i < pageTotal; i++) {
      //     pageNumber.push[i];
      //         //Do something
      //     }

          if (pageTotal > 3) {
            var pageNumber = Math.floor(Math.random() * 3) + 1
          }else{
            var pageNumber = 1;
          }

          console.log(pageTotal);
          console.log(pageNumber);

      // var pageFirst = 1;
      // var pageLast = data.total_pages;

      // var pageNumber = Math.floor(Math.random()*(pageLast-pageFirst+1)+pageFirst);;

      // console.log(pageFirst);
      // console.log(pageLast);

          $.ajax({
            url: baseUrl + 'movie/' + idPick + '/similar' + keyPrefix + key + '&page=' + pageNumber, // random movie ID
            // statusCode: {
            //     404: function() {
            //       // never blank - 404
            //       getRandom();
            //     }
            //   }

          }).done(function(data){ // data inside DOM
            console.log('________________');
            console.log('-- inside genre test ');
            console.log(data);


            var resultsId = [];
            var resultsArray = data.results.length;
            for (var i = 0; i < resultsArray; i++) {
                resultsId.push(data.results[i].id);
                //Do something
            }
            console.log(resultsArray);

            var arrayFirst = 0;
            var arrayLast = resultsArray-1;
            var arrayRandom = Math.floor(Math.random()*(arrayLast-arrayFirst+1)+arrayFirst);;
            // console.log(data.results[arrayRandom].id);
            var randomSimilar = data.results[arrayRandom].id

            console.log(arrayRandom);

                    $.ajax({
                    url: baseUrl + 'movie/' + randomSimilar + keyPrefix + key, // random movie ID
                    // statusCode: {
                    //     404: function() {
                    //       // never blank - 404
                    //       getRandom();
                    //     }
                    //   }

                  }).done(function(data){ // data inside DOM
      console.log('________________');
      console.log('-- movie info ');
      console.log(data);

      
        var date = data.release_date;
        var rate = data.vote_average * 10;

        $('.similar-what-movie').html(idPickTitle);
        $('.movie-title').html(data.title);
        $('.movie-container .left-zone').css({'background': 'url(http://image.tmdb.org/t/p/original'+ data.poster_path +') no-repeat center', 'background-size':'cover'});
        $('.movie-date').html(date.substr(0, 4));
        $('.info-plot p').html(data.overview);
        $('.rate .get-rating').html(data.vote_average); // rating
        $(".imdb-rating").attr("href", imdbLink + (data.imdb_id));
        $(".info-time").append('<span>' + data.runtime + ' ' + 'min' + '</span>');
        $('[data-goal]').attr('data-goal', rate);

        $('.pie_progress').asPieProgress({
          namespace: 'pie_progress'
        });
        $('.pie_progress').asPieProgress('start');


        // loop genre data
        for(var i = 0; i < data.genres.length; i++) {
          $('.info-genre').append('<span>' + data.genres[i].name + '</span>');
        }
      

      
    });


// movie credits (cast)
    $.ajax({
      url: baseUrl + 'movie/' + randomSimilar + '/credits' + keyPrefix + key, // random movie ID
    }).done(function(data) {
      console.log('________________');
      console.log('-- movie credits ');
      console.log(data);

      var writers = [];
      var directors = [];

      for(var i = 0; i < data.crew.length; i++) {
        if(data.crew[i].job === "Director") {
          directors.push(data.crew[i].name);
        }

        if(data.crew[i].department === "Writing") {
          writers.push(data.crew[i].name);
        }
      }

      for(var i = 0; i < directors.length; i++) {
        if(i === directors.length - 1) {
            $('.director').append('<span>' + directors[i] + '</span> ');
          } else {
            $('.director').append('<span>' + directors[i] + ', ' + '</span> ');
          }
      }
        

      for(var i = 0; i < writers.length; i++) {
          if(i === writers.length - 1) {
            $('.writer').append('<span>' + writers[i] + '</span> ');
          } else {
            $('.writer').append('<span>' + writers[i] + ', ' + '</span> ');
          }
        }

      $('.staring').html(data.cast[0].name + ', ' + data.cast[1].name + ', ' + data.cast[2].name);
    });

    // movie trailer
    $.ajax({
      url: baseUrl + 'movie/' + randomSimilar + '/videos' + keyPrefix + key, // random movie ID

    }).done(function(data){ // data inside DOM
      console.log('________________');
      console.log('-- movie trailer ');
      console.log(data);
      // console.log(data.results[0].key);

      // var trailer = [];

      // for(var i = 0; i < data.results.length; i++) {
      //   if(data.results[i].key === "Trailer") {
      //     trailer.push(data.crew[i].key);
      //   }
      // }

      // for(var i = 0; i < trailer.length; i++) {
      //   $('.director').append('<span>' + trailer[i] + '</span> ');
      // }

      // if(data.results.length === "0") {
      //     alert('bouya');
      //   }

      if(data.results.length === 0) {
        $('.video-trailer-container').css('display','none');
        $( ".play-vid-container" ).click(function() {
          setTimeout(function(){
            $('.no-trailer').addClass('video-trailer-slide');
          },800);
        });
      }else{
        setTimeout(function(){
          $('.video-trailer-container iframe').attr('src', youtubeLink + (data.results[0].key));
        },1200);
      }
      

    });







          });

      console.log(pageNumber);



    });

}

  getRandomSimilar();




});

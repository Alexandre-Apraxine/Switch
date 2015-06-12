$(document).ready(function () {

  // login / overlay 

  $( ".login, .quick-register, .need-to-log" ).click(function() {
    $( '.login-overlay' ).addClass('opacity-hide');
    $( '.login-overlay' ).css('cursor','url(img/cursor-cross.svg) 12 12, auto');
    $( '.connect, .register' ).addClass('login-box-button-pointer');

    $( 'body' ).addClass('block-scroll');

    setTimeout(function(){
      $( '.log-midbar' ).addClass('log-midbar-slide');
      $( '.login-box' ).addClass('login-box-slide');
    }, 400);
  });

  $( ".login-overlay" ).click(function() {
    $('.error-box').css('display','none');
    $('.error-lol').css('display','none');
    $( '.login-overlay' ).removeClass('opacity-hide');
    $( '.login-overlay' ).css('cursor','default');

    $( '.log-midbar' ).removeClass('log-midbar-slide');
    $( '.login-box' ).removeClass('login-box-slide');  

    $( '.connect, .register' ).removeClass('login-box-button-pointer');  
    $( '.register-form' ).removeClass('form-slide');
    $( '.login-form' ).removeClass('form-slide');

    $( 'body' ).removeClass('block-scroll');
    
    setTimeout(function(){
      $( '.connect' ).removeClass('connect-register-slideoff');
      $( '.register' ).removeClass('register-slide');
      $( '.register' ).removeClass('register-before');
    }, 400);
    
    setTimeout(function(){
      $( '.register' ).removeClass('connect-register-slideoff');
      $( '.connect' ).removeClass('connect-slide');
      $( '.connect' ).removeClass('connect-before');
    }, 400);
  });

  $( ".register" ).click(function() {
    $( '.register' ).addClass('register-slide');
    $( '.register' ).addClass('register-before');
    $( '.log-midbar' ).removeClass('log-midbar-slide');
    $( '.connect' ).addClass('connect-register-slideoff');
    setTimeout(function(){
      $( '.register-form' ).addClass('form-slide');
    }, 400);
  });

  $( ".connect" ).click(function() {
    $( '.connect' ).addClass('connect-slide');
    $( '.connect' ).addClass('connect-before');
    $( '.log-midbar' ).removeClass('log-midbar-slide');
    $( '.register' ).addClass('connect-register-slideoff');
    setTimeout(function(){
      $( '.login-form' ).addClass('form-slide');
    }, 400);
  });

  // browse / overlay 

  $( ".browse-transit" ).click(function() {
    $( '.browse-overlay' ).addClass('opacity-hide');
    $( '.browse-overlay' ).css('cursor','url(img/cursor-cross.svg) 12 12, auto');

    $( 'body' ).addClass('block-scroll');

    setTimeout(function(){
      $( '.browse-overlay-container p' ).addClass('browse-overlay-p-slide');
    }, 200);
    setTimeout(function(){
      $( '.browse-overlay-a-one' ).addClass('browse-overlay-a-slide');
    }, 410); 
    setTimeout(function(){
      $( '.browse-overlay-a-two' ).addClass('browse-overlay-a-slide');
    }, 520); 
    setTimeout(function(){
      $( '.browse-overlay-a-three' ).addClass('browse-overlay-a-slide');
    }, 630);
    setTimeout(function(){
      $( '.more-cat-li' ).addClass('more-cat-li-show');
    }, 950);
  });

  $( ".browse-overlay" ).click(function() {
    $( '.browse-overlay-container p' ).removeClass('browse-overlay-p-slide');
    $( '.browse-overlay-a-one' ).removeClass('browse-overlay-a-slide');
    $( '.browse-overlay-a-two' ).removeClass('browse-overlay-a-slide');
    $( '.browse-overlay-a-three' ).removeClass('browse-overlay-a-slide');
    $( '.more-cat-li' ).removeClass('more-cat-li-show');

    setTimeout(function(){
      $( '.browse-overlay' ).removeClass('opacity-hide');
      $( '.browse-overlay' ).css('cursor','default');

      $( 'body' ).removeClass('block-scroll');
    }, 100);
  });

  // browse thumb / overlay 

  $( ".thumbnail-view-btn" ).click(function() {
    $(".thumbnail-view-btn").addClass('display-slide');
    $( '.genre-slide, .popular-slide' ).removeClass('block-scroll');
    $( '.browse-thumb-overlay' ).addClass('opacity-hide');
    $( '.browse-thumb-overlay' ).css('cursor','url(img/cursor-cross.svg) 12 12, auto');
    setTimeout(function(){
      $( '.browse-thumbnail li:nth-child(1)' ).addClass('thumbnail-slide');
    }, 100);
    setTimeout(function(){
      $( '.browse-thumbnail li:nth-child(2)' ).addClass('thumbnail-slide');
    }, 150);
    setTimeout(function(){
      $( '.browse-thumbnail li:nth-child(3)' ).addClass('thumbnail-slide');
    }, 200);
    setTimeout(function(){
      $( '.browse-thumbnail li:nth-child(4)' ).addClass('thumbnail-slide');
    }, 150);
    setTimeout(function(){
      $( '.browse-thumbnail li:nth-child(5)' ).addClass('thumbnail-slide');
    }, 200);
    setTimeout(function(){
      $( '.browse-thumbnail li:nth-child(6)' ).addClass('thumbnail-slide');
    }, 250);
    setTimeout(function(){
      $( '.browse-thumbnail li:nth-child(7)' ).addClass('thumbnail-slide');
    }, 200);
    setTimeout(function(){
      $( '.browse-thumbnail li:nth-child(8)' ).addClass('thumbnail-slide');
    }, 250);
    setTimeout(function(){
      $( '.browse-thumbnail li:nth-child(9)' ).addClass('thumbnail-slide');
    }, 300);
    setTimeout(function(){
      $( '.browse-thumbnail li:nth-child(10)' ).addClass('thumbnail-slide');
    }, 250);
    setTimeout(function(){
      $( '.browse-thumbnail li:nth-child(11)' ).addClass('thumbnail-slide');
    }, 300);
    setTimeout(function(){
      $( '.browse-thumbnail li:nth-child(12)' ).addClass('thumbnail-slide');
    }, 350);
    setTimeout(function(){
      $( '.browse-thumbnail li:nth-child(13)' ).addClass('thumbnail-slide');
    }, 300);
    setTimeout(function(){
      $( '.browse-thumbnail li:nth-child(14)' ).addClass('thumbnail-slide');
    }, 350);
    setTimeout(function(){
      $( '.browse-thumbnail li:nth-child(15)' ).addClass('thumbnail-slide');
    }, 400);
    setTimeout(function(){
      $( '.browse-thumbnail li:nth-child(16)' ).addClass('thumbnail-slide');
      $(".fullscreen-view-btn").removeClass('display-slide');
    }, 450);
  });

  $( ".browse-thumb-overlay, .fullscreen-view-btn" ).click(function() {
    $( '.genre-slide, .popular-slide' ).addClass('block-scroll');
    $( '.browse-thumbnail li' ).removeClass('thumbnail-slide');
    $(".fullscreen-view-btn").addClass('display-slide');

    setTimeout(function(){
      $( '.browse-thumb-overlay' ).removeClass('opacity-hide');
      $( '.browse-thumb-overlay' ).css('cursor','default');

    }, 150);

    setTimeout(function(){
      $(".thumbnail-view-btn").removeClass('display-slide');

    }, 450);
  });

  // link redirect after delay - temporaire

  // $('.connect').click(function (e) {
  //   e.preventDefault();
  //   var goTo = this.getAttribute("href"); 
  //   setTimeout(function(){
  //        window.location = goTo;
  //   },800);       
  // }); 

  // overlay - trailer zone

  $( ".left-zone-overlay" ).hover(
    function() {
      $( ".left-zone-overlay" ).addClass( "left-zone-overlay-active" );
      $('.play-vid-container').addClass( "play-vid-active" );
      $('.play-icon').attr('class', 'play-icon-slide');
      $('.trailer-span').removeClass( "trailer-span-slide" );
      $('.logo-home-fixed').addClass( "logo-home-fixed-slide-hover" );
    }, function() {
      $( ".left-zone-overlay" ).removeClass( "left-zone-overlay-active" );
      $('.play-vid-container').removeClass( "play-vid-active" );
      setTimeout(function(){
      $('.play-icon-slide').attr('class', 'play-icon');
      $('.trailer-span').addClass( "trailer-span-slide" );
      $('.logo-home-fixed').removeClass( "logo-home-fixed-slide-hover" );
    },10);
    }
  );

  $( ".play-vid-container" ).click(function() {
    $( ".logo-home-cheat" ).css( "display","block" );
    $( ".logo-home-fixed" ).css( "display","none" );
    $( ".left-zone-overlay" ).addClass( "left-zone-overlay-active" );
    $(".left-zone-overlay").unbind('mouseenter mouseleave')
    $( ".left-zone-overlay" ).addClass( "left-zone-overlay-fullscreen" );
    $( ".trailer-overlay-quit" ).addClass( "trailer-overlay-quit-pointer" );
    setTimeout(function(){
      $('.play-vid-container').removeClass( "play-vid-active" );
    },400);
    setTimeout(function(){
      $('.play-icon-slide').attr('class', 'play-icon');
      $('.trailer-span').addClass( "trailer-span-slide" );
    },450);
    setTimeout(function(){
      $('.video-trailer-container').addClass( "video-trailer-slide" );
    },800);
  });

  $( ".trailer-overlay-quit" ).click(function() {
    $( ".logo-home-cheat" ).css( "display","none" );
    $( ".logo-home-fixed" ).css( "display","block" );
    $('.video-trailer-container').removeClass( "video-trailer-slide" );
    $('.no-trailer').removeClass( "video-trailer-slide" );
    $( ".trailer-overlay-quit" ).removeClass( "trailer-overlay-quit-pointer" );
    $('.play-vid-container').removeClass( "play-vid-active" );
    $('.play-icon-slide').attr('class', 'play-icon');
    $('.trailer-span').addClass( "trailer-span-slide" );
    $('iframe').attr('src', $('iframe').attr('src'));
    $('.logo-home-fixed').removeClass( "logo-home-fixed-slide-hover" );
    setTimeout(function(){
      $( ".left-zone-overlay" ).removeClass( "left-zone-overlay-active" );
      },200);
    setTimeout(function(){
      $( ".left-zone-overlay" ).removeClass( "left-zone-overlay-fullscreen" );
      $( ".left-zone-overlay" ).hover(
        function() {
          $( ".left-zone-overlay" ).addClass( "left-zone-overlay-active" );
          $('.play-vid-container').addClass( "play-vid-active" );
          $('.play-icon').attr('class', 'play-icon-slide');
          $('.trailer-span').removeClass( "trailer-span-slide" );
          $('.logo-home-fixed').addClass( "logo-home-fixed-slide-hover" );
        }, function() {
          $( ".left-zone-overlay" ).removeClass( "left-zone-overlay-active" );
          $('.play-vid-container').removeClass( "play-vid-active" );
          setTimeout(function(){
          $('.play-icon-slide').attr('class', 'play-icon');
          $('.trailer-span').addClass( "trailer-span-slide" );
          $('.logo-home-fixed').removeClass( "logo-home-fixed-slide-hover" );
          },10);
        }
      );
      },500);
  });

  // scroll to

  $(".btn-arrow").click(function() {
    // $(this).css('pointer-events','none');
    // e.preventDefault();
    $('html, body').animate({
      scrollTop: $(".info-random").offset().top
    }, 800);
  });


  // cat arrow slide

  var countClicksGenre = 0;
  var htmlGenre = 'action';
  var hrefBtnGenre = 'action.php';

  $(".genre-slide .nextBtn").click(function() {
    $(this).css('pointer-events','none');
    countClicksGenre += 1;
    if (countClicksGenre == 0) {
      htmlGenre = "action";
      hrefBtnGenre = "action.php";
    }
    if (countClicksGenre == 1) {
      htmlGenre = "adventure";
      hrefBtnGenre = "adventure.php";
    }
    if (countClicksGenre == 2) {
      htmlGenre = "animation";
      hrefBtnGenre = "animation.php";
    }
    if (countClicksGenre == 3) {
      htmlGenre = "comedy";
      hrefBtnGenre = "comedy.php";
    }
    if (countClicksGenre == 4) {
      htmlGenre = "crime";
      hrefBtnGenre = "crime.php";
    }
    if (countClicksGenre == 5) {
      htmlGenre = "documentary";
      hrefBtnGenre = "documentary.php";
    }
    if (countClicksGenre == 6) {
      htmlGenre = "drama";
      hrefBtnGenre = "drama.php";
    }
    if (countClicksGenre == 7) {
      htmlGenre = "fantasy";
      hrefBtnGenre = "fantasy.php";
    }
    if (countClicksGenre == 8) {
      htmlGenre = "history";
      hrefBtnGenre = "history.php";
    }
    if (countClicksGenre == 9) {
      htmlGenre = "horror";
      hrefBtnGenre = "horror.php";
    }
    if (countClicksGenre == 10) {
      htmlGenre = "mystery";
      hrefBtnGenre = "mystery.php";
    }
    if (countClicksGenre == 11) {
      htmlGenre = "romance";
      hrefBtnGenre = "romance.php";
    }
    if (countClicksGenre == 12) {
      htmlGenre = "Sci-Fi";
      hrefBtnGenre = "sci-Fi.php";
    }
    if (countClicksGenre == 13) {
      htmlGenre = "thriller";
      hrefBtnGenre = "thriller.php";
    }
    if (countClicksGenre == 14) {
      htmlGenre = "war";
      hrefBtnGenre = "war.php";
    }
    if (countClicksGenre == 15) {
      htmlGenre = "western";
      hrefBtnGenre = "western.php";
    }
    if (countClicksGenre > 15) {
      countClicksGenre = 0;
    }
    if (countClicksGenre == 0) {
      htmlGenre = "action";
      hrefBtnGenre = "action.php";
    }
    setTimeout(function(){
      $(".genre-slide .sub-filter-container span").html(htmlGenre);
    },450);
    setTimeout(function(){
      $('.genre-slide .nextBtn').css('pointer-events','auto');
      $('.genre-slide .explore-cat').attr('href',hrefBtnGenre);
    },1000);
  });

console.log(hrefBtnGenre);

  $(".genre-slide .prevBtn").click(function() {
    $(this).css('pointer-events','none');
    countClicksGenre -= 1;
    if (countClicksGenre == 0) {
      htmlGenre = "action";
      hrefBtnGenre = "action.php";
    }
    if (countClicksGenre == 1) {
      htmlGenre = "adventure";
      hrefBtnGenre = "adventure.php";
    }
    if (countClicksGenre == 2) {
      htmlGenre = "animation";
      hrefBtnGenre = "animation.php";
    }
    if (countClicksGenre == 3) {
      htmlGenre = "comedy";
      hrefBtnGenre = "comedy.php";
    }
    if (countClicksGenre == 4) {
      htmlGenre = "crime";
      hrefBtnGenre = "crime.php";
    }
    if (countClicksGenre == 5) {
      htmlGenre = "documentary";
      hrefBtnGenre = "documentary.php";
    }
    if (countClicksGenre == 6) {
      htmlGenre = "drama";
      hrefBtnGenre = "drama.php";
    }
    if (countClicksGenre == 7) {
      htmlGenre = "fantasy";
      hrefBtnGenre = "fantasy.php";
    }
    if (countClicksGenre == 8) {
      htmlGenre = "history";
      hrefBtnGenre = "history.php";
    }
    if (countClicksGenre == 9) {
      htmlGenre = "horror";
      hrefBtnGenre = "horror.php";
    }
    if (countClicksGenre == 10) {
      htmlGenre = "mystery";
      hrefBtnGenre = "mystery.php";
    }
    if (countClicksGenre == 11) {
      htmlGenre = "romance";
      hrefBtnGenre = "romance.php";
    }
    if (countClicksGenre == 12) {
      htmlGenre = "Sci-Fi";
      hrefBtnGenre = "sci-Fi.php";
    }
    if (countClicksGenre == 13) {
      htmlGenre = "thriller";
      hrefBtnGenre = "thriller.php";
    }
    if (countClicksGenre == 14) {
      htmlGenre = "war";
      hrefBtnGenre = "war.php";
    }
    if (countClicksGenre == -1) {
      countClicksGenre = 15;
    }
    if (countClicksGenre == 15) {
      htmlGenre = "western";
      hrefBtnGenre = "western.php"
    }
    if (countClicksGenre == 0) {
      htmlGenre == "action";
      hrefBtnGenre = "action.php"
    }
    setTimeout(function(){
      $(".genre-slide .sub-filter-container span").html(htmlGenre);
    },450);
    setTimeout(function(){
      $('.genre-slide .prevBtn').css('pointer-events','auto');
      $('.genre-slide .explore-cat').attr('href',hrefBtnGenre);
    },1000);
  });



var countClicksPopular = 0;
  var htmlPopular = 'trending';
  var hrefBtnPopular = 'trending.php';

  $(".popular-slide .nextBtn").click(function() {
    $(this).css('pointer-events','none');
    countClicksPopular += 1;
    if (countClicksPopular == 0) {
      htmlPopular = "trending";
      hrefBtnPopular = "trending.php";
    }
    if (countClicksPopular == 1) {
      htmlPopular = "top rated";
      hrefBtnPopular = "top-rated.php";
    }
    if (countClicksPopular == 2) {
      htmlPopular = "imdb 250";
      hrefBtnPopular = "top-imdb.php";
    }
    if (countClicksPopular == 3) {
      htmlPopular = "Oscar Winner";
      hrefBtnPopular = "oscar-winner.php";
    }
    if (countClicksPopular > 3) {
      countClicksPopular = 0;
    }
    if (countClicksPopular == 0) {
      htmlPopular = "trending";
      hrefBtnPopular = "trending.php";
    }
    setTimeout(function(){
      $(".popular-slide .sub-filter-container span").html(htmlPopular);
    },450);
    setTimeout(function(){
      $('.popular-slide .nextBtn').css('pointer-events','auto');
      $('.popular-slide .explore-cat').attr('href',hrefBtnPopular);
    },1000);
  });

console.log(hrefBtnPopular);

  $(".popular-slide .prevBtn").click(function() {
    $(this).css('pointer-events','none');
    countClicksPopular -= 1;
    if (countClicksPopular == 0) {
      htmlPopular = "trending";
      hrefBtnPopular = "trending.php";
    }
    if (countClicksPopular == 1) {
      htmlPopular = "top rated";
      hrefBtnPopular = "top-rated.php";
    }
    if (countClicksPopular == 2) {
      htmlPopular = "Imdb 250";
      hrefBtnPopular = "top-imdb.php";
    }
    if (countClicksPopular == -1) {
      countClicksPopular = 3;
    }
    if (countClicksPopular == 3) {
      htmlPopular = "Oscar Winner";
      hrefBtnPopular = "oscar-winner.php"
    }
    if (countClicksPopular == 0) {
      htmlPopular == "trending";
      hrefBtnPopular = "trending.php"
    }
    setTimeout(function(){
      $(".popular-slide .sub-filter-container span").html(htmlPopular);
    },450);
    setTimeout(function(){
      $('.popular-slide .prevBtn').css('pointer-events','auto');
      $('.popular-slide .explore-cat').attr('href',hrefBtnPopular);
    },1000);
  });



  // $(".btn-arrow-slide-right").click(function() {
  //   $('.sub-filter-container span').html('History');
  //   $('.cat-bg-two').css('right', '0');
  // });

  // $(".btn-arrow-slide-left").click(function() {
  //   $('.sub-filter-container span').html('crime');
  //   $('.cat-bg-two').css('right', '-100%');
  // });


// setTimeout(function(){
//   if ($(document).innerHeight() > $(window).innerHeight()) { 
//     $( '.arrow-scrollable' ).addClass('arrow-scrollable-slide'); 
//   }
// },1500);

$('[data-next-movie]').click(function(e){
    e.preventDefault();

    location.reload();
  });


// similar input click enter

$('.query-input').keypress(function (e) {
  if (e.which == 13) {
    $('form#boule').submit();
    return false;    //<---- Add this line
  }
});



// $("#submit-register").click(function(){

//   var name=$("#username").val();

//   $.post("process.php",{username:name},function(result){
//     $("#result").append(result);
//   });

// });


// this is the id of the form
  // $("#register").submit(function() {

  //     var url = "../functions/function.inc.php"; // the script where you handle the form input.

  //     $.ajax({
  //            type: "POST",
  //            url: url,
  //            data: $("#register").serialize(), // serializes the form's elements.
  //            success: function(data)
  //            {
  //                alert(data); // show response from the php script.
  //            }
  //          });

  //     return false; // avoid to execute the actual submit of the form.
  // });

if ( $( ".error" ).length ) {
 
    $( '.login-overlay' ).addClass('opacity-hide');
    $( '.login-overlay' ).css('cursor','url(img/cursor-cross.svg) 12 12, auto');
    $( '.connect, .register' ).addClass('login-box-button-pointer');

    $( 'body' ).addClass('block-scroll');

    setTimeout(function(){
      $( '.log-midbar' ).addClass('log-midbar-slide');
      $( '.login-box' ).addClass('login-box-slide');
    }, 400);
    setTimeout(function(){ 
      $( '.error-box' ).addClass('error-box-slide');
    }, 900);
 
}

$('.submit-movie').click(function(){
    $('.a-movie').css('border','none');
  });




var yaaaa = 'null';

console.log(yaaaa);

// watchlist display


if ( $( ".ptdrr" ).attr('value') == yaaaa ) {
 
    $( ".poster-three-seen" ).css('pointer-events','none');
    
 
}

if ( $( ".ptdr" ).attr('value') == yaaaa ) {
 
    $( ".poster-two-seen" ).css('pointer-events','none');
    
 
}

if ( $( ".ptr" ).attr('value') == yaaaa ) {
 
    $( ".poster-one-seen" ).css('pointer-events','none');
    
 
}


if ( $( ".ptdrr" ).attr('value') == yaaaa && $( ".ptdr" ).attr('value') == yaaaa && $( ".ptr" ).attr('value') == yaaaa ) {
 
    // alert('oyé');
     $( ".poster-one-seen, .poster-two-seen, .poster-three-seen" ).css('display','none');
     $( ".last-seen .empty-list" ).css('display','block');
      $( ".last-seen a" ).css('display','none');
      $( ".your-list" ).css('padding-top','200px');
    
    
 
}

// watched display

if ( $( ".lolil" ).attr('value') == yaaaa ) {
 
    $( ".poster-three" ).css('pointer-events','none');
    
 
}

if ( $( ".lolilo" ).attr('value') == yaaaa ) {
 
    $( ".poster-two" ).css('pointer-events','none');
    
 
}

if ( $( ".lolilol" ).attr('value') == yaaaa ) {
 
    $( ".poster-one" ).css('pointer-events','none');
    
 
}


if ( $( ".lolilol" ).attr('value') == yaaaa && $( ".lolil" ).attr('value') == yaaaa && $( ".lolilo" ).attr('value') == yaaaa ) {
 
    // alert('oyé');
     $( ".poster-one, .poster-two, .poster-three" ).css('display','none');
     $( ".last-watchlist .empty-list" ).css('display','block');
    $( ".last-watchlist a" ).css('display','none');
    $( ".logged-content-container .last-seen" ).css('padding-top','200px');
    
    
 
}


  $('.pop-up-twitter').click(function(event) {
    var width  = 575,
        height = 300,
        left   = ($(window).width()  - width)  / 2,
        top    = ($(window).height() - height) / 2,
        url    = this.href,
        opts   = 'status=1' +
                 ',width='  + width  +
                 ',height=' + height +
                 ',top='    + top    +
                 ',left='   + left;
    
    window.open(url, 'twitter', opts);
 
    return false;
  });


  $('.quick-try').click(function(){
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
 });





});


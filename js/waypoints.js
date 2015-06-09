$(document).ready(function () {

  // waypoints

 $('.info-random').waypoint(function() {
    $('.info-random .right-section').addClass("waypoints-slide-right-to-left");
    $('.info-random .left-section .btn').addClass("waypoints-slide-down-to-up");
  }, { offset: '50%'}); 


$('.info-navigate').waypoint(function() {
    $('.info-navigate .left-section').addClass("waypoints-slide-left-to-right");
    $('.info-navigate .right-section .filter-box .btn').addClass("waypoints-slide-down-to-up");
}, { offset: '50%'});

$('.info-actions').waypoint(function() {
    $('.info-actions .right-section').addClass("waypoints-slide-right-to-left");
    $('.info-actions .left-section .action-next').addClass("btn-scale-next-waypoints");
    $('.info-actions .left-section .action-watchlist').addClass("btn-scale-watchedlist-waypoints");
    $('.info-actions .left-section .action-watched').addClass("btn-scale-watchedlist-waypoints");
}, { offset: '45%'});

});

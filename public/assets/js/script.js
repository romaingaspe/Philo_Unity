$(document).ready(function(){
  $('.slider').slider({full_width: true});

  var H = $('.slider').height();
  $('.slider').height(H-40);


  $('.carousel').carousel();
});

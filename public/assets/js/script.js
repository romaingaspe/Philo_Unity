$(document).ready(function(){$('.slider').slider({full_width: true});
var H = $('.slider').height();
$('.slider').height(H-40);
$('.carousel').carousel();});

$('.pagination').click(function(e){
    var data = $(this).attr('href');
    var data = 'page';
    console.log(data)
});
$.ajax(){
    'url':
}

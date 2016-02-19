$(document).ready(function(){$('.slider').slider({full_width: true});
var H = $('.slider').height();
$('.slider').height(H-40);
$('.carousel').carousel();});

$(function(){
    $('.pagination').click(function(e){
        e.preventDefault();
        var href = $(this).attr('href');

        var data = {
            page: href
        }
        $.ajax({
            url: pageUrl,
            data: data,
            success: function(reponse) {
                $('#allworks').empty();
                for (m in reponse) {
                    var htmlMetier = $('<article>')
                    .addClass('col')
                    .addClass('l4')
                    .append($('<div>')
                        .append($('<img>').attr('src', reponse[m].photo)))
                    .append($('<div>').addClass('text-works')
                        .append($('<h6>').text(reponse[m].section))
                        .append($('<p>').text(reponse[m].description)))

                    $('#allworks').append(htmlMetier);
                }
            }
        })
    });

})

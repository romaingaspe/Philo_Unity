$(document).ready(function(){$('.slider').slider({full_width: true});
var H = $('.slider').height();
$('.slider').height(H-40);
$('.carousel').carousel();});

$(function(){
    $('.paginations').click(function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        $('.pagination li').removeClass('active');
        $(this).parent().removeClass('waves-effect').addClass('active');
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
                        .append($('<a>').text(reponse[m].section).attr('href', '/philo_unity/public/metiers/'+reponse[m].alias+'/profilsall?page=1'))
                    $('#allworks').append(htmlMetier);
                }
            }
        })
    });
  })
/*$(function(){
    $('.paginations2').click(function(e){
        e.preventDefault();
        var href = $(this).attr('href');
        $('.pagination2 li').removeClass('active');
        $(this).parent().removeClass('waves-effect').addClass('active');
        var data = {
            page: href
        }
        $.ajax({
            url: pageUrl,
            data: data,
            success: function(reponse) {
                $('#allworks').empty();
                for (m in reponse) {
                    var htmlProfils = $('<article>')
                    .addClass('col')
                    .addClass('l4')
                    .append($('<div>')
                        .append($('<img>').attr('src', reponse[m].photo)))
                    .append($('<div>').addClass('text-works')
                        .append($('<h6>').text(reponse[m].prenom+reponse[m].nom))
                        .append($('<p>').text(reponse[m].description)))
                        .append($('<a>').text('Voir le Profil').attr('href', reponse[m].alias))
                    $('#allworks').append(htmlProfils);
                }
            }
        })
    });
})*/

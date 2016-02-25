$(document).ready(function(){$('.slider').slider({full_width: true});
var H = $('.slider').height();
$('.slider').height(H-40);});
$(".button-collapse").sideNav({  edge: 'right'});
$(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
});

$(function(){
    $('.pagination li:first-child').addClass('active');
});
$(function(){
    $('.paginations.paginallprofiles').click(function(e){
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
                    var htmlProfils = $('<article>')
                    .addClass('col')
                    .addClass('l4')
                    .addClass('m6')
                    .addClass('s12')
                    .append($('<div>')
                        .append($('<img>').attr('src', reponse[m].photo).addClass('photo-work').addClass('responsive-img')))
                    .append($('<div>').addClass('text-works')
                    .addClass('center')
                        .append($('<h6>').text(reponse[m].prenom+' '+reponse[m].nom))
                        .append($('<p>').text(reponse[m].description))
                        .append($('<br>'))
                        .append($('<a>').text('Voir le Profil').attr('href',  '/philo_unity/public/profil/profiluser/'+reponse[m].id)))
                    $('#allworks').append(htmlProfils);
                }
            }
        })
    });
})
$(function(){
    $('.paginations.paginmet').click(function(e){
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
                    .addClass('center')
                        .append($('<h6>').text(reponse[m].section))
                        .append($('<p>').text(reponse[m].description))
                        .append($('<br>'))
                        .append($('<a>').text(reponse[m].section).attr('href', '/philo_unity/public/metiers/'+reponse[m].alias+'/profilsall')))
                    $('#allworks').append(htmlMetier);
                }
            }
        })
    });
  })
$(function(){
    $('.paginations.paginprofil').click(function(e){
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
                    var htmlProfils = $('<article>')
                    .addClass('col')
                    .addClass('l4')
                    .addClass('m6')
                    .addClass('s12')
                    .append($('<div>')
                        .append($('<img>').attr('src', reponse[m].photo).addClass('photo-work').addClass('responsive-img')))
                    .append($('<div>').addClass('text-works')
                    .addClass('center')
                        .append($('<h6>').text(reponse[m].prenom+' '+reponse[m].nom))
                        .append($('<p>').text(reponse[m].description))
                        .append($('<br>'))
                        .append($('<a>').text('Voir le Profil').attr('href', '/philo_unity/public/profil/profiluser/'+reponse[m].id)))
                    $('#allworks').append(htmlProfils);
                }
            }
        })
    });
})

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
                $('#allworks').empty()
                $.each(reponse, function() {
                    $('article')
                    .addClass('col')
                    .addClass('l4')
                    .append($('div').append($('img').attr('src', DANS LE TABLEAU)))
                    .append($('div').addClass('text-works').append($('h6').append($('p'))
                    console.log($(this));
                    /*$*/

                })


                /*echo '<article class="col l4">';
                echo '<div>';
                echo '<img src="'.$met['photo'].'" alt="">';
                echo '</div>';
                echo '<div class="text-works">';
                echo '<h6>'.$met['section'].'</h6>';
                echo '<p>'.$met['description'].'</p>';
*/
                    }
        })
    });

})

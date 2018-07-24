require('./bootstrap');

$(function() {
    var div = $(".sticky");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= $('header').height() + 100) {
            div.removeClass('sticky-trans').addClass("sticky-op");
        } else {
            div.removeClass("sticky-op").addClass('sticky-trans');
        }
    });
});
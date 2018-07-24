$('.testimonials').slick({
    centerMode: true,
    infinite: true,
    autoplay: true,
    centerPadding: '60px',
    slidesToShow: 2,
    arrows: true,
    speed: 500,
    variableWidth: false,
    prevArrow: '.prev-arrow',
    nextArrow: '.next-arrow',
    responsive: [
        {
            breakpoint: 768,
            settings: {
                arrows: true,
                centerMode: false,
                centerPadding: '40px',
                slidesToShow: 1
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: true,
                centerMode: false,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});

$(document).ready(function(){
    $('.parallax').parallax();
});
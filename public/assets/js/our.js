// Our Section
$(document).ready(function () {
    var $slider = $('.slick-slider-container');

    $('.slick-slider-container').slick({
        arrows: false,
        dots: false,
        infinite: true,
        speed: 0,
        slidesToShow: 1,
        slidesToScroll: 1,
        adaptiveHeight: true,
        draggable: false,
        swipe: false,
        touchMove: false
    });

    $('#prevSlide').on('click', function () {
        $slider.slick('slickPrev');
    });

    $('#nextSlide').on('click', function () {
        $slider.slick('slickNext');
    });
});
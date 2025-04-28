// Navbar scroll effect
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('.navbar').addClass('scrolled');
    } else {
        $('.navbar').removeClass('scrolled');
    }
});

// Offcanvas menu toggle
$('#hamburger-btn').click(function () {
    $('#offcanvas-menu').addClass('show');
    $('#offcanvas-overlay').addClass('show');
    $('body').css('overflow', 'hidden');
});

$('#close-btn, #offcanvas-overlay').click(function () {
    $('#offcanvas-menu').removeClass('show');
    $('#offcanvas-overlay').removeClass('show');
    $('body').css('overflow', 'auto');
});

// Logic Menu Link and Sub Menu Link
$('.menu-item > .menu-link').click(function (e) {
    var $menuItem = $(this).parent();

    if ($menuItem.find('.submenu').length > 0) {
        if (!$menuItem.hasClass('show-submenu')) {
            e.preventDefault();
            e.stopPropagation();

            $('.menu-item').not($menuItem).removeClass('show-submenu active');

            $menuItem.addClass('show-submenu active');
        }
    }
});

$('.submenu a').click(function () {
    $('#offcanvas-menu').removeClass('show');
    $('#offcanvas-overlay').removeClass('show');
    $('body').css('overflow', 'auto');
});

$(document).click(function (e) {
    if (!$(e.target).closest('.menu-item').length) {
        $('.menu-item').removeClass('show-submenu active');
    }
});

$(document).ready(function () {
    $('.stats-slider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                arrows: false
            }
        }]
    });

    // Custom arrow navigation
    $('.slick-prev-custom').click(function () {
        $('.stats-slider').slick('slickPrev');
    });

    $('.slick-next-custom').click(function () {
        $('.stats-slider').slick('slickNext');
    });
});


$(document).ready(function () {
    const $slider = $('.projects-slider');

    $slider.on('init', function (event, slick) {
        if (slick.slideCount <= 1) {
            $('.slick-prev-projects, .slick-next-projects').hide();
        }
    });

    $slider.slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1280, // xl dan di atasnya tetap 3
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 1024, // lg (1024px) dan tablet landscape
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 768, // sm dan di bawahnya (mobile)
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });

    $('.slick-prev-projects').click(function () {
        $slider.slick('slickPrev');
    });

    $('.slick-next-projects').click(function () {
        $slider.slick('slickNext');
    });
});

$(document).ready(function () {
    $('.instagram-slider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '100px', // ↓ dari 200px → 100px
        focusOnSelect: true,
        responsive: [
            {
                breakpoint: 1280,
                settings: {
                    centerMode: true,
                    centerPadding: '80px', // ↓ dari 180px
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    centerMode: true,
                    centerPadding: '50px', // ↓ dari 120px
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    centerMode: true,
                    centerPadding: '20px', // ↓ dari 60px
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.slick-prev-instagram').click(function () {
        $('.instagram-slider').slick('slickPrev');
    });

    $('.slick-next-instagram').click(function () {
        $('.instagram-slider').slick('slickNext');
    });
});

// Button interaction logic
const contactContainer = document.querySelector('.relative.h-32');
const mainButton = document.getElementById('contact-main-btn');

mainButton.addEventListener('click', function (e) {
    e.stopPropagation();
    contactContainer.classList.toggle('contact-buttons-active');
});

// Close when clicking outside
document.addEventListener('click', function () {
    contactContainer.classList.remove('contact-buttons-active');
});

// Prevent closing when clicking on buttons
document.querySelectorAll('.contact-sub-btn').forEach(btn => {
    btn.addEventListener('click', function (e) {
        e.stopPropagation();
    });
});

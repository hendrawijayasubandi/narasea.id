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
    $('.projects-slider').slick({
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
                infinite: true
            }
        }]
    });

    // Custom arrow navigation
    $('.slick-prev-projects').click(function () {
        $('.projects-slider').slick('slickPrev');
    });

    $('.slick-next-projects').click(function () {
        $('.projects-slider').slick('slickNext');
    });
});

$(document).ready(function () {
    $('.instagram-slider').slick({
        dots: false,
        arrows: false,
        infinite: true,
        slidesToShow: 1,
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

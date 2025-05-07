const swiper = new Swiper(".myTheLighthouseKeepers", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    grabCursor: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    grid: {
        rows: 1,
    },
    breakpoints: {
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
    on: {
        init: function () {
            adjustSlideHeight();
            toggleNavigation();
        },
        resize: function () {
            adjustSlideHeight();
            toggleNavigation();
        }
    }
});

// Function to adjust height of all slides
function adjustSlideHeight() {
    const slides = document.querySelectorAll('.swiper-slide');
    let maxHeight = 0;

    // Find the tallest slide
    slides.forEach(slide => {
        slide.style.height = 'auto'; // Reset height first
        maxHeight = Math.max(maxHeight, slide.offsetHeight); // Get max height
    });

    // Set all slides to the tallest height
    slides.forEach(slide => {
        slide.style.height = `${maxHeight}px`;
    });
}

// Function to hide or show navigation based on number of slides
function toggleNavigation() {
    const slides = document.querySelectorAll('.swiper-slide');
    const prevButton = document.querySelector('.swiper-button-prev');
    const nextButton = document.querySelector('.swiper-button-next');

    // Hide navigation if there are 1-3 slides
    if (slides.length <= 3) {
        prevButton.style.display = 'none';
        nextButton.style.display = 'none';
    } else {
        prevButton.style.display = 'block';
        nextButton.style.display = 'block';
    }
}

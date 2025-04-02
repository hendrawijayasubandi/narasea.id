<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/assets/css/fonts.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    <style>
        /* Custom dot styling */
        .slick-dots {
            bottom: -40px;
        }

        .slick-dots li button:before {
            color: #019AAA;
            font-size: 10px;
            opacity: 0.5;
        }

        .slick-dots li.slick-active button:before {
            color: #FF864A;
            opacity: 1;
        }

        .stats-slider .slick-slide {
            display: flex;
            align-items: stretch;
        }

        .stats-slider .slick-slide>div {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .stats-slider .slick-slide .flex {
            flex-grow: 1;
            /* Pastikan card bisa mengikuti tinggi maksimal */
        }

        .stats-slider img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        .slick-prev-custom,
        .slick-next-custom {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background-color: #019AAA;
            color: white;
            border: none;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            cursor: pointer;
            transition: background 0.3s ease-in-out;
            z-index: 10;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .slick-prev-custom {
            left: -60px;
        }

        .slick-next-custom {
            right: -60px;
        }

        .slick-prev-custom:hover,
        .slick-next-custom:hover {
            background-color: #017C89;
        }

        /* Sembunyikan tombol di layar kecil */
        @media (max-width: 1024px) {

            .slick-prev-custom,
            .slick-next-custom {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section
        class="min-h-screen bg-blue-900/90 bg-[url('/public/assets/images/landing-page-1.png')] bg-cover bg-center flex flex-col justify-center items-start px-6 py-12 sm:px-8 sm:py-16 md:px-16 md:py-20 lg:px-24 lg:py-28 xl:px-32">
        <!-- Main Title with responsive sizing and spacing -->
        <h1
            class="text-3xl font-bold mb-4 sm:text-4xl sm:mb-5 md:text-5xl md:mb-6 lg:text-6xl tracking-wide font-calimate text-white">
            See, Share, Sea.
        </h1>

        <!-- Subtitle with responsive sizing and spacing -->
        <p
            class="text-base max-w-md mb-8 leading-normal sm:text-lg sm:max-w-lg sm:mb-9 md:text-xl md:max-w-xl md:mb-10 lg:text-2xl lg:leading-relaxed font-ttNorms text-white">
            Through education, action, and storytelling, we empower communities to protect our seas.
        </p>

        <!-- Responsive CTA Button -->
        <button
            class="px-6 py-2 text-sm sm:px-7 sm:py-2.5 sm:text-base md:px-8 md:py-3 md:text-lg bg-[#FF864A] text-white rounded-full font-bold uppercase tracking-wider hover:bg-[#D96630] transition duration-200 font-ttNorms">
            Be The Change
        </button>
    </section>

    <!-- Impact Section with Side-by-Side Cards -->
    <section class="bg-white py-16 px-6 sm:py-20 md:py-24 lg:py-28 xl:py-32 rounded-bl-[50px] rounded-br-[50px]">
        <div class="max-w-6xl mx-auto flex flex-col lg:flex-row gap-8 lg:gap-12">
            <!-- Left Side - Title -->
            <div class="lg:w-1/3">
                <h2 class="text-3xl font-bold sm:text-4xl md:text-5xl lg:text-5xl tracking-wide font-calimate">
                    <span class="text-blue">Tides of</span>
                    <span class="text-teal-blue">Impact.</span>
                </h2>
            </div>

            <!-- Right Side - Cards Slider -->
            <div class="relative lg:w-2/3 w-full">
                <!-- Tombol Navigasi Kiri (Desktop Only) -->
                <button class="slick-prev-custom hidden lg:flex">
                    <i class="fa-solid fa-chevron-left"></i>
                </button>

                <!-- Slider -->
                <div class="stats-slider">
                    <!-- Card 1 -->
                    <div class="px-2 h-full group">
                        <div class="flex flex-col min-h-[300px] max-h-[500px] relative overflow-hidden rounded-2xl">
                            <!-- Gambar -->
                            <div class="overflow-hidden rounded-t-2xl h-full">
                                <img src="assets/images/image-1.png" alt="Community"
                                    class="w-full h-full object-cover transition-all duration-500 ease-in-out">
                            </div>

                            <!-- Bagian Biru (Naik Saat Hover) -->
                            <div
                                class="bg-teal-blue p-4 lg:p-6 rounded-b-2xl flex-grow flex flex-col items-start justify-end 
                                absolute bottom-0 left-0 w-full h-1/3 group-hover:h-full transition-all duration-500 ease-[cubic-bezier(0.33,1,0.68,1)] 
                                rounded-2xl group-hover:rounded-2xl">
                                <!-- Teks pertama yang bergerak saat hover -->
                                <p
                                    class="text-white text-base lg:text-lg font-calimate absolute bottom-6 left-6 transition-all duration-500 ease-[cubic-bezier(0.33,1,0.68,1)] 
                                group-hover:bottom-auto group-hover:top-6 group-hover:left-6">
                                    10+ coastal communities empowered.
                                </p>
                                <!-- Teks kedua yang muncul saat hover -->
                                <p
                                    class="text-white text-sm font-ttNorms opacity-0 absolute left-6 transition-all duration-500 ease-[cubic-bezier(0.33,1,0.68,1)] 
                                    group-hover:opacity-100 group-hover:top-1/2 transform group-hover:-translate-y-1/2 w-[calc(100%-3rem)] 
                                    leading-relaxed">
                                    <!-- atau line-height nilai spesifik seperti `line-height-[1.5]` -->
                                    Meet Our Fishers in Sidem Beach and Popoh Beach Tulungagung, East Java
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="px-2 h-full">
                        <div class="flex flex-col h-full">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl">
                                <img src="assets/images/image-1.png" alt="Education" class="w-full h-full object-cover">
                            </div>
                            <div
                                class="bg-raspberry-pink p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center">
                                <p class="text-white text-base lg:text-lg font-calimate">500+ people educated on ocean
                                    literacy</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="px-2 h-full">
                        <div class="flex flex-col h-full">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl">
                                <img src="assets/images/image-1.png" alt="Media" class="w-full h-full object-cover">
                            </div>
                            <div
                                class="bg-peachy-orange p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center">
                                <p class="text-white text-base lg:text-lg font-calimate">100K+ media impressions through
                                    digital storytelling</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="px-2 h-full">
                        <div class="flex flex-col h-full">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl">
                                <img src="assets/images/image-1.png" alt="Community" class="w-full h-full object-cover">
                            </div>
                            <div
                                class="bg-teal-blue p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center">
                                <p class="text-white text-base lg:text-lg font-calimate">10+ coastal communities
                                    empowered</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tombol Navigasi Kanan (Desktop Only) -->
                <button class="slick-next-custom hidden lg:flex">
                    <i class="fa-solid fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- New Storytelling Section -->
    <section class="relative px-6 sm:py-20 md:py-24 lg:py-28 xl:py-32 bg-blue bg-[url('/public/assets/images/ASdaf%202.png')] bg-cover bg-[position:center_30%] lg:bg-center rounded-bl-[50px] rounded-br-[50px] z-20" style="padding-top: 200px;">
        <!-- Blue overlay -->
        <div class="absolute inset-0 bg-blue-900/70"></div>

        <div class="max-w-6xl mx-auto relative z-10">
            <!-- Voice title with different colors -->
            <h2 class="text-3xl font-bold sm:text-4xl md:text-5xl tracking-wide font-calimate mb-8 lg:mb-12">
                <span class="text-teal-blue">Voice from the</span>
                <span class="text-white"> ocean.</span>
            </h2>

            <!-- Two-column content below -->
            <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
                <!-- Left Column - YouTube Thumbnail -->
                <div class="lg:w-1/2 w-full">
                    <div
                        class="aspect-video bg-black/30 rounded-xl border-2 border-white/20 flex items-center justify-center cursor-pointer transition hover:border-white/40">
                        <div class="text-center">
                            <i class="fas fa-play text-white text-4xl mb-2"></i>
                            <p class="text-white font-ttNorms">Watch the story</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Text Content -->
                <div class="lg:w-1/2 w-full rounded-2xl p-6">
                    <p class="text-lg sm:text-xl md:text-2xl font-bold mb-3 font-calimate text-white">
                        The Fading Fishermen of Pulau Sabira.
                    </p>

                    <p class="mb-4 text-sm sm:text-base leading-relaxed font-ttNorms text-white">
                        Once a thriving haven for traditional fishermen, Pulau Sabira now
                        faces a quiet transformation. As the younger generation drifts away
                        from the sea, the island's rich fishing heritage stands at a crossroads.
                    </p>

                    <p class="mb-6 text-sm sm:text-base leading-relaxed font-ttNorms text-white">
                        NPM Fikom Unpad and Narasea Indonesia set sail to uncover the
                        stories of Sabira's fishermen—learning, listening, and capturing
                        their journey before it fades into history.
                    </p>

                    <button
                        class="px-5 py-1.5 text-xs sm:text-sm md:text-base 
                          bg-peachy-orange text-white rounded-full font-bold tracking-wider 
                          hover:bg-[#D96630] transition duration-200 font-ttNorms">
                        Share What You See
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- New Section: Social Currents -->
    <section class="relative bg-[url('/public/assets/images/francesco-ungaro-nlqqldluDBw-unsplash 5.png')] bg-cover bg-center pt-32 pb-16 px-6 sm:pt-36 sm:pb-20 md:pt-40 md:pb-24 lg:pt-44 lg:pb-28 xl:pt-48 xl:pb-32 -mt-[100px] z-10" style="padding-top: 200px;">
        <!-- Teal-blue overlay with opacity -->
        <div class="absolute inset-0 bg-teal-blue/70"></div>

        <div class="max-w-6xl mx-auto relative z-10">
            <!-- Section Title -->
            <h2
                class="text-3xl font-bold sm:text-4xl md:text-5xl tracking-wide font-calimate mb-12 text-white text-center lg:text-left">
                Social<br>Currents.
            </h2>

            <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
                <!-- Left Column - Text Content (narrower) -->
                <div class="lg:w-2/5"> <!-- Changed from lg:w-1/2 to lg:w-2/5 -->
                    <p class="text-base sm:text-lg md:text-xl font-ttNorms text-white mb-6 max-w-md"> <!-- Added max-w-md -->
                        The ocean moves, and so do we! Stay connected with the latest stories, moments, and impact straight from our Instagram.
                    </p>
                    
                    <div class="mb-8"> <!-- Reduced margin -->
                        <a href="#" class="px-6 py-2 text-sm sm:text-base bg-peachy-orange text-white rounded-full font-bold tracking-wider hover:bg-[#D96630] transition duration-200 font-ttNorms inline-flex items-center">
                            Follow the Waves
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                
                <!-- Right Column - Instagram Photos (wider) -->
                <div class="lg:w-3/5"> <!-- Changed from lg:w-1/2 to lg:w-3/5 -->
                    <div class="relative h-full flex items-center">
                        <!-- Main Slider Container -->
                        <div class="w-full px-8 relative"> <!-- Reduced side padding -->
                            <!-- Navigation Buttons -->
                            <button class="slick-prev-instagram absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-teal-blue/80 text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-teal-blue transition -ml-4">
                                <i class="fas fa-chevron-left"></i>
                            </button>
                            
                            <button class="slick-next-instagram absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-teal-blue/80 text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-teal-blue transition -mr-4">
                                <i class="fas fa-chevron-right"></i>
                            </button>
                    
                            <!-- Instagram Slider -->
                            <div class="instagram-slider">
                                <!-- Instagram Photos 1-5 -->
                                <div class="px-1"> <!-- Reduced padding between slides -->
                                    <div class="aspect-square rounded-xl overflow-hidden border-2 border-white/20 shadow-lg">
                                        <img src="/assets/images/image-1.png" alt="Instagram photo" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                                    </div>
                                </div>
                                <div class="px-1"> <!-- Reduced padding between slides -->
                                    <div class="aspect-square rounded-xl overflow-hidden border-2 border-white/20 shadow-lg">
                                        <img src="/assets/images/image-2.png" alt="Instagram photo" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                                    </div>
                                </div>
                                <div class="px-1"> <!-- Reduced padding between slides -->
                                    <div class="aspect-square rounded-xl overflow-hidden border-2 border-white/20 shadow-lg">
                                        <img src="/assets/images/image-3.png" alt="Instagram photo" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                                    </div>
                                </div>
                                <div class="px-1"> <!-- Reduced padding between slides -->
                                    <div class="aspect-square rounded-xl overflow-hidden border-2 border-white/20 shadow-lg">
                                        <img src="/assets/images/image-4.png" alt="Instagram photo" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                                    </div>
                                </div>
                                <div class="px-1"> <!-- Reduced padding between slides -->
                                    <div class="aspect-square rounded-xl overflow-hidden border-2 border-white/20 shadow-lg">
                                        <img src="/assets/images/image-5.png" alt="Instagram photo" class="w-full h-full object-cover hover:scale-105 transition duration-300">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.stats-slider').slick({
                dots: true,
                arrows: false, // Matikan default arrows dari Slick
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            arrows: false // Di layar kecil, hilangkan tombol
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            arrows: false // Di layar kecil, hilangkan tombol
                        }
                    }
                ]
            });

            // Fungsi untuk tombol navigasi di desktop
            $('.slick-prev-custom').click(function() {
                $('.stats-slider').slick('slickPrev');
            });

            $('.slick-next-custom').click(function() {
                $('.stats-slider').slick('slickNext');
            });
        });

        $(document).ready(function(){
            $('.instagram-slider').slick({
                dots: false,
                arrows: false,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '60px',
                focusOnSelect: true,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            centerPadding: '40px'
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            centerPadding: '30px',
                            slidesToShow: 1
                        }
                    }
                ]
            });

            // Custom arrow navigation
            $('.slick-prev-instagram').click(function(){
                $('.instagram-slider').slick('slickPrev');
            });
            
            $('.slick-next-instagram').click(function(){
                $('.instagram-slider').slick('slickNext');
            });
        });
    </script>
</body>

</html>

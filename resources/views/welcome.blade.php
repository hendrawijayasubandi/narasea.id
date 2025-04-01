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

        .slick-prev-custom, .slick-next-custom {
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

        .slick-prev-custom:hover, .slick-next-custom:hover {
            background-color: #017C89;
        }

        /* Sembunyikan tombol di layar kecil */
        @media (max-width: 1024px) {
            .slick-prev-custom, .slick-next-custom {
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
    <section class="bg-white py-16 px-6 sm:py-20 md:py-24 lg:py-28 xl:py-32">
        <div class="max-w-6xl mx-auto flex flex-col lg:flex-row gap-8 lg:gap-12">
            <!-- Left Side - Title -->
            <div class="lg:w-1/3">
                <h2 class="text-3xl font-bold sm:text-4xl md:text-5xl lg:text-5xl tracking-wide font-calimate">
                    <span class="text-blue">Tides of</span>
                    <span class="text-[#019AAA]">Impact.</span>
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
                    <div class="px-2 h-full">
                        <div class="flex flex-col h-full">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl">
                                <img src="assets/images/image-1.png" alt="Community" class="w-full h-full object-cover">
                            </div>
                            <div class="bg-[#019AAA] p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center">
                                <p class="text-white text-base lg:text-lg font-calimate">10+ coastal communities empowered</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="px-2 h-full">
                        <div class="flex flex-col h-full">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl">
                                <img src="assets/images/image-1.png" alt="Education" class="w-full h-full object-cover">
                            </div>
                            <div class="bg-[#E84373] p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center">
                                <p class="text-white text-base lg:text-lg font-calimate">500+ people educated on ocean literacy</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="px-2 h-full">
                        <div class="flex flex-col h-full">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl">
                                <img src="assets/images/image-1.png" alt="Media" class="w-full h-full object-cover">
                            </div>
                            <div class="bg-[#FF864A] p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center">
                                <p class="text-white text-base lg:text-lg font-calimate">100K+ media impressions through digital storytelling</p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="px-2 h-full">
                        <div class="flex flex-col h-full">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl">
                                <img src="assets/images/image-1.png" alt="Community" class="w-full h-full object-cover">
                            </div>
                            <div class="bg-[#019AAA] p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center">
                                <p class="text-white text-base lg:text-lg font-calimate">10+ coastal communities empowered</p>
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
                responsive: [
                    {
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

    </script>
</body>

</html>

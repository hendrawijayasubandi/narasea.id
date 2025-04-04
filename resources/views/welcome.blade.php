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
        .group {
            position: relative;
        }

        .group:hover .overlay-description {
            transform: translateY(0);
        }

        .overlay-description {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: rgba(222, 49, 99, 0.9);
            /* Warna raspberry pink dengan opacity */
            color: white;
            padding: 20px;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }

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

        /* Ensure all cards in slider have equal height */
        .projects-slider {
            display: flex;
        }

        .projects-slider .slick-track {
            display: flex;
            align-items: stretch;
        }

        .projects-slider .slick-slide {
            height: auto;
        }

        .projects-slider .slick-slide>div {
            height: 100%;
        }

        /* Image zoom effect */
        .projects-slider img {
            transition: transform 0.5s ease;
            will-change: transform;
        }
    </style>
</head>

<body>
    <!-- Hero Section -->
    <section
        class="min-h-screen bg-blue-900/90 bg-[url('/public/assets/images/landing-page-1.png')] bg-cover bg-center flex flex-col justify-center items-start px-4 py-12 sm:px-8 sm:py-16 md:px-12 md:py-20 lg:px-24 lg:py-28 xl:px-32">
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
    <section class="bg-white py-12 px-4 sm:py-16 md:py-20 lg:py-24 xl:py-28 rounded-bl-[50px] rounded-br-[50px]">
        <div class="max-w-6xl mx-auto flex flex-col lg:flex-row gap-6 lg:gap-8">
            <!-- Left Side - Title -->
            <div class="lg:w-1/3">
                <h2 class="text-3xl font-bold sm:text-4xl md:text-5xl tracking-wide font-calimate">
                    <span class="text-blue">Tides of</span>
                    <span class="text-teal-blue">Impact.</span>
                </h2>
            </div>

            <!-- Right Side - Cards Slider -->
            <div class="lg:w-2/3 w-full relative">
                <!-- Custom Navigation Buttons -->
                <div class="hidden lg:flex justify-between absolute top-1/2 left-0 right-0 z-10 -translate-y-1/2 px-4">
                    <button
                        class="slick-prev-custom bg-white rounded-full w-10 h-10 flex items-center justify-center shadow-lg hover:bg-gray-100 transition">
                        <i class="fas fa-chevron-left text-gray-700"></i>
                    </button>
                    <button
                        class="slick-next-custom bg-white rounded-full w-10 h-10 flex items-center justify-center shadow-lg hover:bg-gray-100 transition">
                        <i class="fas fa-chevron-right text-gray-700"></i>
                    </button>
                </div>
                <!-- Slider Container -->
                <div class="stats-slider">
                    <!-- Card 1 -->
                    <div class="px-2 h-full group">
                        <div class="flex flex-col h-full relative overflow-hidden rounded-2xl">
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300">
                                </div>
                            </div>
                            <div
                                class="bg-teal-blue p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center relative">
                                <p class="text-white text-base lg:text-lg font-calimate">10+ coastal communities
                                    empowered.</p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 bg-teal-blue bg-opacity-90 p-6 flex items-center justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center">
                                    Meet Our Fishers in Sidem Beach and Popoh Beach Tulungagung, East Java
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="px-2 h-full group">
                        <div class="flex flex-col h-full relative overflow-hidden rounded-2xl">
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300">
                                </div>
                            </div>
                            <div
                                class="bg-raspberry-pink p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center relative">
                                <p class="text-white text-base lg:text-lg font-calimate">500+ people educated on ocean
                                    literacy</p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 bg-raspberry-pink bg-opacity-90 p-6 flex items-center justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center">
                                    Deskripsi lengkap tentang program edukasi literasi laut akan muncul di sini. Anda
                                    bisa menambahkan detail tentang program, manfaat, dan dampaknya.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="px-2 h-full group">
                        <div class="flex flex-col h-full relative overflow-hidden rounded-2xl">
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300">
                                </div>
                            </div>
                            <div
                                class="bg-peachy-orange p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center relative">
                                <p class="text-white text-base lg:text-lg font-calimate">100K+ media impressions through
                                    digital storytelling</p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 bg-peachy-orange bg-opacity-90 p-6 flex items-center justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center">
                                    Deskripsi lengkap tentang program edukasi literasi laut akan muncul di sini. Anda
                                    bisa menambahkan detail tentang program, manfaat, dan dampaknya.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="px-2 h-full group">
                        <div class="flex flex-col h-full relative overflow-hidden rounded-2xl">
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300">
                                </div>
                            </div>
                            <div
                                class="bg-peachy-orange p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center relative">
                                <p class="text-white text-base lg:text-lg font-calimate">100K+ media impressions through
                                    digital storytelling</p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 bg-peachy-orange bg-opacity-90 p-6 flex items-center justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center">
                                    Deskripsi lengkap tentang program edukasi literasi laut akan muncul di sini. Anda
                                    bisa menambahkan detail tentang program, manfaat, dan dampaknya.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Storytelling Section -->
    <section
        class="relative px-4 py-16 sm:py-20 md:py-24 lg:py-28 xl:py-32 bg-blue bg-[url('/public/assets/images/ASdaf%202.png')] bg-cover bg-[position:center_30%] lg:bg-center rounded-bl-[50px] rounded-br-[50px] z-30">
        <!-- Blue overlay -->
        <div class="absolute inset-0 bg-blue-900/70"></div>

        <div class="max-w-6xl mx-auto relative z-10">
            <!-- Voice title with different colors -->
            <h2 class="text-3xl font-bold sm:text-4xl md:text-5xl tracking-wide font-calimate mb-8 lg:mb-12">
                <span class="text-teal-blue">Voice from the</span>
                <span class="text-white"> ocean.</span>
            </h2>

            <!-- Two-column content below -->
            <div class="flex flex-col lg:flex-row gap-6 lg:gap-8">
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
                <div class="lg:w-1/2 w-full rounded-2xl p-4 sm:p-6">
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
                        class="px-5 py-1.5 text-xs sm:text-sm md:text-base bg-peachy-orange text-white rounded-full font-bold tracking-wider hover:bg-[#D96630] transition duration-200 font-ttNorms">
                        Share What You See
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects & Partnership Section -->
    <section
        class="relative bg-black py-12 px-4 sm:py-16 md:py-20 lg:py-24 xl:py-32 rounded-bl-[50px] rounded-br-[50px] -mt-[50px] z-20">
        <div class="max-w-6xl mx-auto">
            <!-- Section Header -->
            <div class="mb-8 lg:mb-12 px-4 sm:px-6">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-raspberry-pink mb-2 font-calimate">Protect.
                    Educate. Empower.</h1>
                <h2 class="text-2xl sm:text-3xl md:text-4xl font-bold text-golden-yellow font-calimate">Our Projects &
                    Partnership</h2>
            </div>

            <!-- Two Column Layout -->
            <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 px-4 sm:px-6">
                <!-- Left Column - Text Content -->
                <div class="lg:w-1/3 flex flex-col justify-center">
                    <p class="text-white text-sm sm:text-base md:text-lg font-ttNorms leading-relaxed">
                        At Narasea, every wave carries a story, and every initiative is a step toward protecting our
                        marine heritage. Through collaborations with passionate organizations, we bring education,
                        sustainability, and community empowerment to life.
                    </p>
                </div>

                <!-- Right Column - Image Cards Slider -->
                <div class="lg:w-2/3 relative mt-6 lg:mt-0">
                    <!-- Navigation Buttons -->
                    <button
                        class="slick-prev-projects absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-teal-blue text-white rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center hover:bg-teal-blue-dark transition -ml-4 sm:-ml-6">
                        <i class="fas fa-chevron-left text-sm sm:text-base"></i>
                    </button>

                    <button
                        class="slick-next-projects absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-teal-blue text-white rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center hover:bg-teal-blue-dark transition -mr-4 sm:-mr-6">
                        <i class="fas fa-chevron-right text-sm sm:text-base"></i>
                    </button>

                    <!-- Slider Container -->
                    <div class="projects-slider">
                        <!-- Card 1 -->
                        <div class="px-2 h-full">
                            <div class="flex flex-col h-full rounded-2xl overflow-hidden shadow-lg bg-white/5 group">
                                <div class="aspect-[4/3] overflow-hidden relative">
                                    <img src="assets/images/image-1.png" alt="Coral Triangle"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                </div>
                                <div class="p-4 lg:p-6 flex flex-col flex-grow">
                                    <h3
                                        class="text-white text-base sm:text-lg lg:text-xl font-bold font-calimate mb-2">
                                        Wonder of Coral Triangle
                                    </h3>
                                    <p class="text-white/80 text-xs sm:text-sm font-ttNorms flex-grow">
                                        A hero's journey into marine biodiversity conservation through education and
                                        awareness programs
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="px-2 h-full">
                            <div class="flex flex-col h-full rounded-2xl overflow-hidden shadow-lg bg-white/5 group">
                                <div class="aspect-[4/3] overflow-hidden relative">
                                    <img src="assets/images/image-2.png" alt="Octopus Series"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                </div>
                                <div class="p-4 lg:p-6 flex flex-col flex-grow">
                                    <h3
                                        class="text-white text-base sm:text-lg lg:text-xl font-bold font-calimate mb-2">
                                        Octopus Series
                                    </h3>
                                    <p class="text-white/80 text-xs sm:text-sm font-ttNorms flex-grow">
                                        Developing innovative solutions for marine ecosystem protection and restoration
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="px-2 h-full">
                            <div class="flex flex-col h-full rounded-2xl overflow-hidden shadow-lg bg-white/5 group">
                                <div class="aspect-[4/3] overflow-hidden relative">
                                    <img src="assets/images/image-3.png" alt="Oceana Scar"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                </div>
                                <div class="p-4 lg:p-6 flex flex-col flex-grow">
                                    <h3
                                        class="text-white text-base sm:text-lg lg:text-xl font-bold font-calimate mb-2">
                                        Oceana Scar
                                    </h3>
                                    <p class="text-white/80 text-xs sm:text-sm font-ttNorms flex-grow">
                                        Combining art and science to express the beauty and fragility of ocean waves
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="px-2 h-full">
                            <div class="flex flex-col h-full rounded-2xl overflow-hidden shadow-lg bg-white/5 group">
                                <div class="aspect-[4/3] overflow-hidden relative">
                                    <img src="assets/images/image-4.png" alt="Marine Cleanup"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                </div>
                                <div class="p-4 lg:p-6 flex flex-col flex-grow">
                                    <h3
                                        class="text-white text-base sm:text-lg lg:text-xl font-bold font-calimate mb-2">
                                        Marine Cleanup
                                    </h3>
                                    <p class="text-white/80 text-xs sm:text-sm font-ttNorms flex-grow">
                                        Community-driven efforts to remove plastic waste from coastal areas
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="px-2 h-full">
                            <div class="flex flex-col h-full rounded-2xl overflow-hidden shadow-lg bg-white/5 group">
                                <div class="aspect-[4/3] overflow-hidden relative">
                                    <img src="assets/images/image-5.png" alt="Turtle Conservation"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                </div>
                                <div class="p-4 lg:p-6 flex flex-col flex-grow">
                                    <h3
                                        class="text-white text-base sm:text-lg lg:text-xl font-bold font-calimate mb-2">
                                        Turtle Conservation
                                    </h3>
                                    <p class="text-white/80 text-xs sm:text-sm font-ttNorms flex-grow">
                                        Protecting endangered sea turtles through habitat preservation
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 6 -->
                        <div class="px-2 h-full">
                            <div class="flex flex-col h-full rounded-2xl overflow-hidden shadow-lg bg-white/5 group">
                                <div class="aspect-[4/3] overflow-hidden relative">
                                    <img src="assets/images/image-6.png" alt="Coral Restoration"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                </div>
                                <div class="p-4 lg:p-6 flex flex-col flex-grow">
                                    <h3
                                        class="text-white text-base sm:text-lg lg:text-xl font-bold font-calimate mb-2">
                                        Coral Restoration
                                    </h3>
                                    <p class="text-white/80 text-xs sm:text-sm font-ttNorms flex-grow">
                                        Regrowing damaged coral reefs through innovative techniques
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- New Section: Social Currents -->
    <section
        class="relative bg-[url('/public/assets/images/francesco-ungaro.png')] bg-cover bg-center py-16 px-4 sm:py-20 md:py-24 lg:py-28 xl:py-32 -mt-[50px] z-10">
        <!-- Teal-blue overlay with opacity -->
        <div class="absolute inset-0 bg-teal-blue/70"></div>

        <div class="max-w-6xl mx-auto relative z-10">
            <!-- Section Title -->
            <h2
                class="text-3xl font-bold sm:text-4xl md:text-5xl tracking-wide font-calimate mb-8 lg:mb-12 text-center lg:text-left">
                <span class="text-raspberry-pink">Social</span><br>
                <span class="text-golden-yellow">Currents.</span>
            </h2>

            <div class="flex flex-col lg:flex-row gap-6 lg:gap-8">
                <!-- Left Column - Text Content (narrower) -->
                <div class="lg:w-2/5">
                    <p class="text-sm sm:text-base md:text-lg font-ttNorms text-white mb-6 max-w-md">
                        The ocean moves, and so do we! Stay connected with the latest stories, moments, and impact
                        straight from our Instagram.
                    </p>

                    <div class="mb-6">
                        <a href="#"
                            class="px-5 py-1.5 text-xs sm:text-sm bg-peachy-orange text-white rounded-full font-bold tracking-wider hover:bg-[#D96630] transition duration-200 font-ttNorms inline-flex items-center">
                            Follow the Waves
                            <i class="fas fa-arrow-right ml-2 me-2"></i>
                            Explore More
                        </a>
                    </div>
                </div>

                <!-- Right Column - Instagram Photos (wider) -->
                <div class="lg:w-3/5">
                    <div class="relative h-full flex items-center">
                        <!-- Main Slider Container -->
                        <div class="w-full px-8 relative">
                            <!-- Navigation Buttons -->
                            <button
                                class="slick-prev-instagram absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-teal-blue text-white rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center hover:bg-[#014951] transition -ml-8 sm:-ml-12">
                                <i class="fas fa-chevron-left text-sm sm:text-base"></i>
                            </button>

                            <button
                                class="slick-next-instagram absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-teal-blue text-white rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center hover:bg-[#014951] transition -mr-8 sm:-mr-12">
                                <i class="fas fa-chevron-right text-sm sm:text-base"></i>
                            </button>

                            <!-- Instagram Slider -->
                            <div class="instagram-slider">
                                <!-- Instagram Photos 1-5 -->
                                <div class="px-1">
                                    <div
                                        class="aspect-square rounded-xl overflow-hidden border-2 border-white/20 shadow-lg">
                                        <img src="/assets/images/image-1.png" alt="Instagram photo"
                                            class="w-full h-full object-cover hover:scale-105 transition duration-300">
                                    </div>
                                </div>
                                <div class="px-1">
                                    <div
                                        class="aspect-square rounded-xl overflow-hidden border-2 border-white/20 shadow-lg">
                                        <img src="/assets/images/image-2.png" alt="Instagram photo"
                                            class="w-full h-full object-cover hover:scale-105 transition duration-300">
                                    </div>
                                </div>
                                <div class="px-1">
                                    <div
                                        class="aspect-square rounded-xl overflow-hidden border-2 border-white/20 shadow-lg">
                                        <img src="/assets/images/image-3.png" alt="Instagram photo"
                                            class="w-full h-full object-cover hover:scale-105 transition duration-300">
                                    </div>
                                </div>
                                <div class="px-1">
                                    <div
                                        class="aspect-square rounded-xl overflow-hidden border-2 border-white/20 shadow-lg">
                                        <img src="/assets/images/image-4.png" alt="Instagram photo"
                                            class="w-full h-full object-cover hover:scale-105 transition duration-300">
                                    </div>
                                </div>
                                <div class="px-1">
                                    <div
                                        class="aspect-square rounded-xl overflow-hidden border-2 border-white/20 shadow-lg">
                                        <img src="/assets/images/image-5.png" alt="Instagram photo"
                                            class="w-full h-full object-cover hover:scale-105 transition duration-300">
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
                arrows: false,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            arrows: false
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            arrows: false
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

        $(document).ready(function() {
            $('.projects-slider').slick({
                dots: false,
                arrows: false,
                infinite: true,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 2,
                            infinite: true
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 1,
                            infinite: true
                        }
                    }
                ]
            });

            // Custom arrow navigation
            $('.slick-prev-projects').click(function() {
                $('.projects-slider').slick('slickPrev');
            });

            $('.slick-next-projects').click(function() {
                $('.projects-slider').slick('slickNext');
            });
        });

        $(document).ready(function() {
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
                responsive: [{
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
            $('.slick-prev-instagram').click(function() {
                $('.instagram-slider').slick('slickPrev');
            });

            $('.slick-next-instagram').click(function() {
                $('.instagram-slider').slick('slickNext');
            });
        });
    </script>
</body>

</html>

<!doctype html>
<html>

<head>
    <!-- Meta Tag Umum -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Narasea Indonesia - Platform Edukasi & Advokasi Konservasi Laut</title>

    <!-- Meta SEO -->
    <meta name="description"
        content="Narasea Indonesia: Bersuara untuk Laut, Bergerak untuk Perubahan! Edukasi, Advokasi, dan Aksi Nyata untuk konservasi laut Indonesia.">
    <meta name="keywords"
        content="Narasea Indonesia, konservasi laut, edukasi lingkungan, advokasi laut, aksi nyata, lingkungan, laut Indonesia">
    <meta name="author" content="Narasea Indonesia Team">
    <meta name="robots" content="index, follow">

    <!-- Meta Open Graph (untuk Facebook, LinkedIn, dll.) -->
    <meta property="og:title" content="Narasea Indonesia - Bersuara untuk Laut, Bergerak untuk Perubahan!">
    <meta property="og:description"
        content="Edukasi, Advokasi, dan Aksi Nyata untuk konservasi laut Indonesia. Bergabunglah bersama kami dalam menjaga kelestarian laut.">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="website">

    <!-- Favicon untuk browser -->
    <link rel="icon" href="{{ asset('/assets/favicon/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('/assets/favicon/favicon.svg') }}" type="image/svg+xml">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('/assets/favicon/favicon-96x96.png') }}">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/favicon/apple-touch-icon.png') }}">

    <!-- Android Manifest -->
    <link rel="manifest" href="{{ asset('/assets/favicon/site.webmanifest') }}">
    <meta name="theme-color" content="#083C75">

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('/assets/css/fonts.css') }}">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Hero Section -->
    <section
        class="min-h-screen bg-blue-900/90 bg-[url('/public/assets/images/landing-page-2-new.png')] bg-cover bg-center flex flex-col justify-center items-center px-4 py-12 sm:px-8 sm:py-16 md:px-12 md:py-20 lg:px-24 lg:py-28 xl:px-32 relative">
        <h1
            class="mb-4 overflow-hidden text-3xl font-bold tracking-wide text-center text-white sm:text-4xl sm:mb-5 md:text-5xl md:mb-6 lg:text-6xl font-calimate">
            <span id="changing-text" class="inline-block"></span>
        </h1>

        <p
            class="w-full mb-6 text-base leading-normal text-center text-white sm:text-lg sm:mb-7 md:text-xl md:mb-8 lg:text-2xl lg:leading-relaxed font-ttNorms">
            Narasea is built on five core pillars that connect people and the ocean.<br>
            Your support—whether through time, resources, or voice—makes all the difference.
        </p>
    </section>

    <!-- Section Educate: Empower Future Ocean Advocates.-->
    <section
        class="bg-white py-12 px-4 sm:py-16 md:py-20 lg:py-24 xl:py-28 rounded-bl-[50px] rounded-br-[50px] z-40 relative overflow-hidden"
        style="margin-bottom: 50px;">

        <!-- Content Container with relative positioning -->
        <div class="relative z-10">
            <!-- Title Section -->
            <div class="max-w-6xl mx-auto mb-12 text-center lg:mb-16">
                <h2 class="text-3xl font-extrabold leading-tight tracking-wide sm:text-4xl md:text-5xl font-calimate text-blue">
                    Educate:
                </h2>
                <h5 class="mt-2 text-xl font-semibold sm:text-2xl md:text-3xl font-calimate text-teal-blue">
                    Empower Future Ocean Advocates.
                </h5>
                <p class="max-w-3xl mx-auto mt-4 text-lg text-center text-black font-ttNorms">
                    Knowledge is the first step to change.<br>
                    Help us inspire the next generation to protect our oceans.
                </p>
            </div>

            <!-- Cards Slider Section -->
            <div class="relative max-w-6xl mx-auto">
                <!-- Custom Navigation Buttons -->
                <div class="absolute left-0 right-0 z-10 justify-between hidden px-4 -translate-y-1/2 lg:flex top-1/2">
                    <button
                        class="flex items-center justify-center w-10 h-10 transition bg-white rounded-full shadow-lg slick-prev-custom hover:bg-gray-100">
                        <i class="text-gray-700 fas fa-chevron-left"></i>
                    </button>
                    <button
                        class="flex items-center justify-center w-10 h-10 transition bg-white rounded-full shadow-lg slick-next-custom hover:bg-gray-100">
                        <i class="text-gray-700 fas fa-chevron-right"></i>
                    </button>
                </div>

                <!-- Slider Container -->
                <div class="stats-slider">
                    <!-- Card 1 -->
                    <div class="h-full px-2 group">
                        <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30">
                                </div>
                            </div>
                            <div
                                class="bg-teal-blue p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center relative h-[150px]">
                                <p class="text-white text-base lg:text-lg font-calimate min-h-[60px]">10+ coastal
                                    communities empowered.</p>
                            </div>
                            <div
                                class="absolute inset-0 flex items-center justify-center p-6 transition-transform duration-300 transform translate-y-full bg-teal-blue bg-opacity-90 group-hover:translate-y-0">
                                <p class="text-sm text-center text-white lg:text-base font-ttNorms">
                                    Meet Our Fishers in Sidem Beach and Popoh Beach Tulungagung, East Java
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="h-full px-2 group">
                        <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30">
                                </div>
                            </div>
                            <div
                                class="bg-teal-blue p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center relative h-[150px]">
                                <p class="text-white text-base lg:text-lg font-calimate min-h-[60px]">10+ coastal
                                    communities empowered.</p>
                            </div>
                            <div
                                class="absolute inset-0 flex items-center justify-center p-6 transition-transform duration-300 transform translate-y-full bg-teal-blue bg-opacity-90 group-hover:translate-y-0">
                                <p class="text-sm text-center text-white lg:text-base font-ttNorms">
                                    Meet Our Fishers in Sidem Beach and Popoh Beach Tulungagung, East Java
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="h-full px-2 group">
                        <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30">
                                </div>
                            </div>
                            <div
                                class="bg-teal-blue p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center relative h-[150px]">
                                <p class="text-white text-base lg:text-lg font-calimate min-h-[60px]">10+ coastal
                                    communities empowered.</p>
                            </div>
                            <div
                                class="absolute inset-0 flex items-center justify-center p-6 transition-transform duration-300 transform translate-y-full bg-teal-blue bg-opacity-90 group-hover:translate-y-0">
                                <p class="text-sm text-center text-white lg:text-base font-ttNorms">
                                    Meet Our Fishers in Sidem Beach and Popoh Beach Tulungagung, East Java
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="h-full px-2 group">
                        <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30">
                                </div>
                            </div>
                            <div
                                class="bg-teal-blue p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center relative h-[150px]">
                                <p class="text-white text-base lg:text-lg font-calimate min-h-[60px]">10+ coastal
                                    communities empowered.</p>
                            </div>
                            <div
                                class="absolute inset-0 flex items-center justify-center p-6 transition-transform duration-300 transform translate-y-full bg-teal-blue bg-opacity-90 group-hover:translate-y-0">
                                <p class="text-sm text-center text-white lg:text-base font-ttNorms">
                                    Meet Our Fishers in Sidem Beach and Popoh Beach Tulungagung, East Java
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Support Marine Conservation. -->
    <section class="bg-black py-[200px] px-4 rounded-bl-[50px] rounded-br-[50px] relative z-30"
        style="margin-top: -150px;">
        <div class="flex flex-col items-stretch gap-6 ml-[2rem] mr-[2rem] lg:flex-row">
            <!-- Left Side - Title -->
            <div class="flex items-center lg:w-1/3">
                <div>
                    <h2
                        class="text-3xl font-extrabold leading-tight tracking-wide text-white sm:text-4xl md:text-5xl font-calimate">
                        <span>Support</span><br>
                        <span>Marine</span><br>
                        <span>Conservation.</span>
                    </h2>
                    <p class="mt-4 text-white font-ttNorms">
                        Be a driving force behind ocean protection. Your support fuels real impact.
                    </p>
                </div>
            </div>

            <!-- Right Side - Cards Slider -->
            <div class="relative w-full lg:w-2/3">
                <!-- Slider Container -->
                <div class="stats-slider">
                    <!-- Card 1 -->
                    <div class="h-full px-2 group">
                        <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="{{ asset('assets/images/toi-1.png') }}" alt="Education"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30">
                                </div>
                            </div>
                            <div
                                class="bg-teal-blue p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center relative h-[150px]">
                                <p class="text-white text-base lg:text-2xl font-calimate font-bold min-h-[60px]">10+
                                    coastal
                                    communities empowered.</p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 flex items-center justify-center p-6 transition-transform duration-300 transform translate-y-full bg-teal-blue bg-opacity-90 group-hover:translate-y-0">
                                <p class="text-sm text-white lg:text-base font-ttNorms">
                                    Meet Our Fishers in Sidem Beach and Popoh Beach Tulungagung, East Java
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="h-full px-2 group">
                        <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="{{ asset('assets/images/toi-2.png') }}" alt="Education"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30">
                                </div>
                            </div>
                            <div
                                class="bg-raspberry-pink p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center relative h-[150px]">
                                <p class="text-wine-red text-base lg:text-2xl font-calimate font-bold min-h-[60px]">
                                    500+ people educated on ocean literacy.</p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 flex items-center justify-center p-6 transition-transform duration-300 transform translate-y-full bg-raspberry-pink bg-opacity-90 group-hover:translate-y-0">
                                <p class="text-sm text-wine-red lg:text-base font-ttNorms">
                                    See how our programs are shaping future ocean advocates at Sikola Pomore.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="h-full px-2 group">
                        <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="{{ asset('assets/images/toi-3.png') }}" alt="Education"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30">
                                </div>
                            </div>
                            <div
                                class="bg-peachy-orange p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center relative h-[150px]">
                                <p class="text-cocoa-brown text-base lg:text-2xl font-calimate font-bold min-h-[60px]">
                                    100K+ media impressions through digital storytelling.
                                </p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 flex items-center justify-center p-6 transition-transform duration-300 transform translate-y-full bg-peachy-orange bg-opacity-90 group-hover:translate-y-0">
                                <p class="text-sm text-cocoa-brown lg:text-base font-ttNorms">
                                    Amplifying unheard voices from coastal communities.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Dive Into Learning & Action - Empower Communities. -->
    <section class="relative px-4 py-[100px] bg-white rounded-bl-[50px] rounded-br-[50px] z-20 overflow-hidden"
        style="margin-top: -50px;">

        <div class="relative z-10 flex flex-col items-stretch gap-8 mx-auto max-w-7xl lg:flex-row">
            <!-- Left Side - Text -->
            <div class="flex items-start justify-start lg:w-1/4">
                <div class="text-start">
                    <h2 class="mb-4 text-4xl font-bold lg:text-5xl font-calimate">
                        <span class="text-teal-blue">Dive Into</span><br>
                        <span class="text-blue">Learning & Action.</span>
                    </h2>
                    <p class="mb-4 text-base text-black font-ttNorms">
                        Explore the depths of marine conservation through immersive experiences. Discover, engage, and make an impact.
                    </p>
                </div>
            </div>

            <!-- Middle - 4 Cards Grid -->
            <div class="w-full lg:w-2/4">
                <div class="grid h-full grid-cols-1 gap-4 sm:grid-cols-2">
                    <!-- Card 1 -->
                    <div class="h-full group">
                        <div class="relative flex flex-col h-full overflow-hidden shadow-lg rounded-2xl">
                            <div class="aspect-[2/1] overflow-hidden relative">
                                <img src="assets/images/education.png" alt="Coastal Community"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30"></div>
                            </div>
                            <div class="bg-blue p-5 h-[120px] flex">
                                <p class="text-xl font-bold text-white font-calimate">Education Trips.</p>
                            </div>
                            <div class="absolute inset-0 flex flex-col p-5 transition-transform duration-300 transform translate-y-full bg-blue bg-opacity-90 group-hover:translate-y-0">
                                <p class="text-sm text-white lg:text-base font-ttNorms">Hands-on experiences for students, professionals, and ocean enthusiasts.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="h-full group">
                        <div class="relative flex flex-col h-full overflow-hidden shadow-lg rounded-2xl">
                            <div class="aspect-[2/1] overflow-hidden relative">
                                <img src="assets/images/speaker.png" alt="Speaker"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30"></div>
                            </div>
                            <div class="bg-golden-yellow p-5 h-[120px] flex">
                                <p class="text-xl font-bold text-bronze font-calimate">Request a Speaker.</p>
                            </div>
                            <div class="absolute inset-0 flex flex-col p-5 transition-transform duration-300 transform translate-y-full bg-golden-yellow bg-opacity-90 group-hover:translate-y-0">
                                <p class="text-sm text-bronze lg:text-base font-ttNorms">Bring marine conservation experts to educate your organization or community.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="h-full group">
                        <div class="relative flex flex-col h-full overflow-hidden shadow-lg rounded-2xl">
                            <div class="aspect-[2/1] overflow-hidden relative">
                                <img src="assets/images/sponsor-a-coastal.png" alt="Volunteer"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30"></div>
                            </div>
                            <div class="bg-raspberry-pink p-5 h-[120px] flex">
                                <p class="text-xl font-bold text-wine-red font-calimate">Sponsor a Coastal Community.</p>
                            </div>
                            <div class="absolute inset-0 flex flex-col p-5 transition-transform duration-300 transform translate-y-full bg-raspberry-pink bg-opacity-90 group-hover:translate-y-0">
                                <p class="text-sm text-wine-red lg:text-base font-ttNorms">Provide direct support for grassroots conservation initiatives.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 4 -->
                    <div class="h-full group">
                        <div class="relative flex flex-col h-full overflow-hidden shadow-lg rounded-2xl">
                            <div class="aspect-[2/1] overflow-hidden relative">
                                <img src="assets/images/volunteer.png" alt="Empower Communities"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30"></div>
                            </div>
                            <div class="bg-peachy-orange p-5 h-[120px] flex">
                                <p class="text-xl font-bold text-cocoa-brown font-calimate">Become a Volunteer.</p>
                            </div>
                            <div class="absolute inset-0 flex flex-col p-5 transition-transform duration-300 transform translate-y-full bg-peachy-orange bg-opacity-90 group-hover:translate-y-0">
                                <p class="text-sm text-cocoa-brown lg:text-base font-ttNorms">Strong coastal communities mean a stronger ocean. Be part of their journey.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Text -->
            <div class="flex items-end justify-end lg:w-1/4">
                <div class="text-right">
                    <h2 class="mb-4 text-4xl font-bold lg:text-5xl font-calimate">
                        <span class="text-teal-blue">Empower</span><br>
                        <span class="text-blue">Communities.</span>
                    </h2>
                    <p class="mb-4 text-base text-black font-ttNorms">
                        Strong coastal communities mean a stronger ocean. Be part of their journey.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Advocate & Amplify the Message. - Empower Communities. -->
    <section
        class="relative px-4 py-[100px] bg-blue bg-[url('/public/assets/images/under-the-sea-2.png')] bg-no-repeat bg-left-bottom bg-contain lg:bg-[size:30%] rounded-bl-[50px] rounded-br-[50px] z-10 overflow-hidden"
        style="margin-top: -50px;">
        <!-- Semi-transparent overlay -->
        <div class="absolute inset-0 z-0 bg-blue/80"></div>

        <!-- Content goes here -->
        <div class="relative z-10 mx-auto text-center text-white max-w-7xl">
            <h2 class="mb-4 text-3xl font-bold md:text-4xl font-calimate">Advocate & Amplify the Message.</h2>
            <p class="max-w-2xl mx-auto mb-8 text-lg font-ttNorms">
                Your voice is a powerful tool for change. Help spread awareness and drive action.
            </p>

            <div class="max-w-2xl mx-auto mt-8 overflow-hidden rounded-lg shadow-sm bg-peachy-orange backdrop-blur-sm">
                <div class="flex flex-col md:flex-row">
                    <!-- Text content (left side - 50% width) -->
                    <div class="flex flex-col justify-center w-full p-5 text-left md:p-6 md:w-1/2">
                        <h2 class="mb-3 text-2xl font-bold md:text-3xl font-calimate">Join the Conversation.</h2>
                        <p class="text-sm font-ttNorms md:text-base">
                            Share Nanasea's content & inspire action on social media.
                        </p>
                    </div>

                    <!-- Image placeholder (right side - 50% width) -->
                    <div class="flex items-center justify-center w-full aspect-square md:w-1/2 bg-white/30">
                        <!-- SVG placeholder icon -->
                        <svg class="w-12 h-12 text-white/50" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Every Action Creates a Wave of Change. -->
    <section class="relative px-4 py-[200px] bg-black rounded-bl-[50px] rounded-br-[50px] overflow-hidden"
        style="margin-top: -50px;">
        <!-- Semi-transparent overlay -->
        <div class="absolute inset-0 z-0 bg-black/80"></div>

        <!-- Content goes here -->
        <div class="relative z-10 mx-auto max-w-7xl">
            <div class="flex items-start justify-start mb-12 lg:w-2/4">
                <div class="text-start">
                    <h3 class="mb-4 text-2xl font-bold font-calimate">
                        <span class="text-teal-blue">Every Action Creates a<br>Wave of Change.</span>
                    </h3>
                    <p class="mb-4 text-white font-ttNorms">
                        The ocean gives us life—now it's our turn to give back. Whether you choose to volunteer,
                        donate, educate, or advocate, your efforts help protect marine ecosystems and empower coastal
                        communities.
                        Together, we can create a future where the ocean thrives for generations to come.
                    </p>
                    <p class="mb-8 text-golden-yellow font-ttNorms">
                        Ready to make an impact? Choose how you want to take action:
                    </p>
                </div>
            </div>

            <!-- 6-photo horizontal grid (1x6) -->
            <div class="grid grid-cols-2 gap-6 mx-auto md:grid-cols-3 lg:grid-cols-6 max-w-7xl">
                <!-- Photo 1 -->
                <div class="rounded-xl overflow-hidden aspect-[3/4]">
                    <img src="{{ asset('assets/images/Rectangle 2.png') }}" alt="Volunteer"
                        class="object-cover w-full h-full transition-transform duration-300 hover:scale-105">
                </div>

                <!-- Photo 2 -->
                <div class="rounded-xl overflow-hidden aspect-[3/4]">
                    <img src="{{ asset('assets/images/Rectangle 2.png') }}" alt="Donate"
                        class="object-cover w-full h-full transition-transform duration-300 hover:scale-105">
                </div>

                <!-- Photo 3 -->
                <div class="rounded-xl overflow-hidden aspect-[3/4]">
                    <img src="{{ asset('assets/images/Rectangle 2.png') }}" alt="Educate"
                        class="object-cover w-full h-full transition-transform duration-300 hover:scale-105">
                </div>

                <!-- Photo 4 -->
                <div class="rounded-xl overflow-hidden aspect-[3/4]">
                    <img src="{{ asset('assets/images/Rectangle 2.png') }}" alt="Advocate"
                        class="object-cover w-full h-full transition-transform duration-300 hover:scale-105">
                </div>

                <!-- Photo 5 -->
                <div class="rounded-xl overflow-hidden aspect-[3/4]">
                    <img src="{{ asset('assets/images/Rectangle 2.png') }}" alt="Share"
                        class="object-cover w-full h-full transition-transform duration-300 hover:scale-105">
                </div>

                <!-- Photo 6 -->
                <div class="rounded-xl overflow-hidden aspect-[3/4]">
                    <img src="{{ asset('assets/images/Rectangle 2.png') }}" alt="Join"
                        class="object-cover w-full h-full transition-transform duration-300 hover:scale-105">
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="relative px-4 py-12 sm:py-16 md:py-20" style="margin-top: -50px;">
        @include('components.subscribe')
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/text-transition.js') }}" defer></script>
</body>

</html>

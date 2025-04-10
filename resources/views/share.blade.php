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
    <link rel="icon" href="/assets/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/assets/favicon/favicon.svg" type="image/svg+xml">
    <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon/favicon-96x96.png">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-touch-icon.png">

    <!-- Android Manifest -->
    <link rel="manifest" href="/assets/favicon/site.webmanifest">
    <meta name="theme-color" content="#083C75">

    @vite('resources/css/app.css')
    <link rel="stylesheet" href="/assets/css/fonts.css">

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Hero Section -->
    <section
        class="min-h-screen bg-blue-900/90 bg-[url('/public/assets/images/landing-page-2.png')] bg-cover bg-center flex flex-col justify-center items-center px-4 py-12 sm:px-8 sm:py-16 md:px-12 md:py-20 lg:px-24 lg:py-28 xl:px-32 relative">
        <h1
            class="text-3xl font-bold mb-4 sm:text-4xl sm:mb-5 md:text-5xl md:mb-6 lg:text-6xl tracking-wide font-calimate text-white text-center overflow-hidden">
            <span id="changing-text" class="inline-block"></span><span class="typing-cursor">|</span>
        </h1>

        <p
            class="text-base mb-6 leading-normal sm:text-lg sm:mb-7 md:text-xl md:mb-8 lg:text-2xl lg:leading-relaxed font-ttNorms text-white text-center w-full">
            Narasea is built on five core pillars that connect people and the ocean.<br>
            Your support—whether through time, resources, or voice—makes all the difference.
        </p>
    </section>

    <!-- Section Educate: Empower Future Ocean Advocates.-->
    <section
        class="bg-black py-12 px-4 sm:py-16 md:py-20 lg:py-24 xl:py-28 rounded-bl-[50px] rounded-br-[50px] overflow-hidden"
        style="margin-bottom: 50px;">

        <!-- Content Container with relative positioning -->
        <div class="relative z-10">
            <!-- Title Section -->
            <div class="max-w-6xl mx-auto mb-12 lg:mb-16 text-left">
                <h2 class="text-3xl font-extrabold sm:text-4xl md:text-5xl tracking-wide font-calimate leading-tight">
                    <span class="text-white">Educate:</span><br>
                    <span class="text-teal-blue">Empower Future Ocean Advocates.</span>
                </h2>
                <p class="text-white mt-4 text-lg max-w-3xl">
                    Knowledge is the first step to change.<br>
                    Help us inspire the next generation to protect our oceans.
                </p>
            </div>

            <!-- Cards Slider Section -->
            <div class="max-w-6xl mx-auto relative">
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
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300">
                                </div>
                            </div>
                            <div
                                class="bg-teal-blue p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center relative h-[150px]">
                                <p class="text-white text-base lg:text-lg font-calimate min-h-[60px]">10+ coastal
                                    communities empowered.</p>
                            </div>
                            <div
                                class="absolute inset-0 bg-teal-blue bg-opacity-90 p-6 flex items-center justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center font-ttNorms">
                                    Meet Our Fishers in Sidem Beach and Popoh Beach Tulungagung, East Java
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="px-2 h-full group">
                        <div class="flex flex-col h-full relative overflow-hidden rounded-2xl">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300">
                                </div>
                            </div>
                            <div
                                class="bg-teal-blue p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center relative h-[150px]">
                                <p class="text-white text-base lg:text-lg font-calimate min-h-[60px]">10+ coastal
                                    communities empowered.</p>
                            </div>
                            <div
                                class="absolute inset-0 bg-teal-blue bg-opacity-90 p-6 flex items-center justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center font-ttNorms">
                                    Meet Our Fishers in Sidem Beach and Popoh Beach Tulungagung, East Java
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="px-2 h-full group">
                        <div class="flex flex-col h-full relative overflow-hidden rounded-2xl">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300">
                                </div>
                            </div>
                            <div
                                class="bg-teal-blue p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center relative h-[150px]">
                                <p class="text-white text-base lg:text-lg font-calimate min-h-[60px]">10+ coastal
                                    communities empowered.</p>
                            </div>
                            <div
                                class="absolute inset-0 bg-teal-blue bg-opacity-90 p-6 flex items-center justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center font-ttNorms">
                                    Meet Our Fishers in Sidem Beach and Popoh Beach Tulungagung, East Java
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="px-2 h-full group">
                        <div class="flex flex-col h-full relative overflow-hidden rounded-2xl">
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300">
                                </div>
                            </div>
                            <div
                                class="bg-teal-blue p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center relative h-[150px]">
                                <p class="text-white text-base lg:text-lg font-calimate min-h-[60px]">10+ coastal
                                    communities empowered.</p>
                            </div>
                            <div
                                class="absolute inset-0 bg-teal-blue bg-opacity-90 p-6 flex items-center justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center font-ttNorms">
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
    <section class="bg-white py-[200px] px-4 rounded-bl-[50px] rounded-br-[50px] relative z-40"
        style="margin-top: -50px;">
        <div class="max-w-6xl mx-auto flex flex-col lg:flex-row gap-6 lg:gap-8 items-stretch">
            <!-- Left Side - Title -->
            <div class="lg:w-1/3 flex items-center">
                <div>
                    <h2
                        class="text-3xl font-extrabold sm:text-4xl md:text-5xl tracking-wide font-calimate leading-tight">
                        <span class="text-blue">Support </span>
                        <span class="text-teal-blue">Marine</span><br>
                        <span class="text-blue">Conservation</span>
                    </h2>
                    <p class="mt-4 text-gray-600 font-ttNorms">
                        Be a driving force behind ocean protection. Your support fuels real impact.
                    </p>
                </div>
            </div>

            <!-- Right Side - Cards Slider -->
            <div class="lg:w-2/3 w-full">
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
                                class="bg-teal-blue p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center relative h-[150px]">
                                <p class="text-white text-base lg:text-lg font-calimate min-h-[60px]">10+ coastal
                                    communities empowered.</p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 bg-teal-blue bg-opacity-90 p-6 flex items-center justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center font-ttNorms">
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
                                class="bg-raspberry-pink p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center relative h-[150px]">
                                <p class="text-white text-base lg:text-lg font-calimate min-h-[60px]">500+ people
                                    educated on ocean literacy</p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 bg-raspberry-pink bg-opacity-90 p-6 flex items-center justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center font-ttNorms">
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
                                class="bg-peachy-orange p-4 lg:p-6 rounded-b-2xl flex-grow flex items-center justify-center relative h-[150px]">
                                <p class="text-white text-base lg:text-lg font-calimate min-h-[60px]">100K+ media
                                    impressions through digital storytelling</p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 bg-peachy-orange bg-opacity-90 p-6 flex items-center justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center font-ttNorms">
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

    <!-- Section Dive Into Learning & Action - Empower Communities. -->
    <section
        class="relative px-4 py-[200px] bg-teal-blue bg-[url('/public/assets/images/under-the-sea.png')] bg-no-repeat bg-left-bottom bg-contain lg:bg-[size:30%] rounded-bl-[50px] rounded-br-[50px] z-30 overflow-hidden"
        style="margin-top: -50px;">
        <!-- Semi-transparent overlay -->
        <div class="absolute inset-0 bg-teal-blue/80 z-0"></div>

        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-8 items-stretch relative z-10">
            <!-- Left Side - Text -->
            <div class="lg:w-1/4 flex items-start justify-start">
                <div class="text-start">
                    <h3 class="text-2xl font-bold mb-4 font-calimate">
                        <span class="text-peachy-orange">Dive Into</span><br>
                        <span class="text-golden-yellow">Learning & Action.</span>
                    </h3>
                    <p class="text-white font-ttNorms mb-4">
                        Strong coastal communities mean a stronger ocean.
                        Be part of their journey.
                    </p>
                </div>
            </div>

            <!-- Middle - 4 Cards Grid -->
            <div class="lg:w-2/4 w-full">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 h-full">
                    <!-- Card 1 -->
                    <div class="h-full group">
                        <div class="flex flex-col h-full relative overflow-hidden rounded-2xl shadow-lg">
                            <div class="aspect-[2/1] overflow-hidden relative">
                                <img src="assets/images/image-1.png" alt="Coastal Community"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300">
                                </div>
                            </div>
                            <div class="bg-blue p-5 h-[120px] flex items-center justify-center">
                                <p class="text-white text-lg font-calimate text-center">Sponsor a Coastal Community</p>
                            </div>
                            <div
                                class="absolute inset-0 bg-blue bg-opacity-90 p-5 flex flex-col justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center font-ttNorms">
                                    Support local initiatives that protect marine ecosystems and livelihoods.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="h-full group">
                        <div class="flex flex-col h-full relative overflow-hidden rounded-2xl shadow-lg">
                            <div class="aspect-[2/1] overflow-hidden relative">
                                <img src="assets/images/image-1.png" alt="Speaker"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300">
                                </div>
                            </div>
                            <div class="bg-golden-yellow p-5 h-[120px] flex items-center justify-center">
                                <p class="text-white text-lg font-calimate text-center">Request a Speaker</p>
                            </div>
                            <div
                                class="absolute inset-0 bg-golden-yellow bg-opacity-90 p-5 flex flex-col justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center font-ttNorms">
                                    Bring marine conservation experts to educate your organization or community.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="h-full group">
                        <div class="flex flex-col h-full relative overflow-hidden rounded-2xl shadow-lg">
                            <div class="aspect-[2/1] overflow-hidden relative">
                                <img src="assets/images/image-1.png" alt="Volunteer"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300">
                                </div>
                            </div>
                            <div class="bg-raspberry-pink p-5 h-[120px] flex items-center justify-center">
                                <p class="text-white text-lg font-calimate text-center">Become a Volunteer</p>
                            </div>
                            <div
                                class="absolute inset-0 bg-raspberry-pink bg-opacity-90 p-5 flex flex-col justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center font-ttNorms">
                                    Join hands-on conservation efforts in coastal areas and make a direct impact.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="h-full group">
                        <div class="flex flex-col h-full relative overflow-hidden rounded-2xl shadow-lg">
                            <div class="aspect-[2/1] overflow-hidden relative">
                                <img src="assets/images/image-1.png" alt="Empower Communities"
                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition-all duration-300">
                                </div>
                            </div>
                            <div class="bg-peachy-orange p-5 h-[120px] flex items-center justify-center">
                                <p class="text-white text-lg font-calimate text-center">Empower Communities</p>
                            </div>
                            <div
                                class="absolute inset-0 bg-peachy-orange bg-opacity-90 p-5 flex flex-col justify-center transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <p class="text-white text-sm lg:text-base text-center font-ttNorms">
                                    Strong coastal communities mean a stronger ocean. Be part of their journey.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Text -->
            <div class="lg:w-1/4 flex items-end justify-end">
                <div class="text-right">
                    <h3 class="text-2xl font-bold mb-4 font-calimate">
                        <span class="text-golden-yellow">Empower</span><br>
                        <span class="text-peachy-orange">Communities.</span>
                    </h3>
                    <p class="text-white font-ttNorms mb-4">
                        Strong coastal communities mean a stronger ocean.
                        Be part of their journey.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Advocate & Amplify the Message. - Empower Communities. -->
    <section
        class="relative px-4 py-[200px] bg-blue bg-[url('/public/assets/images/under-the-sea-2.png')] bg-no-repeat bg-left-bottom bg-contain lg:bg-[size:30%] rounded-bl-[50px] rounded-br-[50px] z-20 overflow-hidden"
        style="margin-top: -50px;">
        <!-- Semi-transparent overlay -->
        <div class="absolute inset-0 bg-blue/80 z-0"></div>

        <!-- Content goes here -->
        <div class="max-w-7xl mx-auto relative z-10 text-white text-center">
            <h2 class="text-3xl md:text-4xl font-bold font-calimate mb-4">Advocate & Amplify the Message.</h2>
            <p class="text-lg font-ttNorms max-w-2xl mx-auto mb-8">
                Your voice is a powerful tool for change. Help spread awareness and drive action.
            </p>

            <div class="mt-8 max-w-2xl mx-auto bg-peachy-orange backdrop-blur-sm rounded-lg overflow-hidden shadow-sm">
                <div class="flex flex-col md:flex-row">
                    <!-- Text content (left side - 50% width) -->
                    <div class="p-5 md:p-6 w-full md:w-1/2 flex flex-col justify-center text-left">
                        <h2 class="text-2xl md:text-3xl font-bold font-calimate mb-3">Join the Conversation.</h2>
                        <p class="text-sm font-ttNorms md:text-base">
                            Share Nanasea's content & inspire action on social media.
                        </p>
                    </div>

                    <!-- Image placeholder (right side - 50% width) -->
                    <div class="aspect-square w-full md:w-1/2 bg-white/30 flex items-center justify-center">
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
    <section class="relative px-4 py-[200px] bg-black rounded-bl-[50px] rounded-br-[50px] z-10 overflow-hidden"
        style="margin-top: -50px;">
        <!-- Semi-transparent overlay -->
        <div class="absolute inset-0 bg-black/80 z-0"></div>

        <!-- Content goes here -->
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="lg:w-2/4 flex items-start justify-start mb-12">
                <div class="text-start">
                    <h3 class="text-2xl font-bold mb-4 font-calimate">
                        <span class="text-teal-blue">Every Action Creates a<br>Wave of Change.</span>
                    </h3>
                    <p class="text-white font-ttNorms mb-4">
                        The ocean gives us life—now it's our turn to give back. Whether you choose to volunteer,
                        donate, educate, or advocate, your efforts help protect marine ecosystems and empower coastal
                        communities.
                        Together, we can create a future where the ocean thrives for generations to come.
                    </p>
                    <p class="text-golden-yellow font-ttNorms mb-8">
                        Ready to make an impact? Choose how you want to take action:
                    </p>
                </div>
            </div>

            <!-- 6-photo horizontal grid (1x6) -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-6 max-w-7xl mx-auto">
                <!-- Photo 1 -->
                <div class="rounded-xl overflow-hidden aspect-[3/4]">
                    <img src="{{ asset('assets/images/Rectangle 2.png') }}" alt="Volunteer"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>

                <!-- Photo 2 -->
                <div class="rounded-xl overflow-hidden aspect-[3/4]">
                    <img src="{{ asset('assets/images/Rectangle 2.png') }}" alt="Donate"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>

                <!-- Photo 3 -->
                <div class="rounded-xl overflow-hidden aspect-[3/4]">
                    <img src="{{ asset('assets/images/Rectangle 2.png') }}" alt="Educate"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>

                <!-- Photo 4 -->
                <div class="rounded-xl overflow-hidden aspect-[3/4]">
                    <img src="{{ asset('assets/images/Rectangle 2.png') }}" alt="Advocate"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>

                <!-- Photo 5 -->
                <div class="rounded-xl overflow-hidden aspect-[3/4]">
                    <img src="{{ asset('assets/images/Rectangle 2.png') }}" alt="Share"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>

                <!-- Photo 6 -->
                <div class="rounded-xl overflow-hidden aspect-[3/4]">
                    <img src="{{ asset('assets/images/Rectangle 2.png') }}" alt="Join"
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="relative bg-teal-blue py-12 px-4 sm:py-16 md:py-20" style="margin-top: -50px;">
        @include('components.subscribe')
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/text-transition.js') }}" defer></script>
</body>

</html>

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
        class="min-h-screen bg-blue-900/90 bg-[url('/public/assets/images/landing-page-2.png')] bg-cover bg-center flex flex-col justify-center items-center px-4 py-12 sm:px-8 sm:py-16 md:px-12 md:py-20 lg:px-24 lg:py-28 xl:px-32">
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
        class="bg-black py-12 px-4 sm:py-16 md:py-20 lg:py-24 xl:py-28 rounded-bl-[50px] rounded-br-[50px] relative overflow-hidden">
        <!-- Background Image Overlay -->
        <div class="absolute inset-0 bg-[url('/public/assets/images/fish-wave.png')] bg-cover bg-center"></div>

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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/text-transition.js') }}" defer></script>
</body>

</html>

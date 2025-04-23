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
        class="min-h-screen bg-blue-900/90 bg-[url('/public/assets/images/home-1.png')] bg-cover bg-center flex flex-col justify-end items-start px-4 py-12 sm:px-8 sm:py-16 md:px-12 md:py-20 lg:py-28">

        <!-- Main Title -->
        <h1 class="mb-0 text-3xl font-bold tracking-wide text-white sm:text-4xl md:text-5xl lg:text-6xl font-calimate">
            See, Share, Sea.
        </h1>

        <!-- Subtitle -->
        <p
            class="text-sm leading-snug sm:text-base md:text-lg lg:text-xl lg:leading-normal font-ttNorms text-white max-w-[42ch] mb-2">
            Through education, action, and storytelling, we empower
            communities to protect our seas.
        </p>

        <!-- CTA Button -->
        <a href="https://wa.me/628112372277" target="_blank"
            class="z-10 px-6 py-2 text-sm sm:px-7 sm:py-2.5 sm:text-base md:px-8 md:py-3 md:text-lg bg-peachy-orange text-white rounded-2xl font-bold tracking-wider hover:bg-[#D96630] transition duration-200 font-ttNorms mt-0">
            Be The Change
            <i class="ml-2 fas fa-arrow-right"></i>
        </a>
    </section>

    <!-- Impact Section with Side-by-Side Cards -->
    <section
        class="relative bg-blue bg-[url('/public/assets/images/ASdaf%202.png')] bg-cover rounded-bl-[50px] rounded-br-[50px] z-30 py-16 sm:py-20 md:py-24 lg:py-28 xl:py-32 px-4">
        <!-- Blue overlay -->
        <div class="absolute inset-0 bg-blue-900/70"></div>

        <div class="flex flex-col items-stretch gap-6 ml-[2rem] mr-[2rem] lg:flex-row">
            <!-- Left Side - Title -->
            <div class="flex items-flex-start lg:w-1/3">
                <h2 class="text-3xl font-extrabold leading-tight tracking-wide sm:text-4xl md:text-5xl font-calimate">
                    <span class="text-white">Tides of</span><br>
                    <span class="text-teal-blue">Impact.</span>
                </h2>
            </div>

            <!-- Right Side - Cards Slider -->
            <div class="relative w-full lg:w-2/3">
                <!-- Custom Navigation Buttons -->
                {{-- <div class="absolute left-0 right-0 z-10 justify-between hidden px-4 -translate-y-1/2 lg:flex top-1/2">
                    <button
                        class="flex items-center justify-center w-10 h-10 transition bg-white rounded-full shadow-lg slick-prev-custom hover:bg-gray-100">
                        <i class="text-gray-700 fas fa-chevron-left"></i>
                    </button>
                    <button
                        class="flex items-center justify-center w-10 h-10 transition bg-white rounded-full shadow-lg slick-next-custom hover:bg-gray-100">
                        <i class="text-gray-700 fas fa-chevron-right"></i>
                    </button>
                </div> --}}
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

    <!-- New Storytelling Section -->
    <section
        class="relative px-4 py-16 sm:py-20 md:py-24 lg:py-28 xl:py-32 bg-white rounded-bl-[50px] rounded-br-[50px] z-30">

        <div class="relative z-10 ml-[2rem] mr-[2rem]">
            <!-- Voice title with different colors -->
            <h2 class="mb-8 text-3xl font-bold tracking-wide sm:text-4xl md:text-5xl font-calimate lg:mb-12">
                <span class="text-teal-blue">Voice from the</span>
                <span class="text-blue"> ocean.</span>
            </h2>

            <!-- Two-column content below -->
            <div class="flex flex-col gap-6 lg:flex-row lg:gap-8">
                <!-- Left Column - YouTube Thumbnail -->
                <div class="w-full lg:w-1/2">
                    <div class="relative overflow-hidden transition border-2 aspect-video rounded-xl border-white/20 group hover:border-white/40"
                        style="border-radius: 2rem;">
                        <iframe class="absolute inset-0 w-full h-full rounded-xl"
                            src="https://www.youtube.com/embed/boI4un-fyBU?start=109&rel=0"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>

                <!-- Right Column - Text Content -->
                <div class="w-full p-4 lg:w-1/2 rounded-2xl sm:p-6">
                    <p class="mb-3 text-lg font-bold text-black sm:text-xl md:text-2xl font-calimate">
                        The Fading Fishermen of Pulau Sabira.
                    </p>

                    <p class="mb-4 text-sm leading-relaxed text-black sm:text-base font-ttNorms">
                        Once a thriving haven for traditional fishermen, Pulau Sabira now
                        faces a quiet transformation. As the younger generation drifts away
                        from the sea, the island's rich fishing heritage stands at a crossroads.
                    </p>

                    <p class="mb-6 text-sm leading-relaxed text-black sm:text-base font-ttNorms">
                        NPM Fikom Unpad and Narasea Indonesia set sail to uncover the
                        stories of Sabira's fishermen—learning, listening, and capturing
                        their journey before it fades into history.
                    </p>

                    <a href="mailto:naraseaid@gmail.com">
                        <button
                            class="px-7 py-2 text-xs sm:text-sm md:text-base bg-blue text-white rounded-2xl font-bold tracking-wider hover:bg-[#062B54] transition duration-200 font-ttNorms">
                            Share What You See
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects & Partnership Section -->
    <section
        class="relative bg-[url('/public/assets/images/under-the-sea-2-new.png')] bg-cover bg-center py-12 px-4 sm:py-16 md:py-20 lg:py-24 xl:py-32 rounded-bl-[50px] rounded-br-[50px] -mt-[50px] z-20">
        <div class="ml-[1rem] mr-[1rem]" style="padding-top: 50px;">
            <!-- Section Header -->
            {{-- <div class="px-4 sm:px-6">
                <h1 class="mb-2 text-3xl font-bold text-white sm:text-4xl md:text-5xl font-calimate">Protect.
                    Educate. Empower.</h1>
            </div> --}}

            <!-- Two Column Layout -->
            <div class="flex flex-col gap-8 px-4 lg:flex-row lg:gap-12 sm:px-6">
                <!-- Left Column - Text Content -->
                <div class="flex-col justify-center gap-0 lg:w-1/3">
                    <!-- H1 dipindahkan ke sini -->
                    <h1 class="mb-2 text-3xl font-bold text-white sm:text-4xl md:text-5xl font-calimate">
                        Protect, Educate, Empower.
                    </h1>
                    <p class="mt-4 text-sm leading-relaxed text-white sm:text-base md:text-lg font-ttNorms">
                        At Narasea, every wave carries a story, and every initiative is a step toward protecting our
                        marine heritage. Through collaborations with passionate organizations, we bring education,
                        sustainability, and community empowerment to life.
                    </p>
                </div>

                <!-- Right Column - Image Cards Slider -->
                <div class="relative mt-6 lg:w-2/3 lg:mt-0">
                    <!-- Navigation Buttons -->
                    <button
                        class="slick-prev-projects absolute left-2 sm:left-0 top-1/2 -translate-y-1/2 z-10 bg-teal-blue text-white rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center hover:bg-[#014951] transition-all duration-200">
                        <i class="text-sm fas fa-chevron-left sm:text-base"></i>
                    </button>

                    <button
                        class="slick-next-projects absolute right-2 sm:right-0 top-1/2 -translate-y-1/2 z-10 bg-teal-blue text-white rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center hover:bg-[#014951] transition-all duration-200">
                        <i class="text-sm fas fa-chevron-right sm:text-base"></i>
                    </button>

                    <!-- Slider Container -->
                    <div class="projects-slider">
                        <!-- Card 1 -->
                        <div class="h-full px-2">
                            <div
                                class="flex flex-col h-full overflow-hidden shadow-lg rounded-2xl bg-golden-yellow group">
                                <div class="aspect-[4/3] overflow-hidden relative">
                                    <img src="{{ asset('assets/images/pee-1.png') }}" alt="Coral Triangle"
                                        class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105">
                                </div>
                                <div class="flex flex-col flex-grow p-4 lg:p-6">
                                    <h3
                                        class="mb-2 text-base font-bold text-black sm:text-lg lg:text-xl font-calimate">
                                        Wonder of Coral Triangle
                                    </h3>
                                    <p class="flex-grow text-xs text-black/80 sm:text-sm font-ttNorms">
                                        A hands-on educational journey into the heart of the Coral Triangle. Created in
                                        collaboration with Color For Good, this workshop-based book inspires young minds
                                        to protect our oceans.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="h-full px-2">
                            <div
                                class="flex flex-col h-full overflow-hidden shadow-lg rounded-2xl bg-raspberry-pink group">
                                <div class="aspect-[4/3] overflow-hidden relative">
                                    <img src="{{ asset('assets/images/pee-2.png') }}" alt="Octopus Series"
                                        class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105">
                                </div>
                                <div class="flex flex-col flex-grow p-4 lg:p-6">
                                    <h3
                                        class="mb-2 text-base font-bold text-white sm:text-lg lg:text-xl font-calimate">
                                        Octopus Series
                                    </h3>
                                    <p class="flex-grow text-xs text-white/80 sm:text-sm font-ttNorms">
                                        A dynamic collaboration with various institutions and organizations, exploring
                                        the intricate connections between marine life, conservation, and coastal
                                        communities.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="h-full px-2">
                            <div class="flex flex-col h-full overflow-hidden shadow-lg rounded-2xl bg-blue group">
                                <div class="aspect-[4/3] overflow-hidden relative">
                                    <img src="{{ asset('assets/images/pee-3.png') }}" alt="Oceana Scar"
                                        class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105">
                                </div>
                                <div class="flex flex-col flex-grow p-4 lg:p-6">
                                    <h3
                                        class="mb-2 text-base font-bold text-white sm:text-lg lg:text-xl font-calimate">
                                        Oceana Scar
                                    </h3>
                                    <p class="flex-grow text-xs text-white/80 sm:text-sm font-ttNorms">
                                        A meaningful fusion of fashion and impact, co-created with Donashion, where
                                        every scarf supports ocean conservation efforts.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="h-full px-2">
                            <div
                                class="flex flex-col h-full overflow-hidden shadow-lg rounded-2xl bg-peachy-orange group">
                                <div class="aspect-[4/3] overflow-hidden relative">
                                    <img src="{{ asset('assets/images/pee-4.png') }}"
                                        alt="1000 Kebaikan untuk Nelayan "
                                        class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105">
                                </div>
                                <div class="flex flex-col flex-grow p-4 lg:p-6">
                                    <h3
                                        class="mb-2 text-base font-bold text-white sm:text-lg lg:text-xl font-calimate">
                                        1000 Kebaikan untuk Nelayan
                                    </h3>
                                    <p class="flex-grow text-xs text-white/80 sm:text-sm font-ttNorms">
                                        In partnership with Sinergi Foundation, this initiative uplifts coastal
                                        communities by providing essential support for local fishermen and their
                                        families.
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
    <section class="relative bg-black py-16 px-4 sm:py-20 md:py-24 lg:py-28 xl:py-32 -mt-[50px] z-10">
        <div class="relative z-10 ml-[2rem] mr-[2rem]">
            <div class="flex flex-col items-center gap-6 text-center lg:gap-8">
                <!-- Main Slider Container -->
                <div class="relative w-full px-4 sm:px-8">
                    <!-- Navigation Buttons -->
                    <button
                        class="slick-prev-instagram absolute left-2 sm:left-4 top-1/2 -translate-y-1/2 z-10 bg-teal-blue text-white rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center hover:bg-[#014951] transition">
                        <i class="text-sm fas fa-chevron-left sm:text-base"></i>
                    </button>

                    <button
                        class="slick-next-instagram absolute right-2 sm:right-4 top-1/2 -translate-y-1/2 z-10 bg-teal-blue text-white rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center hover:bg-[#014951] transition">
                        <i class="text-sm fas fa-chevron-right sm:text-base"></i>
                    </button>

                    <!-- Instagram Slider -->
                    <div class="instagram-slider">
                        <!-- Instagram Photos 1-5 -->
                        <div class="px-1">
                            <div class="overflow-hidden border-2 shadow-lg aspect-square rounded-xl border-white/20">
                                <img src="/assets/images/image-1.png" alt="Instagram photo"
                                    class="object-cover w-full h-full transition duration-300 hover:scale-105">
                            </div>
                        </div>
                        <div class="px-1">
                            <div class="overflow-hidden border-2 shadow-lg aspect-square rounded-xl border-white/20">
                                <img src="/assets/images/image-2.png" alt="Instagram photo"
                                    class="object-cover w-full h-full transition duration-300 hover:scale-105">
                            </div>
                        </div>
                        <div class="px-1">
                            <div class="overflow-hidden border-2 shadow-lg aspect-square rounded-xl border-white/20">
                                <img src="/assets/images/image-3.png" alt="Instagram photo"
                                    class="object-cover w-full h-full transition duration-300 hover:scale-105">
                            </div>
                        </div>
                        <div class="px-1">
                            <div class="overflow-hidden border-2 shadow-lg aspect-square rounded-xl border-white/20">
                                <img src="/assets/images/image-4.png" alt="Instagram photo"
                                    class="object-cover w-full h-full transition duration-300 hover:scale-105">
                            </div>
                        </div>
                        <div class="px-1">
                            <div class="overflow-hidden border-2 shadow-lg aspect-square rounded-xl border-white/20">
                                <img src="/assets/images/image-5.png" alt="Instagram photo"
                                    class="object-cover w-full h-full transition duration-300 hover:scale-105">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left Column - Text Content -->
                <div>
                    <h2 class="text-4xl font-bold tracking-wide sm:text-5xl md:text-6xl font-calimate text-teal-blue">
                        Social Currents.</span>
                    </h2>

                    <p class="max-w-2xl mx-auto mt-4 mb-6 text-sm text-white sm:text-base md:text-lg font-ttNorms">
                        The ocean moves, and so do we! Stay connected with the latest stories,
                        moments, and impact straight from our Instagram.
                    </p>

                    <div class="mb-6">
                        <a href="https://www.instagram.com/naraseaid/" target="_blank">
                            <button
                                class="px-9 py-2 text-xs sm:text-sm md:text-base bg-teal-blue text-white rounded-2xl font-bold tracking-wider hover:bg-[#C12F5A] transition duration-200 font-ttNorms">
                                Follow the Waves
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Grid Section -->
    {{-- <section class="relative bg-black">
        <div class="w-full h-24 overflow-hidden sm:h-32 md:h-40">
            <img src="{{ asset('assets/images/grid-1.png') }}" alt="Ocean grid pattern top"
                class="object-cover w-full h-full opacity-70">
        </div>
    </section> --}}

    <!-- Main Contact Section -->
    <section class="relative px-4 py-16 bg-black sm:py-20 md:py-24">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Title -->
            <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl md:text-5xl font-calimate">
                Sea Needs You. Get in Touch.
            </h2>

            <!-- Text -->
            <div class="max-w-2xl mx-auto mb-8">
                <p class="text-base text-white/80 sm:text-lg md:text-xl font-ttNorms">
                    Every action counts in protecting our oceans. Whether you're looking to
                    collaborate, support, or simply learn more, we'd love to connect!
                </p>
            </div>

            <!-- Enhanced Animated Button Container -->
            <div class="relative flex items-center justify-center h-32">
                <!-- Main Button -->
                <button id="contact-main-btn"
                    class="absolute w-12 h-12 flex items-center justify-center bg-peachy-orange text-black rounded-full hover:bg-[#D96630] transition-all duration-300 z-10 focus:outline-none">
                    <i class="text-xl fas fa-comment-dots"></i>
                </button>

                <!-- WhatsApp Button -->
                <a href="https://wa.me/628112372277" target="_blank"
                    class="absolute flex items-center justify-center w-10 h-10 text-black transition-all duration-300 transform scale-50 bg-white rounded-full opacity-0 contact-sub-btn hover:scale-110 hover:shadow-lg">
                    <i class="fab fa-whatsapp"></i>
                </a>

                <!-- Email Button -->
                <a href="mailto:naraseaid@gmail.com"
                    class="absolute flex items-center justify-center w-10 h-10 text-black transition-all duration-300 transform scale-50 bg-white rounded-full opacity-0 contact-sub-btn hover:scale-110 hover:shadow-lg">
                    <i class="fas fa-envelope"></i>
                </a>

                <!-- Instagram Button -->
                <a href="https://www.instagram.com/naraseaid/" target="_blank"
                    class="absolute flex items-center justify-center w-10 h-10 text-black transition-all duration-300 transform scale-50 bg-white rounded-full opacity-0 contact-sub-btn hover:scale-110 hover:shadow-lg">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Newsletter Section -->
    <section class="relative px-4 py-12 bg-black sm:py-16 md:py-20">
        <div class="grid grid-cols-1 gap-12 mx-auto max-w-7xl md:grid-cols-2">
            <!-- Left: Subscribe Component -->
            <div>
                @include('components.subscribe')
            </div>

            <!-- Right: Footer Navigation -->
            <div class="grid grid-cols-1 gap-8 text-white sm:grid-cols-3">
                <!-- See Our Ocean -->
                <div>
                    <h3 class="text-lg font-semibold">See Our Ocean</h3>
                    <ul class="mt-4 space-y-2 text-sm text-gray-300">
                        <li><a href="#" class="hover:text-white">Tides of Impact</a></li>
                        <li><a href="#" class="hover:text-white">Voice From The Ocean</a></li>
                        <li><a href="#" class="hover:text-white">Protect, Educate, Empower</a></li>
                        <li><a href="#" class="hover:text-white">Social Current</a></li>
                    </ul>
                </div>

                <!-- Raise the Tide -->
                <div>
                    <h3 class="text-lg font-semibold">Raise the Tide</h3>
                    <ul class="mt-4 space-y-2 text-sm text-gray-300">
                        <li><a href="#" class="hover:text-white">Educate</a></li>
                        <li><a href="#" class="hover:text-white">Support Marine Conservation</a></li>
                        <li><a href="#" class="hover:text-white">Learning & Action</a></li>
                        <li><a href="#" class="hover:text-white">Empower Communities</a></li>
                        <li><a href="#" class="hover:text-white">Advocate & Amplify</a></li>
                    </ul>
                </div>

                <!-- Discover Narasea -->
                <div>
                    <h3 class="text-lg font-semibold">Discover Narasea</h3>
                    <ul class="mt-4 space-y-2 text-sm text-gray-300">
                        <li><a href="#" class="hover:text-white">Who We Are</a></li>
                        <li><a href="#" class="hover:text-white">Our Journey</a></li>
                        <li><a href="#" class="hover:text-white">Our Vision, Mission, & Approach</a></li>
                        <li><a href="#" class="hover:text-white">The Values We Live By</a></li>
                        <li><a href="#" class="hover:text-white">Advocate & Amplify</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>

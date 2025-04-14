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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    @include('components.navbar')

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
            class="text-base mb-8 leading-normal sm:text-lg sm:mb-9 md:text-xl md:mb-10 lg:text-2xl lg:leading-relaxed font-ttNorms text-white max-w-[42ch]">
            Through education, action, and storytelling, we empower
            communities to protect our seas.
        </p>

        <!-- Responsive CTA Button -->
        <button
            class="mt-2 px-6 py-2 text-sm sm:px-7 sm:py-2.5 sm:text-base md:px-8 md:py-3 md:text-lg bg-peachy-orange text-white rounded-full font-bold tracking-wider hover:bg-[#D96630] transition duration-200 font-ttNorms">
            Be The Change
        </button>
    </section>

    <!-- Impact Section with Side-by-Side Cards -->
    <section class="bg-white py-12 px-4 sm:py-16 md:py-20 lg:py-24 xl:py-28 rounded-bl-[50px] rounded-br-[50px]">
        <div class="max-w-6xl mx-auto flex flex-col lg:flex-row gap-6 lg:gap-8 items-stretch">
            <!-- Left Side - Title -->
            <div class="lg:w-1/3 flex items-center">
                <h2 class="text-3xl font-extrabold sm:text-4xl md:text-5xl tracking-wide font-calimate leading-tight">
                    <span class="text-blue">Tides of</span>
                    <span class="text-teal-blue">Impact.</span>
                </h2>
            </div>

            <!-- Right Side - Cards Slider -->
            <div class="lg:w-2/3 w-full relative">
                <!-- Custom Navigation Buttons -->
                {{-- <div class="hidden lg:flex justify-between absolute top-1/2 left-0 right-0 z-10 -translate-y-1/2 px-4">
                    <button
                        class="slick-prev-custom bg-white rounded-full w-10 h-10 flex items-center justify-center shadow-lg hover:bg-gray-100 transition">
                        <i class="fas fa-chevron-left text-gray-700"></i>
                    </button>
                    <button
                        class="slick-next-custom bg-white rounded-full w-10 h-10 flex items-center justify-center shadow-lg hover:bg-gray-100 transition">
                        <i class="fas fa-chevron-right text-gray-700"></i>
                    </button>
                </div> --}}
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
                                    educated on ocean
                                    literacy</p>
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
        <div class="max-w-6xl mx-auto" style="padding-top: 50px;">
            <!-- Section Header -->
            <div class="px-4 sm:px-6">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white mb-2 font-calimate">Protect.
                    Educate. Empower.</h1>
            </div>

            <!-- Two Column Layout -->
            <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 px-4 sm:px-6">
                <!-- Left Column - Text Content -->
                <div class="lg:w-1/3 flex-col justify-center gap-0">
                    <h2
                        class="whitespace-nowrap text-xl sm:text-2xl md:text-3xl font-bold text-teal-blue font-calimate mb-4">
                        Our Projects & Partnership
                    </h2>
                    <p class="text-white text-sm sm:text-base md:text-lg font-ttNorms leading-relaxed mt-4">
                        At Narasea, every wave carries a story, and every initiative is a step toward protecting our
                        marine heritage. Through collaborations with passionate organizations, we bring education,
                        sustainability, and community empowerment to life.
                    </p>
                </div>
                <!-- Right Column - Image Cards Slider -->
                <div class="lg:w-2/3 relative mt-6 lg:mt-0">
                    <!-- Navigation Buttons -->
                    <button
                        class="slick-prev-projects absolute left-0 top-1/2 -translate-y-1/2 z-10 bg-teal-blue text-white rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center hover:bg-[#014951] transition-all duration-200 -ml-4 sm:-ml-6">
                        <i class="fas fa-chevron-left text-sm sm:text-base"></i>
                    </button>

                    <button
                        class="slick-next-projects absolute right-0 top-1/2 -translate-y-1/2 z-10 bg-teal-blue text-white rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center hover:bg-[#014951] transition-all duration-200 -mr-4 sm:-mr-6">
                        <i class="fas fa-chevron-right text-sm sm:text-base"></i>
                    </button>

                    <!-- Slider Container -->
                    <div class="projects-slider">
                        <!-- Card 1 -->
                        <div class="px-2 h-full">
                            <div
                                class="flex flex-col h-full rounded-2xl overflow-hidden shadow-lg bg-golden-yellow group">
                                <div class="aspect-[4/3] overflow-hidden relative">
                                    <img src="assets/images/image-1.png" alt="Coral Triangle"
                                        class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                                </div>
                                <div class="p-4 lg:p-6 flex flex-col flex-grow">
                                    <h3
                                        class="text-black text-base sm:text-lg lg:text-xl font-bold font-calimate mb-2">
                                        Wonder of Coral Triangle
                                    </h3>
                                    <p class="text-black/80 text-xs sm:text-sm font-ttNorms flex-grow">
                                        A hero's journey into marine biodiversity conservation through education and
                                        awareness programs
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="px-2 h-full">
                            <div
                                class="flex flex-col h-full rounded-2xl overflow-hidden shadow-lg bg-raspberry-pink group">
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
                            <div class="flex flex-col h-full rounded-2xl overflow-hidden shadow-lg bg-blue group">
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
                            <div
                                class="flex flex-col h-full rounded-2xl overflow-hidden shadow-lg bg-peachy-orange group">
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
                            <div class="flex flex-col h-full rounded-2xl overflow-hidden shadow-lg bg-teal-blue group">
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
        class="relative bg-[url('/public/assets/images/francesco-ungaro_compressed.jpg')] bg-cover bg-center py-16 px-4 sm:py-20 md:py-24 lg:py-28 xl:py-32 -mt-[50px] z-10">

        <!-- Teal-blue overlay with opacity -->
        <div class="absolute inset-0 bg-teal-blue/70"></div>

        <div class="max-w-6xl mx-auto relative z-10">
            <!-- Heading 'Social' at the top -->
            <h2
                class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold tracking-wide font-calimate text-peachy-orange">
                Social
            </h2>

            <div class="flex flex-col lg:flex-row gap-6 lg:gap-8">
                <!-- Left Column - Text Content -->
                <div class="lg:w-2/5">
                    <!-- 'Currents.' part only -->
                    <h2
                        class="text-2xl font-bold sm:text-3xl md:text-4xl tracking-wide font-calimate mb-8 lg:text-left">
                        <span class="text-golden-yellow">Currents.</span>
                    </h2>
                    <p class="text-sm sm:text-base md:text-lg font-ttNorms text-white mb-2 max-w-md">
                        The ocean moves, and so do we! Stay connected with the latest stories, moments, and impact
                        straight from our Instagram.
                    </p>

                    <div class="mb-6">
                        <button
                            class="px-5 py-1.5 text-xs sm:text-sm md:text-base bg-peachy-orange text-white rounded-full font-bold tracking-wider hover:bg-[#D96630] transition duration-200 font-ttNorms">
                            Follow the Waves
                        </button>
                    </div>
                </div>

                <!-- Right Column - Instagram Photos (wider) -->
                <div class="lg:w-3/5">
                    <div class="relative h-full flex items-center">
                        <!-- Main Slider Container -->
                        <div class="w-full px-4 sm:px-8 relative">
                            <!-- Navigation Buttons -->
                            <button
                                class="slick-prev-instagram absolute left-2 sm:left-4 top-1/2 -translate-y-1/2 z-10 bg-teal-blue text-white rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center hover:bg-[#014951] transition">
                                <i class="fas fa-chevron-left text-sm sm:text-base"></i>
                            </button>

                            <button
                                class="slick-next-instagram absolute right-2 sm:right-4 top-1/2 -translate-y-1/2 z-10 bg-teal-blue text-white rounded-full w-8 h-8 sm:w-10 sm:h-10 flex items-center justify-center hover:bg-[#014951] transition">
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

    <!-- Top Grid Section -->
    <section class="relative bg-black">
        <div class="h-24 sm:h-32 md:h-40 w-full overflow-hidden">
            <img src="assets/images/grid-1.png" alt="Ocean grid pattern top"
                class="w-full h-full object-cover opacity-70">
        </div>
    </section>

    <!-- Main Contact Section -->
    <section class="relative bg-black py-16 px-4 sm:py-20 md:py-24 lg:py-28">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Title -->
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-6 font-calimate text-white">
                Sea Needs You. Get in Touch.
            </h2>

            <!-- Text -->
            <div class="max-w-xs sm:max-w-sm md:max-w-md mx-auto mb-8">
                <p class="text-white/80 text-base sm:text-lg md:text-xl font-ttNorms">
                    Every action counts in protecting our oceans.<br>
                    Whether you're looking to collaborate, support, or simply learn more, we'd love to connect!
                </p>
            </div>

            <!-- Enhanced Animated Button Container -->
            <div class="relative h-32 flex items-center justify-center">
                <!-- Main Button -->
                <button id="contact-main-btn"
                    class="absolute w-12 h-12 flex items-center justify-center bg-peachy-orange text-black rounded-full hover:bg-[#D96630] transition-all duration-300 z-10 focus:outline-none">
                    <i class="fas fa-comment-dots text-xl"></i>
                </button>

                <!-- WhatsApp Button -->
                <a href="https://wa.me/yournumber" target="_blank"
                    class="contact-sub-btn absolute bg-white text-black rounded-full w-10 h-10 flex items-center justify-center opacity-0 transform scale-50 transition-all duration-300 hover:scale-110 hover:shadow-lg">
                    <i class="fab fa-whatsapp"></i>
                </a>

                <!-- Email Button -->
                <a href="mailto:your@email.com"
                    class="contact-sub-btn absolute bg-white text-black rounded-full w-10 h-10 flex items-center justify-center opacity-0 transform scale-50 transition-all duration-300 hover:scale-110 hover:shadow-lg">
                    <i class="fas fa-envelope"></i>
                </a>

                <!-- Instagram Button -->
                <a href="https://instagram.com/yourprofile" target="_blank"
                    class="contact-sub-btn absolute bg-white text-black rounded-full w-10 h-10 flex items-center justify-center opacity-0 transform scale-50 transition-all duration-300 hover:scale-110 hover:shadow-lg">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Bottom Grid Section -->
    <section class="relative bg-black">
        <div class="h-24 sm:h-32 md:h-40 w-full overflow-hidden">
            <img src="assets/images/grid-2.png" alt="Ocean grid pattern bottom"
                class="w-full h-full object-cover opacity-70">
        </div>
    </section>

    <!-- Newsletter Section -->
    <section
        class="relative bg-[url('/public/assets/images/francesco-ungaro_compressed.jpg')] bg-cover bg-center py-12 px-4 sm:py-16 md:py-20">

        @include('components.subscribe')
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>

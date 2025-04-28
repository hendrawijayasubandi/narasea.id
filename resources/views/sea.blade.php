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

    <!-- Hero Section ml-[2rem] mr-[2rem] lg:flex-row -->
    <section
        class="relative flex flex-col items-start justify-center min-h-screen px-4 py-12 bg-black sm:px-8 sm:py-16 md:px-12 md:py-20 lg:py-28xl:px-32">
        <h1
            class="text-2xl font-bold tracking-wide text-white sm:text-3xl sm:mb-3 md:text-4xl lg:text-5xl font-calimate">
            The Narasea Story:
        </h1>
        <p class="text-lg leading-relaxed sm:text-md md:text-lg lg:text-xl font-ttNorms text-white max-w-[42ch]">
            Where People and Oceans Unite
        </p>
    </section>

    <!-- Section Who We Are -->
    <section class="px-4 py-12 bg-black sm:py-16 md:py-20 lg:py-24 xl:py-28">
        <div class="flex flex-col items-stretch ml-[2rem] mr-[2rem] gap-6 mx-auto lg:flex-row lg:gap-8">
            <!-- Left Side - Title -->
            <div class="flex items-center lg:w-2/4">
                <div>
                    <h2
                        class="text-3xl font-extrabold leading-tight tracking-wide sm:text-4xl md:text-5xl font-calimate">
                        <span class="text-white">Who We Are</span>
                    </h2>
                    <p class="mt-4 text-white text-md font-ttNorms">
                        Narasea (Yayasan Cerita Laut Nusantara) is more than an organization - it's a movement. We are
                        storytellers, conservationists, and educators working to connect people with the ocean. Through
                        education, action, and storytelling, we empower coastal communities and amplify their voices to
                        protect marine ecosystems.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Our Journey -->
    <section class="px-4 py-12 bg-black sm:py-16 md:py-20 lg:py-24 xl:py-28">
        <div class="flex flex-col items-stretch ml-[2rem] mr-[2rem] gap-6 mx-auto lg:flex-row-reverse lg:gap-8">
            <!-- Right Side - Content -->
            <div class="flex items-center lg:w-2/4">
                <div>
                    <h2
                        class="text-3xl font-extrabold leading-tight tracking-wide sm:text-4xl md:text-5xl font-calimate">
                        <span class="text-white">Our Journey</span>
                    </h2>
                    <p class="mt-4 text-white text-md font-ttNorms">
                        Founded in 2020, Narasea began as a small community of
                        passionate marine students celebrating World Ocean Day.
                        Narasea began with a mission to bridge the gap in ocean
                        awareness. What started as a grassroots movement soon
                        evolved into a platform for marine education, conservation,
                        and storytelling.
                    </p>
                    <br>
                    <p class="mt-4 text-white text-md font-ttNorms">
                        By 2025, we transformed into Yayasan Cerita Laut Nusantara,
                        strengthening our mission and expanding our impact. Today,
                        we continue to connect people with the ocean, amplifying
                        stories that inspire real change.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Our Mission -->
    <section class="relative bg-[url('/public/assets/images/fish-wave.png')] bg-cover bg-no-repeat bg-center z-40 bg-blue py-[200px] px-4 rounded-bl-[50px] rounded-br-[50px] -mt-[50px]"
        style="margin-top: -50px;">
        <div class="flex flex-col max-w-full gap-16 px-6 mx-auto md:flex-row">
            <!-- Text Area -->
            <div class="text-white md:w-1/2">
                <h2 class="text-5xl font-bold font-calimate md:text-6xl">Our Mission :</h2>
                <p class="mb-6 text-lg font-ttNorms md:text-lg">Echoing the Ocean’s Call.</p>
                <div class="space-y-4">
                    <p class="text-base leading-relaxed font-ttNorms md:text-lg">
                        We listen, we amplify, and we act — ensuring<br>
                        that every ripple of change grows into a wave of<br>
                        transformation for our oceans and coastal communities.
                    </p>
                </div>
            </div>

            <!-- Image Cards Area -->
            <div class="overflow-hidden md:w-1/2">
                <div class="flex items-end gap-8">
                    <img src="assets/images/Rectangle 2.png" alt="Ocean Mission 1"
                        class="w-[240px] h-[320px] object-cover rounded-3xl">
                    <img src="assets/images/Rectangle 2.png" alt="Ocean Mission 2"
                        class="w-[190px] h-[260px] object-cover rounded-3xl">
                    <img src="assets/images/Rectangle 2.png" alt="Ocean Mission 3"
                        class="w-[150px] h-[210px] object-cover rounded-3xl">
                </div>
            </div>
        </div>
    </section>

    <!-- Section The Values We Live -->
    <section class="relative z-30 bg-white py-[200px] px-4 rounded-bl-[50px] rounded-br-[50px] -mt-[50px]"
        style="margin-top: -50px;">

        <div class="flex flex-col items-stretch ml-[2rem] mr-[2rem] gap-6 mx-auto lg:flex-row lg:gap-8">
            <!-- Left Side - Title -->
            <div class="flex items-center lg:w-1/3">
                <div>
                    <h2
                        class="text-3xl font-extrabold leading-tight tracking-wide sm:text-4xl md:text-5xl font-calimate">
                        <span class="text-blue">The </span>
                        <span class="text-teal-blue">Values</span><br>
                        <span class="text-blue">We Live By :</span>
                    </h2>
                </div>
            </div>

            <!-- Right Side - Cards Slider -->
            <div class="w-full lg:w-2/3">
                <!-- Slider Container -->
                <div class="stats-slider">
                    <!-- Card 1 -->
                    <div class="h-full px-2 group">
                        <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30">
                                </div>
                            </div>
                            <div class="bg-teal-blue p-4 lg:p-6 rounded-b-2xl flex-grow flex relative h-[150px]">
                                <p class="text-white text-xl lg:text-2xl font-extrabold font-calimate min-h-[60px]">
                                    Connection.</p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
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
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30">
                                </div>
                            </div>
                            <div class="bg-peachy-orange p-4 lg:p-6 rounded-b-2xl flex-grow flex relative h-[150px]">
                                <p class="text-white text-xl lg:text-2xl font-extrabold font-calimate min-h-[60px]">
                                    Empowerment.</p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 flex items-center justify-center p-6 transition-transform duration-300 transform translate-y-full bg-peachy-orange bg-opacity-90 group-hover:translate-y-0">
                                <p class="text-sm text-center text-white lg:text-base font-ttNorms">
                                    Deskripsi lengkap tentang program edukasi literasi laut akan muncul di sini. Anda
                                    bisa menambahkan detail tentang program, manfaat, dan dampaknya.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="h-full px-2 group">
                        <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30">
                                </div>
                            </div>
                            <div class="bg-raspberry-pink p-4 lg:p-6 rounded-b-2xl flex-grow flex relative h-[150px]">
                                <p class="text-white text-xl lg:text-2xl font-extrabold font-calimate min-h-[60px]">
                                    Storytelling for
                                    Impact.</p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 flex items-center justify-center p-6 transition-transform duration-300 transform translate-y-full bg-raspberry-pink bg-opacity-90 group-hover:translate-y-0">
                                <p class="text-sm text-center text-white lg:text-base font-ttNorms">
                                    Deskripsi lengkap tentang program edukasi literasi laut akan muncul di sini. Anda
                                    bisa menambahkan detail tentang program, manfaat, dan dampaknya.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 4 -->
                    <div class="h-full px-2 group">
                        <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30">
                                </div>
                            </div>
                            <div class="bg-golden-yellow p-4 lg:p-6 rounded-b-2xl flex-grow flex relative h-[150px]">
                                <p class="text-white text-xl lg:text-2xl font-extrabold font-calimate min-h-[60px]">
                                    Sustainability.
                                </p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 flex items-center justify-center p-6 transition-transform duration-300 transform translate-y-full bg-golden-yellow bg-opacity-90 group-hover:translate-y-0">
                                <p class="text-sm text-center text-white lg:text-base font-ttNorms">
                                    Deskripsi lengkap tentang program edukasi literasi laut akan muncul di sini. Anda
                                    bisa menambahkan detail tentang program, manfaat, dan dampaknya.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Card 5 -->
                    <div class="h-full px-2 group">
                        <div class="relative flex flex-col h-full overflow-hidden rounded-2xl">
                            <!-- Gambar dan judul -->
                            <div class="aspect-[4/3] overflow-hidden rounded-t-2xl relative">
                                <img src="assets/images/image-1.png" alt="Education"
                                    class="object-cover w-full h-full transition-transform duration-300 group-hover:scale-110">
                                <div
                                    class="absolute inset-0 transition-all duration-300 bg-black bg-opacity-0 group-hover:bg-opacity-30">
                                </div>
                            </div>
                            <div class="bg-black p-4 lg:p-6 rounded-b-2xl flex-grow flex relative h-[150px]">
                                <p class="text-white text-xl lg:text-2xl font-extrabold font-calimate min-h-[60px]">
                                    Innovation.</p>
                            </div>

                            <!-- Deskripsi yang muncul saat hover -->
                            <div
                                class="absolute inset-0 flex items-center justify-center p-6 transition-transform duration-300 transform translate-y-full bg-black bg-opacity-90 group-hover:translate-y-0">
                                <p class="text-sm text-center text-white lg:text-base font-ttNorms">
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

    <!-- Section The Lighthouse Advisory and Ocean Trustees -->
    <section
        class="relative z-20 bg-teal-blue py-[200px] px-4 md:px-16 rounded-bl-[50px] rounded-br-[50px] -mt-[50px]">
        <div class="flex flex-col gap-16 mx-auto max-w-7xl md:flex-row">
            <!-- Text Area -->
            <div class="text-white md:w-1/2">
                <h3 class="mb-2 text-xl font-bold text-peachy-orange md:text-2xl font-calimate">Together for the Ocean
                </h3>
                <p class="mb-12 text-sm font-ttNorms md:text-base">
                    Every wave of change starts with passionate people.<br>
                    Meet the dedicated team behind Narasea.
                </p>
                <h2 class="text-3xl font-bold md:text-4xl font-calimate">
                    <span class="text-peachy-orange">The Lighthouse Advisory</span><br>
                    <span class="text-golden-yellow">and Ocean Trustees</span>
                </h2>
            </div>

            <!-- Cards Area -->
            <div class="flex items-end gap-6 overflow-x-auto md:w-1/2"
                style="scrollbar-width: none; -ms-overflow-style: none;">
                <!-- Card 1 -->
                <div class="w-[240px] h-[320px] px-2 flex-shrink-0">
                    <div class="flex flex-col h-full overflow-hidden bg-black shadow-lg rounded-2xl group">
                        <div class="aspect-[4/3] overflow-hidden relative">
                            <img src="assets/images/image-1.png" alt="Wiro Nur Wirandi"
                                class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="flex flex-col flex-grow p-4 lg:p-6">
                            <h3 class="mb-1 text-base font-bold text-white sm:text-lg font-calimate">
                                Wiro Nur Wirandi
                            </h3>
                            <p class="text-xs text-white/80 font-ttNorms">
                                Chairman of Trustee
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="w-[190px] h-[260px] px-2 flex-shrink-0">
                    <div class="flex flex-col h-full overflow-hidden shadow-lg rounded-2xl bg-navy group">
                        <div class="aspect-[4/3] overflow-hidden relative">
                            <img src="assets/images/image-1.png" alt="Ahmad Baihaqi"
                                class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="flex flex-col flex-grow p-4 lg:p-6">
                            <h3 class="mb-1 text-base font-bold text-white sm:text-lg font-calimate">
                                Ahmad Baihaqi
                            </h3>
                            <p class="text-xs text-white/80 font-ttNorms">
                                Advisor Member of Trustee
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="w-[150px] h-[210px] px-2 flex-shrink-0">
                    <div class="flex flex-col h-full overflow-hidden shadow-lg rounded-2xl bg-golden-yellow group">
                        <div class="aspect-[4/3] overflow-hidden relative">
                            <img src="assets/images/image-1.png" alt="Dr. Tries Budi"
                                class="object-cover w-full h-full transition-transform duration-500 group-hover:scale-105">
                        </div>
                        <div class="flex flex-col flex-grow p-4 lg:p-6">
                            <h3 class="mb-1 text-base font-bold text-black sm:text-lg font-calimate">
                                Dr. Tries Budi
                            </h3>
                            <p class="text-xs text-black/80 font-ttNorms">
                                Supervisor of Trustee
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section The Ocean’s Story is Still Being Written – Be Part of It -->
    <section class="relative bg-[url('/public/assets/images/coral.png')] bg-cover bg-no-repeat bg-bottom z-10 bg-teal-blue py-12 px-4 sm:py-16 md:py-20 -mt-[50px]">
        <div class="mx-auto text-center" style="margin-top: 50px;">
            <h2 class="mb-6 text-3xl font-bold text-white sm:text-4xl md:text-5xl font-calimate">
                The Ocean's Story is Still Being Written - Be Part of It
            </h2>

            <p class="max-w-3xl mx-auto mb-8 text-lg text-white font-ttNorms sm:text-xl">
                Every ripple starts with a single drop. At Narasea,<br>
                we believe that education, action, and storytelling can create<br>
                waves of change for our oceans. Together, we can protect marine ecosystems,<br>
                uplift coastal communities, and amplify the voices of the sea.
            </p>
        </div>

        <!-- Buttons Wrapper as 2-column grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-10 w-full max-w-[700px] mx-auto"
            style="margin-top: 100px;">
            <!-- Button 1 -->
            <div class="flex justify-start">
                <a href="#"
                    class="group relative flex items-center justify-center bg-peachy-orange text-white font-semibold font-calimate rounded-full overflow-hidden h-12 w-12 hover:w-[260px] transition-[width] duration-300 ease-in-out">
                    <span
                        class="absolute flex items-center gap-2 text-sm transition-opacity duration-300 ease-in-out opacity-0 left-5 whitespace-nowrap group-hover:opacity-100 group-hover:text-black">
                        Learn More About Our Work
                        <i class="text-sm fas fa-arrow-right"></i>
                    </span>
                    <span class="transition-opacity duration-300 ease-in-out group-hover:opacity-0">
                        <i class="text-sm fas fa-arrow-right"></i>
                    </span>
                </a>
            </div>

            <!-- Button 2 -->
            <div class="flex justify-start md:pl-[150px]">
                <a href="#"
                    class="group relative flex items-center justify-center bg-peachy-orange text-white font-calimate font-semibold rounded-full overflow-hidden h-12 w-12 hover:w-[200px] transition-[width] duration-300 ease-in-out pl-4 pr-4">
                    <span
                        class="absolute flex items-center gap-2 text-sm transition-opacity duration-300 ease-in-out opacity-0 left-4 whitespace-nowrap group-hover:opacity-100 group-hover:text-black">
                        Join the Movement
                        <i class="text-sm fas fa-arrow-right"></i>
                    </span>
                    <span class="transition-opacity duration-300 ease-in-out group-hover:opacity-0">
                        <i class="text-sm fas fa-arrow-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/text-transition.js') }}" defer></script>
</body>

</html>

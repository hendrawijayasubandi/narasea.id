<!doctype html>
<html>

<head>
    <!-- Meta Tag Umum -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Narasea Indonesia - Platform Edukasi & Advokasi Konservasi Laut</title>

    <!-- Meta SEO -->
    <meta name="description" content="Bercerita, Beraksi & Advokasi untuk Konservasi Laut Indonesia.">
    <meta name="keywords"
        content="Narasea Indonesia, konservasi laut, edukasi lingkungan, advokasi laut, aksi nyata, lingkungan, laut Indonesia">
    <meta name="author" content="Narasea Indonesia Team">
    <meta name="robots" content="index, follow">

    <!-- Meta Open Graph (untuk Facebook, LinkedIn, dll.) -->
    <meta property="og:title" content="Narasea Indonesia - Bersuara untuk Laut, Bergerak untuk Perubahan!">
    <meta property="og:description"
        content="Edukasi, Advokasi, dan Aksi Nyata untuk konservasi laut Indonesia. Bergabunglah bersama kami dalam menjaga kelestarian laut.">
    <meta property="og:image" content="https://narasea.id/assets/images/Narasea%20Logo%20Official.png">
    <meta property="og:url" content="https://narasea.id">
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
    <div class="loader"></div>
    <!-- Navbar -->
    @include('components.navbar')

    <!-- Combined Section: Hero + Who We Are + Our Journey -->
    <section
        class="relative flex flex-col items-start justify-start min-h-screen gap-60 py-40 bg-[url('/public/assets/images/bg-diver.jpg')] bg-cover bg-center">
        <!-- Hero Content -->
        <div class="flex flex-col ml-[2rem] mr-[2rem] py-52">
            <h1
                class="text-2xl font-bold tracking-wide text-white sm:text-3xl sm:mb-3 md:text-4xl lg:text-5xl font-calimate">
                The Narasea Story:
            </h1>
            <p class="text-lg leading-relaxed sm:text-md md:text-lg lg:text-xl font-ttNorms text-white max-w-[42ch]">
                Where People and Oceans Unite
            </p>
        </div>

        <!-- Who We Are -->
        <div id="who-we-are" class="flex flex-col items-stretch ml-[2rem] mr-[2rem] gap-6 mx-auto lg:flex-row lg:gap-8">
            <div class="flex items-center lg:w-2/4">
                <div>
                    <h2
                        class="text-3xl font-extrabold leading-tight tracking-wide text-white sm:text-4xl md:text-5xl font-calimate">
                        Who We Are
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

        <!-- Our Journey -->
        <div id="our-journey"
            class="flex flex-col items-stretch ml-[2rem] mr-[2rem] gap-6 mx-auto lg:flex-row-reverse lg:gap-8">
            <div class="flex items-center lg:w-2/4">
                <div>
                    <h2
                        class="text-3xl font-extrabold leading-tight tracking-wide text-white sm:text-4xl md:text-5xl font-calimate">
                        Our Journey
                    </h2>
                    <p class="mt-4 text-white text-md font-ttNorms">
                        Founded in 2020, Narasea began as a small community of passionate marine students celebrating
                        World Ocean Day. Narasea began with a mission to bridge the gap in ocean awareness. What started
                        as a grassroots movement soon evolved into a platform for marine education, conservation, and
                        storytelling.
                    </p>
                    <br>
                    <p class="mt-4 text-white text-md font-ttNorms">
                        By 2025, we transformed into Yayasan Cerita Laut Nusantara, strengthening our mission and
                        expanding our impact. Today, we continue to connect people with the ocean, amplifying stories
                        that inspire real change.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Our Mission -->
    <section id="our-vision-mission-approach"
        class="relative bg-[url('/public/assets/images/fish-wave.png')] bg-cover bg-no-repeat bg-center z-40 bg-blue py-[100px] px-4 rounded-bl-[50px] rounded-br-[50px] -mt-[50px] overflow-hidden">
        <div class="px-4 md:px-0 md:ml-[2rem] md:mr-[2rem]">
            <div class="w-full slick-slider-container">
                <!-- Our Mission -->
                <div class="flex flex-col items-start w-full gap-10 py-10 slick-slide md:flex-row">
                    <div class="text-white md:w-1/2">
                        <h2 class="text-5xl font-bold font-calimate md:text-6xl">Our Mission :</h2>
                        <p class="mb-20 text-lg font-ttNorms md:text-lg">Echoing the Ocean's Call.</p>
                        <p class="text-base leading-relaxed text-justify font-ttNorms md:text-lg">
                            We listen, we amplify, and we act — ensuring<br>
                            that every ripple of change grows into a wave of<br>
                            transformation for our oceans and coastal communities.
                        </p>
                    </div>
                    <div class="relative flex justify-center md:w-1/2">
                        <img src="{{ asset('assets/images/mission.png') }}" alt="Our Mission"
                            class="w-full max-w-[600px] h-auto object-cover rounded-3xl">
                    </div>
                </div>

                <!-- Our Vision -->
                <div class="flex flex-col items-start w-full gap-10 py-10 slick-slide md:flex-row">
                    <div class="text-white md:w-1/2">
                        <h2 class="text-5xl font-bold font-calimate md:text-6xl">Our Vision :</h2>
                        <p class="mb-20 text-lg font-ttNorms md:text-lg">A Thriving Future, Above and Below.</p>
                        <p class="text-base leading-relaxed text-justify font-ttNorms md:text-lg">
                            We dream of a world where people and marine life coexist<br>
                            in harmony, powered by knowledge, sustainability, and the<br>
                            timeless art of storytelling.
                        </p>
                    </div>
                    <div class="relative flex justify-center md:w-1/2">
                        <img src="{{ asset('assets/images/vision.png') }}" alt="Our Vision"
                            class="w-full max-w-[600px] h-auto object-cover rounded-3xl">
                    </div>
                </div>

                <!-- Our Approach -->
                <div class="flex flex-col items-start w-full gap-10 py-10 slick-slide md:flex-row">
                    <div class="text-white md:w-1/2">
                        <h2 class="text-5xl font-bold font-calimate md:text-6xl">Our Approach :</h2>
                        <p class="mb-20 text-lg font-ttNorms md:text-lg">Turning Ideas into Impact.</p>
                        <p class="text-base leading-relaxed text-justify font-ttNorms md:text-lg">
                            We don't just talk about conservation—we make it happen.<br>
                            Through education, real-world action, powerful storytelling,<br>
                            and innovative solutions, we bring the ocean's stories to life.
                        </p>
                    </div>
                    <div class="relative flex justify-center md:w-1/2">
                        <img src="{{ asset('assets/images/our-approach 1.png') }}" alt="Our Approach"
                            class="w-full max-w-[600px] h-auto object-cover rounded-3xl">
                    </div>
                </div>
            </div>
            <div class="slick-custom-nav flex justify-center gap-4 mt-4">
                <button id="prevSlide"
                    class="w-12 h-12 flex items-center justify-center text-white bg-teal-blue hover:bg-teal-blue-hover rounded-full shadow transition duration-200">
                    <i class="fas fa-chevron-left text-xl"></i>
                </button>
                <button id="nextSlide"
                    class="w-12 h-12 flex items-center justify-center text-white bg-teal-blue hover:bg-teal-blue-hover rounded-full shadow transition duration-200">
                    <i class="fas fa-chevron-right text-xl"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Section The Values We Live -->
    <section id="the-values-we-live-by"
        class="relative z-30 bg-white py-[100px] px-4 rounded-bl-[50px] rounded-br-[50px] -mt-[50px]"
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
                <!-- Slider Container Wrapper (relative positioning) -->
                <div class="relative">
                    <!-- Custom Navigation Buttons -->
                    <div
                        class="absolute left-0 right-0 z-10 justify-between hidden px-4 -translate-y-1/2 lg:flex top-1/2">
                        <button
                            class="flex items-center justify-center w-10 h-10 transition bg-white rounded-full shadow-lg slick-prev-values hover:bg-gray-100">
                            <i class="text-gray-700 fas fa-chevron-left"></i>
                        </button>
                        <button
                            class="flex items-center justify-center w-10 h-10 transition bg-white rounded-full shadow-lg slick-next-values hover:bg-gray-100">
                            <i class="text-gray-700 fas fa-chevron-right"></i>
                        </button>
                    </div>
                    <!-- Slider Container -->
                    <div class="flex flex-wrap -mx-2 values-slider">
                        <!-- Card -->
                        <div class="w-full px-2 mb-4 md:w-1/2 lg:w-1/3">
                            <div class="bg-teal-blue p-6 rounded-[3rem] flex flex-col justify-center h-full min-h-[300px]"
                                style="height: 400px;">
                                <p class="text-xl font-extrabold text-left text-white lg:text-2xl font-calimate">
                                    Connection.</p>
                                <p class="mt-2 text-left text-white text-md lg:text-md font-ttNorms">
                                    Bridging people and the ocean through education, action, and storytelling.
                                </p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="w-full px-2 mb-4 md:w-1/2 lg:w-1/3">
                            <div class="bg-peachy-orange p-6 rounded-[3rem] flex flex-col justify-center h-full min-h-[300px]"
                                style="height: 400px;">
                                <p class="text-xl font-extrabold text-left text-white lg:text-2xl font-calimate">
                                    Empowerment.</p>
                                <p class="mt-2 text-left text-white text-md lg:text-md font-ttNorms">
                                    Giving communities, youth,and change- makers the tools to protect marine ecosystems.
                                </p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="w-full px-2 mb-4 md:w-1/2 lg:w-1/3">
                            <div class="bg-raspberry-pink p-6 rounded-[3rem] flex flex-col justify-center h-full min-h-[300px]"
                                style="height: 400px;">
                                <p class="text-xl font-extrabold text-left text-wine-red lg:text-2xl font-calimate">
                                    Storytelling for Impact.</p>
                                <p class="mt-2 text-left text-md text-wine-red lg:text-md font-ttNorms">
                                    Using media & advocacy to amplify unheard voices and drive change.
                                </p>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="w-full px-2 mb-4 md:w-1/2 lg:w-1/3">
                            <div class="bg-golden-yellow p-6 rounded-[3rem] flex flex-col justify-center h-full min-h-[300px]"
                                style="height: 400px;">
                                <p class="text-xl font-extrabold text-left text-bronze lg:text-2xl font-calimate">
                                    Sustainability.</p>
                                <p class="mt-2 text-left text-md text-bronze lg:text-md font-ttNorms">
                                    Creating long-term, community-driven solutions for ocean conservation.
                                </p>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="w-full px-2 mb-4 md:w-1/2 lg:w-1/3">
                            <div class="bg-black p-6 rounded-[3rem] flex flex-col justify-center h-full min-h-[300px]"
                                style="height: 400px;">
                                <p class="text-xl font-extrabold text-left text-white lg:text-2xl font-calimate">
                                    Innovation.</p>
                                <p class="mt-2 text-left text-white text-md lg:text-md font-ttNorms">
                                    Combining science, local wisdom, and technology to build a better future.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section The Lighthouse Advisory and Ocean Trustees -->
    <section id="together-for-the-ocean"
        class="relative z-20 bg-teal-blue py-[100px] rounded-bl-[50px] rounded-br-[50px] -mt-[50px]">
        <div class="flex flex-col items-center mx-auto space-y-12 text-center max-w-7xl">
            <!-- Heading -->
            <h2
                class="text-white text-[36px] md:text-[48px] font-calimate font-bold leading-tight max-w-[800px] bg-raspberry-pink px-20 py-4 rounded-[20px] rotate-[-1.62deg]">
                Together for the Ocean
            </h2>

            <!-- Paragraph -->
            <p class="text-white text-base font-ttNorms leading-relaxed max-w-[700px] bg-blue px-16 py-2 rounded-[20px] rotate-[1.93deg]"
                style="margin-top: -5px; margin-left: 100px;">
                Every wave of change starts with passionate people. <br>
                Meet the dedicated team behind Narasea:
            </p>
        </div>

        <!-- The Lighthouse Advisory -->
        <div class="py-20 space-y-12 ml-[2rem] mr-[2rem]">
            <!-- Kolom 1: Heading & Paragraf -->
            <div class="space-y-1 text-left">
                <h2 class="text-4xl font-bold text-white md:text-5xl font-calimate">The Lighthouse Advisory</h3>
                    <p class="mx-auto text-base text-white font-ttNorms">
                        Our guiding lighthouse, ensuring we stay on course.
                    </p>
            </div>

            <!-- Kolom 2: 3 Card -->
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 -->
                <div class="relative">
                    <div class="absolute inset-0 bg-[#D9D9D9] z-0 rounded-3xl shadow-md"></div>
                    <img src="{{ asset('assets/images/wiro.png') }}" alt="Wiro"
                        class="absolute top-[-40px] h-[242px] right-0 object-contain object-right z-10">
                    <!-- Teks -->
                    <div class="flex flex-col h-full pt-[150px] relative z-20 rounded-3xl overflow-hidden">
                        <div class="px-5 text-left">
                            <h4 class="text-xl font-bold text-teal-700">Wiro Nur Wirandi</h4>
                            <h5 class="italic text-teal-500 text-md">Chairman of Trustee</h5>
                        </div>
                        <div class="flex-grow p-5 pt-3 text-left bg-black rounded-b-3xl">
                            <p class="text-sm text-white">
                                Wiro is a marine and fisheries expert with over 15 years of experience, currently
                                leading
                                sustainable sourcing
                                and ecotourism initiatives at NCI to advance ecosystem preservation and community
                                empowerment.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative">
                    <div class="absolute inset-0 bg-[#D9D9D9] z-0 rounded-3xl shadow-md"></div>
                    <img src="{{ asset('assets/images/ahmad.png') }}" alt="Ahmad"
                        class="absolute top-[-40px] h-[242px] right-0 object-contain object-right z-10">
                    <!-- Teks -->
                    <div class="flex flex-col h-full pt-[150px] relative z-20 rounded-3xl overflow-hidden">
                        <div class="px-5 text-left">
                            <h4 class="text-xl font-bold text-teal-700">Ahmad Baihaqi</h4>
                            <h5 class="italic text-teal-500 text-md">Advisor Member of Trustee</h5>
                        </div>
                        <div class="flex-grow p-5 pt-3 text-left bg-black rounded-b-3xl">
                            <p class="text-sm text-white">
                                Aki is an impact investment and sustainable finance expert with 20+ years of global
                                experience, currently leading reef-positive initiatives at YKAN to advance blue economy
                                solutions and empower coastal communities.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative">
                    <div class="absolute inset-0 bg-[#D9D9D9] z-0 rounded-3xl shadow-md"></div>
                    <img src="{{ asset('assets/images/tries.png') }}" alt="Tries"
                        class="absolute top-[-40px] h-[242px] right-0 object-contain object-right z-10">
                    <!-- Teks -->
                    <div class="flex flex-col h-full pt-[150px] relative z-20 rounded-3xl overflow-hidden">
                        <div class="px-5 text-left">
                            <h4 class="text-xl font-bold text-teal-700">Dr. Tries Blandine Razak</h4>
                            <h5 class="italic text-teal-500 text-md">Supervisor of the Foundation</h5>
                        </div>
                        <div class="flex-grow p-5 pt-3 text-left bg-black rounded-b-3xl">
                            <p class="text-sm text-white">
                                Dr. Tries Razak is a global expert in coral reef conservation with decades of research
                                across Indonesia, holding a PhD from the University of Queensland and a distinguished
                                academic background in marine science.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- The Lighthouse Keepers -->
        <div class="py-20 space-y-12 ml-[2rem] mr-[2rem]">
            <!-- Kolom 1: Heading & Paragraf -->
            <div class="space-y-1 text-left">
                <h2 class="text-4xl font-bold text-white md:text-5xl font-calimate">The Lighthouse Keepers</h2>
                <p class="mx-auto text-base text-white font-ttNorms">
                    Our guiding lighthouse, ensuring we stay on course.
                </p>
            </div>

            <!-- Kolom 2: 4 Card Swiper -->
            {{-- <div class="relative overflow-visible">
                <div class="overflow-visible swiper myTheLighthouseKeepers">
                    <div class="swiper-wrapper">
                        <!-- Card 1 -->
                        <div class="swiper-slide">
                            <div class="relative flex flex-col h-full">
                                <div class="absolute inset-0 bg-[#D9D9D9] z-0 rounded-3xl shadow-md"></div>
                                <img src="{{ asset('assets/images/bryan.png') }}" alt="Bryan"
                                    class="absolute top-[-40px] h-[242px] right-0 object-contain object-right z-10">
                                <!-- Teks -->
                                <div class="flex flex-col h-full pt-[150px] relative z-20 rounded-3xl overflow-hidden">
                                    <div class="px-5 text-left text-blue">
                                        <h4 class="text-xl font-bold text-teal-700">Bryan Auriol</h4>
                                        <h5 class="italic text-teal-500 text-md">Founder & Managing Director</h5>
                                    </div>
                                    <div class="flex-grow p-5 pt-3 text-left bg-blue rounded-b-3xl">
                                        <p class="text-sm text-white">
                                            Bryan is the Founder and Managing Director of Narasea, combining marine
                                            science and
                                            storytelling to lead impactful ocean conservation efforts, while also
                                            managing projects that
                                            connect science, policy, and community voices across Indonesia.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="swiper-slide">
                            <div class="relative flex flex-col h-full">
                                <div class="absolute inset-0 bg-[#D9D9D9] z-0 rounded-3xl shadow-md"></div>
                                <img src="{{ asset('assets/images/acep.png') }}" alt="Acep"
                                    class="absolute top-[-40px] h-[242px] right-0 object-contain object-right z-10">
                                <!-- Teks -->
                                <div class="flex flex-col h-full pt-[150px] relative z-20 rounded-3xl overflow-hidden">
                                    <div class="px-5 text-left text-blue">
                                        <h4 class="text-xl font-bold text-teal-700">Acep Jaelani</h4>
                                        <h5 class="italic text-teal-500 text-md">Founder and Deputy Director</h5>
                                    </div>
                                    <div class="flex-grow p-5 pt-3 text-left bg-blue rounded-b-3xl">
                                        <p class="text-sm text-white">
                                            Acep is a young ocean advocate and storyteller whose work in seagrass
                                            restoration,
                                            eco-tourism, and youth empowerment is amplified through his published books
                                            and passion for
                                            marine conservation.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="swiper-slide">
                            <div class="relative flex flex-col h-full">
                                <div class="absolute inset-0 bg-[#D9D9D9] z-0 rounded-3xl shadow-md"></div>
                                <img src="{{ asset('assets/images/aini.png') }}" alt="Aini"
                                    class="absolute top-[-40px] h-[242px] right-0 object-contain object-right z-10">
                                <!-- Teks -->
                                <div class="flex flex-col h-full pt-[150px] relative z-20 rounded-3xl overflow-hidden">
                                    <div class="px-5 text-left text-blue">
                                        <h4 class="text-xl font-bold text-teal-700">Aini Mutia</h4>
                                        <h5 class="italic text-teal-500 text-md">Founder & Secretary</h5>
                                    </div>
                                    <div class="flex-grow p-5 pt-3 text-left bg-blue rounded-b-3xl">
                                        <p class="text-sm text-white">
                                            Aini is the Founder of Narasea and a strategic communicator who amplifies
                                            grassroots voices
                                            and drives sustainable impact through storytelling, public relations, and
                                            inclusive
                                            development initiatives.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="swiper-slide">
                            <div class="relative flex flex-col h-full">
                                <div class="absolute inset-0 bg-[#D9D9D9] z-0 rounded-3xl shadow-md"></div>
                                <img src="{{ asset('assets/images/alfina.png') }}" alt="Alfina"
                                    class="absolute top-[-40px] h-[242px] right-0 object-contain object-right z-10">
                                <!-- Teks -->
                                <div class="flex flex-col h-full pt-[150px] relative z-20 rounded-3xl overflow-hidden">
                                    <div class="px-5 text-left text-blue">
                                        <h4 class="text-xl font-bold text-teal-700">Alfinna Yebelanti</h4>
                                        <h5 class="italic text-teal-500 text-md">Founder & Treasury</h5>
                                    </div>
                                    <div class="flex-grow p-5 pt-3 text-left bg-blue rounded-b-3xl">
                                        <p class="text-sm text-white">
                                            Yebe is a strategic communicator and partnership builder who connects
                                            academia, industry,
                                            and global organizations to advance blue economy initiatives and empower
                                            communities through
                                            collaboration.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tombol Navigasi -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div> --}}

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <!-- Card 1 -->
                <div class="relative">
                    <div class="absolute inset-0 bg-[#D9D9D9] z-0 rounded-3xl shadow-md"></div>
                    <img src="{{ asset('assets/images/bryan.png') }}" alt="Bryan"
                        class="absolute top-[-40px] h-[242px] right-0 object-contain object-right z-10">
                    <!-- Teks -->
                    <div class="flex flex-col h-full pt-[150px] relative z-20 rounded-3xl overflow-hidden">
                        <div class="px-5 text-left text-blue">
                            <h4 class="text-xl font-bold text-teal-700">Bryan Auriol</h4>
                            <h5 class="italic text-teal-500 text-md">Founder & Managing Director</h5>
                        </div>
                        <div class="flex-grow p-5 pt-3 text-left bg-blue rounded-b-3xl">
                            <p class="text-sm text-white">
                                Bryan is the Founder and Managing Director of Narasea, combining marine
                                science and
                                storytelling to lead impactful ocean conservation efforts, while also
                                managing projects that
                                connect science, policy, and community voices across Indonesia.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative">
                    <div class="absolute inset-0 bg-[#D9D9D9] z-0 rounded-3xl shadow-md"></div>
                    <img src="{{ asset('assets/images/acep.png') }}" alt="Acep"
                        class="absolute top-[-40px] h-[242px] right-0 object-contain object-right z-10">
                    <!-- Teks -->
                    <div class="flex flex-col h-full pt-[150px] relative z-20 rounded-3xl overflow-hidden">
                        <div class="px-5 text-left text-blue">
                            <h4 class="text-xl font-bold text-teal-700">Acep Jaelani</h4>
                            <h5 class="italic text-teal-500 text-md">Founder and Deputy Director</h5>
                        </div>
                        <div class="flex-grow p-5 pt-3 text-left bg-blue rounded-b-3xl">
                            <p class="text-sm text-white">
                                Acep is a young ocean advocate and storyteller whose work in seagrass
                                restoration, eco-tourism, and youth empowerment is amplified through his published books
                                and passion for marine conservation.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative">
                    <div class="absolute inset-0 bg-[#D9D9D9] z-0 rounded-3xl shadow-md"></div>
                    <img src="{{ asset('assets/images/aini.png') }}" alt="Aini"
                        class="absolute top-[-40px] h-[242px] right-0 object-contain object-right z-10">
                    <!-- Teks -->
                    <div class="flex flex-col h-full pt-[150px] relative z-20 rounded-3xl overflow-hidden">
                        <div class="px-5 text-left text-blue">
                            <h4 class="text-xl font-bold text-teal-700">Aini Mutia</h4>
                            <h5 class="italic text-teal-500 text-md">Founder & Secretary</h5>
                        </div>
                        <div class="flex-grow p-5 pt-3 text-left bg-blue rounded-b-3xl">
                            <p class="text-sm text-white">
                                Aini is the Founder of Narasea and a strategic communicator who amplifies
                                grassroots voices and drives sustainable impact through storytelling, public relations, and
                                inclusive development initiatives.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="relative">
                    <div class="absolute inset-0 bg-[#D9D9D9] z-0 rounded-3xl shadow-md"></div>
                    <img src="{{ asset('assets/images/alfina.png') }}" alt="Alfina"
                        class="absolute top-[-40px] h-[242px] right-0 object-contain object-right z-10">
                    <!-- Teks -->
                    <div class="flex flex-col h-full pt-[150px] relative z-20 rounded-3xl overflow-hidden">
                        <div class="px-5 text-left text-blue">
                            <h4 class="text-xl font-bold text-teal-700">Alfinna Yebelanti</h4>
                            <h5 class="italic text-teal-500 text-md">Founder & Treasury</h5>
                        </div>
                        <div class="flex-grow p-5 pt-3 text-left bg-blue rounded-b-3xl">
                            <p class="text-sm text-white">
                                Yebe is a strategic communicator and partnership builder who connects
                                academia, industry, and global organizations to advance blue economy initiatives and empower
                                communities through collaboration.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- The Current Crew -->
        <div class="py-20 space-y-12 ml-[2rem] mr-[2rem]">
            <!-- Kolom 1: Heading & Paragraf -->
            <div class="space-y-1 text-left">
                <h2 class="text-4xl font-bold text-white md:text-5xl font-calimate">The Current Crew</h3>
                    <p class="mx-auto text-base text-white font-ttNorms">
                        Like the ocean’s currents, we flow with purpose—driving action, research, and storytelling to
                        protect our seas.
                    </p>
            </div>

            <!-- Kolom 2: 3 Card -->
            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 -->
                <div class="relative">
                    <div class="absolute inset-0 bg-[#D9D9D9] z-0 rounded-3xl shadow-md"></div>
                    <img src="{{ asset('assets/images/hidayat.png') }}" alt="Hidayat"
                        class="absolute top-[-40px] h-[242px] right-0 object-contain object-right z-10">
                    <!-- Teks -->
                    <div class="flex flex-col h-full pt-[150px] relative z-20 rounded-3xl overflow-hidden">
                        <div class="px-5 text-left text-raspberry-pink">
                            <h4 class="text-xl font-bold text-teal-700">Muchammad Hidayat</h4>
                            <h5 class="italic text-teal-500 text-md">Creative Campaign Strategist</h5>
                        </div>
                        <div class="flex-grow p-5 pt-3 text-left bg-raspberry-pink rounded-b-3xl">
                            <p class="text-sm text-white">
                                Ka Dayat is the Creative Campaign Strategist at Narasea, using design, storytelling, and
                                visual strategy to turn ocean conservation messages into impactful movements that engage
                                and
                                inspire communities.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="relative">
                    <div class="absolute inset-0 bg-[#D9D9D9] z-0 rounded-3xl shadow-md"></div>
                    <img src="{{ asset('assets/images/rindah.png') }}" alt="Rindah"
                        class="absolute top-[-40px] h-[242px] right-0 object-contain object-right z-10">
                    <!-- Teks -->
                    <div class="flex flex-col h-full pt-[150px] relative z-20 rounded-3xl overflow-hidden">
                        <div class="px-5 text-left text-raspberry-pink">
                            <h4 class="text-xl font-bold text-teal-700">Rindah Talitha Vida</h4>
                            <h5 class="italic text-teal-500 text-md">Associate Marine Researcher</h5>
                        </div>
                        <div class="flex-grow p-5 pt-3 text-left bg-raspberry-pink rounded-b-3xl">
                            <p class="text-sm text-white">
                                Rindah is a marine researcher focused on coral reef restoration, specializing in
                                underwater
                                photogrammetry and 3D reef modeling to support innovative marine conservation efforts.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="relative">
                    <div class="absolute inset-0 bg-[#D9D9D9] z-0 rounded-3xl shadow-md"></div>
                    <img src="{{ asset('assets/images/ramdan.png') }}" alt="Ramdan"
                        class="absolute top-[-40px] h-[242px] right-0 object-contain object-right z-10">
                    <!-- Teks -->
                    <div class="flex flex-col h-full pt-[150px] relative z-20 rounded-3xl overflow-hidden">
                        <div class="px-5 text-left text-raspberry-pink">
                            <h4 class="text-xl font-bold text-teal-700">Ramdan Pahlevi</h4>
                            <h5 class="italic text-teal-500 text-md">Assistant Project Coordinator</h5>
                        </div>
                        <div class="flex-grow p-5 pt-3 text-left bg-raspberry-pink rounded-b-3xl">
                            <p class="text-sm text-white">
                                Ramdan is actively contributing to initiatives that protect marine ecosystems and
                                empower
                                coastal communities, and brings fresh perspectives and eagerness to learn and inspire
                                change
                                through collaboration as part of Narasea.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section The Ocean’s Story is Still Being Written – Be Part of It -->
    <section
        class="relative bg-[url('/public/assets/images/coral.png')] bg-cover bg-no-repeat bg-bottom z-10 bg-teal-blue py-12 px-4 sm:py-16 md:py-20 -mt-[50px]">
        <div class="mx-auto text-center" style="margin-top: 50px;">
            <h2 class="mb-6 text-3xl font-bold text-white sm:text-3xl md:text-4xl font-calimate">
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
                <a href="/"
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
                <a href="{{ route('share') }}"
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

    <!-- Component Copyright -->
    <div class="text-white bg-teal-blue">
        @include('components.copyright')
    </div>

    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/our.js') }}"></script>
    <script src="{{ asset('assets/js/keepers.js') }}"></script>
</body>

</html>

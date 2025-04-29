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
    <section x-data="missionSwitcher()" x-init="start()"
        class="relative bg-[url('/public/assets/images/fish-wave.png')] bg-cover bg-no-repeat bg-center z-40 bg-blue py-[200px] px-4 rounded-bl-[50px] rounded-br-[50px] -mt-[50px]">
        <div class="flex flex-col max-w-full px-6 mx-auto md:flex-row">
            <!-- Text Area -->
            <div class="text-white md:w-1/2 relative min-h-[300px]">
                <template x-for="(item, idx) in items" :key="idx">
                    <div x-show="index === idx" x-transition:enter="transition ease-out duration-1000"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-1000" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0" class="absolute top-0 left-0 w-full">
                        <h2 class="text-5xl font-bold font-calimate md:text-6xl" x-text="item.title"></h2>
                        <p class="mb-6 text-lg font-ttNorms md:text-lg" x-text="item.subtitle"></p>
                        <div class="space-y-4">
                            <p class="text-base leading-relaxed font-ttNorms md:text-lg text-justify"
                                x-html="item.description"></p>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Image Area -->
            <div class="overflow-hidden md:w-1/2 flex justify-center items-center relative min-h-[400px]">
                <template x-for="(item, idx) in items" :key="idx">
                    <div x-show="index === idx" x-transition:enter="transition ease-out duration-1000"
                        x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-1000" x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                        class="absolute top-0 left-0 w-full h-full flex justify-center items-center">
                        <img :src="item.image" alt="Ocean Mission"
                            class="w-[600px] h-[400px] object-cover rounded-3xl">
                    </div>
                </template>
            </div>
        </div>
    </section>

    <script>
        function missionSwitcher() {
            return {
                index: 0,
                items: [{
                        title: 'Our Mission :',
                        subtitle: 'Echoing the Ocean\'s Call.',
                        description: `We listen, we amplify, and we act — ensuring<br>
                                      that every ripple of change grows into a wave of<br>
                                      transformation for our oceans and coastal communities.`,
                        image: "{{ asset('assets/images/mission.png') }}"
                    },
                    {
                        title: 'Our Vision :',
                        subtitle: 'A Thriving Future, Above and Below.',
                        description: `We dream of a world where people and marine life coexist<br>
                                      in harmony, powered by knowledge, sustainability, and the<br>
                                      timeless art of storytelling.`,
                        image: "{{ asset('assets/images/vision.png') }}"
                    },
                    {
                        title: 'Our Approach :',
                        subtitle: 'Turning Ideas into Impact.',
                        description: `We don't just talk about conservation—we make it happen.<br>
                                      Through education, real-world action, powerful storytelling,<br>
                                      and innovative solutions, we bring the ocean's stories to life.`,
                        image: "{{ asset('assets/images/our-approach 1.png') }}"
                    },
                ],
                start() {
                    setInterval(() => {
                        this.index = (this.index + 1) % this.items.length;
                    }, 5000); // 5 detik sekali berubah
                }
            }
        }
    </script>

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
                    <div class="stats-slider flex flex-wrap -mx-2">
                        <!-- Card -->
                        <div class="w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
                            <div class="bg-teal-blue p-6 rounded-[3rem] flex flex-col justify-center h-full min-h-[300px]"
                                style="height: 400px;">
                                <p class="text-white text-xl lg:text-2xl font-extrabold font-calimate text-left">
                                    Connection.</p>
                                <p class="text-md text-white lg:text-md font-ttNorms mt-2 text-left">
                                    Bridging people and the ocean through education, action, and storytelling.
                                </p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
                            <div class="bg-peachy-orange p-6 rounded-[3rem] flex flex-col justify-center h-full min-h-[300px]"
                                style="height: 400px;">
                                <p class="text-white text-xl lg:text-2xl font-extrabold font-calimate text-left">
                                    Empowerment.</p>
                                <p class="text-md text-white lg:text-md font-ttNorms mt-2 text-left">
                                    Giving communities, youth,and change- makers the tools to protect marine ecosystems.
                                </p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
                            <div class="bg-raspberry-pink p-6 rounded-[3rem] flex flex-col justify-center h-full min-h-[300px]"
                                style="height: 400px;">
                                <p class="text-wine-red text-xl lg:text-2xl font-extrabold font-calimate text-left">
                                    Storytelling for Impact.</p>
                                <p class="text-md text-wine-red lg:text-md font-ttNorms mt-2 text-left">
                                    Using media & advocacy to amplify unheard voices and drive change.
                                </p>
                            </div>
                        </div>

                        <!-- Card 4 -->
                        <div class="w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
                            <div class="bg-golden-yellow p-6 rounded-[3rem] flex flex-col justify-center h-full min-h-[300px]"
                                style="height: 400px;">
                                <p class="text-bronze text-xl lg:text-2xl font-extrabold font-calimate text-left">
                                    Sustainability.</p>
                                <p class="text-md text-bronze lg:text-md font-ttNorms mt-2 text-left">
                                    Creating long-term, community-driven solutions for ocean conservation.
                                </p>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="w-full md:w-1/2 lg:w-1/3 px-2 mb-4">
                            <div class="bg-black p-6 rounded-[3rem] flex flex-col justify-center h-full min-h-[300px]"
                                style="height: 400px;">
                                <p class="text-white text-xl lg:text-2xl font-extrabold font-calimate text-left">
                                    Innovation.</p>
                                <p class="text-md text-white lg:text-md font-ttNorms mt-2 text-left">
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
    <section class="relative z-20 bg-teal-blue py-[100px] px-4 rounded-bl-[50px] rounded-br-[50px] -mt-[50px]">
        <div class="max-w-7xl mx-auto flex flex-col items-center text-center space-y-12">
            <!-- Heading -->
            <h2
                class="text-white text-[36px] md:text-[48px] font-calimate font-bold leading-tight max-w-[800px] bg-raspberry-pink px-20 py-4 rounded-[20px] rotate-[-1.62deg]">
                Together for the Ocean
            </h2>

            <!-- Paragraph -->
            <p class="text-white text-base font-ttNorms leading-relaxed max-w-[700px] bg-blue px-16 py-2 rounded-[20px] rotate-[1.93deg]"
                style="margin-top: -5px; margin-left: 100px;">
                Every wave of change starts with passionate people. <br>
                Meet the dedicated team behind Naraese.
            </p>
        </div>

        <!-- The Lighthouse Advisory -->
        <div class="max-w-7xl mx-auto py-20 space-y-12">
            <!-- Kolom 1: Heading & Paragraf -->
            <div class="text-left space-y-1">
                <h2 class="text-4xl md:text-5xl font-bold text-white font-calimate">The Lighthouse Advisory</h3>
                    <p class="text-base text-white font-ttNorms mx-auto">
                        Our guiding lighthouse, ensuring we stay on course.
                    </p>
            </div>

            <!-- Kolom 2: 3 Card -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-[#D9D9D9] rounded-3xl shadow-md overflow-hidden flex flex-col h-full">
                    <div class="relative">
                        <div class="aspect-[2/1] overflow-hidden">
                            <img src="{{ asset('assets/images/wiro.png') }}" alt="Wiro"
                                class="w-[140%] h-full object-cover max-w-none">
                        </div>
                        <div class="px-5 -mt-[3.25rem] text-left">
                            <h4 class="text-lg font-bold text-teal-700">Wiro Nur Wirandi</h4>
                            <h5 class="text-md italic text-teal-500">Chairman of Trustee</h5>
                        </div>
                    </div>
                    <div class="bg-black p-5 pt-3 text-left flex-grow">
                        <p class="text-white text-sm">
                            Wiro is a marine and fisheries expert with over 15 years of experience, currently leading
                            sustainable sourcing
                            and ecotourism initiatives at NCI to advance ecosystem preservation and community
                            empowerment.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-[#D9D9D9] rounded-3xl shadow-md overflow-hidden flex flex-col h-full">
                    <div class="relative">
                        <div class="aspect-[2/1] overflow-hidden">
                            <img src="{{ asset('assets/images/ahmad.png') }}" alt="Ahmad"
                                class="w-[140%] h-full object-cover max-w-none">
                        </div>
                        <div class="px-5 -mt-[3.25rem] text-left">
                            <h4 class="text-lg font-bold text-teal-700">Ahmad Baihaqi</h4>
                            <h5 class="text-md italic text-teal-500">Advisor Member of Trustee</h5>
                        </div>
                    </div>
                    <div class="bg-black p-5 pt-3 text-left flex-grow">
                        <p class="text-white text-sm">
                            Aki is an impact investment and sustainable finance expert with 20+ years of global
                            experience, currently leading reef-positive initiatives at YKAN to advance blue economy
                            solutions and empower coastal communities.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-[#D9D9D9] rounded-3xl shadow-md overflow-hidden flex flex-col h-full">
                    <div class="relative">
                        <div class="aspect-[2/1] overflow-hidden">
                            <img src="{{ asset('assets/images/tries.png') }}" alt="Tries"
                                class="w-[140%] h-full object-cover max-w-none">
                        </div>
                        <div class="px-5 -mt-[3.25rem] text-left">
                            <h4 class="text-lg font-bold text-teal-700">Dr. Tries Blandine Razak</h4>
                            <h5 class="text-md italic text-teal-500">Supervisor of the Foundation</h5>
                        </div>
                    </div>
                    <div class="bg-black p-5 pt-3 text-left flex-grow">
                        <p class="text-white text-sm">
                            Dr. Tries Razak is a global expert in coral reef conservation with decades of research
                            across Indonesia, holding a PhD from the University of Queensland and a distinguished
                            academic background in marine science.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- The Lighthouse Keepers -->
        <div class="max-w-7xl mx-auto py-20 space-y-12">
            <!-- Kolom 1: Heading & Paragraf -->
            <div class="text-left space-y-1">
                <h2 class="text-4xl md:text-5xl font-bold text-white font-calimate">The Lighthouse Keepers</h3>
                    <p class="text-base text-white font-ttNorms mx-auto">
                        Our guiding lighthouse, ensuring we stay on course.
                    </p>
            </div>

            <!-- Kolom 2: 4 Card -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-[#D9D9D9] rounded-3xl shadow-md overflow-hidden flex flex-col h-full">
                    <div class="relative">
                        <div class="aspect-[2/1] overflow-hidden">
                            <img src="{{ asset('assets/images/bryan.png') }}" alt="Bryan"
                                class="w-[140%] h-full object-cover max-w-none">
                        </div>
                        <div class="px-5 -mt-[3.25rem] text-blue text-left">
                            <h4 class="text-lg font-bold text-teal-700">Bryan Auriol</h4>
                            <h5 class="text-md italic text-teal-500">Founder & Managing Director</h5>
                        </div>
                    </div>
                    <div class="bg-blue p-5 pt-3 text-left flex-grow">
                        <p class="text-white text-sm">
                            Bryan is the Founder and Managing Director of Narasea, combining marine science and
                            storytelling to lead impactful ocean conservation efforts, while also managing projects that
                            connect science, policy, and community voices across Indonesia.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-[#D9D9D9] rounded-3xl shadow-md overflow-hidden flex flex-col h-full">
                    <div class="relative">
                        <div class="aspect-[2/1] overflow-hidden">
                            <img src="{{ asset('assets/images/acep.png') }}" alt="Acep"
                                class="w-[140%] h-full object-cover max-w-none">
                        </div>
                        <div class="px-5 -mt-[3.25rem] text-blue text-left">
                            <h4 class="text-lg font-bold text-teal-700">Acep Jaelani</h4>
                            <h5 class="text-md italic text-teal-500">Founder and Deputy Director</h5>
                        </div>
                    </div>
                    <div class="bg-blue p-5 pt-3 text-left flex-grow">
                        <p class="text-white text-sm">
                            Acep is a young ocean advocate and storyteller whose work in seagrass restoration,
                            eco-tourism, and youth empowerment is amplified through his published books and passion for
                            marine conservation.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-[#D9D9D9] rounded-3xl shadow-md overflow-hidden flex flex-col h-full">
                    <div class="relative">
                        <div class="aspect-[2/1] overflow-hidden">
                            <img src="{{ asset('assets/images/aini.png') }}" alt="Aini"
                                class="w-[140%] h-full object-cover max-w-none">
                        </div>
                        <div class="px-5 -mt-[3.25rem] text-blue text-left">
                            <h4 class="text-lg font-bold text-teal-700">Aini Mutia</h4>
                            <h5 class="text-md italic text-teal-500">Founder & Secretary</h5>
                        </div>
                    </div>
                    <div class="bg-blue p-5 pt-3 text-left flex-grow">
                        <p class="text-white text-sm">
                            Aini is the Founder of Narasea and a strategic communicator who amplifies grassroots voices
                            and drives sustainable impact through storytelling, public relations, and inclusive
                            development initiatives.
                        </p>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-[#D9D9D9] rounded-3xl shadow-md overflow-hidden flex flex-col h-full">
                    <div class="relative">
                        <div class="aspect-[2/1] overflow-hidden">
                            <img src="{{ asset('assets/images/alfina.png') }}" alt="Alfina"
                                class="w-[140%] h-full object-cover max-w-none">
                        </div>
                        <div class="px-5 -mt-[3.25rem] text-blue text-left">
                            <h4 class="text-lg font-bold text-teal-700">Alfinna Yebelanti</h4>
                            <h5 class="text-md italic text-teal-500">Founder & Treasury</h5>
                        </div>
                    </div>
                    <div class="bg-blue p-5 pt-3 text-left flex-grow">
                        <p class="text-white text-sm">
                            Yebe is a strategic communicator and partnership builder who connects academia, industry,
                            and global organizations to advance blue economy initiatives and empower communities through
                            collaboration.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- The Current Crew -->
        <div class="max-w-7xl mx-auto py-20 space-y-12">
            <!-- Kolom 1: Heading & Paragraf -->
            <div class="text-left space-y-1">
                <h2 class="text-4xl md:text-5xl font-bold text-white font-calimate">The Lighthouse Advisory</h3>
                    <p class="text-base text-white font-ttNorms mx-auto">
                        Our guiding lighthouse, ensuring we stay on course.
                    </p>
            </div>

            <!-- Kolom 2: 3 Card -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="bg-[#D9D9D9] rounded-3xl shadow-md overflow-hidden flex flex-col h-full">
                    <div class="relative">
                        <div class="aspect-[2/1] overflow-hidden">
                            <img src="{{ asset('assets/images/hidayat.png') }}" alt="Hidayat"
                                class="w-[140%] h-full object-cover max-w-none">
                        </div>
                        <div class="px-5 -mt-[3.25rem] text-raspberry-pink text-left">
                            <h4 class="text-lg font-bold text-teal-700">Muchammad Hidayat</h4>
                            <h5 class="text-md italic text-teal-500">Creative Campaign Strategist</h5>
                        </div>
                    </div>
                    <div class="bg-raspberry-pink p-5 pt-3 text-left flex-grow">
                        <p class="text-white text-sm">
                            Ka Dayat is the Creative Campaign Strategist at Narasea, using design, storytelling, and
                            visual strategy to turn ocean conservation messages into impactful movements that engage and
                            inspire communities.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-[#D9D9D9] rounded-3xl shadow-md overflow-hidden flex flex-col h-full">
                    <div class="relative">
                        <div class="aspect-[2/1] overflow-hidden">
                            <img src="{{ asset('assets/images/rindah.png') }}" alt="Rindah"
                                class="w-[140%] h-full object-cover max-w-none">
                        </div>
                        <div class="px-5 -mt-[3.25rem] text-raspberry-pink text-left">
                            <h4 class="text-lg font-bold text-teal-700">Rindah Talitha Vida</h4>
                            <h5 class="text-md italic text-teal-500">Associate Marine Researcher</h5>
                        </div>
                    </div>
                    <div class="bg-raspberry-pink p-5 pt-3 text-left flex-grow">
                        <p class="text-white text-sm">
                            Rindah is a marine researcher focused on coral reef restoration, specializing in underwater
                            photogrammetry and 3D reef modeling to support innovative marine conservation efforts.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-[#D9D9D9] rounded-3xl shadow-md overflow-hidden flex flex-col h-full">
                    <div class="relative">
                        <div class="aspect-[2/1] overflow-hidden">
                            <img src="{{ asset('assets/images/ramdan.png') }}" alt="Ramdan"
                                class="w-[140%] h-full object-cover max-w-none">
                        </div>
                        <div class="px-5 -mt-[3.25rem] text-raspberry-pink text-left">
                            <h4 class="text-lg font-bold text-teal-700">Ramdan Pahlevi</h4>
                            <h5 class="text-md italic text-teal-500">Assistant Project Coordinator</h5>
                        </div>
                    </div>
                    <div class="bg-raspberry-pink p-5 pt-3 text-left flex-grow">
                        <p class="text-white text-sm">
                            Ramdan is actively contributing to initiatives that protect marine ecosystems and empower
                            coastal communities, and brings fresh perspectives and eagerness to learn and inspire change
                            through collaboration as part of Narasea.
                        </p>
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

    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/text-transition.js') }}" defer></script>
</body>

</html>

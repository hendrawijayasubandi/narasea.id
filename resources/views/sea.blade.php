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
        class="min-h-screen bg-black flex flex-col justify-center items-start px-4 py-12 sm:px-8 sm:py-16 md:px-12 md:py-20 lg:px-24 lg:py-28 xl:px-32 relative">
        <h1
            class="text-2xl font-bold mb-2 sm:text-3xl sm:mb-3 md:text-4xl md:mb-4 lg:text-5xl lg:mb-5 tracking-wide font-calimate text-white">
            The Narasea Story:
        </h1>
        <p class="text-xl leading-relaxed sm:text-2xl md:text-3xl lg:text-4xl font-ttNorms text-white max-w-[42ch]">
            Where People and Oceans Unite
        </p>
    </section>

    <!-- Section Who We Are -->
    <section class="bg-black py-12 px-4 sm:py-16 md:py-20 lg:py-24 xl:py-28">
        <div class="max-w-6xl mx-auto flex flex-col lg:flex-row gap-6 lg:gap-8 items-stretch">
            <!-- Left Side - Title -->
            <div class="lg:w-2/4 flex items-center">
                <div>
                    <h2
                        class="text-3xl font-extrabold sm:text-4xl md:text-5xl tracking-wide font-calimate leading-tight">
                        <span class="text-white">Who We Are</span>
                    </h2>
                    <p class="text-white mt-4 text-lg">
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
    <section class="bg-black py-12 px-4 sm:py-16 md:py-20 lg:py-24 xl:py-28">
        <div class="max-w-6xl mx-auto flex flex-col lg:flex-row-reverse gap-6 lg:gap-8 items-stretch">
            <!-- Right Side - Content -->
            <div class="lg:w-2/4 flex items-center">
                <div>
                    <h2
                        class="text-3xl font-extrabold sm:text-4xl md:text-5xl tracking-wide font-calimate leading-tight">
                        <span class="text-white">Our Journey</span>
                    </h2>
                    <p class="text-white mt-4 text-lg">
                        Founded in 2020, Narasea began as a small community of
                        passionate marine students celebrating World Ocean Day.
                        Narasea began with a mission to bridge the gap in ocean
                        awareness. What started as a grassroots movement soon
                        evolved into a platform for marine education, conservation,
                        and storytelling.
                    </p>
                    <br>
                    <p class="text-white mt-4 text-lg">
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
    <section class="z-50 bg-blue py-[200px] px-4 rounded-bl-[50px] rounded-br-[50px] -mt-[50px]"
        style="margin-top: -50px;">
    </section>

    <!-- Section The Values We Live -->
    <section class="relative z-40 bg-white py-[200px] px-4 rounded-bl-[50px] rounded-br-[50px] -mt-[50px]"
        style="margin-top: -50px;">
    </section>

    <!-- Section The Lighthouse Advisory and Ocean Trustees -->
    <section class="relative z-30 bg-teal-blue py-[200px] px-4 rounded-bl-[50px] rounded-br-[50px] -mt-[50px]"
        style="margin-top: -50px;">
    </section>

    <!-- Section The Ocean’s Story is Still Being Written – Be Part of It -->
    <section class="relative z-20 bg-black py-12 px-4 sm:py-16 md:py-20 -mt-[50px]">
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/text-transition.js') }}" defer></script>
</body>

</html>

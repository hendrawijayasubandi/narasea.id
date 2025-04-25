<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>404 Not Found | Narasea Indonesia - Platform Edukasi & Advokasi Konservasi Laut</title>
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
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/assets/css/fonts.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'TTNorms', sans-serif;
            height: 100vh;
            background: linear-gradient(to top, #001f3f, #0074D9);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .message,
        .description {
            font-family: 'TTNorms', serif;
        }

        .container {
            text-align: center;
            padding: 2rem;
        }

        .big-text {
            font-family: 'Calimate', serif;
            font-weight: 900;
            font-size: 10rem;
            font-weight: bold;
            position: relative;
        }

        .big-text::after {
            content: "🐟";
            position: absolute;
            top: -20px;
            right: -40px;
            font-size: 4rem;
            animation: float 3s ease-in-out infinite;
        }

        .message {
            font-size: 1.8rem;
            margin-top: 1rem;
        }

        .description {
            margin-top: 0.5rem;
            font-size: 1rem;
            color: #cceeff;
        }

        .btn {
            margin-top: 2rem;
            padding: 0.8rem 2rem;
            background-color: #00aaff;
            border: none;
            color: white;
            border-radius: 30px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
            font-family: 'Calimate', serif;
        }

        .btn:hover {
            background-color: #0088cc;
        }

        @keyframes float {
            0% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }

            100% {
                transform: translateY(0);
            }
        }

        .bubbles {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .bubble {
            position: absolute;
            bottom: -100px;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            animation: rise 10s infinite ease-in;
        }

        .bubble:nth-child(2) {
            left: 20%;
            animation-duration: 7s;
            width: 15px;
            height: 15px;
        }

        .bubble:nth-child(3) {
            left: 40%;
            animation-duration: 6s;
        }

        .bubble:nth-child(4) {
            left: 60%;
            animation-duration: 8s;
            width: 25px;
            height: 25px;
        }

        .bubble:nth-child(5) {
            left: 80%;
            animation-duration: 5s;
        }

        @keyframes rise {
            0% {
                transform: translateY(0);
                opacity: 0.6;
            }

            100% {
                transform: translateY(-120vh);
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="big-text">404</div>
        <div class="message">Oops! Page Not Found</div>
        <div class="description">It looks like you're lost in the deep sea 🌊</div>
        <button class="btn" onclick="window.location.href='/'">Go Home</button>
    </div>
    <div class="bubbles">
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
        <div class="bubble"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>404 Not Found | Narasea Indonesia - Platform Edukasi & Advokasi Konservasi Laut</title>
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
    }

    .btn:hover {
      background-color: #0088cc;
    }

    @keyframes float {
      0% { transform: translateY(0); }
      50% { transform: translateY(-10px); }
      100% { transform: translateY(0); }
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
      0% { transform: translateY(0); opacity: 0.6; }
      100% { transform: translateY(-120vh); opacity: 0; }
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
</body>
</html>

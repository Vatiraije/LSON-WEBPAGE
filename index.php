        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Ticker Animation</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background: #f0f0f0;
            color: #333;
        }

        .background-container {
            display: flex;
            height: 100vh;
            width: 100%;
            margin-top: 260px;
        }

        .column {
            flex: 1;
            background-size: cover;
            background-position: center;
            min-width: 0;
            transition: opacity 5s ease-in-out;
            opacity: 1;
        }

        .column.fade-out {
            opacity: 0;
        }

        .white-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 35%;
            background: rgba(255, 255, 255, 0.8);
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .logo-container {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        .logo-container img {
            width: 220px;
            height: 220px;
            border-radius: 50%;
        }

        .second-white-overlay {
            position: fixed;
            top: 39%;
            left: 0;
            width: 100%;
            height: 4%;
            background: rgba(255, 255, 255, 0.8);
            z-index: 1;
            overflow: hidden;
            white-space: nowrap;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        .ticker-wrapper {
            display: flex;
            white-space: nowrap;
            animation: ticker 40s linear infinite;
        }

        .ticker-content {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .second-white-overlay a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            margin: 0 20px;
            font-size: 1.5em;
            white-space: nowrap;
            transition: color 0.3s;
        }

        .second-white-overlay a:hover {
            color: #c0392b;
        }

        .image-boxes-container {
            position: fixed;
            top: 43%;
            left: 0;
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding: 10px;
            z-index: 2;
        }

        .image-box {
            width: 200px;
            height: 170px;
            background-size: cover;
            background-position: center;
            border: 2px solid #333;
            border-radius: 10px;
            transition: transform 0.3s;
        }

        .image-box:hover {
            transform: scale(1.1);
        }

        .video-box {
            width: 200px;
            height: 170px;
            border: 2px solid #333;
            border-radius: 10px;
            overflow: hidden;
        }

        .video-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: #34495e;
            color: #ecf0f1;
            text-align: center;
            padding: 10px 0;
            z-index: 1;
            box-shadow: 0 -2px 5px rgba(0,0,0,0.1);
        }

        .hamburger-menu {
            position: fixed;
            top: 10px;
            right: 10px;
            width: 30px;
            height: 30px;
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            cursor: pointer;
            z-index: 3;
        }

        .hamburger-menu div {
            width: 100%;
            height: 4px;
            background-color: #333;
        }

        .nav-menu {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            width: 200px;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: -2px 0 5px rgba(0,0,0,0.1);
            padding-top: 60px;
            z-index: 2;
        }

        .nav-menu a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .nav-menu a:hover {
            background-color: #f0f0f0;
        }

        @keyframes ticker {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); }
        }
    </style>
</head>
<body>
    <div class="white-overlay">
        <div class="logo-container">
            <img src="images/LSON(L).png" alt="L">
            <img src="images/LSON(S).png" alt="S">
            <img src="images/LSON(O).png" alt="O">
            <img src="images/LSON(N).png" alt="N">
        </div>
    </div>
    <div class="second-white-overlay">
        <div class="ticker-wrapper">
            <div class="ticker-content">
                <a href="football.php">Football</a>
                <a href="rugby.php">Rugby</a>
                <a href="tennis.php">Tennis</a>
                <a href="swimming.php">Swimming</a>
                <a href="All sports/boxing.php">Boxing</a>
                <a href="golf.php">Golf</a>
                <a href="cricket.php">Cricket</a>
                <a href="hockey.php">Hockey</a>
                <a href="chess.php">Chess</a>
                <a href="horseriding.php">Horse Riding</a>
                <a href="mma.php">MMA</a>
                <a href="cycling.php">Cycling</a>
                <a href="volleyball.php">Volleyball</a>
                <a href="netball.php">Netball</a>
                <a href="racing.php">Racing</a>
                <a href="esports.php">E-sports</a>
                <a href="bowling.php">Bowling</a>
                <a href="polo.php">Polo</a>
                <a href="basketball.php">Basketball</a>
                <a href="futsal.php">Futsal</a>
            </div>
            <div class="ticker-content">
                <a href="football.php">Football</a>
                <a href="rugby.php">Rugby</a>
                <a href="tennis.php">Tennis</a>
                <a href="swimming.php">Swimming</a>
                <a href="All sports/boxing.php">Boxing</a>
                <a href="golf.php">Golf</a>
                <a href="cricket.php">Cricket</a>
                <a href="hockey.php">Hockey</a>
                <a href="chess.php">Chess</a>
                <a href="horseriding.php">Horse Riding</a>
                <a href="mma.php">MMA</a>
                <a href="cycling.php">Cycling</a>
                <a href="volleyball.php">Volleyball</a>
                <a href="netball.php">Netball</a>
                <a href="racing.php">Racing</a>
                <a href="esports.php">E-sports</a>
                <a href="bowling.php">Bowling</a>
                <a href="polo.php">Polo</a>
                <a href="basketball.php">Basketball</a>
                <a href="futsal.php">Futsal</a>
            </div>
        </div>
    </div>

    <div class="hamburger-menu">
        <div></div>
        <div></div>
        <div></div>
    </div>

    <div class="nav-menu">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
    </div>

    <div class="image-boxes-container">
        <div class="image-box" style="background-image: url('images/avdert1.gif');"></div>
        <div class="video-box">
            <img src="images/hozie.gif" alt="Hozie Gif">
        </div>
    </div>

    <div class="background-container">
        <div class="column" id="col1"></div>
        <div class="column" id="col2"></div>
        <div class="column" id="col3"></div>
        <div class="column" id="col4"></div>
        <div class="column" id="col5"></div>
        <div class="column" id="col6"></div>
    </div>

    <div class="footer">
        © 2024 by G Mobility Investment
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const images = [
                "images/tennis.jpg",
                "images/rugby3.jpg",
                "images/soccer.jpg",
                "images/swimming2.jpg",
                "images/boxing54.jpg",
                "images/golf2547.jpg",
                "images/cricket25.jpg"
            ];

            const columns = document.querySelectorAll('.column');

            function setColumnBackgrounds() {
                const usedImages = new Set();
                columns.forEach((column) => {
                    column.classList.add('fade-out');
                    setTimeout(() => {
                        let newImage;
                        do {
                            newImage = images[Math.floor(Math.random() * images.length)];
                        } while (usedImages.has(newImage));
                        usedImages.add(newImage);
                        column.style.backgroundImage = `url(${newImage})`;
                        column.classList.remove('fade-out');
                    }, 1000);
                });
            }

            setColumnBackgrounds();

            setInterval(setColumnBackgrounds, 3000);

            // Pause ticker on hover
            const tickerWrapper = document.querySelector('.ticker-wrapper');
            const secondWhiteOverlay = document.querySelector('.second-white-overlay');

            secondWhiteOverlay.addEventListener('mouseenter', () => {
                tickerWrapper.style.animationPlayState = 'paused';
            });

            secondWhiteOverlay.addEventListener('mouseleave', () => {
                tickerWrapper.style.animationPlayState = 'running';
            });

            // Hamburger menu toggle
            const hamburgerMenu = document.querySelector('.hamburger-menu');
            const navMenu = document.querySelector('.nav-menu');

            hamburgerMenu.addEventListener('click', () => {
                navMenu.style.display = navMenu.style.display === 'block' ? 'none' : 'block';
            });
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEVEL SPORTS OF NAMIBIA</title>
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
            background-attachment: auto;
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

        .search-container {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px;
        }

        #searchInput {
            width: 300px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-right: 10px;
        }

        #searchButton {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background-color: #34495e;
            color: #fff;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        #searchButton:hover {
            background-color: #2c3e50;
        }

        .full-white-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 1);
            z-index: 2;
            display: none;
            pointer-events: none;
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.5s ease-in-out; /* Updated for smooth resizing */
        }

        .white-overlay.scrolled {
            height: 5.5%; /* New height for scrolled state */
        }

        .level-sports-text {
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
            font-size: 2em;
            font-weight: bold;
            opacity: 0;
            visibility: hidden;
            transition: all 0.5s ease-in-out; /* Updated for smooth resizing */
        }

        .level-sports-text.visible {
            opacity: 1;
            visibility: visible;
        }

        .level-sports-text.expanded {
            font-size: 5em; /* Adjusted size for expanded state */
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
            box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
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
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
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

        .news-section {
            display: none; /* Initially hidden */
            padding: 20px;
            background-color: #f4f4f4;
            border-top: 1px solid #ddd;
        }

        .news-card {
            display: flex;
            margin-bottom: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s;
        }

        .news-card:hover {
            transform: scale(1.02);
        }

        .news-image {
            flex: 1;
            min-width: 150px;
            height: auto;
        }

        .news-content {
            flex: 2;
            padding: 20px;
        }

        .news-content h3 {
            margin-top: 0;
            color: #333;
        }

        .news-content p {
            margin: 10px 0;
        }

        .show-more-button {
            display: block;
            width: 200px;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #34495e;
            color: white;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .show-more-button:hover {
            background-color: #2c3e50;
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

    <div class="level-sports-text">
        LEVEL SPORTS OF NAMIBIA
    </div>

    <div class="second-white-overlay">
        <div class="ticker-wrapper">
            <div class="ticker-content">
                <a href="All sports/football.php">Football</a>
                <a href="All sports/rugby.php">Rugby</a>
                <a href="All sports/tennis.php">Tennis</a>
                <a href="All sports/swimming.php">Swimming</a>
                <a href="All sports/boxing.php">Boxing</a>
                <a href="All sports/golf.php">Golf</a>
                <a href="All sports/cricket.php">Cricket</a>
                <a href="All sports/hockey.php">Hockey</a>
                <a href="All sports/chess.php">Chess</a>
                <a href="All sports/horseridding.php">Horse Riding</a>
                <a href="All sports/mma.php">MMA</a>
                <a href="All sports/cycling.php">Cycling</a>
                <a href="All sports/volleyball.php">Volleyball</a>
                <a href="All sports/netball.php">Netball</a>
                <a href="All sports/racing.php">Racing</a>
                <a href="All sports/esports.php">E-sports</a>
                <a href="All sports/bowling.php">Bowling</a>
                <a href="All sports/polo.php">Polo</a>
                <a href="All sports/basketball.php">Basketball</a>
                <a href="All sports/futsal.php">Futsal</a>
            </div>
            <div class="ticker-content">
            <a href="All sports/football.php">Football</a>
                <a href="All sports/rugby.php">Rugby</a>
                <a href="All sports/tennis.php">Tennis</a>
                <a href="All sports/swimming.php">Swimming</a>
                <a href="All sports/boxing.php">Boxing</a>
                <a href="All sports/golf.php">Golf</a>
                <a href="All sports/cricket.php">Cricket</a>
                <a href="All sports/hockey.php">Hockey</a>
                <a href="All sports/chess.php">Chess</a>
                <a href="All sports/horseridding.php">Horse Riding</a>
                <a href="All sports/mma.php">MMA</a>
                <a href="All sports/cycling.php">Cycling</a>
                <a href="All sports/volleyball.php">Volleyball</a>
                <a href="All sports/netball.php">Netball</a>
                <a href="All sports/racing.php">Racing</a>
                <a href="All sports/esports.php">E-sports</a>
                <a href="All sports/bowling.php">Bowling</a>
                <a href="All sports/polo.php">Polo</a>
                <a href="All sports/basketball.php">Basketball</a>
                <a href="All sports/futsal.php">Futsal</a>  
            </div>
        </div>
    </div>
    <div class="full-white-overlay"></div>

    <div class="news-section" id="newsSection">
        <div class="news-card">
          <img src="path_to_image1.jpg" alt="News Image" class="news-image">
          <div class="news-content">
            <p class="news-category">Football</p>
            <h3 class="news-title">Yoro to miss three months as Man Utd dealt Hojlund blow</h3>
            <a href="#" class="news-link">Read more ></a>
          </div>
        </div>
        <div class="news-card">
          <img src="path_to_image2.jpg" alt="News Image" class="news-image">
          <div class="news-content">
            <p class="news-category">Olympics</p>
            <h3 class="news-title">Olympics 2024 LIVE! Team GB take silver and two bronze in rowing</h3>
            <a href="#" class="news-link">Read more ></a>
          </div>
        </div>
        <div class="news-card">
          <img src="path_to_image3.jpg" alt="News Image" class="news-image">
          <div class="news-content">
            <p class="news-category">Football</p>
            <h3 class="news-title">Transfer Centre LIVE! Gallagher latest as Forest sign 'Portuguese Grealish'</h3>
            <a href="#" class="news-link">Read more ></a>
          </div>
        </div>
        <div class="news-card">
          <img src="path_to_image4.jpg" alt="News Image" class="news-image">
          <div class="news-content">
            <p class="news-category">Cricket</p>
            <h3 class="news-title">The Hundred 2024: Free live stream of London Spirit vs Welsh Fire</h3>
            <a href="#" class="news-link">Read more ></a>
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
        <a href="shop.html">Our Shop</a>
        <a href="#newsupdates">News updates</a>
        <a href="#services">Services</a>
        <a href="#contact">Contact</a>
    </div>

    <div class="image-boxes-container">
        <div class="image-box" style="background-image: url('images/avdert 1.gif');"></div>
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
    const whiteOverlay = document.querySelector('.white-overlay');
    const levelSportsText = document.querySelector('.level-sports-text');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            whiteOverlay.classList.add('scrolled');
            levelSportsText.classList.add('expanded');
        } else {
            whiteOverlay.classList.remove('scrolled');
            levelSportsText.classList.remove('expanded');
        }
    });
});

        
        document.addEventListener("DOMContentLoaded", () => {
    const whiteOverlay = document.querySelector('.white-overlay');
    const levelSportsText = document.querySelector('.level-sports-text');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            whiteOverlay.classList.add('scrolled');
            levelSportsText.classList.add('expanded');
        } else {
            whiteOverlay.classList.remove('scrolled');
            levelSportsText.classList.remove('expanded');
        }
    });
});

        document.addEventListener('DOMContentLoaded', () => {
    const searchInput = document.getElementById('searchInput');
    const searchButton = document.getElementById('searchButton');
    const newsCards = document.querySelectorAll('.news-card');

    function filterArticles() {
        const query = searchInput.value.toLowerCase();
        newsCards.forEach(card => {
            const title = card.querySelector('.news-title').innerText.toLowerCase();
            if (title.includes(query)) {
                card.style.display = 'flex';
            } else {
                card.style.display = 'none';
            }
        });
    }

    searchButton.addEventListener('click', filterArticles);
    searchInput.addEventListener('keyup', (event) => {
        if (event.key === 'Enter') filterArticles();
    });
});

        document.addEventListener('DOMContentLoaded', () => {
  const newsSection = document.getElementById('newsSection');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 300) { // Adjust the scroll position as needed
      newsSection.style.display = 'block';
    } else {
      newsSection.style.display = 'none';
    }
  });
});

        document.addEventListener("DOMContentLoaded", () => {
    // Existing JavaScript code remains unchanged

    // Show/Hide level sports text on scroll and toggle full white overlay
    const fullWhiteOverlay = document.querySelector('.full-white-overlay');

    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            whiteOverlay.classList.add('hidden');
            levelSportsText.classList.add('visible');
            fullWhiteOverlay.style.display = 'block'; // Show the full white overlay
        } else {
            whiteOverlay.classList.remove('hidden');
            levelSportsText.classList.remove('visible');
            fullWhiteOverlay.style.display = 'none'; // Hide the full white overlay
        }
    });
});

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
            const whiteOverlay = document.querySelector('.white-overlay');
            const levelSportsText = document.querySelector('.level-sports-text');

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

            // Show/Hide level sports text on scroll
            window.addEventListener('scroll', () => {
                if (window.scrollY > 100) {
                    whiteOverlay.classList.add('hidden');
                    levelSportsText.classList.add('visible');
                } else {
                    whiteOverlay.classList.remove('hidden');
                    levelSportsText.classList.remove('visible');
                }
            });
        });
    </script>
</body>
</html>

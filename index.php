<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEVEL SPORTS OF NAMIBIA</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/159bedbb65.js" crossorigin="anonymous"></script>
    <style>
    @media (max-width: 1200px) {
        .news-card {
            width: 45%;
        }

        .column,
        .image-box,
        .video-box {
            width: 45%;
        }
    }

    @media (max-width: 768px) {
        #header nav ul li {
            display: block;
            margin: 10px 0;
        }

        #header nav i {
            display: block;
        }

        #sidemenu {
            position: fixed;
            right: -300px;
            top: 0;
            width: 250px;
            height: 100%;
            background: #fff;
            transition: right 0.3s;
        }

        .news-card {
            width: 100%;
        }

        .column,
        .image-box,
        .video-box {
            width: 100%;
        }

        .ticker-content {
            display: block;
        }

        .level-sports-text {
            font-size: 18px;
        }

        .logo-letter {
            font-size: 30px;
        }
    }

    @media (max-width: 480px) {
        .level-sports-text {
            font-size: 16px;
        }

        .logo-letter {
            font-size: 24px;
        }
    }
    </style>
</head>

<body>
    <div id="header">
        <nav>
            <ul id="sidemenu">
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Our Shop</a></li>
                <li><a href="#portfolio">News Updates</a></li>
                <li><a href="#contact">Services</a></li>
                <li><a href="#contact">Contact</a></li>
                <i class="fa-solid fa-xmark" onclick="closemenu()"></i>
            </ul>
            <i class="fa-solid fa-bars" style="color: #262626;
             position: fixed;
             top: 5%;
             right: 5%;
             transform: translateY(-50%);
             font-size: 25px; " onclick="openmenu()"></i>
        </nav>
    </div>
    </header>



    <div class="logo-area">
        <div class="white-overlay">
            <strong>
                <div class="logo-container">
                    <span class="logo-letter blue">L</span>
                    <span class="logo-letter red">S</span>
                    <span class="logo-letter green">O</span>
                    <span class="logo-letter yellow">N</span>
                </div>
            </strong>
            <video autoplay loop muted>
                <source src="videos/SportTransition - Made with Clipchamp.mp4" type="video/mp4">
            </video>
            <div class="level-sports-text">Level Sports Of Namibia</div>
        </div>
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
                <h3 class="news-title">Transfer Centre LIVE! Gallagher latest as Forest sign 'Portuguese Grealish'
                </h3>
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


    <div class="background-container">
        <div class="column" style="background-image: url('images/tennis.jpg');"></div>
        <div class="column" style="background-image: url('images/rugby3.jpg');"></div>
        <div class="column" style="background-image: url('images/soccer.jpg');"></div>
        <div class="column" style="background-image: url('images/swimming2.jpg');"></div>
        <div class="column" style="background-image: url('images/boxing54.jpg');"></div>
        <div class="column" style="background-image: url('images/golf2547.jpg');"></div>
        <div class="column" style="background-image: url('images/cricket25.jpg');"></div>

        <div class="image-boxes-container">
            <div class="image-box" style="background-image: url('images/avdert 1.gif');"></div>
            <div class="video-box">
                <img src="images/hozie.gif" alt="Hozie Gif">
            </div>
        </div>
    </div>



    <div class="footer">
        © 2024 by GMIT CC
    </div>

    <script src="script.js"></script>
    <script>
    var sidemenu = document.getElementById("sidemenu");

    function openmenu() {
        document.getElementById("sidemenu").style.right = "0";
    }

    function closemenu() {
        document.getElementById("sidemenu").style.right = "-300px";
    }
    // Smooth scrolling function
    function smoothScrollTo(element, target, duration) {
        var start = element.scrollTop;
        var change = target - start;
        var currentTime = 0;
        var increment = 20;

        function animateScroll() {
            currentTime += increment;
            var val = Math.easeInOutQuad(currentTime, start, change, duration);
            element.scrollTop = val;
            if (currentTime < duration) {
                requestAnimationFrame(animateScroll);
            }
        }
        animateScroll();
    }

    Math.easeInOutQuad = function(t, b, c, d) {
        t /= d / 2;
        if (t < 1) return c / 2 * t * t + b;
        t--;
        return -c / 2 * (t * (t - 2) - 1) + b;
    };

    // Use the function for scrolling, e.g., for button click events
    document.getElementById('up-button').addEventListener('click', function() {
        smoothScrollTo(document.documentElement, document.documentElement.scrollTop - window.innerHeight,
        500); // Adjust duration as needed
    });

    document.getElementById('down-button').addEventListener('click', function() {
        smoothScrollTo(document.documentElement, document.documentElement.scrollTop + window.innerHeight,
        500); // Adjust duration as needed
    });
    </script>
</body>

</html>
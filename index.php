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


    .large-text {
        font-size: 3em;
        font-weight: bold;
        color: #14e1e3;
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
                <li><a href="news-update.php">News Updates</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="#contact">Contact</a></li>
                <i class="fa-solid fa-xmark" onclick="closemenu()"></i>
            </ul>
            <i class="fa-solid fa-bars" style="color: #262626;
             position: fixed;
             top: 5%;
             right: 5%;
             transform: translateY(-50%);
             font-size: 25px;" onclick="openmenu()"></i>
        </nav>
    </div>

    <div class="logo-area">
        <strong>
            <div class="logo-container" id="logoContainer">
                <span class="logo-letter blue">L</span>
                <span class="logo-letter red">S</span>
                <span class="logo-letter yellow">O</span>
                <span class="logo-letter green">N</span>
            </div>
        </strong>
        <video autoplay loop muted>
            <source src="videos/SportTransition - Made with Clipchamp.mp4" type="video/mp4">
        </video>
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


    <div class="background-container">
        <div class="column" id="column1"></div>
        <div class="column" id="column2"></div>
        <div class="column" id="column3"></div>
        <div class="column" id="column4"></div>
        <div class="column" id="column5"></div>
        <div class="column" id="column6"></div>
        <div class="column" id="column7"></div>
        <div class="outer"></div>

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
    var logoContainer = document.getElementById("logoContainer");

    function openmenu() {
        sidemenu.style.right = "0";
    }

    function closemenu() {
        sidemenu.style.right = "-300px";
    }
    window.addEventListener("scroll", function() {
    var videoElement = document.querySelector('.logo-area video');
    if (window.scrollY > 50) {
        videoElement.style.display = "none";  // Hide the video
        logoContainer.innerHTML = "<span class='large-text' style='background-color: white; padding: 0 10px;'>Level Sports Of Namibia</span>";
    } else {
        videoElement.style.display = "block";  // Show the video
        logoContainer.innerHTML =
            '<span class="logo-letter blue">L</span><span class="logo-letter red">S</span><span class="logo-letter yellow">O</span><span class="logo-letter green">N</span>';
    }
});

    </script>
</body>

</html>
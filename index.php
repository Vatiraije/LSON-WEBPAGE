<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEVEL SPORTS OF NAMIBIA</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/159bedbb65.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
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

    .description-box {
        position: absolute;
        top: 20px;
        left: 50%;
        transform: translateX(-50%);
        width: 80%;
        max-width: 600px;
        padding: 30px;
        /*border: 3px solid #000000;*/
        border-radius: 10px;
        background: rgba(0, 0, 0, 0.5);
        /* background: rgba(255, 255, 255, 0.2);*/
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(9px);
        -webkit-backdrop-filter: blur(9px);
        color: #fff;
        text-align: center;
        font-size: 18px;
        z-index: 10;
        top: 41%;
        text-align: justify;
    }

    /* Hover effect */
    .description-box:hover {
        background: linear-gradient(135deg, rgba(0, 0, 0, 0.7), rgba(255, 255, 255, 0.3));
        transform: translateX(-50%) scale(1.05);
    }

    .description-box p {
        font-size: 30px;
        color: whitesmoke;
        font-family: 'Times New Roman', Times, serif;
    }


    .background-container {
        display: flex;
        flex-direction: row;
        justify-content: center;
        position: relative;
        padding-top: 60px;
        /* Adjust if needed to ensure the description box doesn't overlap with other content */
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

    <div class="background-container">
        <div class="description-box">
            <p>Welcome to Level Sports of Namibia.
                We cover all sports news, updates, and events happening in Namibia.
                Stay tuned for the latest updates!</p>
        </div>
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

    <script>
    function openmenu() {
        document.getElementById("sidemenu").style.right = "0";
    }

    function closemenu() {
        document.getElementById("sidemenu").style.right = "-200px";
    }
    </script>
</body>

</html>
<?php
// Include the PHP script to handle form submission and connection
include 'golf_registration.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/159bedbb65.js" crossorigin="anonymous"></script>
    <title>LSON - Namibian Golf</title>
    <link rel="stylesheet" href="golf.css">

    <style>
    body {
        background-image: url('golf/pexels-kindelmedia-6572964.jpg');
    }

    body,
    html {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-size: cover;
        color: #fff;
    }
    .header {
    background: #004d00;
    /* Dark Green */
    
    color: white;
    text-align: center;
    position: sticky;
    top: 3%;
    z-index: 1000;
    opacity: 0.9;
    height: 106px;
}
.header a{
    text-decoration: none;
    color: white;
    
}
.header h1 a:hover{
    color: #04a904;
    text-decoration: underline;
}

.header h1 {
    margin: 0;
    font-size: 2.5em;
}

.header p {
    margin: 0;
    font-size: 1.2em;
}
    .section-header p {
        font-size: 20px;
        text-align: justify;
    }

    .navigation {
        background-color: rgba(0, 77, 0, 0.7);
        padding: 10px 0;
        text-align: center;
    }

    .navigation a {
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        display: inline-block;
        transition: background 0.3s;
    }

    .navigation a:hover {
        background-color: #004d00;
        /* Dark Green */
    }

    .main-content {
        padding: 20px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .section {
        max-width: 100%;
        margin: 0 auto 20px;
        border-radius: 20px;
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.18);
        padding: 20px;
        margin-bottom: 20px;
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.18);
    }

    .section-header {
        margin-bottom: 10px;
    }

    .section-header h2 {
        font-size: 2.5em;
        color: white;
        margin-bottom: 10px;
    }

    .section-header p {
        font-size: 1.2em;
        color: #fff;
    }

    .content {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
    }

    .content article {
        border-radius: 5px;
        overflow: hidden;
    }

    .content img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .content img:hover {
        transform: translateY(-5px);
    }

    .footer {
        background: #004d00;
        color: white;
        text-align: center;
        padding: 10px;
        position: fixed;
        bottom: 0;
        width: 100%;
        opacity: 0.9;
    }

    @media (max-width: 768px) {
        .content {
            grid-template-columns: 1fr;
        }

        .section {
            padding: 10px;
        }
    }

    /*code for the row above the page*/
    .my-table {
        width: 100%;
        border-collapse: collapse;
        position: fixed;
        z-index: 1002;

    }

    .cell {
        padding: 5px;
        text-align: center;
        color: white;
        border: 1px solid #ddd;
    }

    .cell-1 {
        background-color: #64acf5;
    }

    .cell-2 {
        background-color: #f71ba3;
    }

    .cell-3 {
        background-color: #f3e817;
    }

    .cell-4 {
        background-color: #f78b1f;
    }

    .cell-5 {
        background-color: #04bf30;
    }
    </style>
</head>

<body>
    <!--code to add a row at the top of the page-->
    <table class="my-table">
        <tr>
            <td class="cell cell-1">NAGU/OTHER</td>
            <td class="cell cell-2">NALGU(Ladies)</td>
            <td class="cell cell-3">NJGF(juniors)</td>
            <td class="cell cell-4">SAGES</td>
            <td class="cell cell-5">SENIORS</td>
        </tr>
    </table>

    <div class="header">
        <h1><a href="../index.php">LSON</a> - Golf Clubs </h1>
        <p>Your source for all Namibian Golf Leagues</p>

        <br>
        <br>
        <div class="navigation">
            <a href="golf.php">Home</a>
            <a href="clubs.php">Clubs</a>
            <a href="leagues.php">Leagues</a>
            <a href="../All sports/golfProfile.php">Player Profiles</a>
            <a href="trainingAndDevelopment.php">Training and Development</a>
            <a href="golfsupporters.php">Supporters Club</a>
            <a href="golfEvents.php">Events</a>
            <a href="History.php">History</a>
        </div>
    </div>



    <div class="vertical-nav" id="sidemenu">
        <i class="fa-solid fa-xmark" onclick="closemenu()"></i>
        <a href="basketball.php">Basketball</a>
        <a href="bowling.php">Bowling</a>
        <a href="boxing.php">Boxing</a>
        <a href="chess.php">Chess</a>
        <a href="cricket.php">Cricket</a>
        <a href="cycling.php">Cycling</a>
        <a href="esports.php">E-Sports</a>
        <a href="football.php">Football</a>
        <a href="futsal.php">Futsal</a>
        <a href="golf.php" class="active">Golf</a>
        <a href="hockey.php">Hockey</a>
        <a href="horseriding.php">Horse Riding</a>
        <a href="mma.php">MMA</a>
        <a href="netball.php">Netball</a>
        <a href="polo.php">Polo</a>
        <a href="racing.php">Racing</a>
        <a href="rugby.php">Rugby</a>
        <a href="swimming.php">Swimming</a>
        <a href="tennis.php">Tennis</a>
        <a href="volleyball.php">Volleyball</a>

        <i class="fa-solid fa-bars" style="color: #fff;
             position: fixed;
             top: 7%;
             left: 0%;
             transform: translateY(-50%);
             font-size: 25px; " onclick="openmenu()"></i>
    </div>

    <div class="main-content">
        <section id="leagues" class="section">
            <div class="section-header">
                <h2>Omeya Golf Club</h2>
                <p>An oasis of green in the arid wild of Namibia’s Acacia savannah. Just 30 kms outside
                    Windhoek.
                    Golfers at Omeya can expect one of the greatest golfing experiences in Africa when they tee
                    up,
                    something that will rival anything in the world.
                    18 holes of true African, and more specifically Namibian, bushveld, surrounded by beautiful
                    mountains and Camel Thorn trees, breathtaking views, not to mention the sunrises and
                    sunsets.
                </p>
            </div>
            <div class="content">
                <article>
                    <img src="../images/omeya1.jpg" alt="Omeya Golf Club">
                </article>
                <article>
                    <img src="../images/golf omeya.jpg" alt="Omeya Golf Club">
                </article>
                <article>
                    <img src="../images/omeya2.jpg" alt="Omeya Golf Club">
                </article>
            </div>
        </section>

        <section id="players" class="section">
            <div class="section-header">
                <h2>The Windhoek Golf & Country Club</h2>
                <p>The club offers an 18-hole golf course with 6199 meters of lush grass fairways and
                    greens, providing a variety of challenges for golfers of all abilities.
                    The modern clubhouse seamlessly blends into the natural beauty of the course. It serves
                    as the gateway to an unbridled golfing experience.
                    The club is situated on the Western Bypass in Windhoek, Namibia.
                </p>
            </div>

            <div class="content">
                <article>
                    <img src="../images/WHK estate.jpg" alt="Windhoek Golf & Country Club">
                </article>
                <article>
                    <img src="../images/WHK ESTATE 2.jpg" alt="Windhoek Golf & Country Club">
                </article>
                <article>
                    <img src="../images/whk estate 3.jpg" alt="Windhoek Golf & Country Club">
                </article>
            </div>
        </section>

        <section id="players" class="section">
            <div class="section-header">
                <h2>Walvis Bay Golf Club</h2>
                <p>The Walvis Bay Golf Club, a premier golfing destination in Walvis Bay, Namibia. Our club
                    offers a
                    stunning oasis course, friendly staff, and a range of facilities to make your golfing
                    experience
                    unforgettable. Whether you are a beginner or a seasoned pro, we have everything you need to
                    enjoy
                    the game of golf.</p>
            </div>

            <div class="content">
                <article>
                    <img src="../images/walvis golf.jpg" alt="Walvis Bay Golf Club">
                </article>
                <article>
                    <img src="../images/Walvis Bay Golf Course.jpg" alt="Walvis Bay Golf Club">
                </article>
                <article>
                    <img src="../images/walvis bay3.jpg" alt="Walvis Bay Golf Club">
                </article>
            </div>
        </section>

        <section id="players" class="section">
            <div class="section-header">
                <h2>Tsumeb Golf Club</h2>
                <p>The Tsumeb Golf Club, a premier golfing destination in Tsumeb, Namibia. Our club
                    offers a
                    stunning oasis course, friendly staff, and a range of facilities to make your golfing
                    experience
                    unforgettable. Whether you are a beginner or a seasoned pro, we have everything you need to
                    enjoy
                    the game of golf.</p>
            </div>

            <div class="content">
                <article>
                    <img src="../images/Tsumeb golf.jpg" alt="Tsumeb Golf Club">
                </article>
                <article>
                    <img src="../images/Tsumeb.jpg" alt="Tsumeb Golf Club">
                </article>
                <article>
                    <img src="../images/tsumeb3.jpg" alt="Tsumeb Golf Club">
                </article>
            </div>
        </section>
    </div>








    <img src="golfer-removebg-preview.png" alt="Golf Animation" class="side-image">

    <div class="main-content">
        <!-- Main content here -->

        <!-- Floating button -->
        <button class="floating-button" onclick="toggleFloatingContent()">
            <i class="fas fa-phone"></i>
        </button>

        <!-- Dummy data pop-up -->
        <div class="floating-content" id="floatingContent">
            <p>Dummy Content</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button onclick="toggleFloatingContent()">Close</button>
        </div>

    </div>

    <div class="footer">
        <p>&copy; 2024 LSON - Level Sports of Namibia. All rights reserved.</p>
    </div>
    <!------------ Calendar Script------------------ -->
    <script src="golf.js"></script>
    <script>
    var sidemenu = document.getElementById("sidemenu");

    function openmenu() {
        document.getElementById("sidemenu").style.left = "0";
    }

    function closemenu() {
        document.getElementById("sidemenu").style.left = "-300px";
    }

    function toggleFloatingContent() {
        var content = document.getElementById("floatingContent");
        if (content.style.display === "none" || content.style.display === "") {
            content.style.display = "block";
        } else {
            content.style.display = "none";
        }
    }
    </script>




</body>

</html>
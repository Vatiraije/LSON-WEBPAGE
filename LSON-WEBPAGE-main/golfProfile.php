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
        <h1><a href="../index.php">LSON</a> - Golf Leagues </h1>
        <p>Your source for all Namibian Golf Leagues</p>

        <br>
        <br>

        <div class="navigation">
            <a href="">All</a>
            <a href="clubs.php">Clubs</a>
            <a href="leagues.php">Leagues</a>
            <a href="golfProfile.php">Player Profiles</a>
            <a href="swimming.php">Training and Development</a>
            <a href="golfsupporters.php">Supporters Club</a>
            <a href="golf.php">Events</a>
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

        <!--Golf leagues-->
        <section id="events" class="section">
            <div class="section-header">
                <h2>Golf Leagues</h2>
                <p>Check out the Golf leagues. You don't want to miss it!.</p>
            </div>

            <div class="content">
                <!-- Example content -->
                <article>
                    <h3>NAGU/OTHER</h3>
                    <img src="../images/golf.jpg" alt="GOLF PREMIER LEAGUE">
                </article>
                <article>
                    <h3>NALGU (ladies)</h3>
                    <img src="../All sports/golf/nagu.jpg" alt="GOLF FIRST DIVISION">
                </article>

                <article>
                    <h3>SAGES</h3>
                    <img src="../images/golf3.jpg" alt="GOLF1">
                </article>
                <br>
                <br>
                <br><br>
                <p></p>
                <p></p>
                <p></p>
            </div>
        </section>

        <section id="players" class="section">
            <div class="section-header">
                <h2>Upcoming Leagues</h2>
            </div>

            <div class="content">
                <!-- Example player profiles -->
                <article>
                    <h3>Golfer A</h3>
                    <a href="golfProfile.php?id=1">

                        <img class="profile" src="../images/golfProfile.jpg" alt="">
                    </a>

                </article>
                <article>
                    <h3>Golfer B</h3>
                    <a href="golfProfile.php?id=2">

                        <img class="profile" src="../images/golfProfile.jpg" alt="">
                    </a>
                </article>
            </div>
        </section>


        <!-- <div class="form-container">
            <form action="" method="GET">
                <input type="text" name="search" placeholder="Search players, teams, leagues...">
            </form>
        </div> -->


    </div>
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
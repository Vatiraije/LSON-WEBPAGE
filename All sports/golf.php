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
    <div class="header">
        <h1>LSON - Golf</h1>
        <p>Your source for all things Namibian Golf</p>
    </div>

    <div class="navigation">
        <a href="football.php">All</a>
         <a href="clubs.php">Clubs</a>
        <a href="football.php">Leagues</a>
        <a href="tennis.php">Player Profiles</a>
        <a href="swimming.php">Training and Development</a>
        <a href="boxing.php">Supporters Club</a>
        <a href="golf.php">Events</a>
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
             top: 5%;
             left: 5%;
             transform: translateY(-50%);
             font-size: 25px; " onclick="openmenu()"></i>
    </div>

    <div class="main-content">

    <!--Golf events-->
        <section id="events" class="section">
            <div class="section-header">
                <h2>Golf Events</h2>
                <p>Check out the Golf events. You don't want to miss it!.</p>
            </div>

            <div class="content">
                <!-- Example content -->
                <article>
                    <h3>NAGU/OTHER</h3>
                    <p>Latest Events from the NAGU/OTHER</p>
                    <img src="../images/golf.jpg" alt="GOLF PREMIER LEAGUE">
                </article>
                <article>
                    <h3>NALGU (ladies)</h3>
                    <p>Latest Events from the NALGU ladies.</p>
                    <img src="../images/golf2547.jpg" alt="GOLF FIRST DIVISION">
                </article>

                <article>
                <h3>SAGES</h3>
                <p>Latest Events from the SAGES</p>
                <img src="../images/golf3.jpg" alt="GOLF1">
                </article>
                <br>
                <br>
                <br><br>
                <p></p>
                <p></p>
                <p></p>
               
                
            </div>
            <article>
                <video src="../videos/ANGOLA VS NAMIBIA (5-0) COSFA CUP FINAL FULL HIGHLIGHTS & GOALS 2024.mp4" controls></video>
                </article>
        </section>


<!--Golf news-->
        <section id="news" class="section">
         <div class="section-header">
                <h2>Golf News</h2>
                <p>Explore the latest updates, news, and standings from Namibian Golf.</p>
            </div>

            <div class="content">
                <!-- Example content -->
                <article>
                    <h3>PGA Tour</h3>
                    <p>Latest updates and standings from the Namibian Premier League.</p>
                    <img src="../images/golf.jpg" alt="GOLF PREMIER LEAGUE">
                </article>
                <article>
                    <h3>Namibian Tour</h3>
                    <p>Latest updates and standings from the Namibian First Division.</p>
                    <img src="../images/golf2547.jpg" alt="GOLF FIRST DIVISION">
                </article>
<article>
                <h3>SAGES</h3>
                <p>Latest Events from the SAGES</p>
                <img src="../images/golf3.jpg" alt="GOLF1">
                </article>
                <br>
                <br>
                <br><br>
                <p></p>
                <p></p>
                <p></p>
                
    


            </div>
            <video 
        src="../videos/ANGOLA VS NAMIBIA (5-0) COSFA CUP FINAL FULL HIGHLIGHTS & GOALS 2024.mp4" 
        controls 
        >
    </video>
                </section>


        <section id="standings" class="section">
            <div class="section-header">
                <h2>Standings</h2>
                <p>Check out the current standings of your favorite golfers.</p>
            </div>

            <div class="content">
                <!-- Example standings content -->
                <article>
                    <h3>Premier League</h3>
                    <p>1. Golfer A - 45 points</p>
                    <p>2. Golfer B - 42 points</p>
                    <p>3. Golfer C - 39 points</p>
                </article>
                <article>
                    <h3>First Division</h3>
                    <p>1. Golfer X - 40 points</p>
                    <p>2. Golfer Y - 38 points</p>
                    <p>3. Golfer Z - 35 points</p>
                </article>
            </div>
        </section>

        <section id="players" class="section">
            <div class="section-header">
                <h2>Player Profiles</h2>
                <p>Get to know the top players in Namibian Golf.</p>
            </div>

            <div class="content">
                <!-- Example player profiles -->
                <article>
                    <h3>Golfer A</h3>
                    <p>Position: Pro Golfer</p>
                    <p>Matches Played: 20</p>
                </article>
                <article>
                    <h3>Golfer B</h3>
                    <p>Position: Pro Golfer</p>
                    <p>Matches Played: 18</p>
                </article>
            </div>
        </section>
<section id="calendar">
    <div class="calendar-container">
        <div class="calendar-header">
            <div class="calendar-nav">
                <button class="prev-month">&lt;</button>
                <h2 id="month-year">August 2024</h2>
                <button class="next-month">&gt;</button>
            </div>
        </div>
        <table class="calendar">
            <thead>
                <tr>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                    <th>Sunday</th>
                </tr>
            </thead>
            <tbody id="calendar-body">
                <!-- Calendar dates will be injected here by JavaScript -->
            </tbody>
        </table>
    </div>
</section>



        <!-- <div class="form-container">
            <form action="" method="GET">
                <input type="text" name="search" placeholder="Search players, teams, leagues...">
            </form>
        </div> -->


    </div>

    
<img src="golfer-removebg-preview.png" alt="Golf Animation" class="side-image">

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
    </script>

  


</body>
</html>

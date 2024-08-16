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
    <!-- code to add a row at the top of the page -->
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
        <h1><a href="../index.php">LSON</a> - Golf</h1>
        <p>Your source for all things Namibian Golf</p>

        <br>
        <br>

        <div class="navigation">
            <a href="football.php">All</a>
            <a href="clubs.php">Clubs</a>
            <a href="football.php">Leagues</a>
            <a href="../All sports/golfProfile.php">Player Profiles</a>
            <a href="swimming.php">Training and Development</a>
            <a href="golfsupporters.php">Supporters Club</a>
            <a href="event.php">Events</a>
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

        <i class="fa-solid fa-bars" style="color: #fff; position: fixed; top: 7%; left: 0%; transform: translateY(-50%); font-size: 25px;" onclick="openmenu()"></i>
    </div>

    <div class="main-content-wrapper">
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
                        <img src="../images/Event.jpg" alt="GOLF PREMIER LEAGUE">
                    </article>
                    <article>
                        <h3>NALGU (ladies)</h3>
                        <p>Latest Events from the NALGU ladies.</p>
                        <img src="../images/event4.jpg" alt="GOLF FIRST DIVISION">
                    </article>

                    <article>
                        <h3>SAGES</h3>
                        <p>Latest Events from the SAGES</p>
                        <img src="../images/Event2.jpg" alt="GOLF1">
                    </article>
                    <br>
                    <br>
                    <br><br>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
                <article>
                    <video src="../videos/golftevent.mp4" controls></video>
                </article>
            
            <div class="content">
                <!-- Example content -->
                <article>
                    <h3>NAGU/OTHER</h3>
                    <p>Previous Events from the NAGU/OTHER</p>
                    <img src="../images/events cmpt.jpg" alt="GOLF PREMIER LEAGUE">
                </article>
                <article>
                    <h3>NALGU (ladies)</h3>
                    <p>Previous Events from the NALGU ladies.</p>
                    <img src="../images/events cmpt2.jpg" alt="GOLF FIRST DIVISION">
                </article>

                <article>
                    <h3>SAGES</h3>
                    <p>Previous Events from the SAGES</p>
                    <img src="../images/event cmpt3.jpg" alt="GOLF1">
                </article>
                <br>
                <br>
                <br><br>
                <p></p>
                <p></p>
                <p></p>
            </div>
        </div>
    </div>

            </section>
            

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

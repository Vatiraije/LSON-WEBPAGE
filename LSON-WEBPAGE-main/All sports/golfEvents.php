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
        <h1><a href="../index.php">LSON</a> - Golf</h1>
        <p>Your source for all things Namibian Golf</p>
        
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

    <!-- <div class="navigation">
        <a href="football.php">All</a>
         <a href="clubs.php">Clubs</a>
        <a href="football.php">Leagues</a>
        <a href="tennis.php">Player Profiles</a>
        <a href="swimming.php">Training and Development</a>
        <a href="boxing.php">Supporters Club</a>
        <a href="golf.php">Events</a>
    </div> -->

   

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

    <!--Golf events-->
    <section id="events" class="section">
        <div class="section-header">
            <h2 class="center-text">Upcoming Golf Events</h2>
            <p class="center-text">Stay updated on the latest and greatest golf events happening across Namibia. From thrilling tournaments to exciting clinics, there's always something to look forward to!</p>
        </div>

        <div class="content">
            <!-- Event 1 -->
            <article>
                <h3>Windhoek Open Championship</h3>
                <p><strong>Date:</strong> September 15-17, 2024</p>
                <p><strong>Location:</strong> Windhoek Golf Club, Windhoek</p>
                <p><strong>Description:</strong> Join us for the prestigious Windhoek Open Championship, where top golfers from around the country compete for the title. Enjoy live music, food stalls, and a fantastic atmosphere.</p>
                <img src="../images/EV2.png" alt="Windhoek Open Championship">
            </article>

            <!-- Event 2 -->
            <article>
                <h3>Swakopmund Golf Clinic</h3>
                <p><strong>Date:</strong> October 5, 2024</p>
                <p><strong>Location:</strong> Swakopmund Golf Club, Swakopmund</p>
                <p><strong>Description:</strong> This clinic is designed for golfers of all skill levels to improve their game. Featuring workshops with professional coaches, equipment demonstrations, and hands-on practice sessions.</p>
                <img src="../images/event3.jpg" alt="Swakopmund Golf Clinic">
            </article>

            <!-- Event 3 -->
            <article>
                <h3>Annual Golf Gala</h3>
                <p><strong>Date:</strong> November 22, 2024</p>
                <p><strong>Location:</strong> Windhoek Country Club Resort, Windhoek</p>
                <p><strong>Description:</strong> Celebrate the year in style at the Annual Golf Gala. Enjoy a formal dinner, awards ceremony, and entertainment as we honor the best players and achievements of the year.</p>
                <img src="../images/EV3.png" alt="Annual Golf Gala">
            </article>

            <!-- Event 4 -->
            <article>
                <h3>Junior Golf Tournament</h3>
                <p><strong>Date:</strong> December 12-13, 2024</p>
                <p><strong>Location:</strong> Oshakati Golf Club, Oshakati</p>
                <p><strong>Description:</strong> A fantastic opportunity for young golfers to showcase their skills and compete in a friendly environment. The tournament will include various age categories and fun activities.</p>
                <img src="../images/EV44.png" alt="Junior Golf Tournament">
            </article>

        </div>
    </section>

    <section class="section fan-interaction">
        <h2 class="center-text">Join the Conversation</h2>
        <p>Connect with fellow golf enthusiasts and stay updated through our social media channels and forum. Share your thoughts, post photos, and engage with the golf community!</p>
        <div class="social-media">
            <a href="https://www.facebook.com/NamibianGolf" target="_blank"><i class="fa-brands fa-facebook"></i> Facebook</a>
            <a href="https://twitter.com/NamibianGolf" target="_blank"><i class="fa-brands fa-twitter"></i> Twitter</a>
            <a href="https://www.instagram.com/NamibianGolf" target="_blank"><i class="fa-brands fa-instagram"></i> Instagram</a>
        </div>
    </section>

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
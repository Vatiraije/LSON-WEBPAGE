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
    <meta name="description" content="LSON - Your source for all things Namibian Golf">
    <meta name="keywords" content="Namibian Golf, Golf Events, Golf Clubs, Player Profiles">
    <link rel="icon" href="favicon.ico">
    <script src="https://kit.fontawesome.com/159bedbb65.js" crossorigin="anonymous"></script>
    <title>LSON - Namibian Golf</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <!-- Keep your header section unchanged -->
    <div class="header">
        <h1><a href="../index.php">LSON</a> - Golf</h1>
        <p>Your source for all things Namibian Golf</p>
        <div class="navigation">
            <a href="football.php">All</a>
            <a href="clubs.php">Clubs</a>
            <a href="leagues.php">Leagues</a>
            <a href="../All sports/golfProfile.php">Player Profiles</a>
            <a href="swimming.php">Training and Development</a>
            <a href="boxing.php">Supporters Club</a>
            <a href="golf.php">Events</a>
            <a href="History.php">History</a>
        </div>
    </div>

    <!-- Main Content Area with Bootstrap -->
    <div class="container my-4">
        <div class="row">
            <!-- Side Menu Section -->
            <div class="col-md-3">
                <div class="vertical-nav bg-dark text-light p-3" id="sidemenu">
                    <i class="fa-solid fa-xmark" id="closeMenuIcon" onclick="closemenu()"></i>
                    <div class="menu-items mt-4">
                        <a href="basketball.php" class="nav-link text-light">Basketball</a>
                        <a href="bowling.php" class="nav-link text-light">Bowling</a>
                        <a href="boxing.php" class="nav-link text-light">Boxing</a>
                        <a href="chess.php" class="nav-link text-light">Chess</a>
                        <a href="cricket.php" class="nav-link text-light">Cricket</a>
                        <!-- Add more links here -->
                    </div>
                </div>
            </div>

            <!-- Main Content Section -->
            <div class="col-md-9">
                <div class="main-content">
                    <!-- Your main content goes here -->
                    <h2>Welcome to Namibian Golf Events</h2>
                    <p>Stay updated with the latest news, events, and developments in the world of Namibian golf.</p>
                    <!-- Add your dynamic PHP content or static content here -->
                </div>
            </div>
        </div>
    </div>

    <!-- Keep your footer section unchanged -->
    <div class="footer">
        <p>&copy; 2024 LSON - Level Sports of Namibia. All rights reserved.</p>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="golf.js"></script>
    <script>
        var sidemenu = document.getElementById("sidemenu");
        var hamburgerIcon = document.getElementById("hamburgerIcon");

        function openmenu() {
            sidemenu.style.left = "0";  // Open the menu
            sidemenu.style.overflowY = 'auto';  // Enable scrolling
            hamburgerIcon.style.display = "none";  // Hide the hamburger icon when menu is open
            document.body.style.overflowY = 'hidden';  // Disable body scroll when menu is open
        }

        function closemenu() {
            sidemenu.style.left = "-300px";  // Close the menu
            sidemenu.style.overflowY = 'hidden';  // Disable scrolling when the menu is closed
            hamburgerIcon.style.display = "block";  // Show the hamburger icon
            document.body.style.overflowY = 'auto';  // Re-enable body scroll
        }
    </script>
</body>
</html>

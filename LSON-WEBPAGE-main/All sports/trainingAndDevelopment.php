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
    

    <style>
    .header {
    background: #004d00;
    /* Dark Green */
    color: white;
    text-align: center;
    position: sticky;
    top: 3%;
    z-index: 1000;
    opacity: 0.9;
    height: 75px;
}
.navigation {
    background-color: rgba(7, 137, 7, 0.7);
    text-align: center;
    position: absolute;
    margin-right: 0;
    right: 0;
    width: 100%;
  /*  padding-top: -30px;*/
    height: 30px;
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
    <!-- Keep your header section unchanged -->
    <div class="header">
        <h1><a href="../index.php">LSON</a> - Golf</h1>
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
            </div>
            </div>

        

<!-- Main Content Section -->
<div class="main-content">
    <!--Golf events-->
    <section id="events" class="section">
        <div class="section-header">
            <h2 class="center-text">Training And Development</h2>
            <h3 class="center-text">Explore the Exciting World of Namibian Golf</h3>
            <p>Get ready for a thrilling lineup of golf events happening across Namibia. Whether you’re a seasoned golfer, a beginner, or just a fan of the sport, these events offer something for everyone. From competitive tournaments to social gatherings, these events are perfect for everyone looking to be part of the vibrant golfing community. The Namibian Golf Association proudly hosts a variety of events that encourage both players and spectators to engage in the sport while creating lasting memories.</p>
            <p>Experience the breathtaking landscapes of Namibia as you participate in or watch exciting competitions. Our events offer not only the thrill of the game but also the opportunity to meet fellow golf enthusiasts, attend workshops, and enjoy the festive atmosphere that accompanies every tournament. So grab your clubs and mark your calendars for the upcoming golf events!</p>
        </div>

        <div class="content">
            <!-- Example content -->
            <article>
                <h3>Windhoek Open Championship</h3>
                <p><strong>Date:</strong> September 15-17, 2024</p>
                <p><strong>Location:</strong> Windhoek Golf Club</p>
                <p><strong>Description:</strong> The prestigious Windhoek Open Championship attracts top golfers from across the region. Join us for three days of competitive golfing, entertainment, and great food!</p>
                <img src="../images/sages.jpg" alt="Windhoek Open Championship">
            </article>

            <article>
                <h3>Swakopmund Golf Clinic</h3>
                <p><strong>Date:</strong> October 5, 2024</p>
                <p><strong>Location:</strong> Swakopmund Golf Club</p>
                <p><strong>Description:</strong> Improve your game with a hands-on clinic led by experienced coaches. From beginners to advanced players, this clinic offers insights to elevate your skills.</p>
                <img src="../images/aweh1.png" alt="Swakopmund Golf Clinic">
            </article>

            <article>
                <h3>Annual Golf Gala</h3>
                <p><strong>Date:</strong> November 22, 2024</p>
                <p><strong>Location:</strong> Windhoek Country Club Resort</p>
                <p><strong>Description:</strong> Celebrate the achievements of the Namibian golfing community at the Annual Golf Gala. Enjoy an evening of fine dining, awards, and entertainment.</p>
                <img src="../images/gs11.png" alt="Annual Golf Gala">
            </article>

        </div>
    </section>

    <section class="section event-benefits">
        <h2 class="center-text">Why Attend These Events?</h2>
        <ul>
            <li><i class="fa-solid fa-check"></i> Witness top golfers in action at premium golf courses.</li>
            <li><i class="fa-solid fa-check"></i> Improve your own game with workshops and clinics led by professionals.</li>
            <li><i class="fa-solid fa-check"></i> Network with fellow golfers and fans of the sport.</li>
            <li><i class="fa-solid fa-check"></i> Enjoy entertainment, dining, and the vibrant golf community.</li>
            <li><i class="fa-solid fa-check"></i> Get inspired by Namibia's best golfing talent!</li>
        </ul>
    </section>

    <section class="section fan-interaction">
        <h2 class="center-text">Join the Conversation</h2>
        <p>Stay connected with the Namibian golf community through our social media channels. Share your experiences, post photos, and engage with fellow fans!</p>
        <div class="social-media">
            <a href="https://www.facebook.com/NamibianGolf" target="_blank"><i class="fa-brands fa-facebook"></i> Facebook</a>
            <a href="https://twitter.com/NamibianGolf" target="_blank"><i class="fa-brands fa-twitter"></i> Twitter</a>
            <a href="https://www.instagram.com/NamibianGolf" target="_blank"><i class="fa-brands fa-instagram"></i> Instagram</a>
        </div>
    </section>

    <section id="contact" class="section">
        <div class="section-header">
            <h2 class="center-text">Sign Up for Golf Training</h2>
            <p class="center-text">Fill out the form below to register for our golf events and stay updated with the latest happenings.</p>
        </div>
        <div class="registration-container">
            <!-- Display success or error message -->
            <?php if ($successMessage): ?>
                <div class="success-message"><?php echo htmlspecialchars($successMessage); ?></div>
            <?php endif; ?>

            <form action="golf_registration.php" method="POST">
                <div class="form-group">
                    <label for="firstname">First Name:</label>
                    <input type="text" id="firstname" name="firstname" required>
                </div>

                <div class="form-group">
                    <label for="lastname">Last Name:</label>
                    <input type="text" id="lastname" name="lastname" required>
                </div>

                <div class="form-group">
                    <label for="age">Age:</label>
                    <input type="number" id="age" name="age" required>
                </div>

                <div class="form-group">
                    <label for="gender">Gender:</label>
                    <select id="gender" name="gender" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone Number:</label>
                    <input type="tel" id="phone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="event">Event:</label>
                    <select id="event" name="event" required>
                        <option value="Windhoek Open Championship">Windhoek Open Championship</option>
                        <option value="Swakopmund Golf Clinic">Swakopmund Golf Clinic</option>
                        <option value="Annual Golf Gala">Annual Golf Gala</option>
                        <option value="Junior Golf Tournament">Junior Golf Tournament</option>
                    </select>
                </div>

                <div class="form-group full-width">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>

                <input type="submit" value="Register">
            </form>
        </div>
    </section>
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

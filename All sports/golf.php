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
            <a href="">All</a>
            <a href="clubs.php">Clubs</a>
            <a href="leagues.php">Leagues</a>
            <a href="../All sports/golfProfile.php">Player Profiles</a>
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
                <video src="../videos/golf2.mp4" controls></video>
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
                    <p>Latest updates and standings from the Namibian League.</p>
                    <img src="../images/pga.jpg" alt="GOLF PREMIER LEAGUE">
                </article>
                <article>
                    <h3>Namibian Tour</h3>
                    <p>Latest updates and standings from the Namibian First Division.</p>
                    <img src="../images/golfCup.jpg" alt="GOLF FIRST DIVISION">
                </article>
                <article>
                    <h3>SAGES</h3>
                    <p>Latest Events from the SAGES</p>
                    <img src="../images/sages.jpg" alt="GOLF1">
                </article>
                <br>
                <br>
                <br><br>
                <p></p>
                <p></p>
                <p></p>




            </div>
            <video src="../videos/golf1.mp4" controls>
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
                    <h3>Namibian Tour</h3>
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

            <section id="contact" class="section">
                <div class="section-header">
                    <h2 class="center-text">Register Now</h2>
                    <p class="center-text">Fill out the form below to register for the upcoming events.</p>
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
                            <label for="membership">Membership Type:</label>
                            <select id="membership" name="membership">
                                <option value="none">None</option>
                                <option value="standard">Standard</option>
                                <option value="premium">Premium</option>
                                <option value="vip">VIP</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="handicap">Handicap:</label>
                            <input type="number" id="handicap" name="handicap" required>
                        </div>

                        <!-- Additional fields -->
                        <div class="form-group">
                            <label for="golf_club">Golf Club:</label>
                            <input type="text" id="golf_club" name="golf_club" placeholder="Your Golf Club">
                        </div>

                        <div class="form-group">
                            <label for="tshirt_size">T-Shirt Size:</label>
                            <select id="tshirt_size" name="tshirt_size" required>
                                <option value="S">Small</option>
                                <option value="M">Medium</option>
                                <option value="L">Large</option>
                                <option value="XL">Extra Large</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </div>
                        <!-- End of additional fields -->

                        <div class="form-group full-width">
                            <label for="message">Message:</label>
                            <textarea id="message" name="message" rows="4" required></textarea>
                        </div>

                        <input type="submit" value="Register">
                    </form>
                </div>
            </section>
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
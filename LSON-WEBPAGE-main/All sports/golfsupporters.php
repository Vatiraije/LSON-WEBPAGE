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
                <h2 class="center-text">Supporters Club</h2>
                <h3 class="center-text">Welcome to the Namibian Golf Supporters Club</h3>
                <p>Join us in celebrating and supporting the beautiful game of golf in Namibia. Our club is dedicated to fostering a vibrant golf community, sharing news, and organizing events that bring together fans from across the country.</p>

            </div>

            <div class="content">
                <!-- Example content -->
                <article>
                    <h3> Windhoek Golf Championship Club</h3>
                    
                    <img src="../images/sages.jpg" alt="GOLF PREMIER LEAGUE">
                </article>
                <article>
                    <h3>Swakopmund Golf Clinic</h3>
                   
                    <img src="../images/aweh1.png" alt="GOLF FIRST DIVISION">
                </article>

                <article>
                <h3>Annual Golf Gala</h3>
                
                <img src="../images/gs11.png" alt="GOLF FIRST DIVISION">
                </article>
                <br>
                <br>
                <br><br>
                <p></p>
                <p></p>
                <p></p>
               
                
            </div>
           
        </section>



        

        <section class="section member-benefits">
            <h2 class="center-text">Member Benefits</h2>
            <ul>
                <li><i class="fa-solid fa-check"></i> Exclusive access to special golf events and tournaments.</li>
                <li><i class="fa-solid fa-check"></i> Discounts on golf equipment and apparel at partnered stores.</li>
                <li><i class="fa-solid fa-check"></i> Invitations to member-only golf clinics and workshops.</li>
                <li><i class="fa-solid fa-check"></i> Monthly newsletter with golf news, tips, and updates.</li>
                <li><i class="fa-solid fa-check"></i> Access to a network of fellow golf enthusiasts and professionals.</li>
            </ul>
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

        <section id="contact" class="section">
    <div class="section-header">
        <h2 class="center-text">Become A Member Now</h2>
        <p class="center-text">Fill out the form below to register for golf club memebership.</p>
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


    </main>

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

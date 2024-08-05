<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSON - Namibian Netball</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('./images/Soccer images/soccer-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        .header {
            background: #d04ac6;
            padding: 20px;
            color: white;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            opacity: 0.9;
        }

        .header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .header p {
            margin: 0;
            font-size: 1.2em;
        }

        .navigation {
            background-color: rgba(0, 0, 0, 0.7);
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
            background-color: #d04ac6; /* Yellow */
        }

        .vertical-nav {
            width: 180px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            background: linear-gradient(to bottom, #0f2027, #203a43, #2c5364);
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
            z-index: 1000;
            overflow-y: auto;
        }

        .vertical-nav a {
            padding: 10px 15px;
            text-decoration: none;
            font-size: 16px;
            color: #fff;
            display: block;
            transition: all 0.3s;
            border-radius: 4px;
            margin: 5px 10px;
        }

        .vertical-nav a:hover {
            background: #d04ac6; /* Highlight */
            transform: translateX(10px);
        }

        .vertical-nav a.active {
            background: #d04ac6;
        }

        .main-content {
            margin-left: 200px; /* Same width as the vertical navbar + some margin */
            padding: 20px;
            max-width: 1200px;
        }

        .section {
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .section-header {
            margin-bottom: 10px;
        }

        .section-header h2 {
            font-size: 2.5em;
            color: #d04ac6; /* Yellow */
            margin-bottom: 10px;
        }

        .section-header p {
            font-size: 1.2em;
            color: #fff; /* Light text */
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-around;
        }

        .content article,
        .content img,
        .content video {
            flex: 1 1 30%;
            max-width: 30%;
            background: black;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .content article:hover,
        .content img:hover,
        .content video:hover {
            transform: translateY(-5px);
        }

        .form-container {
            margin-top: 20px;
        }

        form {
            margin: 20px 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form input[type="text"] {
            width: 100%;
            max-width: 400px;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s;
        }

        form input[type="text"]:focus {
            border-color: #d04ac6; /* Yellow */
            outline: none;
            box-shadow: 0 2px 8px rgba(255, 215, 0, 0.2);
        }

        form input[type="text"]::placeholder {
            color: #aaa;
            font-style: italic;
        }

        .footer {
            background: linear-gradient(to right, #000000, #ffd700); /* Black to Yellow gradient */
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
            opacity: 0.9;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .content {
                flex-direction: column;
                align-items: center;
            }

            .content article,
            .content img,
            .content video {
                max-width: 90%;
            }

            .vertical-nav {
                width: 100%;
                height: auto;
                position: relative;
            }

            .vertical-nav a {
                float: left;
                padding: 10px;
            }

            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>LSON - Namibian Netball</h1>
        <p>Your source for all things Namibian Netball</p>
    </div>

    <div class="navigation">
        <a href="football.php">All</a>
        <a href="rugby.php">Teams</a>
        <a href="football.php">Leagues</a>
        <a href="tennis.php">Player Profiles</a>
        <a href="swimming.php">Training and Development</a>
        <a href="boxing.php">Supporters Club</a>
        <a href="golf.php">News &amp;Updates</a>
        <a href="golf.php">History</a>
    </div>

    <div class="vertical-nav">
        <a href="basketball.php" class="active">Basketball</a>
        <a href="bowling.php">Bowling</a>
        <a href="boxing.php">Boxing</a>
        <a href="chess.php">Chess</a>
        <a href="cricket.php">Cricket</a>
        <a href="cycling.php">Cycling</a>
        <a href="esports.php">E-Sports</a>
        <a href="football.php">Football</a>
        <a href="futsal.php">Futsal</a>
        <a href="golf.php">Golf</a>
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
    </div>

    <div class="main-content">
        <section id="leagues" class="section">
            <div class="section-header">
                <h2>Netball Leagues</h2>
                <p>Explore the latest updates, news, and standings from Namibian Netball.</p>
            </div>

            <div class="content">
                <!-- Example content -->
                <article>
                    <h3>Premier League</h3>
                    <p>Latest updates and standings from the Namibian Premier League.</p>
                    <img src="https://cdn.24.co.za/files/Cms/General/d/9963/c16bf81450a84432af29f24cf83714a3.jpg" alt="Premier League">
                </article>
                <article>
                    <h3>First to new updates</h3>
                    <p>Latest updates and standings from the Namibian Football.</p>
                    <img src="https://cdn.24.co.za/files/Cms/General/d/9963/c16bf81450a84432af29f24cf83714a3.jpg" alt="First Division">
                </article>
                <img src="https://cdn.24.co.za/files/Cms/General/d/9963/c16bf81450a84432af29f24cf83714a3.jpg" alt="Namibian Soccer Team">
                <video src="videos/ANGOLA VS NAMIBIA (5-0) COSFA CUP FINAL FULL HIGHLIGHTS & GOALS 2024.mp4" controls></video>
            </div>
        </section>

        <section id="standings" class="section">
            <div class="section-header">
                <h2>Current Standings</h2>
                <p>Check out the current standings in Namibian Netball leagues.</p>
            </div>
            <div class="content">
                <!-- Standings table goes here -->
                <article>
                    <h3>Premier League Standings</h3>
                    <p>1. Team A - 50 points<br>2. Team B - 48 points<br>3. Team C - 45 points</p>
                </article>

                <article>
                    <h3>First Division Standings</h3>
                    <p>1. Team D - 55 points<br>2. Team E - 52 points<br>3. Team F - 50 points</p>
                </article>
            </div>
        </section>

        <section id="players" class="section">
            <div class="section-header">
                <h2>Top Players</h2>
                <p>Profiles of the top players in Namibian Netball.</p>
            </div>
            <div class="content">
                <!-- Player profiles go here -->
                <article>
                    <h3>Player 1</h3>
                    <p>Aliquam imperdiet sem at dolor lobortis, ac pharetra nisi porta. Fusce tincidunt erat commodo magna viverra feugiat.</p>
                </article>

                <article>
                    <h3>Player 2</h3>
                    <p>Aliquam imperdiet sem at dolor lobortis, ac pharetra nisi porta. Fusce tincidunt erat commodo magna viverra feugiat.</p>
                </article>

                <article>
                    <h3>Player 3</h3>
                    <p>Aliquam imperdiet sem at dolor lobortis, ac pharetra nisi porta. Fusce tincidunt erat commodo magna viverra feugiat.</p>
                </article>
            </div>
        </section>

        <section id="teams" class="section">
            <div class="section-header">
                <h2>Top Teams</h2>
                <p>Profiles of the top teams in Namibian Netball.</p>
            </div>
            <div class="content">
                <!-- Team profiles go here -->
                <article>
                    <h3>Team 1</h3>
                    <p>Quisque sit amet elit gravida, ultricies odio nec, aliquam orci. Ut vitae sem a dolor eleifend dapibus id ac est.</p>
                </article>

                <article>
                    <h3>Team 2</h3>
                    <p>Quisque sit amet elit gravida, ultricies odio nec, aliquam orci. Ut vitae sem a dolor eleifend dapibus id ac est.</p>
                </article>

                <article>
                    <h3>Team 3</h3>
                    <p>Quisque sit amet elit gravida, ultricies odio nec, aliquam orci. Ut vitae sem a dolor eleifend dapibus id ac est.</p>
                </article>
            </div>
        </section>
    </div>

    <div class="footer">
        &copy; 2024 LSON. All rights reserved.
    </div>
</body>
</html>

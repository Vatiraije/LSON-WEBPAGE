<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSON - Namibian Soccer</title>
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
            background: linear-gradient(to right, #000000, #ffd700); /* Black to Yellow gradient */
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
            background-color: #ffd700; /* Yellow */
        }

        .main-content {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
            border-radius: 10px;
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
            color: #ffd700; /* Yellow */
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
            border-color: #ffd700; /* Yellow */
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
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>LSON - Namibian football</h1>
        <p>Your source for all things Namibian football</p>
    </div>

    <div class="navigation">
        <a href="football.php">Soccer</a>
        <a href="rugby.php">Rugby</a>
        <a href="tennis.php">Tennis</a>
        <a href="swimming.php">Swimming</a>
        <a href="boxing.php">Boxing</a>
        <a href="golf.php">Golf</a>
        <a href="cricket.php">Cricket</a>
    </div>

    <div class="main-content">
        <section id="leagues" class="section">
            <div class="section-header">
                <h2>Soccer Leagues</h2>
                <p>Explore the latest updates, news, and standings from Namibian football.</p>
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
                <p>Check out the current standings in Namibian soccer leagues.</p>
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
                <p>Profiles of the top players in Namibian soccer.</p>
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
                <p>Profiles of the top teams in Namibian soccer.</p>
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

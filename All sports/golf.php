<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSON - Namibian Golf</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('./images/golf-images/golf-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        .header {
            background: #004d00; /* Dark Green */
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
            background-color: rgba(0, 77, 0, 0.7);
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
            background-color: #004d00; /* Dark Green */
        }

        .vertical-nav {
            width: 220px;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            background: #004d00; /* Dark Green */
            padding-top: 20px;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .vertical-nav a {
            padding: 15px 25px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
            transition: all 0.3s;
            border-radius: 4px;
            margin: 5px 10px;
        }

        .vertical-nav a:hover {
            background: white; /* White */
            color: #004d00; /* Dark Green text */
            transform: translateX(10px);
        }

        .vertical-nav a.active {
            background: white; /* White */
            color: #004d00; /* Dark Green text */
        }

        .main-content {
            margin-left: 240px; /* Same width as the vertical navbar + some margin */
            padding: 20px;
            max-width: 1200px;
        }

        .section {
            background-color: rgba(0, 77, 0, 0.8);
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
            color: white; /* White */
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
            background: white;
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
            border-color: #004d00; /* Dark Green */
            outline: none;
            box-shadow: 0 2px 8px rgba(0, 77, 0, 0.2);
        }

        form input[type="text"]::placeholder {
            color: #aaa;
            font-style: italic;
        }

        .footer {
            background: #004d00; /* Dark Green */
            color: white; /* White text */
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
        <h1>LSON - Namibian Golf</h1>
        <p>Your source for all things Namibian Golf</p>
    </div>

    <div class="navigation">
        <a href="football.php">All</a>
        <a href="rugby.php">Teams</a>
        <a href="football.php">Leagues</a>
        <a href="tennis.php">Player Profiles</a>
        <a href="swimming.php">Training and Development</a>
        <a href="boxing.php">Supporters Club</a>
        <a href="golf.php">Events</a>
    </div>

    <div class="vertical-nav">
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
    </div>

    <div class="main-content">
        <section id="leagues" class="section">
            <div class="section-header">
                <h2>Golf Leagues</h2>
                <p>Explore the latest updates, news, and standings from Namibian Golf.</p>
            </div>

            <div class="content">
                <!-- Example content -->
                <article>
                    <h3>Premier League</h3>
                    <p>Latest updates and standings from the Namibian Premier League.</p>
                    <img src="images/golf.jpg" alt="GOLF PREMIER LEAGUE">
                </article>
                <article>
                    <h3>First Division</h3>
                    <p>Latest updates and standings from the Namibian First Division.</p>
                    <img src="images/golf2.jpg" alt="GOLF FIRST DIVISION">
                </article>
                <img src="images/golf3.jpg" alt="GOLF">
                <video src="videos/golf_highlights.mp4" controls></video>
            </div>
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

        <div class="form-container">
            <form action="" method="GET">
                <input type="text" name="search" placeholder="Search players, teams, leagues...">
            </form>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 LSON - Level Sports of Namibia. All rights reserved.</p>
    </div>
</body>
</html>

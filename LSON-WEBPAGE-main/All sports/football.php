<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSON - Namibian Football</title>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: 'Oswald', sans-serif;
            background: url('./images/Soccer images/soccer-bg.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            position: relative;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Semi-transparent overlay */
            z-index: -1;
        }

        .header {
            background: #ffd700;
            padding: 20px;
            color: black;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            opacity: 0.9;
            animation: slideDown 1s ease-in-out;
        }

        @keyframes slideDown {
            from { transform: translateY(-100%); }
            to { transform: translateY(0); }
        }

        .header h1 {
            margin: 0;
            font-size: 2.5em;
            font-weight: 600;
        }

        .header p {
            margin: 0;
            font-size: 1.2em;
            font-weight: 300;
        }

        .navigation {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px 0;
            text-align: center;
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .navigation a {
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            font-weight: 500;
            transition: background 0.3s, transform 0.3s;
        }

        .navigation a:hover {
            background-color: #333;
            transform: scale(1.1);
        }

        .story-section {
            position: relative;
            width: 100%;
            height: 500px;
            margin-bottom: 20px;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            animation: fadeInUp 1s ease-in-out;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .story-section h2, 
        .story-section p {
            position: absolute;
            color: #fff;
            margin: 0;
            padding: 20px;
            background: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            animation: textGlow 1.5s ease-in-out infinite alternate;
        }

        @keyframes textGlow {
            from { text-shadow: 0 0 5px #ffd700, 0 0 10px #ffd700; }
            to { text-shadow: 0 0 20px #ffd700, 0 0 30px #ffd700; }
        }

        .story-section h2 {
            bottom: 60px;
            left: 20px;
            font-size: 2.5em;
            font-weight: 600;
        }

        .story-section p {
            bottom: 20px;
            left: 20px;
            font-size: 1.2em;
            font-weight: 300;
        }

        .main-content {
            margin: 20px auto;
            padding: 20px;
            max-width: 1200px;
        }

        .section {
            background-color: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            animation: fadeInUp 1s ease-in-out;
        }

        .section-header h2 {
            font-size: 2.5em;
            color: #ffd700;
            margin-bottom: 10px;
            font-weight: 600;
            animation: textGlow 1.5s ease-in-out infinite alternate;
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
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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
            border-color: #ffd700;
            outline: none;
            box-shadow: 0 2px 8px rgba(255, 215, 0, 0.2);
        }

        form input[type="text"]::placeholder {
            color: #aaa;
            font-style: italic;
        }

        .footer {
            background: linear-gradient(180deg, #333, #000); /* Gradient background */
            color: #ffd700;
            text-align: center;
            padding: 20px;
            position: relative;
            margin-top: 40px;
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

            .story-section h2 {
                font-size: 1.8em;
            }

            .story-section p {
                font-size: 1em;
            }

            .main-content {
                margin-left: 0;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>LSON - Namibian Football</h1>
        <p>Your source for all things Namibian Football</p>
    </div>

    <div class="navigation">
        <a href="football.php">All</a>
        <a href="teams.php">Teams</a>
        <a href="leagues.php">Leagues</a>
        <a href="PlayerProfiles.php">Player Profiles</a>
        <a href="Training_development.php">Training and Development</a>
        <a href="SupportersClub.php">Supporters Club</a>
        <a href="Events.php">Events</a>
    </div>

    <div class="main-content">
        <section id="leagues" class="section">
            <div class="section-header">
                <h2>Football Leagues</h2>
                <p>Explore the latest updates, news, and standings from Namibian Football.</p>
            </div>

            <div class="content">
                <!-- Example content -->
                <article>
                    <h3>Premier League</h3>
                    <p>Latest updates and standings from the Namibian Premier League.</p>
                    <img src="images/football.jpg" alt="FOOTBALL PREMIER LEAGUE">
                </article>
                <article>
                    <h3>First to new updates</h3>
                    <p>Latest updates and standings from the Namibian Football.</p>
                    <img src="images/football2.jpeg" alt="FOOTBALL PREMIER LEAGUE">
                </article>
                <img src="images/football3.jpeg" alt="FOOTBALL PREMIER LEAGUE">
                <video src="videos/ANGOLA VS NAMIBIA (5-0) COSFA CUP FINAL FULL HIGHLIGHTS & GOALS 2024.mp4" controls></video>
            </div>
        </section>

        <section id="standings" class="section">
            <div class="section-header">
                <h2>Standings</h2>
                <p>Check out the current standings of your favorite teams.</p>
            </div>

            <div class="content">
                <!-- Example standings content -->
                <article>
                    <h3>Premier League</h3>
                    <p>1. Team A - 45 points</p>
                    <p>2. Team B - 42 points</p>
                    <p>3. Team C - 39 points</p>
                </article>
                <article>
                    <h3>First Division</h3>
                    <p>1. Team X - 40 points</p>
                    <p>2. Team Y - 38 points</p>
                    <p>3. Team Z - 35 points</p>
                </article>
            </div>
        </section>

        <section id="players" class="section">
            <div class="section-header">
                <h2>Player Profiles</h2>
                <p>Get to know the top players in Namibian Football.</p>
            </div>

            <div class="content">
                <!-- Example player profiles -->
                <article>
                    <h3>Player A</h3>
                    <p>Position: Forward</p>
                    <p>Goals: 20</p>
                </article>
                <article>
                    <h3>Player B</h3>
                    <p>Position: Midfielder</p>
                    <p>Assists: 15</p>
                </article>
            </div>
        </section>

        <div class="form-container">
            <form action="#">
                <input type="text" placeholder="Search for a match or team...">
            </form>
        </div>
    </div>

    <div class="footer">
        <p>&copy; 2024 LSON. All Rights Reserved.</p>
    </div>
</body>
</html>

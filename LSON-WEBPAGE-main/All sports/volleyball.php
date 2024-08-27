<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSON - Volleyball</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
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
            background: #8e54dd;
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
            background-color: #8e54dd;
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
            background: #8e54dd;
            transform: translateX(10px);
        }

        .vertical-nav a.active {
            background: #8e54dd;
        }

        .main-content {
            margin-left: 200px;
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
            color: #8e54dd;
            margin-bottom: 10px;
        }

        .section-header p {
            font-size: 1.2em;
            color: #fff;
        }

        .content {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-around;
        }

        .card {
            background-color: #fff;
            color: #000;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin: 10px;
            text-align: center;
            flex: 1 1 calc(33.333% - 40px);
            box-sizing: border-box;
            transition: transform 0.3s;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            max-width: 100%;
            border-radius: 10px 10px 0 0;
        }

        .card h3 {
            margin: 10px 0;
            font-size: 1.5em;
        }

        .card p {
            font-size: 1em;
        }

        .footer {
            background: linear-gradient(to right, #000000, #ffd700);
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
            opacity: 0.9;
        }

        @media (max-width: 768px) {
            .content {
                flex-direction: column;
                align-items: center;
            }

            .card {
                flex: 1 1 90%;
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
        <h1>LSON - Volleyball</h1>
        <p>Your source for all things Namibian Volleyball</p>
    </div>

    <div class="navigation">
        <a href="football.php">All</a>
        <a href="rugby.php">Teams</a>
        <a href="football.php">Leagues</a>
        <a href="tennis.php">Player Profiles</a>
        <a href="swimming.php">Training and Development</a>
        <a href="boxing.php">Supporters Club</a>
        <a href="golf.php">News & Updates</a>
        <a href="golf.php">History</a>
    </div>

    <div class="vertical-nav">
        <a href="index.php"><i class="fas fa-home"></i> Home</a>
        <a href="basketball.php">Basketball</a>
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
        <a href="volleyball.php" class="active">Volleyball</a>
    </div>

    <div class="main-content">
        <!-- Volleyball Leagues Section -->
        <div class="section">
            <div class="section-header">
                <h2>Volleyball Leagues</h2>
                <p>Explore the various volleyball leagues in Namibia</p>
            </div>
            <div class="content">
                <div class="card">
                    <img src="./images/netball2.jpeg" alt="Volleyball League 1">
                    <h3>Premier League</h3>
                    <p>The top tier of Volleyball featuring the best teams in the country.</p>
                </div>
                <div class="card">
                    <img src="./images/netball-league-2.jpg" alt="Volleyball League 2">
                    <h3>First Division</h3>
                    <p>Competitive league with teams vying for promotion to the Premier League.</p>
                </div>
                <div class="card">
                    <img src="./images/Volleyball-league-3.jpg" alt="Volleyball League 3">
                    <h3>Second Division</h3>
                    <p>Emerging teams showcasing talent and aiming for higher leagues.</p>
                </div>
            </div>
        </div>

        <!-- Current Standings Section -->
        <div class="section">
            <div class="section-header">
                <h2>Current Standings</h2>
                <p>Check out the latest standings of the teams</p>
            </div>
            <div class="content">
                <div class="card">
                    <h3>Premier League</h3>
                    <p>1. Team A - 30 Points</p>
                    <p>2. Team B - 28 Points</p>
                    <p>3. Team C - 27 Points</p>
                </div>
                <div class="card">
                    <h3>First Division</h3>
                    <p>1. Team D - 25 Points</p>
                    <p>2. Team E - 23 Points</p>
                    <p>3. Team F - 22 Points</p>
                </div>
                <div class="card">
                    <h3>Second Division</h3>
                    <p>1. Team G - 20 Points</p>
                    <p>2. Team H - 18 Points</p>
                    <p>3. Team I - 17 Points</p>
                </div>
            </div>
        </div>

        <!-- Top Players Section -->
        <div class="section">
            <div class="section-header">
                <h2>Top Players</h2>
                <p>Meet the top-performing players in Namibian Volleyball</p>
            </div>
            <div class="content">
                <div class="card">
                    <img src="./images/player-1.jpg" alt="Player 1">
                    <h3>Player A</h3>
                    <p>Position: Goal Shooter</p>
                    <p>Team: Team A</p>
                </div>
                <div class="card">
                    <img src="./images/player-2.jpg" alt="Player 2">
                    <h3>Player B</h3>
                    <p>Position: Wing Attack</p>
                    <p>Team: Team B</p>
                </div>
                <div class="card">
                    <img src="./images/player-3.jpg" alt="Player 3">
                    <h3>Player C</p>
                    <p>Position: Centre</p>
                    <p>Team: Team C</p>
                </div>
            </div>
        </div>

        <!-- Top Teams Section -->
        <div class="section">
            <div class="section-header">
                <h2>Top Teams</h2>
                <p>Discover the top teams leading the Volleyball leagues</p>
            </div>
            <div class="content">
                <div class="card">
                    <img src="./images/team-1.jpg" alt="Team 1">
                    <h3>Team A</h3>
                    <p>Leading the Premier League with outstanding performances.</p>
                </div>
                <div class="card">
                    <img src="./images/team-2.jpg" alt="Team 2">
                    <h3>Team B</h3>
                    <p>Strong contenders in the Premier League, consistently in top positions.</p>
                </div>
                <div class="card">
                    <img src="./images/team-3.jpg" alt="Team 3">
                    <h3>Team C</h3>
                    <p>Known for their teamwork and strategic plays in the Premier League.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        &copy; 2024 LSON. All rights reserved.
    </div>
</body>
</html>

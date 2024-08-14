
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1,0">
        <title>Document</title>

        <link rel="stylesheet" href="golf.css">

        <style>
    /* styles.css */
body {
    font-family: Arial, sans-serif;
    color: black;
    margin: 0;
    padding: 0;
    background: url(../All sports/golf/pexels-kindelmedia-6572964.jpg.jpg);
    background-repeat: no-repeat;
        /* Prevents the image from repeating */
        background-size: cover;
        /* Ensures the image covers the entire viewport */
        background-attachment: fixed;
        /* Keeps the background fixed in place during scroll */
        background-position: center center;
        
}
.history-container {
    width: 80%;
    margin: 70px auto;
    background: rgba(255, 255, 255, 0.3);
    /* Semi-transparent white background */
    border-radius: 10px;
    backdrop-filter: blur(10px);
    /* Frosted glass effect */
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.tabs {
    display: flex;
    margin-bottom: 20px;
}

.tab-button {
    background: rgba(255, 255, 255, 0.7);
    /* Light background with some transparency */
    border: 1px solid #ddd;
    border-radius: 4px;
    padding: 10px 20px;
    margin-right: 5px;
    cursor: pointer;
    font-size: 16px;
    text-align: center;
    transition: background 0.3s ease;
}

.tab-button.active {
    background-color: rgba(0, 123, 255, 0.8);
    /* Active tab color */
    color: white;
}

.tab-content {
    display: flex;
    flex-direction: column;
}

.tab-content-section {
    display: none;
}

.tab-content-section.active {
    display: block;
}

.content-item {
    display: flex;
    margin-bottom: 20px;
    background: rgba(255, 255, 255, 0.7);
    /* Light background with some transparency */
    border-radius: 10px;
    padding: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.content-item img {
    width: 300px;
    height: 200px;
    object-fit: cover;
    border-radius: 8px;
    margin-right: 20px;
}

.content-info {
    max-width: 600px;
}

.content-info h3 {
    margin: 0 0 10px;
}

.content-info p {
    margin: 0;
}
 </style>

        
</head>
<body>

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
        <a href="football.php">All</a>
         <a href="clubs.php">Clubs</a>
        <a href="football.php">Leagues</a>
        <a href="tennis.php">Player Profiles</a>
        <a href="swimming.php">Training and Development</a>
        <a href="boxing.php">Supporters Club</a>
        <a href="golf.php">Events</a>
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
<div class="history-container">
    
        <div class="tabs">
            <button class="tab-button active" data-tab="winners">Previous Winners</button>
            <button class="tab-button" data-tab="scorelines">Score Lines</button>
            <button class="tab-button" data-tab="players">Players</button>
        </div>
        <div class="tab-content">
            <div id="winners" class="tab-content-section active">
                <h2>Previous Winners</h2>
                <div class="content-item">
                    <img src="https://via.placeholder.com/300x200?text=Winner+1" alt="Winner 1">
                    <div class="content-info">
                        <h3>John Doe</h3>
                        <p>Winner of 2023 Golf Championship. Known for his exceptional putting skills.</p>
                    </div>
                </div>
                <div class="content-item">
                    <img src="https://via.placeholder.com/300x200?text=Winner+2" alt="Winner 2">
                    <div class="content-info">
                        <h3>Jane Smith</h3>
                        <p>Winner of 2022 Golf Championship. Famous for her powerful drives.</p>
                    </div>
                </div>
            </div>
            <div id="scorelines" class="tab-content-section">
                <h2>Score Lines</h2>
                <div class="content-item">
                    <img src="https://via.placeholder.com/300x200?text=Scoreline+1" alt="Scoreline 1">
                    <div class="content-info">
                        <h3>2023 Championship</h3>
                        <p>John Doe: 68-70-69 - 207</p>
                    </div>
                </div>
                <div class="content-item">
                    <img src="https://via.placeholder.com/300x200?text=Scoreline+2" alt="Scoreline 2">
                    <div class="content-info">
                        <h3>2022 Championship</h3>
                        <p>Jane Smith: 66-71-68 - 205</p>
                    </div>
                </div>
            </div>
            <div id="players" class="tab-content-section">
                <h2>Players</h2>
                <div class="content-item">
                    <img src="https://via.placeholder.com/300x200?text=Player+1" alt="Player 1">
                    <div class="content-info">
                        <h3>John Doe</h3>
                        <p>Professional golfer known for his consistency and strategic play.</p>
                    </div>
                </div>
                <div class="content-item">
                    <img src="https://via.placeholder.com/300x200?text=Player+2" alt="Player 2">
                    <div class="content-info">
                        <h3>Jane Smith</h3>
                        <p>Aspiring young talent with a bright future in golf.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content-section');

    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');

            // Remove active class from all tabs and buttons
            tabButtons.forEach(btn => btn.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));

            // Add active class to the clicked button and target tab content
            this.classList.add('active');
            document.getElementById(targetTab).classList.add('active');
        });
    });
});
</script>




</body>
</html>
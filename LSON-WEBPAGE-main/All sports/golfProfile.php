<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lson";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to fetch a single profile as JSON
function getProfileData($conn, $profileId)
{
    $sql = "SELECT name, age, yearWins, careerWins, topFive, homePlace FROM golfprofile WHERE playerId = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $profileId);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $stmt->close();
    return $data;
}

// Handle AJAX request for profile data
if (isset($_GET['action']) && $_GET['action'] == 'getProfileData') {
    $profileId = isset($_GET['id']) ? intval($_GET['id']) : 0;
    $profileData = getProfileData($conn, $profileId);
    header('Content-Type: application/json');
    echo json_encode($profileData);
    exit;
}

// Function to fetch and display all profiles
function displayAllProfiles($conn)
{
    $sql = "SELECT playerId, name FROM golfprofile";
    $result = $conn->query($sql);

    // Array of image paths
    $images = [
        "../images//golfer1.png",
        "../images//golfer1.png",
        "../images//golfer1.png",
    ];

    if ($result->num_rows > 0) {
        $i = 0; // Initialize index for images
        while ($row = $result->fetch_assoc()) {
            // Select image based on the current index
            $imgPath = $images[$i % count($images)];

            echo '<div class="fcard" data-profile-id="' . htmlspecialchars($row["playerId"]) . '">';
            echo '<img src="' . htmlspecialchars($imgPath) . '">';
            echo '<div class="card-content">';
            echo '<h2> ' . htmlspecialchars($row["name"]) . '</h2>';
            echo '</div>';
            echo '</div>';
            $i++; // Increment index
        }
    } else {
        echo "No profiles found";
    }
}
?>

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

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Poppins:wght@300&display=swap');

        body {
            background-image: url('golf/pexels-kindelmedia-6572964.jpg');
            font-family: "Inter", sans-serif;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
            margin: 0;
            padding: 0;
        }

        .section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 10px;
        }

        .fcard {
            display: flex;
            flex-direction: column;
            width: 200px;
            /* Further reduced width for the card */
            background: rgba(255, 255, 255, 0.3);
            /* Semi-transparent white */
            border-radius: 10px;
            margin: 10px;
            cursor: pointer;
            backdrop-filter: blur(10px);
            /* Creates the glassy effect */
            border: 1px solid rgba(255, 255, 255, 0.2);
            /* Subtle border */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2);
            /* Soft shadow */
            animation: walkout 1s ease-out forwards;
            overflow: hidden;
            /* Ensure that any overflow from images is hidden */
        }

        img {
            width: 100%;
            /* Make image cover the full width of the card */
            height: auto;
            /* Maintain aspect ratio */
            display: block;
            /* Ensure that image takes up full width */
        }

        .card-content {
            padding: 10px;
            text-align: center;
            /* Center the text */
        }

        .card-content h2 {
            margin: 0;
            /* Remove default margin */
            font-size: 0.9em;
            /* Adjust font size as needed */
        }

        /* Popup Container */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            /* Semi-transparent background */
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }

        /* Centered Popup Content with Glassy Effect */
        .popup-content {
            display: flex;
            width: 80%;
            max-width: 900px;
            /* Limit maximum width */
            height: auto;
            /* Adjust height based on content */
            padding: 20px;
            background: rgba(255, 255, 255, 0.3);
            /* Semi-transparent background for glassy effect */
            backdrop-filter: blur(10px);
            /* Apply blur for the glassy effect */
            justify-content: space-between;
            align-items: center;
            border-radius: 20px;
            /* Optional: Add slight rounding to the corners */
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            /* Optional: Add a subtle shadow for depth */
            position: relative;
            /* For positioning close button */
        }

        /* Info Section */
        .profile-info {
            flex: 2;
            /* Adjust width */
            padding: 20px;
            color: black;
            display: flex;
            flex-direction: column;
            justify-content: center;
            font-size: 1.2em;
            /* Adjust font size */
        }

        .profile-info h2 {
            margin-top: 0;
            font-size: 2em;
            /* Larger title font size */
        }

        .profile-info ul {
            padding: 0;
            list-style: none;
            margin: 0;
        }

        .profile-info li {
            margin-bottom: 10px;
            /* Adjust spacing */
        }

        /* Video Section */
        .video-container {
            flex: 1;
            /* Adjust width */
            padding: 20px;
            display: flex;
            justify-content: center;
        }

        .video-container video {
            width: 300px;
            /* Adjust width based on height */
            height: 300px;
            /* Set a fixed height for the video */
            border-radius: 10px;
        }

        /* Close Button */
        .popup-close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            color: black;
            cursor: pointer;
        }

        /*NavBar CSS*/
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: rgba(7, 137, 7, 0.7);
            color: #fff;
        }

        .brand-title {
            font-size: 1.5rem;
            margin: 0.8rem;
        }

        .navbar-links {
            flex: 1;
            /* Take up available space */
            display: flex;
            justify-content: center;
            /* Center the links horizontally */
        }

        .navbar-links ul {
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navbar-links li {
            list-style: none;
        }

        .navbar-links li:hover {
            background-color: rgba(7, 137, 7, 0.7);
        }

        .navbar-links li a {
            text-decoration: none;
            color: white;
            padding: 1rem;
            display: block;
        }

        .search-container {
            display: flex;
            align-items: center;
        }

        .search-container input {
            padding: 5px;
            border: none;
            border-radius: 4px 0 0 4px;
            font-size: 16px;
        }

        .search-container button {
            padding: 5px 10px;
            border: none;
            border-radius: 0 4px 4px 0;
            background: #555;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .search-container button:hover {
            background: rgba(7, 137, 7, 0.7);
        }

        .footer {
            background: #004d00;
            color: white;
            text-align: center;
            padding: 7px;
            position: fixed;
            bottom: 0;
            width: 100%;
            opacity: 0.9;
        }

        @media (max-width: 400px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .navbar-links {
                display: none;
                width: 100%;
            }

            .navbar-links.active {
                display: flex;
            }

            .navbar-links ul {
                width: 100%;
                flex-direction: column;
            }

            .navbar-links li {
                text-align: center;
            }

            .navbar-links li a {
                padding: 0.5rem 1rem;
            }

            .search-container {
                margin-left: auto;
            }
        }

        /* Existing styles... */

        .search-wrapper {
            position: absolute;
            top: 170px;
            /* Adjust this value as needed to position below the header */
            right: 10px;
            /* Adjust this value as needed for the left margin */
            width: auto;
            /* Adjust width as needed */
        }

        .search-container {
            display: flex;
            align-items: center;
            background-color: #fff;
            /* Optional: background color for better visibility */
            border-radius: 4px;
            /* Optional: round corners */
        }

        .search-container input {
            padding: 5px;
            border: none;
            border-radius: 4px 0 0 4px;
            font-size: 16px;
        }

        .search-container button {
            padding: 5px 10px;
            border: none;
            border-radius: 0 4px 4px 0;
            background: #555;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .search-container button:hover {
            background: rgba(7, 137, 7, 0.7);
        }

        /* Adjustments to header to make space for search-wrapper */
        .header {
            position: relative;
            z-index: 1;
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
    <br>


    <div class="header">
        <h1><a href="../index.php">LSON</a> - Golf</h1>
        <p>Your source for all things Namibian Golf</p>
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


    <div class="search-wrapper">
        <div class="search-container">
            <input type="text" id="search-input" placeholder="Search...">
            <button type="submit" id="search-button">Search</button>
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

        <!-- Profile Section -->
        <div class="section">
            <?php displayAllProfiles($conn); ?>
        </div>

        <!-- Popup Container -->
        <div class="popup">
            <div class="popup-content">
                <div class="profile-info">
                    <!-- Player Info will be dynamically populated here -->
                </div>
                <div class="video-container">
                    <video src="../images/PlayerAppearance2.mp4" class="Player-gif" autoplay loop muted></video>
                </div>
                <span class="popup-close">&times;</span>
            </div>
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

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var cards = document.querySelectorAll('.fcard');
                var popup = document.querySelector('.popup');
                var popupInfo = document.querySelector('.profile-info');
                var popupClose = document.querySelector('.popup-close');

                // Ensure the popup stays hidden initially
                popup.style.display = 'none';

                function openPopup(profileId) {
                    fetch('golfprofile.php?action=getProfileData&id=' + profileId)
                        .then(response => response.json())
                        .then(data => {
                            popupInfo.innerHTML = `
                            <h2>Player name: ${data.name}</h2>
                            <ul>
                                <li>Age: ${data.age}</li>
                                <li>Year Wins: ${data.yearWins}</li>
                                <li>Career Wins: ${data.careerWins}</li>
                                <li>Total Top Five: ${data.topFive}</li>
                                <li>Home-Place: ${data.homePlace}</li>
                            </ul>
                        `;
                            popup.style.display = 'flex'; // Show popup when profile is clicked
                        })
                        .catch(error => {
                            console.error('Error fetching profile data:', error);
                        });
                }

                // Attach event listeners to profile cards
                cards.forEach(function(card) {
                    card.addEventListener('click', function() {
                        var profileId = this.getAttribute('data-profile-id');
                        openPopup(profileId);
                    });
                });

                // Close popup when clicking outside of the popup content
                window.addEventListener('click', function(event) {
                    if (event.target === popup) {
                        popup.style.display = 'none'; // Hide popup
                    }
                });

                // Close popup when clicking the close button
                popupClose.onclick = function() {
                    popup.style.display = 'none'; // Hide popup
                };

                var cards = document.querySelectorAll('.fcard');
                var searchInput = document.getElementById('search-input');
                var searchButton = document.getElementById('search-button');

                // Function to filter cards based on search input
                function filterCards() {
                    var searchText = searchInput.value.toLowerCase();

                    cards.forEach(function(card) {
                        var playerName = card.querySelector('h2').textContent.toLowerCase();
                        if (playerName.includes(searchText)) {
                            card.style.display = 'flex'; // Show matching cards
                        } else {
                            card.style.display = 'none'; // Hide non-matching cards
                        }
                    });
                }

                // Event listener for typing in the search box
                searchInput.addEventListener('input', filterCards);

                // Event listener for clicking the search button
                searchButton.addEventListener('click', function(event) {
                    event.preventDefault();
                    filterCards();
                });
            });
        </script>
</body>

</html>
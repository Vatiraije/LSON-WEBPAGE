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
        "../images/EntranceMale.png",
        "../images/EntranceFemale.png",
        "../images/EntranceNeutral.png"
    ];

    if ($result->num_rows > 0) {
        $i = 0; // Initialize index for images
        while ($row = $result->fetch_assoc()) {
            // Select image based on the current index
            $imgPath = $images[$i % count($images)];

            echo '<div class="fcard" data-profile-id="' . htmlspecialchars($row["playerId"]) . '">';
            echo '<img src="' . htmlspecialchars($imgPath) . '">';
            echo '<div class="article">';
            echo '<h2>Player name: ' . htmlspecialchars($row["name"]) . '</h2>';
            echo '</div>';
            echo '</div>';

            $i++; // Increment index
        }
    } else {
        echo "No profiles found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/159bedbb65.js" crossorigin="anonymous"></script>
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
            padding: 30px;
        }

        .fcard {
            display: flex;
            flex-direction: column;
            width: 290px;
            height: 490px;
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
            transition: transform 0.3s ease, background 0.3s ease;
            /* Smooth transitions */
        }

        .fcard:hover {
            transform: scale(1.05);
            /* Slight expansion */
            background: rgba(255, 255, 255, 0.6);
            /* Slightly darker background */
            box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.3);
            /* Stronger shadow */
        }

        img {
            height: 390px;
            width: 100%;
            overflow: hidden;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            filter: drop-shadow(0px 4px 2px #aaaa);
        }

        .article {
            padding: 22px;
            text-align: justify;
            display: flex;
            flex-direction: column;
            height: 100%;
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

        /* Full-Screen Popup Content with Glassy Effect */
        .popup-content {
            display: flex;
            width: 100%;
            height: 100%;
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

        }

        /* Info Section */
        /* Styling the popup */
        .profile-info {
            background: #fff;
            border-radius: 15px;
            padding: 20px;
            max-width: 800px;
            width: 600px;
            margin: 0 auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            font-family: Arial, sans-serif;
            height: 400px;
        }

        .profile-info h2 {
            text-align: center;
            font-size: 24px;
            color: #333;
            margin-bottom: 20px;
        }

        .profile-info ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .profile-info li {
            font-size: 18px;
            color: #555;
            display: flex;
            align-items: center;
            margin: 10px 0;
        }

        /* Adding FontAwesome Icons with CSS pseudo-elements */
        .profile-info li:before {
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            font-size: 24px;
            margin-right: 10px;
            color: #4CAF50;
            /* Customize this color */
        }

        /* Match icons with respective content */
        .profile-info li:nth-child(1):before {
            content: "\f1fd";
            /* birthday-cake icon for Age */
        }

        .profile-info li:nth-child(2):before {
            content: "\f091";
            /* trophy icon for Year Wins */
        }

        .profile-info li:nth-child(3):before {
            content: "\f091";
            /* trophy icon for Career Wins */
        }

        .profile-info li:nth-child(4):before {
            content: "\f005";
            /* star icon for Total Top Five */
        }

        .profile-info li:nth-child(5):before {
            content: "\f3c5";
            /* map-marker-alt icon for Home-Place */
        }




        /* Video Section */
        .video-container {
            flex: 1;
            /* 1/4 width */
            padding: 20px;
            display: flex;
            justify-content: center;
            height: 600px;
        }

        .video-container video {
            width: 80%;
            /* height: auto; */
            border-radius: 10px;
            object-fit: cover;
        }

        /* Close Button */
        .popup-close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 36px;
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
            padding: 10px;
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
    </style>
</head>

<body>
    <!-- Navigation Bar -->
    <nav class="navbar">
        <div class="brand-title">Golf Player Profiles</div>
        <div class="navbar-links">
            <ul>
                <li><a href="golf.php">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="search-container">
            <input type="text" id="search-input" placeholder="Search...">
            <button type="submit" id="search-button">Search</button>
        </div>
    </nav>

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
                <video src="../images/PlayerAppearance.mp4" class="Player-gif" autoplay loop muted></video>
            </div>
            <span class="popup-close">&times;</span>
        </div>
    </div>

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
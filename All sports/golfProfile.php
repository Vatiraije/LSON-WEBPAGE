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
function getProfileData($conn, $profileId) {
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
function displayAllProfiles($conn) {
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
        while($row = $result->fetch_assoc()) {
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
            background: rgba(255, 255, 255, 0.3); /* Semi-transparent white */
            border-radius: 10px;
            margin: 10px;
            cursor: pointer;
            backdrop-filter: blur(10px); /* Creates the glassy effect */
            border: 1px solid rgba(255, 255, 255, 0.2); /* Subtle border */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.2); /* Soft shadow */
            animation: walkout 1s ease-out forwards; 
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
       
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
            color: #fff;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            animation: popupFadeIn 0.5s ease-out forwards;
        }
        @keyframes walkout {
            0% {
                transform: translateX(100%);
                opacity: 0;
            }
            50% {
                transform: translateX(0);
                opacity: 1;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }
        @keyframes popupFadeIn {
            0% {
                transform: scale(0.5);
                opacity: 0;
            }
            100% {
                transform: scale(1);
                opacity: 1;
            }
        }
        .popup-content {
            background: rgba(255, 255, 255, 0.1); /* Glass effect */
            color: #fff;
            padding: 20px;
            border-radius: 15px;
            width: 80%;
            max-width: 800px;
            backdrop-filter: blur(10px); /* Blurry background */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3); /* Shadow for better depth */
            display: flex; /* Flex layout */
            flex-direction: row; /* Side by side */
            justify-content: space-between; /* Space between video and info */
        }
        .popup-content img {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
            border-radius: 10px; /* Rounded corners for the image */
        }
        .popup-close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 24px;
            color: #fff;
            background: rgba(0, 0, 0, 0.5); /* Slightly darker background for close button */
            padding: 5px;
            border-radius: 50%;
            z-index: 1001; /* Ensure it is above other elements */
        }
        .popup-content h2 {
            margin-top: 0; /* Remove top margin for headings */
        }
        .popup-content ul {
            padding: 0;
            list-style: none; /* Remove list bullets */
            margin: 0;
        }
        .popup-content li {
            margin-bottom: 10px; /* Space between list items */
        }
        /* NavBar CSS */
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
            flex: 1; /* Take up available space */
            display: flex;
            justify-content: center; /* Center the links horizontally */
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
        /* Video Container CSS */
        .video-container {
            width: 48%; /* Adjust width to allow side-by-side */
        }
        .profile-info {
            width: 48%; /* Adjust width to allow side-by-side */
            padding: 0 20px; /* Add some padding for spacing */
        }
        .Player-gif {
            width: 100%;
            height: auto;
            max-width: 100%;
            border-radius: 10px;
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
            <input type="text" placeholder="Search..">
            <button type="submit">Submit</button>
        </div>
    </nav>

    <!-- Profile Section -->
    <div class="section">
        <?php displayAllProfiles($conn); ?>
    </div>

    <!-- Popup Container -->
    <div class="popup">
        <div class="popup-content">
            <div class="video-container">
                <video src="../images/PlayerAppearance.mp4" class="Player-gif" autoplay loop muted></video>
            </div>
            <div class="profile-info"></div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var cards = document.querySelectorAll('.fcard');
            var popup = document.querySelector('.popup');
            var popupContent = document.querySelector('.profile-info');

            function openPopup(profileId) {
                fetch('golfprofile.php?action=getProfileData&id=' + profileId)
                    .then(response => response.json())
                    .then(data => {
                        popupContent.innerHTML = `
                            <span class="popup-close">&times;</span>
                            <h2>Player name: ${data.name}</h2>
                            <ul>
                                <li>Age: ${data.age}</li>
                                <li>Year Wins: ${data.yearWins}</li>
                                <li>Career Wins: ${data.careerWins}</li>
                                <li>Total Top Five: ${data.topFive}</li>
                                <li>Home-Place: ${data.homePlace}</li>
                            </ul>
                        `;
                        popup.style.display = 'flex';
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
                    popup.style.display = 'none';
                }
            });

            // Close popup when clicking the close button
            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('popup-close')) {
                    popup.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>

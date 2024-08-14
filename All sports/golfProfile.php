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
    $sql = "SELECT playerId, name, age, yearWins, careerWins, topFive, homePlace FROM golfprofile";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="fcard" data-profile-id="' . htmlspecialchars($row["playerId"]) . '">';
            echo '<img src="../images/golfProfile.jpg">';
            echo '<div class="article">';
            echo '<h2>Player name: ' . htmlspecialchars($row["name"]) . '</h2>';
            echo '<ul>';
            echo '<li>Age: ' . htmlspecialchars($row["age"]) . '</li>';
            echo '<li>Year Wins: ' . htmlspecialchars($row["yearWins"]) . '</li>';
            echo '<li>Career Wins: ' . htmlspecialchars($row["careerWins"]) . '</li>';
            echo '<li>Total Top Five: ' . htmlspecialchars($row["topFive"]) . '</li>';
            echo '<li>Home-Place: '. htmlspecialchars($row["homePlace"]) . '</li>';
            echo '</ul>';
            echo '</div>';
            echo '</div>';
        }
    } else {
        echo "No profiles found";
    }
}
?>

<html lang="en">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300&family=Poppins:wght@300&display=swap');
        body {
            background: #004d00;
            font-family: "Inter", sans-serif;
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
            background: #ffff;
            border-radius: 10px;
            margin: 10px;
            cursor: pointer;
        }
        img {
            height: 290px;
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
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            color: #fff;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }
        .popup-content {
            background: #fff;
            color: #000;
            padding: 20px;
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
        }
        .popup-content img {
            width: 100%;
            max-height: 300px;
            object-fit: cover;
        }
        .popup-close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 24px;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var cards = document.querySelectorAll('.fcard');
            var popup = document.querySelector('.popup');
            var popupContent = document.querySelector('.popup-content');
            var popupClose = document.querySelector('.popup-close');

            cards.forEach(function(card) {
                card.addEventListener('click', function() {
                    var profileId = this.getAttribute('data-profile-id');
                    console.log('Profile ID clicked:', profileId);

                    fetch('golfprofile.php?action=getProfileData&id=' + profileId)
                        .then(response => response.json())
                        .then(data => {
                            console.log('Data:', data);
                            popupContent.innerHTML = `
                                <span class="popup-close">&times;</span>
                                <div class="fcard">
                                    <img src="../images/golfProfile.jpg">
                                    <div class="article">
                                        <h2>Player name: ${data.name}</h2>
                                        <ul>
                                            <li>Age: ${data.age}</li>
                                            <li>Year Wins: ${data.yearWins}</li>
                                            <li>Career Wins: ${data.careerWins}</li>
                                            <li>Total Top Five: ${data.topFive}</li>
                                            <li>Home-Place: ${data.homePlace}</li>
                                        </ul>
                                    </div>
                                </div>
                            `;
                            popup.style.display = 'flex';
                        })
                        .catch(error => {
                            console.error('Error fetching profile data:', error);
                        });
                });
            });

            popupClose.addEventListener('click', function() {
                popup.style.display = 'none';
            });

            window.addEventListener('click', function(event) {
                if (event.target === popup) {
                    popup.style.display = 'none';
                }
            });
        });
    </script>
</head>
<body>
    <div class="section">
        <?php
        displayAllProfiles($conn);
        ?>
    </div>
    <div class="popup">
        <div class="popup-content">
            <span class="popup-close">&times;</span>
            <!-- Profile data will be inserted here by JavaScript -->
        </div>
    </div>
</body>
</html>

<?php
$conn->close();
?>

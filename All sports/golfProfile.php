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

.toggle-button {
  position: absolute;
  top: 1rem;
  right: 1rem;
  display: none;
  flex-direction: column;
  justify-content: space-between;
  width: 28px;
  height: 21px;
}

.toggle-button .bar {
  height: 3px;
  width: 100%;
  background-color: white;
  border-radius: 10px;
}
.brand-title{
    text-decoration: none;
}

.brand-title:hover{
    color: #004d00;
}

@media (max-width: 400px) {
  .toggle-button {
    display: flex;
  }

  .navbar {
    flex-direction: column;
    align-items: flex-start;
  }

  .navbar-links {
    display: none;
    width: 100%;
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

  .navbar-links.active {
    display: flex;
  }
  
      .search-container {
      margin-left: auto; /* Align search bar to the right on small screens */
    }
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
        

        //Search=========================================================================================


        document.addEventListener('DOMContentLoaded', function() {
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

    // Existing code for card clicks and popup handling
    // ...
});




    </script>
</head>
<body>
    <nav class="navbar">
  <div class="brand-title"><a href="../index.php">LSON</a></div>
  <a href="#" class="toggle-button">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
  </a>
  <div class="navbar-links">
    <ul>
      <li><a href="golf.php">Home</a></li>
      <li><a href="clubs.php">Clubs</a></li>
      <li><a href="#">Leagues</a></li>
       <li><a href="#">Training and development</a></li>
       <li><a href="#">Supporter's club</a></li>
       <li><a href="#">Events</a></li>
       <li><a href="#">History</a></li>
    </ul>
    
     <div class="search-container">
    <input type="text" id="search-input" placeholder="Search for a player...">
    <button type="submit" id="search-button">Search</button>
  </div>
    
  </div>
</nav>
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
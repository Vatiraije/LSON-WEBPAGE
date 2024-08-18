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
             background-image: url('golf/pexels-kindelmedia-6572964.jpg');
            font-family: "Inter", sans-serif;
             background-repeat: no-repeat;
    /* Prevents the image from repeating */
    background-size: cover;
    /* Ensures the image covers the entire viewport */
    background-attachment: fixed;
    /* Keeps the background fixed in place during scroll */
    background-position: center center;
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

        /*Modification of the pop up */
/* Updated Popup Styles */4

.popup{
    display: none;
}
.popup-content {
    display: flex;
    background: rgba(255, 255, 255, 0.9); /* Slightly opaque background */
    color: #000; /* Change text color to black for readability */
    padding: 20px;
    border-radius: 15px;
    width: 80%;
    max-width: 1000px; /* Increased max-width */
    height: 80%; /* Adjust height to fit the content */
    max-height: 600px; /* Prevent too large popups */
    backdrop-filter: blur(10px); /* Blurry background */
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3); /* Shadow for better depth */
    text-align: left;
    position: relative;
    overflow: hidden; /* Hide overflow to keep clean design */
    justify-content: center;
    align-items: center;
    left: 25%;
    bottom: 60%;
}

/* Layout for Image and Text */
.popup-content .popup-image {
    flex: 1;
    padding: 10px;
}

.popup-content .popup-info {
    flex: 2;
    padding: 10px;
}

/* Ensure image fits nicely */
.popup-content img {
    width: 100%;
    height: auto;
    max-height: 400px; /* Limit image height */
    object-fit: cover;
    border-radius: 10px; /* Rounded corners for the image */
}

.popup-close {
    position: absolute;
    top: 10px;
    right: 10px;
    cursor: pointer;
    font-size: 24px;
    color: #000;
    background: rgba(255, 255, 255, 0.7); /* Light background for close button */
    padding: 5px;
    border-radius: 50%;
    z-index: 1001; /* Ensure it is above other elements */
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

/*footer css  */
.footer {
    background: #004d00;
    /* Dark Green */
    color: white;
    /* White text */
    text-align: center;
    padding: 10px;
    position: fixed;
    bottom: 0;
    width: 100%;
    opacity: 0.9;
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

    // Function to handle opening of popup
    function openPopup(profileId) {
        fetch('golfprofile.php?action=getProfileData&id=' + profileId)
            .then(response => response.json())
            .then(data => {
                popupContent.innerHTML = `
                    <span class="popup-close">&times;</span>
                    <div class="popup-image">
                        <img src="../images/golfProfile.jpg" alt="${data.name}">
                    </div>
                    <div class="popup-info">
                        <h2>Player name: ${data.name}</h2>
                        <ul>
                            <li>Age: ${data.age}</li>
                            <li>Year Wins: ${data.yearWins}</li>
                            <li>Career Wins: ${data.careerWins}</li>
                            <li>Total Top Five: ${data.topFive}</li>
                            <li>Home-Place: ${data.homePlace}</li>
                        </ul>
                    </div>
                `;
                popup.style.display = 'flex';
                // Add close button event listener
                document.querySelector('.popup-close').addEventListener('click', function() {
                    popup.style.display = 'none';
                });
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
});


   
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



    </script>
</head>
<body>
    <nav class="navbar">
  <div class="brand-title">LSON</div>
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
    <input type="text" id="search-input" placeholder="Search...">
    <button type="submit" id="search-button">Search</button>
  </div>
    
  </div>
</nav>
    <div class="section">
        <?php
        displayAllProfiles($conn);
        ?>
    </div>

<!--This pop up must be-->
  <div class="popup">
    <div class="popup-content">
        <!-- Dynamic content will be inserted here by JavaScript -->
    </div>
</div>


  <div class="footer">
        <p>&copy; 2024 LSON - Level Sports of Namibia. All rights reserved.</p>
    </div>

</body>
</html>

<?php
$conn->close();
?>

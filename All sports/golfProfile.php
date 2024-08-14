



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

// Get the profile ID from the URL parameter
$profileId = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Function to fetch and display a single profile
function displaySingleProfile($conn, $profileId) {
    $sql = "SELECT name, age, yearWins, careerWins, topFive, homePlace FROM golfprofile WHERE playerId = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $profileId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        echo '<div class="fcard">';
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
    } else {
        echo "Profile not found";
    }
    $stmt->close();
}

// Function to fetch and display all profiles
function displayAllProfiles($conn) {
    $sql = "SELECT playerId, name, age, yearWins, careerWins, topFive, homePlace FROM golfprofile";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<div class="fcard">';
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
      }
      .section {
          display: flex;
          flex-wrap: wrap;
          justify-content: center;
          font-family: "Inter", sans-serif;
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
      a {
          text-decoration: none;
      }
      .day {
          display: flex;
          justify-content: space-between;
      }
      .li{
        font-family: sans-serif;
        font-weight: 300;
        color: white;

      }
    </style>
   
</head>
<body>
    <div class="section">
        <?php
        if ($profileId > 0) {
            displaySingleProfile($conn, $profileId);
        } else {
            displayAllProfiles($conn);
        }
        ?>
    </div>
</body>
</html>

<?php
$conn->close();
?>
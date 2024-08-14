<?php 
// Database connection
$servername = "localhost"; // Change if necessary
$username = "root"; // Change if necessary
$password = ""; // Change if necessary
$dbname = "lson"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the golfProfile table
$sql = "SELECT name, age, yearWins, careerWins, topFive, homePlace FROM golfProfile";
$result = $conn->query($sql);
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
      if ($result->num_rows > 0) {
          // Output data for each row
          while($row = $result->fetch_assoc()) {
              echo '<div class="fcard">';
              echo '<img src="../images/golfProfile.jpg">';
              echo '<div class="article">';
              echo '<h2> Player name: ' . $row["name"] . '</h2>';
              echo '<ul>';
              echo '<li>Age: ' . $row["age"] . '</li>';
              echo '<li>Year Wins: ' . $row["yearWins"] . '</li>';
              echo '<li>Career Wins: ' . $row["careerWins"] . '</li>';
              echo '<li>Total Top Five: ' . $row["topFive"] . '</li>';
              echo '<li>Home-Place: '. $row["homePlace"] . '</li>';
              echo '</ul>';
              echo '</div>';
              echo '</div>';
          }
      } else {
          echo "0 results";
      }
      $conn->close();
      ?>
    </div>
    

  </body>
</html>

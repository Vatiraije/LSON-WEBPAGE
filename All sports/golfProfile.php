<?php
// Include the PHP script to handle form submission and connection
include 'golf_registration.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< Updated upstream
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/159bedbb65.js" crossorigin="anonymous"></script>
    <title>LSON - Namibian Golf</title>
    <link rel="stylesheet" href="golf.css">
=======
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
>>>>>>> Stashed changes
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

    <div class="header">
        <h1><a href="../index.php">LSON</a> - Golf Leagues </h1>
        <p>Your source for all Namibian Golf Leagues</p>

        <br>
        <br>

        <div class="navigation">
            <a href="">All</a>
            <a href="clubs.php">Clubs</a>
            <a href="leagues.php">Leagues</a>
            <a href="golfProfile.php">Player Profiles</a>
            <a href="swimming.php">Training and Development</a>
            <a href="golfsupporters.php">Supporters Club</a>
            <a href="golf.php">Events</a>
            <a href="History.php">History</a>
        </div>
    </div>
<<<<<<< Updated upstream
=======

<!--This pop up must be-->
  <div class="popup">
    <div class="popup-content">
        <!-- Dynamic content will be inserted here by JavaScript -->
    </div>
</div>
>>>>>>> Stashed changes



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

        <!--Golf leagues-->
        <section id="events" class="section">
            <div class="section-header">
                <h2>Golf Leagues</h2>
                <p>Check out the Golf leagues. You don't want to miss it!.</p>
            </div>

            <div class="content">
                <!-- Example content -->
                <article>
                    <h3>NAGU/OTHER</h3>
                    <img src="../images/golf.jpg" alt="GOLF PREMIER LEAGUE">
                </article>
                <article>
                    <h3>NALGU (ladies)</h3>
                    <img src="../All sports/golf/nagu.jpg" alt="GOLF FIRST DIVISION">
                </article>

                <article>
                    <h3>SAGES</h3>
                    <img src="../images/golf3.jpg" alt="GOLF1">
                </article>
                <br>
                <br>
                <br><br>
                <p></p>
                <p></p>
                <p></p>
            </div>
        </section>

        <section id="players" class="section">
            <div class="section-header">
                <h2>Upcoming Leagues</h2>
            </div>

            <div class="content">
                <!-- Example player profiles -->
                <article>
                    <h3>Golfer A</h3>
                    <a href="golfProfile.php?id=1">

                        <img class="profile" src="../images/golfProfile.jpg" alt="">
                    </a>

                </article>
                <article>
                    <h3>Golfer B</h3>
                    <a href="golfProfile.php?id=2">

                        <img class="profile" src="../images/golfProfile.jpg" alt="">
                    </a>
                </article>
            </div>
        </section>


        <!-- <div class="form-container">
            <form action="" method="GET">
                <input type="text" name="search" placeholder="Search players, teams, leagues...">
            </form>
        </div> -->


    </div>
    </div>
    <img src="golfer-removebg-preview.png" alt="Golf Animation" class="side-image">

    <div class="main-content">
        <!-- Main content here -->

        <!-- Floating button -->
        <button class="floating-button" onclick="toggleFloatingContent()">
            <i class="fas fa-phone"></i>
        </button>

        <!-- Dummy data pop-up -->
        <div class="floating-content" id="floatingContent">
            <p>Dummy Content</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <button onclick="toggleFloatingContent()">Close</button>
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




</body>

</html>
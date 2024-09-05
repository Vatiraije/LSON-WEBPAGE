<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LSON Horse Riding</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Google Font: "Playfair Display" -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap">
  <style>
    body, html {
      height: 100%;
      font-family: 'Playfair Display', serif;
    }
    .hero-bg {
      background-image: url(https://static.vecteezy.com/system/resources/previews/042/336/662/non_2x/illustration-of-race-horse-with-jockey-black-isolated-silhouette-on-white-background-vector.jpg);
      background-size: cover;
      background-size: auto ;
      background-position: center center;
    }
    #loader {
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background: #fff;
      z-index: 9999;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    #loader img {
      width: 300px;
    }
    .fade-in {
      animation: fadeIn 1.5s ease-out forwards;
      opacity: 0;
    }
    @keyframes fadeIn {
      100% { opacity: 1; }
    }
    .slide-up {
      animation: slideUp 1.5s ease-out forwards;
      transform: translateY(50px);
      opacity: 0;
    }
    @keyframes slideUp {
      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }
    .navigation {
      display: flex;
      justify-content: center;
      background-color: rgba(0, 0, 0, 0.7);
      padding: 1rem;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
    }
    .navigation a {
      margin: 0 15px;
      color: white;
      text-transform: uppercase;
      font-weight: bold;
      text-decoration: none;
      padding: 10px 15px;
      border-radius: 25px;
      transition: background-color 0.3s, color 0.3s;
    }
    .navigation a:hover {
      background-color: rgba(255, 255, 255, 0.2);
      color: #FFD700;
    }
  </style>
</head>
<body class="bg-gray-100">

  <!-- Loading Page -->
  <div id="loader">
    <img src="https://i.pinimg.com/originals/ac/c5/f5/acc5f50829e57bda58a44049aa46ead0.gif" alt="Loading...">
  </div>

  <!-- Navigation Bar -->
  <div class="navigation">
    <a href="teams.php">Teams</a>
    <a href="leagues.php">Leagues</a>
    <a href="PlayerProfiles.php">Player Profiles</a>
    <a href="HorseProfiles.php">Horse Profiles</a>
    <a href="Training_development.php">Training & Development</a>
    <a href="SupportersClub.php">Supporters Club</a>
    <a href="Events.php">Events</a>
    <a href="leaderboard.php">Leaderboard</a>
  </div>

  <!-- Hero Section -->
  <section class="hero-bg h-screen flex items-center justify-center fade-in">
    <div class="text-center bg-yellow-600 p-8 rounded-lg">
      <h1 class="text-6xl font-bold slide-up text-white">LSON Horse Racing</h1>
      <p class="mt-4 text-xl slide-up text-white">Discover the thrill of horse racing</p>
      <a href="#services" class="mt-8 inline-block bg-white text-yellow-600 px-6 py-3 rounded-full text-lg font-medium hover:bg-yellow-500 transition duration-300 slide-up">Explore Services</a>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-16 bg-white fade-in">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-4xl font-bold mb-12">Our Services</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-500 transform hover:scale-105">
          <h3 class="text-2xl font-semibold mb-4">Riding Lessons</h3>
          <p>Professional riding lessons for all levels.</p>
        </div>
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-500 transform hover:scale-105">
          <h3 class="text-2xl font-semibold mb-4">Horse Care</h3>
          <p>Learn horse grooming, feeding, and care.</p>
        </div>
        <div class="bg-gray-100 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-500 transform hover:scale-105">
          <h3 class="text-2xl font-semibold mb-4">Horse Riding Events</h3>
          <p>Participate in thrilling riding competitions.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section class="py-16 bg-gray-100 fade-in">
    <div class="container mx-auto px-4 text-center">
      <h2 class="text-4xl font-bold mb-12">Gallery</h2>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-500">
          <img src="https://wallpapers.com/images/hd/horse-racing-on-a-long-field-xs8xozu7xycdbnp6.jpg" alt="Gallery Image 1" class="w-full h-64 object-cover">
        </div>
        <div class="rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-500">
          <img src="https://media.gettyimages.com/id/869032286/photo/young-girl-cuddling-her-pony-horse.jpg?s=612x612&w=0&k=20&c=DGEDZ0G-Nl89k0rhrR2V3pALA2idUNzHozEFY6MVkno=" alt="Gallery Image 2" class="w-full h-64 object-cover">
        </div>
        <div class="rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-500">
          <img src="https://media.gettyimages.com/id/1574593433/photo/girls-training-riding-horses.jpg?s=612x612&w=0&k=20&c=nxSoV6gEu5RAbqZgnpm0VUkmbQc-ySc_Wl2JLI13BA4=" alt="Gallery Image 3" class="w-full h-64 object-cover">
        </div>
      </div>
    </div>
  </section>

  <!-- News Update Section -->
  <section id="news-updates" class="py-16 bg-white fade-in">
    <div class="container mx-auto px-4">
      <h2 class="text-4xl font-bold text-center mb-12">Latest News</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- News Image -->
        <div class="rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-500">
          <img src="https://scontent.fers3-1.fna.fbcdn.net/v/t39.30808-6/452558157_800023222116597_3671284521056795143_n.jpg?stp=dst-jpg_s720x720&_nc_cat=100&ccb=1-7&_nc_sid=833d8c&_nc_ohc=wS9nTeje_TAQ7kNvgHFnBQc&_nc_ht=scontent.fers3-1.fna&oh=00_AYDKT0BxYNNx3suQoW42ZvN9VxZgjd4cyVrHR8SR7iDDbQ&oe=66DF5BA8" alt="Horse Racing News" class="w-full h-64 object-cover"> <!-- Replace with actual image -->
        </div>
        <!-- News Image -->
        <div class="rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-500">
          <img src="https://scontent.fers3-1.fna.fbcdn.net/v/t39.30808-6/449444277_981723733958149_73396353450952383_n.jpg?stp=dst-jpg_p526x395&_nc_cat=110&ccb=1-7&_nc_sid=833d8c&_nc_ohc=S_33-F1ZoQ0Q7kNvgExyBmq&_nc_ht=scontent.fers3-1.fna&oh=00_AYDdfuaHQ3p9_yA7hp1LcWGTNnoWzaAYMePVa6Yyd3X4dA&oe=66DF4A08" alt="Horse Racing News" class="w-full h-64 object-cover"> <!-- Replace with actual image -->
        </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="py-16 bg-white fade-in">
    <div class="container mx-auto px-4">
      <h2 class="text-4xl font-bold text-center mb-12">Contact Us</h2>
      <div class="max-w-lg mx-auto">
        <form class="bg-gray-100 p-8 rounded-lg shadow-lg">
          <div class="mb-6">
            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
            <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-blue-300">
          </div>
          <div class="mb-6">
            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
            <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-blue-300">
          </div>
          <div class="mb-6">
            <label for="message" class="block text-gray-700 text-sm font-bold mb-2">Message</label>
            <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring focus:border-blue-300"></textarea>
          </div>
          <div>
            <button type="submit" class="w-full bg-yellow-600 text-white px-4 py-2 rounded-lg font-bold hover:bg-yellow-700 transition duration-300">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="py-8 bg-yellow-600 text-white text-center">
    <p>&copy; 2024 LSON Horse Riding. All rights reserved.</p>
  </footer>

  <script>
    window.onload = function() {
      const loader = document.getElementById("loader");
      loader.style.display = "none";
    },6000;
  </script>
</body>
</html>

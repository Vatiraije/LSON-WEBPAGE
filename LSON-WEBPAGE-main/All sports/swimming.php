<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSON - Namibian Swimming</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('../images/Swimming images/Swimming_clipart-HD.png') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        .header {
            background: linear-gradient(to right, #C9DABF, #77E4C8);
            padding: 20px;
            color: white;
            text-align: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            opacity: 0.8;
        }

        .header h1 {
            margin: 0;
            font-size: 2.5em;
        }

        .header p {
            margin: 0;
            font-size: 1.2em;
        }

        .navigation {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 10px 0;
            text-align: center;
        }

        .navigation a {
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            display: inline-block;
            transition: background 0.3s;
        }

        .navigation a:hover {
            background-color: #3572EF;
        }

        .main-content {
            max-width: 1200px;
            margin: 20px auto;
            padding: 0 20px;
            border-radius: 10px;
        }

        .section {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .section-header {
            margin-bottom: 10px;
        }

        .section-header h2 {
            font-size: 2.5em;
            color: #77E4C8;
            margin-bottom: 10px;
        }

        .section-header p {
            font-size: 1.2em;
            color: #333;
        }
        .carousel {
    position: relative;
    max-width: 100%;
    margin: auto;
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.carousel-slide {
    display: none;
    width: 100%;
    height: 500px; /* Adjust height as needed */
}

.carousel-slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
}

.prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
}

.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}


        .content {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-around;
        }

        .content article,
        .content img,
        .content video {
            flex: 1 1 30%;
            max-width: 30%;
            background: black;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .content article:hover,
        .content img:hover,
        .content video:hover {
            transform: translateY(-5px);
        }

        .form-container {
            margin-top: 20px;
        }

        form {
            margin: 20px 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form input[type="text"] {
            width: 100%;
            max-width: 400px;
            padding: 10px 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1em;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: border-color 0.3s;
        }

        form input[type="text"]:focus {
            border-color: #d21034;
            outline: none;
            box-shadow: 0 2px 8px rgba(210, 16, 52, 0.2);
        }

        form input[type="text"]::placeholder {
            color: #aaa;
            font-style: italic;
        }

        .footer {
            background: linear-gradient(to right, #C9DABF, #77E4C8);
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
            opacity: 0.8;
        }

        /* Swimmer of the Match Card */
        .swimmer-of-the-match-card {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 250px;
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
            z-index: 2;
        }

        .swimmer-of-the-match-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .swimmer-of-the-match-content {
            padding: 15px;
            text-align: center;
        }

        .swimmer-of-the-match-content h4 {
            margin: 10px 0 5px;
        }

        .swimmer-of-the-match-content p {
            margin: 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .content {
                flex-direction: column;
                align-items: center;
            }

            .content article,
            .content img,
            .content video {
                max-width: 90%;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>LSON - Namibian Swimming</h1>
        <p>Your source for all things Namibian swimming</p>
    </div>

    <div class="navigation">
        <a href="">History</a>
        <a href="">Support club</a>
        <a href="">News</a>
        <a href="">Leagues</a>
        <a href="">Teams</a>
        <a href="">Player profile</a>
    </div>

    <div class="main-content">
    <div id="carousel" class="carousel">
    <div class="carousel-slide">
        <img src="../images/Swimming images/88999107_2749311435183438_6895476964736368640_n.jpg" alt="Namibian Swimming Team">
    </div>
    <div class="carousel-slide">
        <img src="../images/Swimming images/NASFED-Swimming-Namibia_Bank-Windhoek_Long-Course_2 (1).jpg" alt="Swimming News">
    </div>
    <div class="carousel-slide">
        <img src="../images/Swimming images/NASFED-Swimming-Namibia_Bank-Windhoek_Long-Course_2.jpg" alt="Upcoming Competitions">
    </div>
    <div class="carousel-slide">
        <img src="../images/Swimming images/NASFED-Swimming-Namibia_Bank-Windhoek_Long-Course_4.jpg" alt="Upcoming Competitions">
    </div>
    <div class="carousel-slide">
        <img src="../images/Swimming images/NASFED-Swimming-Namibia_Bank-Windhoek_Long-Course_5.jpg" alt="Upcoming Competitions">
    </div>
    <!-- Add more slides as needed -->
    <a class="prev" onclick="changeSlide(-1)">&#10094;</a>
    <a class="next" onclick="changeSlide(1)">&#10095;</a>
</div>


        <section id="swimming" class="section">
            <div class="section-header">
                <h2>Swimming</h2>
                <p>Explore the latest updates, news, and scores from Namibian swimming.</p>
            </div>

            <div class="content">
                <!-- Example content -->
                <article>
                    <h3>Latest Competition Results</h3>
                    <p>Namibia vs South Africa</p>
                    <img src="../images/Swimming images/VS.jpg" alt="Namibia vs South Africa">
                    <p>Namibia vs Zimbabwe</p>
                    <img src="../images/Swimming images/VS 2.jpg" alt="Namibia vs Zimbabwe">
                    <p>Namibia vs Kenya</p>
                    <img src="../images/Swimming images/VS 3.jpg" alt="Namibia vs Kenya">
                </article>
                <article>
                    <h3>Upcoming Competitions</h3>
                    <p>
                        National Swimming Championship<br>
                        MTC Swim Academy<br>
                        DR Hage Geingob Swim Bonanza<br>
                        Honey Loma Swim
                    </p>
                    <img src="../images/Upcoming S.jpg" alt="Upcoming Competitions">
                    <img src="../images/Swimming images/upcoming s2.jpg" alt="Upcoming Competitions">
                    <img src="../images/Swimming images/upcoming s3.jpg" alt="Upcoming Competitions">
                    <img src="../images/Swimming images/upcoming s5.jpg" alt="Upcoming Competitions">
                </article>
                <img src="../images/Swimming images/nam swimming.jpg" alt="Namibian Swimming Team">
                <video src="../videos/NAM VS MALAWI SWIMMING.mp4" controls></video>
            </div>
        </section>

        <section id="news" class="section">
            <div class="section-header">
                <h2>Latest News</h2>
                <p>Stay updated with the latest news and stories in Namibian swimming.</p>
            </div>
            <div class="content">
                <!-- News articles go here -->
                <article>
                    <h3>News Article Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mollis pellentesque nulla, vitae euismod sem porta sit amet. Aliquam condimentum egestas facilisis. Pellentesque eget leo mattis, vehicula purus et, consectetur quam. Vestibulum a tellus est. Nam est magna, sodales eget velit in, vulputate iaculis est. Mauris interdum vehicula varius. Nam sagittis dictum commodo. Ut id tincidunt lorem. Pellentesque accumsan sodales eros, sit amet tristique nisl dictum in. Morbi tincidunt in nulla ut dictum. Donec convallis efficitur mattis. Curabitur id porta risus, a porttitor nisi. Donec auctor mi quis leo scelerisque convallis id id lorem. Nulla et mattis enim, id tempus massa. Quisque turpis justo, faucibus vel arcu eget, vulputate sodales purus.</p>
                    <img src="../images/Swimming images/swimming news.jpg" alt="Swimming News">
                </article>
                <!-- Add more news articles as needed -->
            </div>
        </section>
    </div>

    <div class="footer">
        <p>&copy; 2024 Namibian Swimming. All rights reserved.</p>
    </div>

    <!-- Swimmer of the Match Card -->
    <div class="swimmer-of-the-match-card">
        <img src="../images/Swimming images/Phillip-Seidler_Olympic-Journey_Tokyo-2020_NASFED-Swimming-Namibia_4.jpg" alt="Swimmer of the Match">
        <div class="swimmer-of-the-match-content">
            <h4> Swimmer of the Match </h4>
            <p>John Doe</p>
        </div>
    </div>
    <script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let slides = document.getElementsByClassName("carousel-slide");
        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 4000); // Change image every 4 seconds
    }

    function changeSlide(n) {
        slideIndex += n - 1;
        if (slideIndex < 0) { slideIndex = slides.length - 1; }
        showSlides();
    }
</script>


</body>
</html>

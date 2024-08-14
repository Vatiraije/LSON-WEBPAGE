<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSON - Namibian Golf</title>
    <style>
    body {
        background-image: url('golf/pexels-kindelmedia-6572964.jpg');
    }

    body,
    html {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-size: cover;
        color: #fff;
    }

    .header {
        background: #004d00;
        /* Dark Green */
        padding: 20px;
        color: white;
        text-align: center;
        position: sticky;
        top: 0;
        z-index: 1000;
        opacity: 0.9;
    }

    .header h1 {
        margin: 0;
        font-size: 2.5em;
    }

    .header p {
        margin: 0;
        font-size: 1.2em;
    }

    .section-header p {
        font-size: 20px;
        text-align: justify;
    }

    .navigation {
        background-color: rgba(0, 77, 0, 0.7);
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
        background-color: #004d00;
        /* Dark Green */
    }

    .main-content {
        margin-left: 240px;
        /* Same width as the vertical navbar + some margin */
        padding: 20px;
        max-width: 1000px;
        margin: 0 auto;

    }

    .section {
        max-width: 800px;
        margin: 0 auto 20px;
        border-radius: 20px;
        box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.18);
        padding: 20px;
        margin-bottom: 20px;
        background: linear-gradient (135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.18);
    }

    .section-header {
        margin-bottom: 10px;
    }

    .section-header h2 {
        font-size: 2.5em;
        color: white;
        /* White */
        margin-bottom: 10px;
    }

    .section-header p {
        font-size: 1.2em;
        color: #fff;
        /* Light text */
    }

    .content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
        padding: 20px;
    }

    .content img {
        /*  max-width: 100%;
        height: auto;
        border-radius: 10px;
        */
        object-position: center;
    }

    .content article,
    .content img {
        width: 100%;
        height: 200px;
        /* Fixed height for consistency */
        object-fit: cover;
        /* Maintains aspect ratio without stretching */
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
        margin-bottom: 10px;
    }

    .content article:hover,
    .content img:hover {
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
        border-color: #004d00;
        /* Dark Green */
        outline: none;
        box-shadow: 0 2px 8px rgba(0, 77, 0, 0.2);
    }

    form input[type="text"]::placeholder {
        color: #aaa;
        font-style: italic;
    }

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

    /* Responsive Design */
    @media (max-width: 768px) {
        .content {
            flex-direction: column;
            align-items: center;
            width: 100%;
        }

        .content article,
        .content img {
            max-width: 90%;
        }

        .vertical-nav {
            width: 100%;
            height: auto;
            position: relative;
        }

        .vertical-nav a {
            float: left;
            padding: 10px;
        }

        .main-content {
            margin-left: 0;
        }
    }
    </style>
</head>

<body>
    <div class="header">
        <h1>
            <a href="golf.php" style="color: white; text-decoration: none;"> Golf Clubs</a>
        </h1>
    </div>


    <div class=" main-content">
        <section id="leagues" class="section">
            <div class="section-header">
                <h2>Omeya Golf Club</h2>
                <p>An oasis of green in the arid wild of Namibia’s Acacia savannah. Just 30 kms outside
                    Windhoek.
                    Golfers at Omeya can expect one of the greatest golfing experiences in Africa when they tee
                    up,
                    something that will rival anything in the world.
                    18 holes of true African, and more specifically Namibian, bushveld, surrounded by beautiful
                    mountains and Camel Thorn trees, breathtaking views, not to mention the sunrises and
                    sunsets.
                </p>
            </div>
            <div class="content">
                <article>
                    <img src="clubs_images/Omeya.jpeg" alt="">
                </article>
            </div>
        </section>

        <section id="standings" class="section">
            <div class="section-header">
                <h2>The Windhoek Golf & Country Club</h2>
                <p>The club offers an 18-hole golf course with 6199 meters of lush grass fairways and
                    greens, providing a variety of challenges for golfers of all abilities.
                    The modern clubhouse seamlessly blends into the natural beauty of the course. It serves
                    as the gateway to an unbridled golfing experience.
                    The club is situated on the Western Bypass in Windhoek, Namibia
                </p>
            </div>

            <div class="content">
                <article>
                    <img src="clubs_images/WGCC.jpeg" alt="">
                </article>
            </div>
        </section>

        <section id="players" class="section">
            <div class="section-header">
                <h2>Walvis Bay Golf Club</h2>
                <p>The Walvis Bay Golf Club, a premier golfing destination in Walvis Bay Namibia. Our club
                    offers a
                    stunning oasis course, friendly staff, and a range of facilities to make your golfing
                    experience
                    unforgettable. Whether you are a beginner or a seasoned pro, we have everything you need to
                    enjoy
                    the game of golf </p>
            </div>

            <div class="content">
                <article>
                    <img src=" clubs_images/Walvis.jpeg" alt="">
                </article>
            </div>
        </section>

    </div>
</body>

</html>
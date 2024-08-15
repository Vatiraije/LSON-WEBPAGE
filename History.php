<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


    <style>
    .header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        padding: 20px;
        background-color: rgba(255, 255, 255, 0);
        /* Transparent background */
        z-index: 1000;
        /* Ensures the header stays above other content */
    }

    body {
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url("golf/pexels-kindelmedia-6572964.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        background-position: center center;
        min-height: 100vh;
        /* Ensures the background covers the entire screen, but content can extend beyond */
    }

    h1 {
        color: white;
        font-size: 50px;
        padding: 30px;
        text-align: center;
        background-color: black;
    }

    img {
        display: block;
        margin-left: auto;
        margin-right: auto;
        border-radius: 35px;
        max-width: 100%;
        height: auto;
    }


    p {
        padding-right: 12px;
        padding-left: 12px;
        font-size: 20px;
        text-align: justify;
    }

    .content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 20px;
        justify-content: center;
        padding: 40px;
        background: whitesmoke;
        border-radius: 25px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        border: 1px solid rgba(50, 205, 50, 0.2);
        max-width: 60%;
        margin-top: 80px;
    }

    /* Hover effect for the entire article */
    article:hover {
        box-shadow: 0 8px 40px rgba(0, 0, 0, 0.2);
        /* Add a deeper shadow */
    }

    /* Arrow icon style */
    .back-arrow {
        position: absolute;
        top: 20px;
        left: 20px;
        cursor: pointer;
    }

    .back-arrow img {
        width: 30px;
        height: 30px;
    }

    .back-arrow i {
        font-size: 30px;
        color: #000;
        /* Adjust color as needed */
    }
    </style>
</head>

<body>

    <div class="header">
        <a href="golf.php" class="back-arrow">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="content">
        <article>
            <h1>The History Of Golf In Namibia</h1>
            <img src="golf/golfhistory.jpeg" alt="Golf history image">

            <p>The history of golf in Namibia dates back to the early 20th century when Namibia was under German
                colonial rule. During this time, golf was introduced as a sport primarily played by European settlers,
                and early courses were established in colonial towns such as Swakopmund and Windhoek. These early golf
                courses catered to the colonial elite and were often rudimentary compared to modern standards.
                <br><br>

                Following Namibia's transition to South African administration after World War I, the popularity of golf
                grew as South African influence brought more sports infrastructure, and golf clubs began to formalize.
                However, it wasn't until after Namibia gained independence in 1990 that golf started expanding to a
                broader audience, with efforts to make the sport more inclusive.
                <br><br>

                Namibia now boasts several golf courses, including the Windhoek Golf Club, one of the oldest in the
                country. Over the years, Namibia has also produced competitive golfers, and the sport continues to
                develop as the nation invests in sporting infrastructure.
                <br><br>
            </p>

            <h2>Earliest Golf Clubs in Namibia</h2>
            <p>One of the earliest clubs, the Windhoek Golf and Country Club, was established in the capital city,
                Windhoek. This course, surrounded by natural bushveld, is known for its accessibility and appeal to both
                locals and tourists. Over time, it has become one of the oldest and most renowned courses in the
                country.
                <br><br>

                Other notable golf courses that have been established in Namibia include the Omeya Golf and Residential
                Oasis, located 30 kilometers outside Windhoek. This course is nestled among beautiful mountain scenery
                and is known for its wildlife encounters on the fairways. The Rossmund Golf Course in Swakopmund is one
                of only five desert golf courses globally, featuring a unique layout with fairways and greens in the
                sand rather than traditional bunkers.
                <br><br>

                Namibia also hosts the Walvis Bay Golf Club, which offers a distinctive experience with a mix of grass
                greens and sand fairways, making it a one-of-a-kind golfing destination.
                <br><br>
            </p>

            <h2>Some of the Namibian golf clubs and how they came about</h2>
            <p>Here’s a brief history and description of some of the prominent golf clubs in Namibia:
                <br><br>
                <strong>1. Windhoek Golf and Country Club</strong><br>
                Established in 1917, located in Namibia's capital city, the Windhoek Golf and Country Club is one of
                the oldest and most prestigious golf clubs in the country. The course is surrounded by natural bushveld
                and is known for its accessibility and appeal to both locals and tourists. Over the years, it has
                become a significant part of Namibia's golf history, hosting various local and international
                tournaments.
                <br><br>

                <strong>2. Rossmund Golf Course (Swakopmund)</strong><br>
                Established in the 1970s, Rossmund Golf Course, located near the coastal town of Swakopmund, is one of
                only five desert golf courses in the world. The course is unique due to its layout on desert sand,
                offering a distinct golfing experience with no traditional bunkers. The fairways and greens are
                meticulously maintained, providing a lush contrast to the surrounding desert landscape.
                <br><br>

                <strong>3. Omeya Golf and Residential Oasis</strong><br>
                Established in 2010, Omeya Golf Course is located about 30 kilometers outside of Windhoek and is known
                for its stunning mountain scenery and encounters with wildlife on the fairways. This championship golf
                course was designed by Peter Matkovich and offers a world-class golfing experience with modern
                facilities.
                It has become one of Namibia's most popular golf destinations.
                <br><br>

                <strong>4. Walvis Bay Golf Club</strong><br>
                Established in 1923, located in the coastal town of Walvis Bay, this golf club offers a unique
                experience
                with a combination of grass greens and sand fairways. It is one of the few golf courses in the world
                that combines such features, providing golfers with a distinctive challenge. The club is an integral
                part of the town's sporting culture and regularly hosts local and regional golf tournaments.
            </p>
        </article>
    </div>
</body>

</html>
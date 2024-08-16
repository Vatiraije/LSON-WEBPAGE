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
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.2);
            z-index: 1000;
            text-align: center;
            font-size: 20px;
            position: absolute;
            margin-right: 0;
            right: 0;
            width: 100%;
            padding-top: -30px;
            height: 30px;
        }

        .header a {
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            display: inline;
            transition: background 0.3s;
            justify-content: center;
            display: inline;
        }

        /* Style for the active tab */
        .header a.active {
            background-color: green;
            border-radius: 10px;
        }

        .search-container {
            position: relative;
            display: inline-block;
        }

        .search-bar {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 200px;
            font-size: 16px;
        }

        .search-button {
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #4CAF50;
            font-size: 18px;
            cursor: pointer;
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

        article:hover {
            box-shadow: 0 8px 40px rgba(0, 0, 0, 0.2);
        }

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
        }
    </style>
</head>

<body>

    <div class="header">
        <?php
        $currentPage = basename($_SERVER['PHP_SELF']);
        ?>
        <a href="History.php" class="<?php if ($currentPage == 'History.php') {
                                            echo 'active';
                                        } ?>">History</a>
        <a href="golfCaptains.php" class="<?php if ($currentPage == 'golfCaptains.php') {
                                                echo 'active';
                                            } ?>">Captains</a>
        <a href="golfPresidents.php" class="<?php if ($currentPage == 'golfPresidents.php') {
                                                echo 'active';
                                            } ?>">Presidents</a>
        <a href="golfClubs.php" class="<?php if ($currentPage == 'golfClubs.php') {
                                            echo 'active';
                                        } ?>">Clubs</a>
        <a href="golfersHistory.php" class="<?php if ($currentPage == 'golfersHistory.php') {
                                                echo 'active';
                                            } ?>">Golfers</a>

        <div class="search-container">
            <input type="text" class="search-bar" placeholder="Search...">
            <button class="search-button">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>

    <div class="content">
        <article>
            <h1>Golf Clubs</h1>
            <img src="golf/clubs.jpeg" alt="Golf history image">
            <p>
                The history of golf in Namibia dates back to the early 20th century when Namibia was under German
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
        </article>
    </div>

</body>

</html>
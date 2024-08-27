<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        /*HEADER*/
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
            height: 75px;
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

        /*FLIP CARDS*/
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            overflow: hidden;
            font-family: Helvetica, sans-serif;
            color: rgb(211, 211, 211);
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url("golf/pexels-kindelmedia-6572964.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            background-position: center center;
        }

        .container-wrapper {
            display: flex;
            gap: 30px;
            /* Adjust the space between containers here */
        }

        /*CONTAINER1*/
        .container1 {
            width: 350px;
            height: 500px;
            perspective: 500px;
            /*Gives the image a 3D effect*/
        }

        .container1:hover>.card {
            cursor: pointer;
            transform: rotateY(180deg);
        }

        .card {
            height: 100%;
            width: 100%;
            position: relative;
            transition: transform 1500ms;
            transform-style: preserve-3d;
        }

        .front1,
        .back1 {
            height: 100%;
            width: 100%;
            border-radius: 2rem;
            box-shadow: 0 0 5px 2px rgba(50, 50, 0.25);
            position: absolute;
            backface-visibility: hidden;
        }

        .front1 {
            background-image: url("golf/golfer.jpeg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .back1 {
            background-color: #3a3a3a;
            transform: rotateY(180deg);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 5rem;
        }

        /*CONTAINER2*/
        .container2 {
            width: 350px;
            height: 500px;
            perspective: 500px;
            /*Gives the image a 3D effect*/
        }

        .container2:hover>.card {
            cursor: pointer;
            transform: rotateY(180deg);
        }

        .card {
            height: 100%;
            width: 100%;
            position: relative;
            transition: transform 1500ms;
            transform-style: preserve-3d;
        }

        .front2,
        .back2 {
            height: 100%;
            width: 100%;
            border-radius: 2rem;
            box-shadow: 0 0 5px 2px rgba(50, 50, 0.25);
            position: absolute;
            backface-visibility: hidden;
        }

        .front2 {
            background-image: url("golf/close-up-golf-player.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;

        }

        .back2 {
            background-color: #3a3a3a;
            transform: rotateY(180deg);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 5rem;
        }

        /*CONTAINER3*/
        .container3 {
            width: 350px;
            height: 500px;
            perspective: 500px;
            /*Gives the image a 3D effect*/
        }

        .container3:hover>.card {
            cursor: pointer;
            transform: rotateY(180deg);
        }

        .card {
            height: 100%;
            width: 100%;
            position: relative;
            transition: transform 1500ms;
            transform-style: preserve-3d;
        }

        .front3,
        .back3 {
            height: 100%;
            width: 100%;
            border-radius: 2rem;
            box-shadow: 0 0 5px 2px rgba(50, 50, 0.25);
            position: absolute;
            backface-visibility: hidden;
        }

        .front3 {
            background-image: url("back-view-man-playing-grassy-golf-field.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }

        .back3 {
            background-color: #3a3a3a;
            transform: rotateY(180deg);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 5rem;
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
        <a href="golfCaptains.php"
            class="<?php if ($currentPage == 'golfCaptains.php') {
                        echo 'active';
                    } ?>">Captains</a>
        <a href="golfPresidents.php"
            class="<?php if ($currentPage == 'golfPresidents.php') {
                        echo 'active';
                    } ?>">Presidents</a>
        <a href="golfClubs.php" class="<?php if ($currentPage == 'golfClubs.php') {
                                            echo 'active';
                                        } ?>">Clubs</a>
        <a href="golfersHistory.php"
            class="<?php if ($currentPage == 'golfersHistory.php') {
                        echo 'active';
                    } ?>">Golfers</a>

        <div class="search-container">
            <input type="text" class="search-bar" placeholder="Search...">
            <button class="search-button">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>

    <div class="container-wrapper">
        <div class="container1">
            <div class="card">
                <div class="front1"></div>
                <div class="back1">
                    <h1>Dummy Info</h1>
                    <p>Johannes Shikalepo</p>
                </div>
            </div>
        </div>

        <div class="container2">
            <div class="card">
                <div class="front2"></div>
                <div class="back2">
                    <h1>Dummy Info</h1>
                    <p>Simeon Chae Chae</p>
                </div>
            </div>
        </div>

        <div class="container3">
            <div class="card">
                <div class="front3"></div>
                <div class="back3">
                    <h1>Dummy Info</h1>
                    <p>David Butterfly</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
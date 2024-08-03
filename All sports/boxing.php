<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LSON - Namibian Boxing</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('./images/Boxing images/sketch.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        .header {
            background: linear-gradient(to right, #C9DABF, #77E4C8); /* Red to Yellow gradient */
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
            background-color: rgba(0, 0, 0, 0.7); /* Red */
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
            background-color: #b50e2b; /* Darker Red */
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
            color: #d21034; /* Red */
            margin-bottom: 10px;
        }

        .section-header p {
            font-size: 1.2em;
            color: #333; /* Dark text */
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
            border-color: #d21034; /* Red */
            outline: none;
            box-shadow: 0 2px 8px rgba(210, 16, 52, 0.2);
        }

        form input[type="text"]::placeholder {
            color: #aaa;
            font-style: italic;
        }

        .footer {
            background: linear-gradient(to right, #C9DABF, #77E4C8); /* Yellow to Red gradient */
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
            opacity: 0.8;
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
        <h1>LSON - Namibian Boxing</h1>
        <p>Your source for all things Namibian boxing</p>
    </div>

    <div class="navigation">
        <a href="football.html">Soccer</a>
        <a href="rugby.html">Rugby</a>
        <a href="tennis.html">Tennis</a>
        <a href="swimming.html">Swimming</a>
        <a href="boxing.html">Boxing</a>
        <a href="golf.html">Golf</a>
        <a href="cricket.html">Cricket</a>
    </div>

    <div class="main-content">
        <section id="boxing" class="section">
            <div class="section-header">
                <h2>Boxing</h2>
                <p>Explore the latest updates, news, and scores from Namibian boxing.</p>
            </div>

            <div class="content">
                <!-- Example content -->
                <article>
                    <h3>Latest Fight Results</h3>
                    <p>Namibia vs Angola</p>
                    <img src="../images/nam b1.jpg" alt="Namibia vs ANGOLA">
                    <p>Namibia vs Mozambique</p>
                    <img src="../images/Boxing images/nam b4.jpg" alt="Namibia vs Mozambique">
                    <p>Namibia vs Nigeria</p>
                    <img src="../images/Boxing images/nam b5.jpg" alt="Namibia vs Nigeria">
                </article>
                <article>
                    <h3>Upcoming Fights</h3>
                    <p>
                        National Boxing championship<br>
                        MTC salute boxing academy<br>
                        DR Hage Geingob Boxing Bonaza<br>
                        Honey Loma Fight
                    </p>
                    <img src="../images/Upcoming F.jpg" alt="Upcoming Fights">
                    <img src="../images/Boxing images/upcoming f2.jpg" alt="Upcoming Fights">
                    <img src="../images/Boxing images/upcming f3.jpg" alt="Upcoming Fights">
                    <img src="../images/Boxing images/upcoming f5.jpg" alt="Upcoming Fights">
                </article>
                <img src="../images/Namibian boxing T.jpg" alt="Namibian Boxing Team">
                <video src="../videos/NAM VS MALAWI BOXING.mp4" controls></video>
            </div>
        </section>

        <section id="news" class="section">
            <div class="section-header">
                <h2>Latest News</h2>
                <p>Stay updated with the latest news and stories in Namibian boxing.</p>
            </div>
            <div class="content">
                <!-- News articles go here -->
                <article>
                    <h3>News Article Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mollis pellentesque nulla, vitae euismod sem porta sit amet. Aliquam condimentum egestas facilisis. Pellentesque eget leo mattis, vehicula purus et, consectetur quam. Vestibulum a tellus est. Nam est magna, sodales eget velit in, vulputate iaculis est. Mauris interdum vehicula varius. Nam sagittis dictum commodo. Ut id tincidunt lorem. Pellentesque accumsan sodales eros, sit amet tristique nisl dictum in. Morbi tincidunt in nulla ut dictum. Donec convallis efficitur mattis. Curabitur id porta risus, a porttitor nisi. Donec auctor mi quis leo scelerisque convallis id id lorem. Nulla et mattis enim, id tempus massa. Quisque turpis justo, faucibus a posuere eget, porta quis tellus. Ut vel imperdiet lectus.</p>
                </article>
            </div>
        </section>

        <section id="fighters" class="section">
            <div class="section-header">
                <h2>Top Fighters</h2>
                <p>Profiles of the top fighters in Namibian boxing.</p>
            </div>
            <div class="content">
                <!-- Fighter profiles go here -->
                <article>
                    <h3>Harry Simon Jr</h3>
                    <p>Aliquam imperdiet sem at dolor lobortis, ac pharetra nisi porta. Fusce tincidunt erat commodo magna viverra feugiat. Etiam varius ornare molestie. Aliquam erat volutpat. Pellentesque vitae congue risus. Nam commodo arcu non turpis molestie rhoncus. Pellentesque venenatis ante ut fringilla consequat</p>
                </article>

                <article>
                    <h3>Abed Shikongo</h3>
                    <p>Aliquam imperdiet sem at dolor lobortis, ac pharetra nisi porta. Fusce tincidunt erat commodo magna viverra feugiat. Etiam varius ornare molestie. Aliquam erat volutpat. Pellentesque vitae congue risus. Nam commodo arcu non turpis molestie rhoncus. Pellentesque venenatis ante ut fringilla consequat</p>
                </article>

                <article>
                    <h3>Natty Kakololo</h3>
                    <p>Aliquam imperdiet sem at dolor lobortis, ac pharetra nisi porta. Fusce tincidunt erat commodo magna viverra feugiat. Etiam varius ornare molestie. Aliquam erat volutpat. Pellentesque vitae congue risus. Nam commodo arcu non turpis molestie rhoncus. Pellentesque venenatis ante ut fringilla consequat</p>
                </article>
            </div>
        </section>

        <section id="fixtures" class="section">
            <div class="section-header">
                <h2>Fight Fixtures</h2>
                <p>Upcoming fights and schedules.</p>
            </div>
            <div class="content">
                <!-- Fixtures and schedule go here -->
                <article>
                    <h3>Fight Fixture</h3>
                    <p> Quisque sit amet elit gravida, ultricies odio nec, aliquam orci. Ut vitae sem a dolor eleifend dapibus id ac est. Integer a dictum ex. Duis dignissim, ex ac lacinia suscipit, felis leo tincidunt ex, in iaculis velit dui eget tortor. Proin gravida volutpat turpis sed semper. In rhoncus sed massa nec pellentesque. Fusce pulvinar quam aliquam imperdiet vehicula.</p>
                </article>

                <article>
                    <h3>Fight Fixture</h3>
                    <p> Quisque sit amet elit gravida, ultricies odio nec, aliquam orci. Ut vitae sem a dolor eleifend dapibus id ac est. Integer a dictum ex. Duis dignissim, ex ac lacinia suscipit, felis leo tincidunt ex, in iaculis velit dui eget tortor. Proin gravida volutpat turpis sed semper. In rhoncus sed massa nec pellentesque. Fusce pulvinar quam aliquam imperdiet vehicula.</p>
                </article>

                <article>
                    <h3>Fight Fixture</h3>
                    <p> Quisque sit amet elit gravida, ultricies odio nec, aliquam orci. Ut vitae sem a dolor eleifend dapibus id ac est. Integer a dictum ex. Duis dignissim, ex ac lacinia suscipit, felis leo tincidunt ex, in iaculis velit dui eget tortor. Proin gravida volutpat turpis sed semper. In rhoncus sed massa nec pellentesque. Fusce pulvinar quam aliquam imperdiet vehicula.</p>
                </article>
            </div>
        </section>

        <section id="results" class="section">
            <div class="section-header">
                <h2>Fight Results</h2>
                <p>Recent fight results and scores.</p>
            </div>
            <div class="content">
                <!-- Fight results go here -->
                <article>
                    <h3>Fight Result</h3>
                    <p>Aliquam erat volutpat. Pellentesque vitae congue risus. Nam commodo arcu non turpis molestie rhoncus. Pellentesque venenatis ante ut fringilla consequat.</p>
                </article>

                <article>
                    <h3>Fight Result</h3>
                    <p>Aliquam erat volutpat. Pellentesque vitae congue risus. Nam commodo arcu non turpis molestie rhoncus. Pellentesque venenatis ante ut fringilla consequat.</p>
                </article>

                <article>
                    <h3>Fight Result</h3>
                    <p>Aliquam erat volutpat. Pellentesque vitae congue risus. Nam commodo arcu non turpis molestie rhoncus. Pellentesque venenatis ante ut fringilla consequat.</p>
                </article>
            </div>
        </section>

        <section id="standings" class="section">
            <div class="section-header">
                <h2>Standings</h2>
                <p>Current standings and rankings.</p>
            </div>
            <div class="content">
                <!-- Standings table goes here -->
                <article>
                    <h3>Standings</h3>
                    <p>Aliquam erat volutpat. Pellentesque vitae congue risus. Nam commodo arcu non turpis molestie rhoncus. Pellentesque venenatis ante ut fringilla consequat.</p>
                </article>

                <article>
                    <h3>Standings</h3>
                    <p>Aliquam erat volutpat. Pellentesque vitae congue risus. Nam commodo arcu non turpis molestie rhoncus. Pellentesque venenatis ante ut fringilla consequat.</p>
                </article>
            </div>
        </section>

        <section id="gallery" class="section">
            <div class="section-header">
                <h2>Photo Gallery</h2>
                <p>Collection of photos from recent fights and events.</p>
            </div>
            <div class="content">
                <!-- Photo gallery goes here -->
                <img src="../images/Boxing images/357390170_761905962602856_1561414326433763805_n.jpg" alt="Gallery Image">
                <img src="../images/Boxing images/357392650_761905912602861_3809727903863550449_n.jpg" alt="Gallery Image">
                <img src="../images/Boxing images/398647497_844944234299028_8742160017150816210_n.jpg" alt="Gallery Image">
                <img src="../images/Boxing images/407456314_865686938891424_7289192677296052221_n.jpg" alt="Gallery Image">
            </div>
        </section>

        <section id="videos" class="section">
            <div class="section-header">
                <h2>Video Highlights</h2>
                <p>Watch highlights from recent fights and events.</p>
            </div>
            <div class="content">
                <!-- Video highlights go here -->
                <video src="../videos/Namibian boxer Jeremiah “Lowkey” Nakathila beats Zoltan Kovacs.mp4" controls></video>
                <video src="../videos/Charles Shinima.mp4" controls></video>
            </div>
        </section>

        <div class="form-container">
            <form>
                <input type="text" placeholder="Search for fighters, fights, or news...">
            </form>
        </div>
    </div>

    <div class="footer">
        © 2024 by G Mobility Investment. All rights reserved.
    </div>
</body>
</html>
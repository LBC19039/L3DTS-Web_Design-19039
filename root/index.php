<?php
    session_start();

    if(isset($_SESSION['id']) && isset($_SESSION['username'])) {
        ?>

        <!DOCTYPE html>
        <html>
            <head>
                <title>Home - East Coast Bays Toastmasters</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="./Resources/CSS/main.css">
                <link rel="stylesheet" href="./Resources/CSS/homepage.css">
                <link rel="icon" href="./Resources/Images/favicon.png">
            </head>
            <body>
                <div class="grid-container">
                    <!--navigation bar-->
                    <nav>
                        <div class="login-button">
                            <input type="submit" value="Log In">
                        </div>
                        <div style="width: 100%">
                            <a href="./index.html"><img src="./Resources/Images/toastmasters_logo.png" alt="Toastmasters Logo" class="logo-button"></a>
                            <div class="nav-button"><a href="./index.php">Home</a></div>
                            <div class="nav-button"><a href="./committee.php">Committee</a></div>
                            <div class="nav-button"><a href="./calendar.php">Calendar</a></div>
                            <div class="nav-button"><a href="./contact.php">Contact Us</a></div>
                            <div class="nav-button"><a href="./test_page.php">Test Page</a></div>
                        </div>
                    </nav>

                    <!--hero banner-->
                    <header>
                        <h1>East Coast Bays Toastmasters</h1>
                    </header>

                    <!--main contents of the website-->
                    <main>
                        <figure class="stock-image">
                            <img src="./Resources/Images/stock_image.jpg" style="width: 100%;" alt="Stock Image">
                        </figure>

                        <h1>Hello, <?php echo $_SESSION['username']; ?></h1>

                        <article class="info">
                            <h2>Who We Are</h2>
                            <p>We are a community club of <a href="https://www.toastmasters.org/" rel="external" target="_blank">Toastmasters International</a> and have the greatest pleasure meeting in beautiful Browns Bay located in the East Coast Bays of Auckland's North Shore.</p>
                            <p>Toastmasters is a worldwide organisation that has helped many thousands of people to develop confidence and skills in public speaking and leadership. Our club has been active in the East Coast Bays area for nearly 43 years and includes a diverse reflection of our local community. If you are not already aware, the heart of the Toastmasters learning experience is in the club, which provides a friendly, fun and safe environment to step out of our comfort zones. Public speaking is a real fear most people have and the success of Toastmasters is in recognising that fact and providing a fun and supportive environment in which we can grow at our own pace with peer to peer learning forming the essence of how we learn.</p>
                        </article>
                        
                        <article class="venue">
                            <h3>The Venue</h3>
                            <p>You are most welcome to come along and join our meetings as a guest, as that is a great way to get a feel for the club and how Toastmasters works.</p>
                            <address>
                                Browns Bay Marine Centre<br>
                                10-12 Beachfront Lane<br>
                                Browns Bay, North Shore City
                            </address>
                            <iframe class="location-map" src="https://maps.google.com/maps?q=east%20coast%20bays%20toastmasters&amp;t=m&amp;z=16&amp;output=embed" frameborder="0"></iframe>
                        </article>
                            
                        <div class="location-carousel">
                            <!--carousel container-->
                            <div class="carousel-container">
                                <!--images shown in the carousel-->
                                <figure class="location-slides fade">
                                    <img src="./Resources/Images/Location_Images/general_area.jpg" style="width:100%" alt="General Area">
                                </figure>
                            
                                <figure class="location-slides fade">
                                    <img src="./Resources/Images/Location_Images/entrance_1.jpg" style="width:100%" alt="Entrance 1">
                                </figure>
        
                                <figure class="location-slides fade">
                                    <img src="./Resources/Images/Location_Images/entrance_2.jpg" style="width:100%" alt="Entrance 2">
                                </figure>
        
                                <!--next and previous buttons-->
                                <a class="prev-img" onclick="plusSlides(-1)">&#10094;</a>
                                <a class="next-img" onclick="plusSlides(1)">&#10095;</a>
                            </div>
                            
                            <!--the dots-->
                            <div style="text-align: center;">
                                <span class="dot" onclick="currentSlide(1)"></span>
                                <span class="dot" onclick="currentSlide(2)"></span>
                                <span class="dot" onclick="currentSlide(3)"></span>
                            </div> 
                        </div>
                    </main>

                    <!--footer-->
                    <footer>
                        <div class="socials">
                            <a href="http://www.facebook.com/ecbtoastmasters" rel="external" target="_blank"><img src="./Resources/Images/Social_Icons/facebook_logo.png" alt="Facebook Logo" style="height: 30px; padding-right: 8px;"></a>
                            <a href="http://www.meetup.com/East-Coast-Bays-Toastmasters" rel="external" target="_blank"><img src="./Resources/Images/Social_Icons/meetup_logo.png" alt="Meetup Logo" style="height: 38px;"></a>
                        </div>
                        <div><a href="https://d112tm.org.nz/" rel="external" target="_blank" style="color: black;">District Website</a></div>
                        <div><a href="https://www.toastmasters.org/" rel="external" target="_blank" style="color: black;">International Website</a></div>
                        <div><span>© 2023 East Coast Bays Toastmasters</span></div>
                    </footer>
                </div>
                <script type="text/javascript" src="./Resources/JavaScript/homepage.js"></script> 
            </body>
        </html>
<?php 
    } 
    else {
        header("Location: login_page.php");
        exit();
    }
    
?>
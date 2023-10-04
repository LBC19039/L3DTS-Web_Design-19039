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
        <?php include "login_update.php" ?>
        <div class="grid-container">
            <!--navigation bar-->
            <?php include "navigation.php" ?>

            <!--hero banner-->
            <header>
                <h1>East Coast Bays Toastmasters</h1>
            </header>

            <!--main contents of the website-->
            <main>
                <figure class="stock-image">
                    <img src="./Resources/Images/stock_image.jpg" style="width: 100%;" alt="Stock Image">
                </figure>

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
            <?php include "footer.php" ?>
        </div>
        <script type="text/javascript" src="./Resources/JavaScript/homepage.js"></script> 
    </body>
</html>

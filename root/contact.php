<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us - East Coast Bays Toastmasters</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="./Resources/CSS/main.css">
        <link rel="stylesheet" href="./Resources/CSS/contact.css">
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
                </div>
            </nav>

            <!--main contents of the website-->
            <main>
                <section class="info">
                    <h1>Contact Us</h1>
                    <p>You can find a lot of information about Toastmasters in New Zealand at the official <a href="https://d112tm.org.nz/" rel="external" target="_blank">District 112 website</a>.</p>
                    <p>If you can't find what you need there, please use the contact form below.</p>
                    <p>We will try our best to respond back to you within 24 hours.</p>
                    <br>
                </section>

                <form action="send_message.php" method="post">
                    <label for="fullname">Full Name<span style="color: red;">*</span></label><br>
                    <input type="text" class="input" id="fullname" name="fullname" required>
                    <label for="email">Email<span style="color: red;">*</span></label><br>
                    <input type="email" class="input" id="email" name="email" required>
                    <label for="phone">Phone Number</label><br>
                    <input type="text" class="input" id="phone" name="phone">
                    <label for="message">Your Message<span style="color: red;">*</span></label><br>
                    <textarea class="input" id="message" name="message" required></textarea><br>
                    <span style="color: red; font-size: 12pt;">* means required </span>
                    <input type="submit" class="sendbutton" value="Send">
                </form>
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
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Calendar - East Coast Bays Toastmasters</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="./Resources/CSS/main.css">
        <link rel="stylesheet" href="./Resources/CSS/calendar.css">
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
            <?php
                require_once "connect.php";

                $FullName = $_REQUEST["fullname"];
                $Email = $_REQUEST["email"];
                $PhoneNumber = $_REQUEST["phone"];
                $Message = $_REQUEST["message"];

                $sql = "INSERT INTO contact (FullName, Email, PhoneNumber, Message) VALUES ('$FullName', '$Email', '$PhoneNumber', '$Message')";

                if($conn -> query($sql) === TRUE) {
                    echo "<span>Your message has been sent. Please wait up to 24 hours for a response.</span>";
                }
                else {
                    echo "<span>Error: " . $sql . "<br>" . $conn -> error . "</span";
                }
    
            ?>

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

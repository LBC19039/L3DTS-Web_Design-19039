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
        <?php include "login_update.php" ?>
        <div class="grid-container">
            <!--navigation bar-->
            <?php include "navigation.php" ?>

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
                    <input type="submit" class="send-button" value="Send">
                </form>
            </main>

            <!--footer-->
            <?php include "footer.php" ?>
        </div>
    </body>
</html>
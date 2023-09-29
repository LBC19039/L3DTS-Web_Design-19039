<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us - East Coast Bays Toastmasters</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="./Resources/CSS/main.css">
        <link rel="icon" href="./Resources/Images/favicon.png">
    </head>
    <body>
        <div class="grid-container">
            <!--navigation bar-->
            <?php include "navigation.php" ?>

            <!--main contents of the website-->
            <main>
                <?php
                    require_once "connect.php";

                    $FullName = addslashes($_REQUEST["fullname"]);
                    $Email = addslashes($_REQUEST["email"]);
                    $PhoneNumber = addslashes($_REQUEST["phone"]);
                    $Message = addslashes($_REQUEST["message"]);

                    $sql = "INSERT INTO contact (FullName, Email, PhoneNumber, Message) VALUES ('$FullName', '$Email', '$PhoneNumber', '$Message')";

                    if($conn -> query($sql) === TRUE) {
                        echo "<span>Your message has been sent. Please wait up to 24 hours for a response.</span>";
                    }
                    else {
                        echo "<span>Error: " . $sql . "<br>" . $conn -> error . "</span";
                    }
                ?>
            </main>

            <!--footer-->
            <?php include "footer.php" ?>
        </div>
    </body>
</html>

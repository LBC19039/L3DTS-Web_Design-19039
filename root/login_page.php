<!DOCTYPE html>
<html>
    <head>
        <title>Log In - East Coast Bays Toastmasters</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="./Resources/CSS/main.css">
        <link rel="stylesheet" href="./Resources/CSS/login.css">
        <link rel="icon" href="./Resources/Images/favicon.png">
    </head>
    <body>
        <div class="grid-container">
            <!--navigation bar-->
            <?php include "navigation.php" ?>

            <!--main contents of the website-->
            <main>
                <form action="login_request.php" method="post">
                    <?php
                        if(isset($_GET['error'])) {
                            echo "<p class='error'>" . $_GET['error'] . "</p>";
                        }
                    ?>
                    <label>Username</label>
                    <input type="text" name="uname"></input><br>
                    <label>Password</label>
                    <input type="password" name="password"></input><br>

                    <button type="submit">Login</button>
                </form>
            </main>

            <!--footer-->
            <?php include "footer.php" ?>
        </div>
    </body>
</html>
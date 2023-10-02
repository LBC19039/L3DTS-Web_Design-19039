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
                    <label>Username</label>
                    <input class="login-input" type="text" name="uname"><br>
                    <label>Password</label>
                    <input class="login-input" type="password" name="password"><br>
                    <button class="submit-login" type="submit">Login</button>
                    <?php
                        if(isset($_GET['error'])) {
                            echo "<p class='error'>" . $_GET['error'] . "</p>";
                        }
                    ?>
                    
                </form>
            </main>

            <!--footer-->
            <?php include "footer.php" ?>
        </div>
    </body>
</html>
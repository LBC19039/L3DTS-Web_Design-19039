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
        <?php include "login.php" ?>
        <div class="grid-container">
            <!--navigation bar-->
            <?php include "navigation.php" ?>

            <!--main contents of the website-->
            <main>
                <h1>East Coast Bays Toastmasters</h1>
                <h2>2023 - 2024 Calendar</h2>
                <iframe class="calendar" frameborder="0" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vR97G249gzMoTdG7NwJa9jkxgFgClP08HjlG9QWZdEgsTHntYJCa7pETuZa9s4ZAqEB7j_xFCY6HA6i/pubhtml?gid=274715859&amp;single=true&amp;widget=false&amp;chrome=false&amp;headers=false"></iframe>
            </main>

            <!--footer-->
            <?php include "footer.php" ?>
        </div>
    </body>
</html>
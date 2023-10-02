<!DOCTYPE html>
<html>
    <head>
        <title>Admin - East Coast Bays Toastmasters</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="./Resources/CSS/main.css">
        <link rel="stylesheet" href="./Resources/CSS/admin.css">
        <link rel="icon" href="./Resources/Images/favicon.png">
    </head>
    <body>
        <div class="grid-container">
            <!--navigation bar-->
            <?php 
                include "navigation.php";
                if(!(isset($_SESSION['id']) && isset($_SESSION['username']))) {
                    header("Location: index.php");
                }
            ?>

            <!--main contents of the website-->
            <main style="grid-template-rows: auto auto 1fr;">
                <h1>This page is purely for testing purposes and will NOT be added to the final website.</h1>
                <table class="">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Password</th>
                    </tr>
                    <?php
                        require_once "connect.php";

                        $sql = "SELECT id, name, username, password FROM users";
                        
                        $result = $conn -> query($sql);

                        if($result -> num_rows > 0){
                            while($row = $result -> fetch_assoc()) {
                                echo "<tr class='students'>";
                                    echo "<td class='students'>" . $row["id"] . "</td>";
                                    echo "<td class='students'>" . $row["name"] . "</td>";
                                    echo "<td class='students'>" . $row["username"] . "</td>";
                                    echo "<td class='students'>" . $row["password"] . "</td>";
                                echo "</tr>";
                            }
                        }
                        else {
                            echo "0 results";
                        }
                    ?>

                </table>
            </main>

            <!--footer-->
            <?php include "footer.php" ?>
        </div>
    </body>
</html>

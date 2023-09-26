<!DOCTYPE html>
<html>
    <head>
        <title>database connection test</title>
    </head>
    <body>
        <h1>test connection to database</h1>

        <?php
            require_once "connect.php";

            $sql = "SELECT ID, FirstName, LastName, Year, Address FROM testing";
            
            $result = $conn -> query($sql);

            $row = $result -> fetch_assoc();

            echo "<p>" . $row["FirstName"] . "</p>"

        ?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>database connection test</title>
        <style>
            div.submit {
                margin-top: 50px;
                display: block;
                text-align: center;
            }

            form {
                display: inline-block;
                text-align: left;
                margin-left: auto;
                margin-right: auto;
            }
        </style>
    </head>
    <body>
        <h1>test connection to database</h1>

        <?php
            require_once "connect.php";

            $sql = "SELECT ID, FirstName, LastName, Year, Address FROM testing";
            
            $result = $conn -> query($sql);

            // $row = $result -> fetch_assoc();

            // echo "<p>" . $result . "</p>";
            // doesn't work

            //echo "<p>" . $row["FirstName"] . "</p>";

            echo "<table class='students'>";
                echo "<tr class='students'>";
                    echo "<th class='students'>ID</th>";
                    echo "<th class='students'>First Name</th>";
                    echo "<th class='students'>Last Name</th>";
                    echo "<th class='students'>Year</th>";
                    echo "<th class='students'>Address</th>";
                    echo "<th class='students'>Delete</th>";
                echo "</tr>";

            if($result -> num_rows > 0){
                while($row = $result -> fetch_assoc()) {
                    echo "<tr class='students'>";
                        echo "<td class='students'>" . $row["ID"] . "</td>";
                        echo "<td class='students'>" . $row["FirstName"] . "</td>";
                        echo "<td class='students'>" . $row["LastName"] . "</td>";
                        echo "<td class='students'>" . $row["Year"] . "</td>";
                        echo "<td class='students'>" . $row["Address"] . "</td>";
                        echo "<td class='students'>";
                            echo "<a href='delete.php?ID=" . $row['ID'] . "'><button class='btnDelete'>Delete</button></a>";
                        echo "</td>";
                    echo "</tr>";
                }
            }
            else {
                echo "0 results";
            }

            echo "</table>";

        ?>
        
        <div class="submit">
            <form action="insert_student.php" method="post">
                <label>First Name</label>
                <input name="firsttext"></input>
                <label>Last Name</label>
                <input name="lasttext"></input>
                <label>Year</label>
                <select name="year">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                </select>
                <label>Address</label>
                <input name="addresstext"></input>
                <button type="submit">Submit Student</button>
            </form>
        </div>
    </body>
</html>
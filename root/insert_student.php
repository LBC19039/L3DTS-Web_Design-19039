<?php

    print("<h2>Loaded</h2>");

    require_once "connect.php";

    $FirstName = $_REQUEST["firsttext"];
    $LastName = $_REQUEST["lasttext"];
    $Year = $_REQUEST["year"];
    $Address = $_REQUEST["addresstext"];

    $sql = "INSERT INTO testing (FirstName, LastName, Year, Address) VALUES ('$FirstName', '$LastName', '$Year', '$Address')";

    if($conn -> query($sql) === TRUE) {
        echo "New record created successfully";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn -> error;
    }

    echo "<script>location.href='test_page.php'</script>";

?>
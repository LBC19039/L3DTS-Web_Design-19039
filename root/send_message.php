<?php
    require_once "connect.php";

    $FullName = $_REQUEST["fullname"];
    $Email = $_REQUEST["email"];
    $PhoneNumber = $_REQUEST["phone"];
    $Message = $_REQUEST["message"];

    $sql = "INSERT INTO contact (FullName, Email, PhoneNumber, Message) VALUES ('$FullName', '$Email', '$PhoneNumber', '$Message')";

    if($conn -> query($sql) === TRUE) {
        echo "Message sent successfully";
    }
    else {
        echo "Error: " . $sql . "<br>" . $conn -> error;
    }
    
?>
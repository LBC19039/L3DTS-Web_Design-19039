<?php
    require_once "./db_connect.php";

    // grab values from contact form
    $FullName = addslashes($_REQUEST["fullname"]);
    $Email = addslashes($_REQUEST["email"]);
    $PhoneNumber = addslashes($_REQUEST["phone"]);
    $Message = addslashes($_REQUEST["message"]);

    $sql = "INSERT INTO contact (FullName, Email, PhoneNumber, Message) VALUES ('$FullName', '$Email', '$PhoneNumber', '$Message')";
    
    // send message back to contact page
    if($conn -> query($sql) === TRUE) {
        header('Location: ./contact.php?message=Your message has been sent.');
        exit();
    }
    else {
        header('Location: ./contact.php?message=Error: ' . $sql . $conn -> error);
        exit();
    }
?>

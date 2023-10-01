<?php
    session_start();
    include "connect.php";

    // clean information
    if(isset($_POST['uname']) && isset($_POST['password'])) {
        function validate($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }

    $uname = strtolower(validate($_POST['uname']));
    $pass = validate($_POST['password']);

    // check if username or password is empty
    if(empty($uname)) {
        header ("Location: login_page.php?error=Username is required");
        exit();
    }
    else if(empty($pass)) {
        header("Location: login_page.php?error=Password is required");
        exit();
    }

    $sql = "SELECT * FROM users WHERE username='$uname' AND password='$pass'";

    $result = mysqli_query($conn, $sql);

    // checks whether or not the username + password exists

    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if($row['username'] === $uname && $row['password'] === $pass) {
            echo "Logged In!";
            $_SESSION['username'] = $row['username'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            header("Location: index.php");
            exit();
        }
        else {
            header("Location: login_page.php?error=Incorrect username or password");
            exit();
        }
    }
    else {
        header("Location: login_page.php?error=Incorrect username or password");
        exit();
    }
?>
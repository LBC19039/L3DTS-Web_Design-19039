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
            header('Location: ' . strtok($_SERVER['HTTP_REFERER'], "?"));
            exit();
        }
        else {
            header('Location: ' . strtok($_SERVER['HTTP_REFERER'], "?") . '?error=Incorrect username or password');
            exit();
        }
    }
    else {
        header('Location: ' . strtok($_SERVER['HTTP_REFERER'], "?") . '?error=Incorrect username or password');
        exit();
    }
?>
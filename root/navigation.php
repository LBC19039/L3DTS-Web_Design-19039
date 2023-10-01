<?php
    session_start();

    if(isset($_SESSION['id']) && isset($_SESSION['username'])) {
        $LoginBtnDisplay = "Log Out";
        $LoginBtnLink = "./logout.php";
        $GreetingMessage = "<span class='greeting'>Hello, " . $_SESSION['name'] . "!</span>";
    }
    else {
        $LoginBtnDisplay = "Log In";
        $LoginBtnLink = "./login_page.php";
        $GreetingMessage = "";
    }
?>
<nav>
    <div class="login-button">
        <?php echo $GreetingMessage ?>
        <a class="login-button" href=<?php echo $LoginBtnLink ?>>
            <?php echo $LoginBtnDisplay ?>
        </a>
    </div>
    <div style="width: 100%">
        <a href="./index.html"><img src="./Resources/Images/toastmasters_logo.png" alt="Toastmasters Logo" class="logo-button"></a>
        <div class="nav-button"><a href="./index.php">Home</a></div>
        <div class="nav-button"><a href="./committee.php">Committee</a></div>
        <div class="nav-button"><a href="./calendar.php">Calendar</a></div>
        <div class="nav-button"><a href="./contact.php">Contact Us</a></div>
        <div class="nav-button"><a href="./test_page.php">Test Page</a></div>
    </div>
</nav>
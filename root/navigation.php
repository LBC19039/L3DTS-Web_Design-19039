<?php
    session_start();

    if(isset($_SESSION['id']) && isset($_SESSION['username'])) {
        $LoginBtnDisplay = "Log Out";
        $GreetingMessage = "<span class='greeting'>Hello, " . $_SESSION['name'] . "!</span>";
        $MembersPages = "<div class='nav-button'><a href='./admin.php'>Admin</a></div>";
        $LoginBtn = "<a class='login-button' href='./login_process.php'><span style='font-size: initial; font-family: inherit;'>$LoginBtnDisplay</span></a>";
    }
    else {
        $LoginBtnDisplay = "Log In";
        $GreetingMessage = $MembersPages = "";
        $LoginBtn = "<button class='login-button' style='float:right;' onclick='document.getElementById(\"id01\").style.display=\"flex\"'><span style='font-size: initial; font-family: inherit;'>$LoginBtnDisplay</span></button>";
    }
?>
<nav style="width: 100%;" id="myNav" class="nav">
    <a href="./index.php"><img src="./resources/images/toastmasters_logo.png" alt="Toastmasters Logo" class="logo-button"></a>
    <div class="nav-button"><a href="./index.php">Home</a></div>
    <div class="nav-button"><a href="./committee.php">Committee</a></div>
    <div class="nav-button"><a href="./calendar.php">Calendar</a></div>
    <div class="nav-button"><a href="./contact.php">Contact Us</a></div>
    <?php echo $MembersPages ?>
    <div style="flex-grow: 1;"></div>
    <div class="login-button">
        <?php echo $GreetingMessage ?>
        <?php echo $LoginBtn ?>
    </div>
</nav>

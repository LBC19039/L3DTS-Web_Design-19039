<?php
    session_start();

    if(isset($_SESSION['id']) && isset($_SESSION['username'])) {
        $LoginBtnDisplay = "Log Out";
        // $LoginBtnLink = "./logout.php";
        $GreetingMessage = "<span class='greeting'>Hello, " . $_SESSION['name'] . "!</span>";
        $MembersPages = "<div class='nav-button'><a href='./admin.php'>Admin</a></div>";
        $LoginBtn = "<a class='login-button' href='./logout.php'><span style='font-size: initial; font-family: initial;'>$LoginBtnDisplay</span></a>";
    }
    else {
        $LoginBtnDisplay = "Log In";
        // $LoginBtnLink = "./login_page.php";
        $GreetingMessage = $MembersPages = "";
        $LoginBtn = "<button class='login-button' onclick='document.getElementById(\"id01\").style.display=\"block\"'><span style='font-size: initial; font-family: initial;'>$LoginBtnDisplay</span></button>";
    }
?>
<nav>
    <div class="login-button">
        <?php echo $GreetingMessage ?>
        <?php echo $LoginBtn ?>
        

    </div>
    <div style="width: 100%">
        <a href="./index.html"><img src="./Resources/Images/toastmasters_logo.png" alt="Toastmasters Logo" class="logo-button"></a>
        <div class="nav-button"><a href="./index.php">Home</a></div>
        <div class="nav-button"><a href="./committee.php">Committee</a></div>
        <div class="nav-button"><a href="./calendar.php">Calendar</a></div>
        <div class="nav-button"><a href="./contact.php">Contact Us</a></div>
        <?php echo $MembersPages ?>
    </div>
</nav>
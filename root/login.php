<!-- The Modal -->
<div id="id01" class="modal" <?php if(isset($_GET['error'])) {echo "style=\"display: flex;\"";} ?>>
    <!-- Modal Content -->
    <form class="modal-content animate" action="./login_process.php" method="post">
        <div class="container">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

            <label for="uname">Username</label>
            <input class="login-input" type="text" id="uname" name="uname"><br>
            <label for="password">Password</label>
            <input class="login-input" type="password" id="password" name="password"><br>
           
            <?php
                if(isset($_GET['error'])) {
                    echo "<span class='error'>" . $_GET['error'] . "</spam>";
                }
            ?>
            
            <button class="login-button" type="submit"><span style='font-size: initial; font-family: inherit;'>Login</span></button>
        </div>
    </form>
</div>
<?php 
    
?>
<script type="text/javascript" src="./resources/javascript/login.js"></script> 

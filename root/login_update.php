<!-- The Modal -->
<div id="id01" class="modal" <?php if(isset($_GET['error'])) {echo "style=\"display: block;\"";} ?>>

    <!-- Modal Content -->
    <form class="modal-content animate" action="/login_request.php" method="post">

        <div class="container">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

            <label>Username</label>
            <input class="login-input" type="text" name="uname"><br>
            <label>Password</label>
            <input class="login-input" type="password" name="password"><br>
            <?php
                if(isset($_GET['error'])) {
                    echo "<span class='error'>" . $_GET['error'] . "</spam>";
                }
            ?>
            <button class="login-button" type="submit">Login</button>
        </div>

    </form>
</div>
<?php 
    
?>
<script type="text/javascript" src="./Resources/JavaScript/login.js"></script> 

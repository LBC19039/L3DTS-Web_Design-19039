<!-- The Modal -->
<div id="id01" class="modal">

    <!-- Modal Content -->
    <form class="modal-content animate" action="/login_request.php" method="post">

        <div class="container">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

            <label>Username</label>
            <input class="login-input" type="text" name="uname"><br>
            <label>Password</label>
            <input class="login-input" type="password" name="password"><br>
            <button class="submit-login" type="submit">Login</button>
            <?php
                if(isset($_GET['error'])) {
                    echo "<p class='error'>" . $_GET['error'] . "</p>";
                }
            ?>
        </div>

    </form>
</div> 
<!-- The Modal -->
<div id="id01" class="modal">

    <!-- Modal Content -->
    <form class="modal-content animate" action="/login_request.php">

    <div class="container">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

        <label for="uname"><b>Username</b></label>
        <input class="login-input" type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input class="login-input" type="password" placeholder="Enter Password" name="psw" required>

        <button class="login-button" type="submit">Login</button>
    </div>

    </form>
</div> 
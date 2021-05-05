<?php include "include/header.php";?>
    <div class="registration-form">
        <form>
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Username" name="username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" placeholder="Retype-Password" name="password2">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="email" placeholder="Email" name="email">
            </div>
            
            <div class="form-group">
                <button type="button" class="btn btn-block create-account">Create Account</button>
            </div>
            <div>
                <p class="text-center">Already Have an account?<a href="login.php">Log in</a></p>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="assets/js/script.js"></script>
</body>
</html>


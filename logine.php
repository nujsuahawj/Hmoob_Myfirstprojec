<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/styleform.css">
</head>
<body>
    <form class="" method="POST" action="checklogine.php" onsubmit="return casnyuaj()" id="formlogin">
        <div class="login-box">
            <h3>Sign In</h3>
            <div class="textbox">
                <p>email</p>
                <input type="email" name="email" placeholder="ອີມີວ" id="email">
            </div>
            <p class="error" id="E_error" aria-autocomplete="off">Enter your email</p>
            <div class="textbox">
                <p>password</p>
                <input type="password" name="password" placeholder="password" id="Pass">
            </div>
            <p class="error" id="P_error" aria-autocomplete="off">Enter your emil</p>
            <input type="submit" class="btn" value="Login">
            <p class="foget_create" id="lue">Forgot password?</p>
            <p class="foget_create"><a href="sigine.html">Register</a></p>
        </div>
    </form>
    <form onsubmit="return tsincos()" class="error" id="fogetpassowordform">
        <div class="login-box">
         <input type="email" placeholder="your email" id="fogetpassword">
         <p class="error" id="fogetpassword_error" aria-autocomplete="off">enter your email</p><hr>
         <input type="submit" value="Send">
        </div>
    </form>
    <script src="js/casnyuaj.js"></script>
</body>
</html>
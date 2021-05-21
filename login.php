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
    <form class="" method="POST" action="checklogin.php" onsubmit="return casnyuaj()" id="formlogin">
        <div class="login-box">
            <h3>ID khag mus</h3>
            <div class="textbox">
                <p>Koj tus Email</p>
                <input type="email" name="email" placeholder="email" id="Email">
            </div>
            <p class="error" id="E_error" aria-autocomplete="off">Pab sau koj tus email</p>
            <div class="textbox">
                <p>Koj Tus zauv</p>
                <input type="password" name="password" placeholder="Tus zauv" id="Pass">
            </div>
            <p class="error" id="P_error" aria-autocomplete="off">Pab sau koj tus zauv</p>
            <input type="submit" class="btn" value="khag Mus">
            <p class="foget_create" id="lue">Tsi nco tus zauv?</p>
            <p class="foget_create"><a href="sigin.html">Sau npe</a></p>
        </div>
    </form>
    <form onsubmit="return tsincos()" class="error" id="fogetpassowordform">
        <div class="login-box">
         <input type="email" placeholder="Koj tus email" id="fogetpassword">
         <p class="error" id="fogetpassword_error" aria-autocomplete="off">Pa sau koj tus zauv</p><hr>
         <input type="submit" value="Xas">
        </div>
    </form>
    <script src="js/casnyuaj.js"></script>
</body>
</html>
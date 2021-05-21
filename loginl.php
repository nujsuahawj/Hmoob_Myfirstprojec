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
    <form class="" method="POST" action="checkloginl.php" onsubmit="return casnyuaj()" id="formlogin">
        <div class="login-box">
            <h3>ລົງຊື່ເຂົ້າສູ່ລະບົບ</h3>
            <div class="textbox">
                <p>ອີມີວ</p>
                <input type="email" name="email" placeholder="ອີມີວ" id="Email">
            </div>
            <p class="error" id="E_error" aria-autocomplete="off">ປ້ອນອີມີວຂອງທ່ານ</p>
            <div class="textbox">
                <p>ລະຫັດຜ່ານ</p>
                <input type="password" name="password" placeholder="ປ້ອນລະຫັດຂອງທ່ານ" id="Pass">
            </div>
            <p class="error" id="P_error" aria-autocomplete="off">ລະຫັດຜ່ານ</p>
            <input type="submit" class="btn" value="ເຂົ້າສູ່ລະບົບ">
            <p class="foget_create" id="lue">ລືມລະຫັດ?</p>
            <p class="foget_create"><a href="siginl.html">ລົງທະບຽນ</a></p>
        </div>
    </form>
    <form onsubmit="return tsincos()" class="error" id="fogetpassowordform">
        <div class="login-box">
         <input type="email" placeholder="Koj tus email" id="fogetpassword">
         <p class="error" id="fogetpassword_error" aria-autocomplete="off">ປ້ອນອີມີວຂອງທ່ານ</p><hr>
         <input type="submit" value="ສົ່ງ">
        </div>
    </form>
    <script src="js/casnyuaj.js"></script>
</body>
</html>
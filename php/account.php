<?php
/**
 * Created by PhpStorm.
 * User: Stefan Lazarevic
 * Date: 04/10/2018
 * Time: 00:41
 */include('../DB/session_handler.php') ?>

<html>
<head>
    <?php include '../helper/header.php';?>
</head>
<body>
<?php include '../helper/navbar.php';?>
<!--********************CONTENT********************-->

<div class="content clearfix">
    <form action="login_form.php" method="post">
        <div style="width:40%;margin-right: auto;margin-left: auto;">
            <label for="login_username" class="formlabel">E-mail:</label>
            <input class="focus" type="email" name="username" id="login_username" required><br>
            <label for="pass_username" class="formlabel">Password:</label>
            <input class="focus" id="pass_username" type="password" name="psw" required><br>
        </div>
        <div style="margin: 1%";>
            <input class="checkBx" type="checkbox"  name="cbx_terms" id="cbx_keep_logged" value="keep_logged">
            <label for="cbx_keep_logged" class="formlabel">Keep me logged in.</label>
        </div>
        <div style="margin: 1%";>
            Forgot Password?
        </div>
        <input class="loginbtn" type="button" onclick="location.href = 'registration.php';" value="Create Account">
        <input class="loginbtn" type="submit" onclick="alert('Redirect to Reservations.php')" value="Login">
    </form>
</div>


<!--********************CONTENT********************-->
<?php include '../helper/footer.php';?>
</body>
</html>

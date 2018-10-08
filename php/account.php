<?php
/**
 * Created by PhpStorm.
 * User: Stefan Lazarevic
 * Date: 04/10/2018
 * Time: 00:41
 */ ?>

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
            <label class="formlabel">E-mail:</label>
            <input class="focus" type="email" name="username"><br>
            <label class="formlabel">Password:</label>
            <input class="focus" type="password" name="psw"><br>
        </div>
        <input type="submit" onclick="alert('Login Successful')" value="Login">
        <input type="submit" onclick="alert('Check Your e-mail!')" value="Forgot Password">
    </form>
</div>


<!--********************CONTENT********************-->
<?php include '../helper/footer.php';?>
</body>
</html>

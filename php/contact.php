<?php
/**
 * Created by PhpStorm.
 * User: Stefan Lazarevic
 * Date: 04/10/2018
 * Time: 00:42
 */?>
<!DOCTYPE html>
<html>
<head>
    <?php include '../helper/header.php';?>
</head>
<body>
<?php include '../helper/navbar.php';?>
<!--********************CONTENT********************-->
<div class="content clearfix">
    <div class="row">
        <div class="collum margi_2" style="border: 1px solid #c9d700;">
            <h2>Address:</h2>
            <p>Mecklenburgstraat 53,<br>5644NK Eindhoven</p>
        </div>
        <div class="collum margi_2" style="border: 1px solid #c9d700;">
            <h2>Phone:</h2>
            <p>+31 6 20104614<br>+31 6 12453476</p>
        </div>
        <div class="collum margi_2" style="border: 1px solid #c9d700;">
            <h2>Opening hours:</h2>
            <p>Open 24h</p>
        </div>
    </div>
    <div class="row">
        <div class="collum margi_2">
            <img style="padding: 2%; border-radius: 5%;" src="hostelpic1.jpg" alt="Hostel" >
        </div>
        <div class="collum">
            <form class="formlabel">
                Full Name:
                <input class="focus" type="text" name="fullname" placeholder="Full Name">
                E-mail:
                <input class="focus" type="email" name="email" placeholder="E-mail"><br>
                Send us a message:
                <textarea class="focus" name="message" placeholder="Write something..."></textarea>
                <input class="loginbtn" type="submit" value="Send"
                       onclick="alert('Message successfully sent. we are gonna reply ASAP. Thanks for the patience!')">
            </form>
        </div>
    </div>
</div>
<!--********************CONTENT********************-->
<?php include '../helper/footer.php';?>
</body>
</html>

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
    <title>S&B Hostel</title>
    <link rel="icon" href="iconlogo.png">
    <script src="hostel_script.js"></script>
    <link rel="stylesheet" type="text/css" href="hostelstyle.css">
    <link href="https://fonts.googleapis.com/css?family=Trocchi" rel="stylesheet">
</head>
<body>
<nav id="navid" class= "clearfix">

    <div class="navbox navside"><a class = "button" href="about.html" title="About">About</a></div>
    <div class="navbox"><a class = "button mButton" href="reservations.html" title="Reservations">Reservations</a></div>
    <div id="logoid" class="navbox"><a class = "cbutton" href= "index.html" title= "Homepage"><img class = "home" src="Logo.png" alt="Home"></a></div>
    <div class="navbox"><a class = "button mButton" href="guidance.html" title="Guidance">Guidance</a></div>
    <div class="navbox navside"><a class = "button" href="contact.html" title="Contact">Contact</a></div>
</nav>
<!--********************CONTENT********************-->
<div class="content clearfix">
    <div class="row">
        <div class="collum" style="border: 1px solid #c9d700;">
            <h2>Address:</h2>
            <p>Mecklenburgstraat 53,<br>5644NK Eindhoven</p>
        </div>
        <div class="collum" style="border: 1px solid #c9d700;">
            <h2>Phone:</h2>
            <p>+31 6 20104614<br>+31 6 12453476</p>
        </div>
        <div class="collum" style="border: 1px solid #c9d700;">
            <h2>Opening hours:</h2>
            <p>Open 24h</p>
        </div>
    </div>
    <div class="row">
        <div class="collum">
            <img src="hostelpic1.jpg" alt="Hostel" >
        </div>
        <div class="collum">
            <form class="formlabel">
                Full Name:
                <input class="focus" type="text" name="fullname" placeholder="Full Name">
                E-mail:
                <input class="focus" type="email" name="email" placeholder="E-mail"><br>
                Send us a message:
                <textarea class="focus" name="message" placeholder="Write something..."></textarea>
                <input type="submit" value="Send"
                       onclick="alert('Message successfully sent. Your problem is getting solved, thanks for the patience!')">
            </form>
        </div>
    </div>
</div>
<!--********************CONTENT********************-->
<footer class="clearfix">
    <div class = "fotterbox">
        <h3><b>Address:</b></h3><p>Mecklenburgstraat 53,<br>5644NK Eindhoven
        <h3><b>Contact:</b></h3><p>+31 620104516<br>contact@seb.nl </p>
    </div>
    <div class= "fotterbox clearfix">
        <h3><b>Follow us:</b></h3>
        <div class="social"><a href="https://www.facebook.com" title="Follow us on facebook!"><img src="facebook.png" alt="FACEBOOK"></a></div>
        <div class="social"><a href="https://www.instagram.com" title="Follow us on Insta!"><img src="instagram.png" alt="INSTAGRAM"></a></div>
        <div class="social"><a href="https://twitter.com" title="Follow us on the birdy!"><img src="twitter.png" alt="TWITTER"></a></div>
    </div>
    <div class = "fotterbox">
        <ul>
            <li><h3><b>Site Map</b></h3></li>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="reservations.html">Reservations</a></li>
            <li><a href="account.html">Account</a></li>
            <li><a href="guidance.html">Guidance</a></li>
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </div>
</footer>
</body>
</html>

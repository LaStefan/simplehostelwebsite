<?php
/**
 * Created by PhpStorm.
 * User: Stefan Lazarevic
 * Date: 04/10/2018
 * Time: 00:38
 */ ?>
<html>

<head>
    <title>S&B Hostel</title>
    <link rel="icon" href="iconlogo.png">
    <!--<script src="hostel_script.js"></script>-->
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
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img class = "homeimg" src="homepage1.jpg" style="width:100%">
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img class = "homeimg" src="homepage2.jpg" style="width:100%">
            <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img class = "homeimg" src="homepage3.jpg" style="width:100%">
            <div class="text"></div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img class = "homeimg" src="homepage4.jpg" style="width:100%">
            <div class="text"></div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img class = "homeimg" src="homepage5.jpg" style="width:100%">
            <div class="text"></div>
        </div>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
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

<script src="hostel_script.js"></script>
</body>
</html>

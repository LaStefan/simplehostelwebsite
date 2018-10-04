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

<?php include '../helper/footer.php';?>

<script src="hostel_script.js"></script>
</body>
</html>

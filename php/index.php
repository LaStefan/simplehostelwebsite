<?php
/**
 * Created by PhpStorm.
 * User: Stefan Lazarevic
 * Date: 04/10/2018
 * Time: 00:38
 */ include('../DB/session_handler.php')?>
<html>

<head>

<?php include '../helper/header.php';?>


</head>
<body>
<?php include '../helper/navbar.php';?>
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

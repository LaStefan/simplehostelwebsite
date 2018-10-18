<?php
/**
 * Created by PhpStorm.
 * User: Stefan Lazarevic
 * Date: 04/10/2018
 * Time: 00:43
 */

?>
<html>
<head>
    <?php include '../helper/header.php';?>


</head>
<body>
<?php include '../helper/navbar.php';?>
<!--********************CONTENT********************-->

<div class="content clearfix">
    <form action="../DB/reservations_form.php" method="post">
        <div id = "id_dates" class="row">
            <div class="inrow">
                <label class="formlabel">Arrival Date</label>
                <input class="focus" type="date" name="bday" required autofocus>
            </div>
            <div class="inrow">
                <label class="formlabel">Departure Date</label>
                <input class="focus" type="date" name="bday" required>
            </div>
            <div class="inrow">
                <label class="formlabel">Number of Guests</label>
                <input id="numberofguests" class="focus" type="number" name="guests" min="1" max="10" value="1" required>
            </div>
        </div>
        <div>
            <div class="row">
                <div class="collum imghover" onclick="chooseRoom(0)">
                    <div>
                        <img class="imgborder widht_60" src="fourbed.jpeg"  alt="Four People Bedroom.">
                    </div>
                    <div style="margin-top: 2%">
                        <input type="radio" name="roomType" value="four">Four Beds Room
                    </div>
                </div>
                <div class="collum imghover" onclick="chooseRoom(1)">
                    <div>
                        <img class="imgborder widht_60" src="eightbed.jpeg"  alt="Eight People Bedroom.">
                    </div>
                    <div style="margin-top: 2%">
                    <input type="radio" name="roomType" value="eight">Eight Beds Room
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="collum imghover" onclick="chooseRoom(2)">
                    <div>
                        <img class="imgborder widht_60" src="tenbed.jpeg"  alt="Ten People Bedroom.">
                    </div>
                    <div style="margin-top: 2%">
                    <input type="radio" name="roomType" value="ten">Ten Beds Room
                    </div>
                </div>
                <div class="collum imghover" onclick="chooseRoom(3)">
                    <div>
                        <img class="imgborder widht_60" src="twelvebed.jpeg"  alt="Twelve People Bedroom.">
                    </div>
                    <div style="margin-top: 2%">
                    <input type="radio" name="roomType" value="twelve">Twelve Beds Room
                    </div>
                </div>
            </div>
        </div>
        <div style="display: flex; justify-content: space-around; align-content: center">
            <input class="loginbtn bookBtn" type="reset" value="Reset">
            <input class="loginbtn bookBtn" type="submit" value="Book Now" onclick="alert('Booking Successfully Created!')">
        </div>
    </form>
</div>


<!--********************CONTENT********************-->
<?php include '../helper/footer.php';?>
</body>
<script src="hostel_script.js"></script>
</html>

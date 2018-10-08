<?php
/**
 * Created by PhpStorm.
 * User: Stefan Lazarevic
 * Date: 04/10/2018
 * Time: 00:43
 */
session_start();
$emailError="";
$passwordError="";
$FnameError="";
$LnameError="";
$GenderError="";
$birthdayError="";
$nationalityError="";
$phoneError="";
$fields=isset($_SESSION['fields'])?$_SESSION['fields'] :[];
$errors=isset($_SESSION['errors'])?$_SESSION['errors']: [];
//print_r($errors);
//Get error messages
$emailError=array_key_exists('email',$errors)? $errors['email']:'';
$passwordError=array_key_exists('password',$errors)? $errors['password']:'';
$FnameError=array_key_exists('Fname',$errors)? $errors['Fname']:'';
$LnameError=array_key_exists('Lname',$errors)? $errors['Lname']:'';
$GenderError=array_key_exists('gender',$errors)? $errors['gender']:'';
$birthdayError=array_key_exists('birthday',$errors)? $errors['birthday']:'';
$nationalityError=array_key_exists('nationality',$errors)? $errors['nationality']:'';
$phoneError=array_key_exists('phone',$errors)? $errors['phone']:'';
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
        <div class="row">
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
                    <img class="imgborder" src="fourbed.jpeg"  alt="Four People Bedroom.">
                    <input type="radio" name="roomType" value="four">Four Beds Room
                </div>
                <div class="collum imghover" onclick="chooseRoom(1)">
                    <img class="imgborder" src="eightbed.jpeg"  alt="Eight People Bedroom.">
                    <input type="radio" name="roomType" value="eight">Eight Beds Room
                </div>
            </div>
            <div class="row">
                <div class="collum imghover" onclick="chooseRoom(2)">
                    <img class="imgborder" src="tenbed.jpeg"  alt="Ten People Bedroom.">
                    <input type="radio" name="roomType" value="ten">Ten Beds Room
                </div>
                <div class="collum imghover" onclick="chooseRoom(3)">
                    <img class="imgborder" src="twelvebed.jpeg"  alt="Twelve People Bedroom.">
                    <input type="radio" name="roomType" value="twelve">Twelve Beds Room
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

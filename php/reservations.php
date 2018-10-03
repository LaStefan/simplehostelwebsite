<?php
/**
 * Created by PhpStorm.
 * User: Stefan Lazarevic
 * Date: 04/10/2018
 * Time: 00:43
 */ ?>
<!DOCTYPE html>
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
    <form>
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
        <div class="formdiv">
            <label class="formlabel">First name: </label>
            <input class="focus" type="text" name="firstname" placeholder="First name" required>
            <label class="formlabel"> Last name:</label>
            <input class="focus" type="text" name="lastname" placeholder="Last name" required>
            <div class="row">
                <div class="collum" style="margin-left: 0;">
                    <label class="formlabel">Birthday:</label>
                    <input class="focus" type="date" name="birthday" max="2001-01-01" required>
                </div>
                <div class="collum">
                    <label class="formlabel">Gender:</label>
                    <input id="genderdiv" class="focus" list="gender" name="Gender" required>
                    <datalist id="gender">
                        <option value = "Male">
                        <option value= "Female">
                        <option value="Other">
                    </datalist>
                </div>
                <div class="collum" style="margin-right: 0;">
                    <label class="formlabel">Nationality:</label>
                    <select class="focus" name="nationality" required>
                        <option value="">- select one -</option>
                        <option value="afghan">Afghan</option>
                        <option value="albanian">Albanian</option>
                        <option value="algerian">Algerian</option>
                        <option value="american">American</option>
                        <option value="andorran">Andorran</option>
                        <option value="angolan">Angolan</option>
                        <option value="antiguans">Antiguans</option>
                        <option value="argentinean">Argentinean</option>
                        <option value="armenian">Armenian</option>
                        <option value="australian">Australian</option>
                        <option value="austrian">Austrian</option>
                        <option value="azerbaijani">Azerbaijani</option>
                        <option value="bahamian">Bahamian</option>
                        <option value="bahraini">Bahraini</option>
                        <option value="bangladeshi">Bangladeshi</option>
                        <option value="barbadian">Barbadian</option>
                        <option value="barbudans">Barbudans</option>
                        <option value="batswana">Batswana</option>
                        <option value="belarusian">Belarusian</option>
                        <option value="belgian">Belgian</option>
                        <option value="belizean">Belizean</option>
                        <option value="beninese">Beninese</option>
                        <option value="bhutanese">Bhutanese</option>
                        <option value="bolivian">Bolivian</option>
                        <option value="bosnian">Bosnian</option>
                        <option value="brazilian">Brazilian</option>
                        <option value="british">British</option>
                        <option value="bruneian">Bruneian</option>
                        <option value="bulgarian">Bulgarian</option>
                        <option value="burkinabe">Burkinabe</option>
                        <option value="burmese">Burmese</option>
                        <option value="burundian">Burundian</option>
                        <option value="cambodian">Cambodian</option>
                        <option value="cameroonian">Cameroonian</option>
                        <option value="canadian">Canadian</option>
                        <option value="cape verdean">Cape Verdean</option>
                        <option value="central african">Central African</option>
                        <option value="chadian">Chadian</option>
                        <option value="chilean">Chilean</option>
                        <option value="chinese">Chinese</option>
                        <option value="colombian">Colombian</option>
                        <option value="comoran">Comoran</option>
                        <option value="congolese">Congolese</option>
                        <option value="costa rican">Costa Rican</option>
                        <option value="croatian">Croatian</option>
                        <option value="cuban">Cuban</option>
                        <option value="cypriot">Cypriot</option>
                        <option value="czech">Czech</option>
                        <option value="danish">Danish</option>
                        <option value="djibouti">Djibouti</option>
                        <option value="dominican">Dominican</option>
                        <option value="dutch">Dutch</option>
                        <option value="east timorese">East Timorese</option>
                        <option value="ecuadorean">Ecuadorean</option>
                        <option value="egyptian">Egyptian</option>
                        <option value="emirian">Emirian</option>
                        <option value="equatorial guinean">Equatorial Guinean</option>
                        <option value="eritrean">Eritrean</option>
                        <option value="estonian">Estonian</option>
                        <option value="ethiopian">Ethiopian</option>
                        <option value="fijian">Fijian</option>
                        <option value="filipino">Filipino</option>
                        <option value="finnish">Finnish</option>
                        <option value="french">French</option>
                        <option value="gabonese">Gabonese</option>
                        <option value="gambian">Gambian</option>
                        <option value="georgian">Georgian</option>
                        <option value="german">German</option>
                        <option value="ghanaian">Ghanaian</option>
                        <option value="greek">Greek</option>
                        <option value="grenadian">Grenadian</option>
                        <option value="guatemalan">Guatemalan</option>
                        <option value="guinea-bissauan">Guinea-Bissauan</option>
                        <option value="guinean">Guinean</option>
                        <option value="guyanese">Guyanese</option>
                        <option value="haitian">Haitian</option>
                        <option value="herzegovinian">Herzegovinian</option>
                        <option value="honduran">Honduran</option>
                        <option value="hungarian">Hungarian</option>
                        <option value="icelander">Icelander</option>
                        <option value="indian">Indian</option>
                        <option value="indonesian">Indonesian</option>
                        <option value="iranian">Iranian</option>
                        <option value="iraqi">Iraqi</option>
                        <option value="irish">Irish</option>
                        <option value="israeli">Israeli</option>
                        <option value="italian">Italian</option>
                        <option value="ivorian">Ivorian</option>
                        <option value="jamaican">Jamaican</option>
                        <option value="japanese">Japanese</option>
                        <option value="jordanian">Jordanian</option>
                        <option value="kazakhstani">Kazakhstani</option>
                        <option value="kenyan">Kenyan</option>
                        <option value="kittian and nevisian">Kittian and Nevisian</option>
                        <option value="kuwaiti">Kuwaiti</option>
                        <option value="kyrgyz">Kyrgyz</option>
                        <option value="laotian">Laotian</option>
                        <option value="latvian">Latvian</option>
                        <option value="lebanese">Lebanese</option>
                        <option value="liberian">Liberian</option>
                        <option value="libyan">Libyan</option>
                        <option value="liechtensteiner">Liechtensteiner</option>
                        <option value="lithuanian">Lithuanian</option>
                        <option value="luxembourger">Luxembourger</option>
                        <option value="macedonian">Macedonian</option>
                        <option value="malagasy">Malagasy</option>
                        <option value="malawian">Malawian</option>
                        <option value="malaysian">Malaysian</option>
                        <option value="maldivan">Maldivan</option>
                        <option value="malian">Malian</option>
                        <option value="maltese">Maltese</option>
                        <option value="marshallese">Marshallese</option>
                        <option value="mauritanian">Mauritanian</option>
                        <option value="mauritian">Mauritian</option>
                        <option value="mexican">Mexican</option>
                        <option value="micronesian">Micronesian</option>
                        <option value="moldovan">Moldovan</option>
                        <option value="monacan">Monacan</option>
                        <option value="mongolian">Mongolian</option>
                        <option value="moroccan">Moroccan</option>
                        <option value="mosotho">Mosotho</option>
                        <option value="motswana">Motswana</option>
                        <option value="mozambican">Mozambican</option>
                        <option value="namibian">Namibian</option>
                        <option value="nauruan">Nauruan</option>
                        <option value="nepalese">Nepalese</option>
                        <option value="new zealander">New Zealander</option>
                        <option value="ni-vanuatu">Ni-Vanuatu</option>
                        <option value="nicaraguan">Nicaraguan</option>
                        <option value="nigerien">Nigerien</option>
                        <option value="north korean">North Korean</option>
                        <option value="northern irish">Northern Irish</option>
                        <option value="norwegian">Norwegian</option>
                        <option value="omani">Omani</option>
                        <option value="pakistani">Pakistani</option>
                        <option value="palauan">Palauan</option>
                        <option value="panamanian">Panamanian</option>
                        <option value="papua new guinean">Papua New Guinean</option>
                        <option value="paraguayan">Paraguayan</option>
                        <option value="peruvian">Peruvian</option>
                        <option value="polish">Polish</option>
                        <option value="portuguese">Portuguese</option>
                        <option value="qatari">Qatari</option>
                        <option value="romanian">Romanian</option>
                        <option value="russian">Russian</option>
                        <option value="rwandan">Rwandan</option>
                        <option value="saint lucian">Saint Lucian</option>
                        <option value="salvadoran">Salvadoran</option>
                        <option value="samoan">Samoan</option>
                        <option value="san marinese">San Marinese</option>
                        <option value="sao tomean">Sao Tomean</option>
                        <option value="saudi">Saudi</option>
                        <option value="scottish">Scottish</option>
                        <option value="senegalese">Senegalese</option>
                        <option value="serbian">Serbian</option>
                        <option value="seychellois">Seychellois</option>
                        <option value="sierra leonean">Sierra Leonean</option>
                        <option value="singaporean">Singaporean</option>
                        <option value="slovakian">Slovakian</option>
                        <option value="slovenian">Slovenian</option>
                        <option value="solomon islander">Solomon Islander</option>
                        <option value="somali">Somali</option>
                        <option value="south african">South African</option>
                        <option value="south korean">South Korean</option>
                        <option value="spanish">Spanish</option>
                        <option value="sri lankan">Sri Lankan</option>
                        <option value="sudanese">Sudanese</option>
                        <option value="surinamer">Surinamer</option>
                        <option value="swazi">Swazi</option>
                        <option value="swedish">Swedish</option>
                        <option value="swiss">Swiss</option>
                        <option value="syrian">Syrian</option>
                        <option value="taiwanese">Taiwanese</option>
                        <option value="tajik">Tajik</option>
                        <option value="tanzanian">Tanzanian</option>
                        <option value="thai">Thai</option>
                        <option value="togolese">Togolese</option>
                        <option value="tongan">Tongan</option>
                        <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                        <option value="tunisian">Tunisian</option>
                        <option value="turkish">Turkish</option>
                        <option value="tuvaluan">Tuvaluan</option>
                        <option value="ugandan">Ugandan</option>
                        <option value="ukrainian">Ukrainian</option>
                        <option value="uruguayan">Uruguayan</option>
                        <option value="uzbekistani">Uzbekistani</option>
                        <option value="venezuelan">Venezuelan</option>
                        <option value="vietnamese">Vietnamese</option>
                        <option value="welsh">Welsh</option>
                        <option value="yemenite">Yemenite</option>
                        <option value="zambian">Zambian</option>
                        <option value="zimbabwean">Zimbabwean</option>
                    </select>
                </div>
            </div>
            <label class="formlabel">Contact:</label>
            <input class="focus" type="tel" name="contact" placeholder="Phone number">
            <label class="formlabel">E-mail:</Label>
            <input class="focus" type="email" name="email" placeholder="example@email.com">
        </div>
        <div class="formdiv">
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
        <div style="float: right; width:100%;">
            <button class="loginbtn" onclick="document.getElementById('id01').style.display='block'">Login</button>
            <!--input style="float:left" type="submit" value="Log in" onclick="account.php"-->
            <input style="float:left" type="submit" value="Register and Book"
                   onclick="alert('Account Created Successfully! Check your e-mail.')">
            <input type="submit" value="Book Now" onclick="alert('Booking Successfully Created!')">

        </div>
    </form>

    <!-- LOG IN MODAL -->
    <div id="id01" class="modal">
        <!-- Modal Content -->
        <div class="modal-content animate">
            <form action="/action_page.php">
                <span onclick="document.getElementById('id01').style.display='none'"
                      class="close" title="Close Modal">&times;
                </span>
                <div class="imgcontainer">
                    <img src="img_avatar2.png" alt="Avatar" class="avatar">
                </div>


                <div class="container">
                    <label class="formlabel" for="uname"><b>Username</b></label>
                    <input class="focus" type="text" placeholder="Enter Username" name="uname" required>

                    <label class="formlabel" for="psw"><b>Password</b></label>
                    <input class="focus" style="margin-bottom: 1vw" type="password" placeholder="Enter Password"
                           name="psw"
                           required>

                    <input type="submit" value="Log In" onclick="alert('Booking Successfully Created!')">
                    <label><input type="checkbox" checked="checked" name="remember">Remember me</label>
                </div>
                <div class="container">
                    <button onclick="document.getElementById('id01').style.display='none'" class="closebtn">Cancel</button>
                    <span class="psw">Forgot <a href="#">password?</a></span>
                </div>
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
<script src="hostel_script.js"></script>
</html>

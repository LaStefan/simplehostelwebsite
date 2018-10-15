<?php
/**
 * Created by PhpStorm.
 * User: berna
 * Date: 08-Oct-18
 * Time: 15:17
 */

/**
 * Created by PhpStorm.
 * User: Stefan Lazarevic
 * Date: 11/10/2018
 * Time: 15:04
 */

/*define('HOST','studmysql01.fhict.local');
define('USER','dbi396268');
define('PASSWORD','Toresja9898');
define('DATABASE','dbi396268');*/
include('../DB/session_handler.php');

//$dsn="mysql:dbname=testingDB";
//$username="root";
//$password="Hardbas98";
?>
<html>
<head>
    <?php include '../helper/header.php';?>
</head>
<body>
    <?php include '../helper/navbar.php';?>
<!--********************CONTENT********************-->
<div id="id_registration" class="content clearfix" style="align-items: center; justify-content: center; display: flex">
    <form action="registration.php" method="post">
        <div class="formdiv">
            <label class="formlabel">First name: </label>
            <input class="focus" type="text" name="firstName" placeholder="First name" required>

            <label class="formlabel"> Last name:</label>
            <input class="focus" type="text" name="lastName" placeholder="Last name" required>

            <div class="row">
                <div class="collum" style="margin-left: 0;">
                    <label class="formlabel">Birthday:</label>
                    <input class="focus" type="date" name="birthday" max="2001-01-01" required>
                </div>
                <div class="collum">
                    <label class="formlabel">Gender:</label>
                    <input id="genderdiv" class="focus" list="gender" name="gender" required>

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
            <input class="focus" type="tel" name="phone" placeholder="Phone number" required >
            <label class="formlabel">E-mail:</Label>
            <input class="focus" type="email" name="email" placeholder="example@email.com" required>
            <label class="formlabel">Password:</Label>
            <input class="focus" type="password" name="password" placeholder="a-Z+@#19" required>
            <label class="formlabel">Repeat Password:</Label>
            <input class="focus" type="password" name="passWord" placeholder="a-Z+@#19" required>
            <div style="padding: 2%">
                <input class="checkBx" type="checkbox"  name="cbx_terms" id="cbx_terms" value="terms_conditions" required>
                <label for="cbx_terms" class="formlabel">I accept the terms and conditions.</label>
            </div>
            <div style="padding: 2%">
                <input class="checkBx" type="checkbox"  name="cbx_news" id="cbx_news" value="newsletter">
                <label for="cbx_news" class="formlabel">Register for our Newsletter!</label>
            </div>
        </div>
        <div style="display: flex; justify-content: center">
            <!--input style="float:left" type="submit" value="Log in" onclick="account.php"-->
            <input  class="loginbtn" name ="submit" type="submit" value="Create Account" onclick="alert('Account Created Successfully! Check your e-mail. '<b>'Redirect to Reservations.php')">
            <input class="loginbtn" type="reset"  value="Reset Form">
        </div>
    </form>
</div>



<!--********************CONTENT********************-->
<?php include '../helper/footer.php';?>
</body>
<script src="hostel_script.js"></script>
</html>
<?php
try {
$conn = new PDO('mysql:host=studmysql01.fhict.local;dbname=dbi396268', 'dbi396268', '12345678');
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//echo "Connection successfully done!";
}catch(PDOException $e)
{
echo "Connection failed!". $e->getMessage();
}

if(isset($_POST['submit'])) { echo "<script> alert('Form submit good! Thanks for joining us!');</script>" ;
try {



$Email = $_POST['email'];
$FirstName = $_POST['firstName'];
$LastName = $_POST['lastName'];
$Password = $_POST['password'];
$Nationality = $_POST['nationality'];
$Phone = $_POST['phone'];
$Birthday = $_POST['birthday'];
$Gender = $_POST['gender'];
$PassWord = $_POST['passWord'];
if (($Email == '') || ($FirstName == '') || ($LastName == '') || ($Password == '') || ($PassWord == '') || ($Nationality == '') || ($Phone == '') || ($Birthday == '') || ($Gender == '')) {
echo "Please fill in all the fields!";
} else if ($PassWord != $Password) {
echo "Password does not match!";
} else {
$sql = "INSERT INTO customer VALUES(id,:firstName, :lastName, :phone,:email,:password,:gender, :birthday,:nationality)";

$preparedSQL = $conn->prepare($sql);

$preparedSQL->execute([':email' => $Email, ':password' => $PassWord, ':gender' => $Gender, ':firstName' => $FirstName , ':lastName' => $LastName
    , ':phone' => $Phone, ':birthday' =>$Birthday , ':nationality' => $Nationality]);

}
} catch (PDOException $e) {
echo "Database error!" . $e->getMessage();
} catch (InvalidArgumentException $e) {
echo "Unexpected input type." . $e->getMessage();
}
}?>
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

if(isset($_POST['submit'])) { echo "<script> alert('Form submit good! Thanks for joining us!');window.location.href='../php/reservations.php';</script>" ;
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
}
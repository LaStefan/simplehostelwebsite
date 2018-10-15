<?php
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
include('session_handler.php');

//$dsn="mysql:dbname=testingDB";
//$username="root";
//$password="Hardbas98";

try {
    $conn = new PDO('mysql:host=studmysql01.fhict.local;dbname=dbi396268', 'dbi396268', '12345678');
// set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successfully done!";
}catch(PDOException $e)
{
    echo "Connection failed!". $e->getMessage();
}

if(isset($_POST['submit'])) {
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
            $sql = "INSERT INTO customer VALUES(id,:firstName, :lastName, :phone, :birthday,:nationality,:gender,:email,:password)";

            $preparedSQL = $conn->prepare($sql);

            $preparedSQL->bindValue(":firstName", $FirstName, PDO::PARAM_STR);
            $preparedSQL->bindValue(":lastName", $LastName, PDO::PARAM_STR);
            $preparedSQL->bindValue(":phone", $Phone, PDO::PARAM_STR_CHAR);
            $preparedSQL->bindValue(":birthday", $Birthday, PDO::PARAM_STR);
            $preparedSQL->bindValue(":nationality", $Nationality, PDO::PARAM_STR);
            $preparedSQL->bindValue(":gender", $Gender, PDO::PARAM_STR);
            $preparedSQL->bindValue(":email", $Email, PDO::PARAM_STR);
            $preparedSQL->bindValue(":password", $Password, PDO::PARAM_STR);
            $preparedSQL->execute();

        }
    } catch (PDOException $e) {
        echo "Database error!" . $e->getMessage();
    } catch (InvalidArgumentException $e) {
        echo "Unexpected input type." . $e->getMessage();
    }
}
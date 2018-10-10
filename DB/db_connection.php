<?php
/*define('HOST','studmysql01.fhict.local');
define('USER','dbi396268');
define('PASSWORD','Toresja9898');
define('DATABASE','dbi396268');*/

function DB()
{
    $dsn = "mysql:host=localhost;dbname=testingDB";
    $username = "root";
    $password = "Hardbas98";


    try {
        $conn = new PDO($dsn, $username, $password);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully!";
        return $conn;


    } catch (PDOException $e) {

        return "PDO Error!: " . $e->getMessage();

    }
}

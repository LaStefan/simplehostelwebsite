<?php
define('HOST','studmysql01.fhict.local');
define('USER','dbi396268');
define('PASSWORD','Toresja9898');
define('DATABASE','dbi396268');

function DB()
{
    try{
        $db= new PDO('mysql:host='.HOST.';dname='.DATABASE.'',USER, PASSWORD);

        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully!";
        return $db;

    }
    catch(PDOException $e)
    {
        return "PDO Error!: ".$e->getMessage();
        die();
    }

}
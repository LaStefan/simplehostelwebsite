<?php
$conn=mysqli_connect('studmysql01.fhict.local','dbi396268@192.168.15.70','Toresja9898','dbi396268');

if(!$conn){
    echo "error trying to connect to db";
    die("Connection failed: ".mysqli_connect_error());
}
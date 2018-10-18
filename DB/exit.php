<?php
/**
 * Created by PhpStorm.
 * User: Stefan Lazarevic
 * Date: 18/10/2018
 * Time: 14:49
 */
if(!isset($_POST['keepLogged']))
{    session_start();
     session_unset();
    session_destroy();
    header("Location: index.php");

}

<?php
/**
 * Created by PhpStorm.
 * User: Stefan Lazarevic
 * Date: 05/10/2018
 * Time: 14:05
 */
//checks if php session already started before starting the session
function StartSession(){
    if(version_compare(phpversion(),'5.4.0','<'))
    {
        if(session_id()==''){
            session_start();
        }
    }
    else
    {
        if(session_status()==PHP_SESSION_NONE){
            session_start();
        }
    }
}


<?php

session_start();
if(!isset($_SESSION['userID'])) {
    echo "<script>
                    alert('In order to access this page you have to login!');
                    window.location.href='../php/account.php';
                    </script>";
    exit();
}





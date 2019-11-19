<?php
session_destroy();
session_start();
if(isset($_SESSION['err'])){
    $errMsg = "Incorrect username / password";
    $errTitleStyle = "color:red;text-align:center;";
    $errStyle = "background-color:#732f2f";
    session_destroy();
}


include_once("view/login.php");
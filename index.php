<?php
session_start();
if(isset($_SESSION['err'])){
    $errMsg = "Account not found";
    $errTitleStyle = "color:red;text-align:center;";
    $errStyle = "background-color:#732f2f";
    session_destroy();
}






include_once("view/login.php");
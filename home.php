<?php
session_start();

if(isset($_SESSION['user_name'])) {
    include_once('include/config.php');
    include_once('data_model/table_data.php');
    if (isset($_GET['mode'])) {
        if ($_GET['mode'] == 'candidate') {
            $mode = 'Canditate';
        } elseif ($_GET['mode'] == 'voter') {
            $mode = 'Voter';
          //  die(print_r($_POST));
        }
    }
    include_once('view/home.php');
}
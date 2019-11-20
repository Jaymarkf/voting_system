<?php
session_start();

if(isset($_SESSION['user_name'])) {
    if(isset($_GET['mode'])){
        if($_GET['mode'] == 'candidate'){
            $mode = 'Canditate';

        }elseif($_GET['mode'] == 'voter'){
            $mode = 'Voter';


        }
    }

    include_once('include/config.php');
    include_once('data_model/table_data.php');
    include_once('view/home.php');

    //add new information
    if(isset($_GET['mode'])){
        if(isset($_POST['name'])) {
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $address = $_POST['address'];
            $year_level = $_POST['year_level'];
            $arrinfo = array();

            if(isset($_POST['position'])){
                $position = $_POST['position'];
                $arrinfo = array(
                    'name' => $name,
                    'gender' => $gender,
                    'address' => $address,
                    'position' => $position,
                    'year_level' => $year_level
                );
            }else{
                $arrinfo = array(
                    'name' => $name,
                    'gender' => $gender,
                    'address' => $address,
                    'year_level' => $year_level
                );
            }


        }

        //if url is ?mode=candidate then add new candidate into database table
        if($_GET['mode'] == 'candidate'){
            if(isset($_POST['csubmit'])){
                $db->insert('candidate_tbl',$arrinfo);

            }
        //if url is ?mode=voter then add new voter into database table
        }elseif($_GET['mode'] == 'voter'){
            if(isset($_POST['csubmit'])){
                $db->insert('voter_tbl',$arrinfo);
            }


        }
    }

}
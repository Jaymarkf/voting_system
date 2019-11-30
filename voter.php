<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "voting_db";
$conn = mysqli_connect($host,$username,$password,$db);
$qry = 'select * from candidate_tbl';
$datab ='';

if($sql = mysqli_query($conn,$qry)){
    while($datas = mysqli_fetch_assoc($sql)){
        $datab .='<tr>';
        $datab .='<td>'.$datas['id'].'</td>';
        $datab .='<td>'.$datas['name'].'</td>';
        $datab .='<td>'.$datas['gender'].'</td>';
        $datab .='<td>'.$datas['position'].'</td>';
        $datab .='<td>'.$datas['year_level'].'</td>';
        $datab .='</tr>';
    }
}
if(isset($_GET['logout'])){
    if(!isset($_SESSION)){
        session_start();
    }
    session_destroy();
   header('Location: index.php');
}

include_once('view/voter.php');
<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "voting_db";
$conn = mysqli_connect($host,$username,$password,$db);
session_start();
if(isset($_POST['submit']) || isset($_POST['user_name']) || isset($_POST['user_password'])) {

    $md5password = md5($_POST['user_password']);
    $qry = "select * from table_admin where username='" . mysqli_escape_string($conn, $_POST['user_name']) . "' and password='$md5password'";
    $sql = mysqli_query($conn, $qry);
    if (mysqli_num_rows($sql) > 0) {
        $data = mysqli_fetch_assoc($sql);
        $_SESSION['user_name'] = $_POST['user_name'];

        if($data['user_status'] == 'voter'){
            $qrys = 'select * from voter_tbl where username ="'.$_POST['user_name'].'" and password ="'.$md5password.'"';
            $x = mysqli_query($conn,$qrys);
            $user = mysqli_fetch_assoc($x);
            $_SESSION['name_user'] = $user['name'];
            $_SESSION['user_unique_id']  = $user['id'];
            header('Location: ../voter.php');
        }else{
            header('Location: ../home.php');
        }
    } else {
        $_SESSION['err'] = 1;
        header('Location: ../index.php');
    }
}

include_once('../include/config.php');
//add new information
if(isset($_POST['gid'])){

    if(isset($_POST['csubmit'])) {
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $year_level = $_POST['year_level'];
        if(isset($_POST['username'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
        }

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
                'username' => $username,
                'password' => md5($password),
                'name' => $name,
                'gender' => $gender,
                'address' => $address,
                'year_level' => $year_level

            );


            $data_admin = array(
                'username' => $username,
                'password' => md5($password),
                'user_status' => 'voter'
            );


        }
        $get = $_POST['gid'];
        if($get == 'candidate'){
            $db->insert('candidate_tbl',$arrinfo);
            header("Location: ../home.php?mode=candidate");
        }elseif($get == 'voter'){
            $db->insert('voter_tbl',$arrinfo);
            $db->insert('table_admin',$data_admin);
            header("Location: ../home.php?mode=voter");



        }


    }





}

if(isset($_POST['edit'])){
    if($_POST['mode_edit'] == 'candidate'){
        $fields = array(
            'name'=> $_POST['name'],
            'gender' => $_POST['gender'],
            'address' => $_POST['address'],
            'year_level' =>$_POST['year_level'],
            'position' =>$_POST['position']
        );
        $db->update('candidate_tbl',$fields,array('id'=>$_POST['edit']));
        header("Location: ../home.php?mode=candidate");
    }elseif($_POST['mode_edit'] == 'voter'){
        $fields = array(
            'name'=> $_POST['name'],
            'gender' => $_POST['gender'],
            'address' => $_POST['address'],
            'year_level' =>$_POST['year_level']
        );
        $db->update('voter_tbl',$fields,array('id'=>$_POST['edit']));
        header("Location: ../home.php?mode=voter");
    }

}

if(isset($_POST['id_delete'])){
    $id = $_POST['id_delete'];
    if($_POST['mode'] == 'candidate'){
        $db->delete('candidate_tbl',array('id'=>$id));
        header('Location: ../home.php?mode=candidate');
    }elseif($_POST['mode'] =='voter'){
        $db->delete('voter_tbl',array('id'=>$id));
        header('Location: ../home.php?mode=voter');
    }



}

if(isset($_POST['idcandidate'])){
    $idvoter = $_POST['idcandidate'];
    $position = $_POST['idpos'];
    if($position == 'President'){
        $datax = 'vote_president ="'.$idvoter.'"';
    }elseif($position == 'Vice President'){
        $datax = 'vote_vice_president ="'.$idvoter.'"';
    }elseif($position == 'Secretary'){
        $datax = 'vote_secretary ="'.$idvoter.'"';
    }elseif($position == 'Treasurer'){
        $datax = 'vote_treasurer ="'.$idvoter.'"';
    }elseif($position == 'Auditor'){
        $datax = 'vote_auditor ="'.$idvoter.'"';
    }elseif($position == 'Muse') {
        $datax = 'vote_muse ="' . $idvoter . '"';
    }

    $qryz = "update voter_tbl set ".$datax." where id= ".$_SESSION['user_unique_id'].";";
    mysqli_query($conn,$qryz);






}

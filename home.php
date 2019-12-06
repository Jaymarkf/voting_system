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
        }
    }
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "voting_db";
    $conn = mysqli_connect($host,$username,$password,$db);

    function getcolumn($col){
        return "select candidate_tbl.name,count(voter_tbl.vote_".$col.") as vote_count,voter_tbl.vote_".$col." as candidate_id from voter_tbl
    inner join candidate_tbl on voter_tbl.vote_".$col." = candidate_tbl.id
    group by voter_tbl.vote_".$col." order by vote_count";
    }

    function getcolumnwinner($col){
        return "select candidate_tbl.name,count(voter_tbl.vote_".$col.") as vote_count,voter_tbl.vote_".$col." as candidate_id from voter_tbl
    inner join candidate_tbl on voter_tbl.vote_".$col." = candidate_tbl.id
    group by voter_tbl.vote_".$col." order by vote_count desc limit 1";
    }

    $data_win_pres = "";
    $data_win_aud = "";
    $data_win_muse = "";
    $data_win_vice = "";
    $data_win_sec = "";
    $data_win_tres = "";

    $qry_win_pres = mysqli_query($conn,getcolumnwinner('president'));
    if(mysqli_num_rows($qry_win_pres) > 0 ){
        while($res_win_pres = mysqli_fetch_assoc($qry_win_pres)){
                        $data_win_pres .="
            <div class=\"row\">
            <div class=\"col-sm\">
            <span class=\"text-default\">
            ".$res_win_pres['name']."
            </span>
            </div>
            <div class=\"col-sm\">
            <div class=\"text-right\">
            <span class=\"text-default\">
            ".$res_win_pres['vote_count']."
            </span>
            </div>
            </div>
            </div>";
        }
    }

    $qry_win_vice = mysqli_query($conn,getcolumnwinner('vice_president'));
    if(mysqli_num_rows($qry_win_vice) > 0 ){
        while($res_win_vice = mysqli_fetch_assoc($qry_win_vice)){
            $data_win_vice .="
            <div class=\"row\">
            <div class=\"col-sm\">
            <span class=\"text-default\">
            ".$res_win_vice['name']."
            </span>
            </div>
            <div class=\"col-sm\">
            <div class=\"text-right\">
            <span class=\"text-default\">
            ".$res_win_vice['vote_count']."
            </span>
            </div>
            </div>
            </div>";
        }
    }

    $qry_win_sec = mysqli_query($conn,getcolumnwinner('secretary'));
    if(mysqli_num_rows($qry_win_sec) > 0 ){
        while($res_win_sec = mysqli_fetch_assoc($qry_win_sec)){
            $data_win_sec .="
            <div class=\"row\">
            <div class=\"col-sm\">
            <span class=\"text-default\">
            ".$res_win_sec['name']."
            </span>
            </div>
            <div class=\"col-sm\">
            <div class=\"text-right\">
            <span class=\"text-default\">
            ".$res_win_sec['vote_count']."
            </span>
            </div>
            </div>
            </div>";
        }
    }

    $qry_win_tres = mysqli_query($conn,getcolumnwinner('treasurer'));
    if(mysqli_num_rows($qry_win_tres) > 0 ){
        while($res_tres = mysqli_fetch_assoc($qry_win_tres)){
            $data_win_tres .="
            <div class=\"row\">
            <div class=\"col-sm\">
            <span class=\"text-default\">
            ".$res_tres['name']."
            </span>
            </div>
            <div class=\"col-sm\">
            <div class=\"text-right\">
            <span class=\"text-default\">
            ".$res_tres['vote_count']."
            </span>
            </div>
            </div>
            </div>";
        }
    }

    $qry_win_aud = mysqli_query($conn,getcolumnwinner('auditor'));
    if(mysqli_num_rows($qry_win_aud) > 0 ){
        while($res_win_aud = mysqli_fetch_assoc($qry_win_aud)){
            $data_win_aud .="
            <div class=\"row\">
            <div class=\"col-sm\">
            <span class=\"text-default\">
            ".$res_win_aud['name']."
            </span>
            </div>
            <div class=\"col-sm\">
            <div class=\"text-right\">
            <span class=\"text-default\">
            ".$res_win_aud['vote_count']."
            </span>
            </div>
            </div>
            </div>";
        }
    }

    $qry_win_muse = mysqli_query($conn,getcolumnwinner('muse'));
    if(mysqli_num_rows($qry_win_muse) > 0 ){
        while($res_win_muse = mysqli_fetch_assoc($qry_win_muse)){
            $data_win_muse .="
            <div class=\"row\">
            <div class=\"col-sm\">
            <span class=\"text-default\">
            ".$res_win_muse['name']."
            </span>
            </div>
            <div class=\"col-sm\">
            <div class=\"text-right\">
            <span class=\"text-default\">
            ".$res_win_muse['vote_count']."
            </span>
            </div>
            </div>
            </div>";
        }
    }

    $data_pres = "";
    $data_aud = "";
    $data_muse = "";
    $data_vice = "";
    $data_sec = "";
    $data_tres = "";

    $qry_pres = mysqli_query($conn,getcolumn('president'));
    if(mysqli_num_rows($qry_pres) > 0 ){
        while($res_pres = mysqli_fetch_assoc($qry_pres)){
            $data_pres .="
            <div class=\"row\">
            <div class=\"col-sm\">
            <span class=\"text-default\">
            ".$res_pres['name']."
            </span>
            </div>
            <div class=\"col-sm\">
            <div class=\"text-right\">
            <span class=\"text-default\">
            ".$res_pres['vote_count']."
            </span>
            </div>
            </div>
            </div>";
        }
    }

    $qry_vice = mysqli_query($conn,getcolumn('vice_president'));
    if(mysqli_num_rows($qry_vice) > 0 ){
        while($res_vice = mysqli_fetch_assoc($qry_vice)){
            $data_vice .="
            <div class=\"row\">
            <div class=\"col-sm\">
            <span class=\"text-default\">
            ".$res_vice['name']."
            </span>
            </div>
            <div class=\"col-sm\">
            <div class=\"text-right\">
            <span class=\"text-default\">
            ".$res_vice['vote_count']."
            </span>
            </div>
            </div>
            </div>";
        }
    }

    $qry_sec = mysqli_query($conn,getcolumn('secretary'));
    if(mysqli_num_rows($qry_sec) > 0 ){
        while($res_sec = mysqli_fetch_assoc($qry_sec)){
            $data_sec .="
            <div class=\"row\">
            <div class=\"col-sm\">
            <span class=\"text-default\">
            ".$res_sec['name']."
            </span>
            </div>
            <div class=\"col-sm\">
            <div class=\"text-right\">
            <span class=\"text-default\">
            ".$res_sec['vote_count']."
            </span>
            </div>
            </div>
            </div>";
        }
    }

    $qry_tres = mysqli_query($conn,getcolumn('treasurer'));
    if(mysqli_num_rows($qry_tres) > 0 ){
        while($res_tres = mysqli_fetch_assoc($qry_tres)){
            $data_tres .="
            <div class=\"row\">
            <div class=\"col-sm\">
            <span class=\"text-default\">
            ".$res_tres['name']."
            </span>
            </div>
            <div class=\"col-sm\">
            <div class=\"text-right\">
            <span class=\"text-default\">
            ".$res_tres['vote_count']."
            </span>
            </div>
            </div>
            </div>";
        }
    }

    $qry_aud = mysqli_query($conn,getcolumn('auditor'));
    if(mysqli_num_rows($qry_aud) > 0 ){
        while($res_aud = mysqli_fetch_assoc($qry_aud)){
            $data_aud .="
            <div class=\"row\">
            <div class=\"col-sm\">
            <span class=\"text-default\">
            ".$res_aud['name']."
            </span>
            </div>
            <div class=\"col-sm\">
            <div class=\"text-right\">
            <span class=\"text-default\">
            ".$res_aud['vote_count']."
            </span>
            </div>
            </div>
            </div>";
        }
    }

    $qry_muse = mysqli_query($conn,getcolumn('muse'));
    if(mysqli_num_rows($qry_muse) > 0 ){
        while($res_muse = mysqli_fetch_assoc($qry_muse)){
            $data_muse .="
            <div class=\"row\">
            <div class=\"col-sm\">
            <span class=\"text-default\">
            ".$res_muse['name']."
            </span>
            </div>
            <div class=\"col-sm\">
            <div class=\"text-right\">
            <span class=\"text-default\">
            ".$res_muse['vote_count']."
            </span>
            </div>
            </div>
            </div>";
        }
    }







    if(isset($_GET['logout'])){
    session_destroy();
    header('Location: index.php');
}

    include_once('view/home.php');
}else{
    header('Location: index.php');
}
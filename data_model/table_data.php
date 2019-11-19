<?php
include_once('./include/config.php');

$data_table = '';
if(isset($_GET['mode'])) {
    if ($_GET['mode'] == 'candidate') {
        $data = $db->getAllRecords('candidate_tbl', '*');
        foreach ($data as $key => $val) {
            $data_table .= "<tr>";
            $data_table .= "<td>" . $val['id'] . "</td>";
            $data_table .= "<td>" . $val['name'] . "</td>";
            $data_table .= "<td>" . $val['gender'] . "</td>";
            $data_table .= "<td>" . $val['address'] . "</td>";
            $data_table .= "<td>" . $val['position'] . "</td>";
            $data_table .= "<td>" . $val['year_level'] . "</td>";
            $data_table .= "</tr>";
        }

    } elseif ($_GET['mode'] == 'voter') {
        $data = $db->getAllRecords('voter_tbl', '*');
        foreach ($data as $key => $val) {
            $data_table .= "<tr>";
            $data_table .= "<td>" . $val['id'] . "</td>";
            $data_table .= "<td>" . $val['name'] . "</td>";
            $data_table .= "<td>" . $val['gender'] . "</td>";
            $data_table .= "<td>" . $val['address'] . "</td>";
            $data_table .= "<td>" . $val['year_level'] . "</td>";
            $data_table .= "</tr>";
        }


    }
}

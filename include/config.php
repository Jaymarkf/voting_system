<?php
include_once('database.php');
define('SS_DB_NAME', 'voting_db');
define('SS_DB_USER', 'root');
define('SS_DB_PASSWORD', 'r00tb33r');
define('SS_DB_HOST', 'localhost');

$dsn  =   "mysql:dbname=".SS_DB_NAME.";host=".SS_DB_HOST."";
$pdo  =   "";
try {
    $pdo = new PDO($dsn, SS_DB_USER, SS_DB_PASSWORD);
}catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$db   =   new Database($pdo);




?>
<?php
// $mysqli = mysqli_connect("localhost","admin_service","hradmin","admin_service");
// mysqli_set_charset($mysqli, "utf8");
$dsn = 'mysql:host=localhost;dbname=admin_appsangwijjit';
$usernamedb = 'admin_service';
$passworddb = 'hradmin';
$option = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES UTF8',
);

try {
    $dbh = new PDO($dsn, $usernamedb, $passworddb, $option);
    // echo 'success';
} catch (PDOException $e) {
    echo 'ERROR :: '.$e->getMessage();
}

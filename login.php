<?php
require_once 'conn.php';

$username = $_POST['username'];
$password = base64_encode($_POST['pass']);

echo $password;

$loginSQL = "SELECT COUNT(*) AS COUNT FROM `user` WHERE username = '$username' AND password = '$password'";
$objQuerylogin = $mysqli->query($loginSQL);
$row = mysqli_fetch_array($objQuerylogin);

// echo $loginSQL;

if ($row['COUNT'] == 1) {
    session_start();
    $_SESSION['logged_time'] = time();
    $_SESSION['NAME'] = 'SANGWIJITCOMPLETE';
    header("Location: index.php");
    die();
} else {
    header("Location: login.html");
    die();
}

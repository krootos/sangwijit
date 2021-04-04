<?php
    session_start();
    unset($_SESSION["NAME"]);
    header("Location: login.html");
    die();
?>
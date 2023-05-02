<?php
    session_start();
    include "config.php";
    if(isset($_SESSION["user_role"])){
        $_SESSION["user_role"]==1 ? header("Location: admin-home.php") : header("Location: home.php");
    } else {
        header("Location: home.php");
    }
?>
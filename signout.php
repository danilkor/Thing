<?php

    if(!isset($_SESSION["is_auth"])){
        header("Location: pages/Login/login.php");
    } else {
        setcookie("username", "", time() - 3600, "/","danilkor.bplaced.net");
        setcookie("avatar","", time() - 3600, "/","danilkor.bplaced.net");
        session_abort();
        header("Location: pages/Home/home.php");
    }
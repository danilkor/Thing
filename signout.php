<?php

    if(!isset($_SESSION["is_auth"]) || $_SESSION["is_auth"] == false){
        header("Location: pages/Login/login.php");
    } else {
        setcookie('username', "", time() - 86400, '/');
        setcookie('hash', "", time() - 86400, '/');
        setcookie('avatar', "", time() - 86400, '/');

        session_abort();
        header("Location: pages/Home/home.php");
    }
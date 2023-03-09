<?php

    // if(!isset($_SESSION["is_auth"]) || $_SESSION["is_auth"] == false){
    //     // header("Location: pages/Login/login.php");
    // } else {
        // setcookie('username', "", time() - 86400, '/');
        // setcookie('avatar', "", time() - 86400, '/');
        foreach($_COOKIE as $ind => $value) {
            setcookie($ind,'',time()-999, "/");
            unset($_COOKIE[$ind]);
        }
        // $_SESSION["is_auth"] == false;
        header("Location: pages/Home/home.php");
    // }
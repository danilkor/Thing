<?php
    if (!isset($_SESSION["is_auth"])){
        session_start();
    }
    $_SESSION["is_auth"] = false;
// Хеширование Единого Рабочего Номера (ХЕРНя)
    if(isset($_COOKIE["username"])){
        $result1 = $connect->query("SELECT `hash` FROM `users` WHERE `username` = ?s", $_COOKIE["username"]);
        foreach($result1 as $row){
            $dbhash = $row["hash"];
            if(isset($_COOKIE['hash'])){
                $_SESSION["is_auth"] = ($dbhash == $_COOKIE["hash"]) ? true : false;
            } else {
                $_SESSION["is_auth"] = false;
            }
        }
    } else {
        $_SESSION["is_auth"] = false;
    }
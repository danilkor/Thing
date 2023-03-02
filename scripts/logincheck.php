<?php
    if (!isset($_SESSION)){
        session_start();
    }

// Хеширование Единствонного Рабочего Номера (ХЕРНя)
    if(isset($_COOKIE["username"])){
        $result1 = $connect->query("SELECT `hash` FROM `users` WHERE `username` = ?s", $_COOKIE["username"]);
        foreach($result1 as $row){
            $dbhash = $row["hash"];
            if(isset($_COOKIE['hash'])){
                if($dbhash == $_COOKIE["hash"]){
                    $_SESSION["is_auth"] = true;
                } else {
                    $_SESSION["is_auth"] = false;
                }
            } else {
                $_SESSION["is_auth"] = false;
            }
        }
    } else {
        $_SESSION["is_auth"] = false;
    }
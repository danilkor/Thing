<?php
    if (!isset($_SESSION)){
        session_start();
    }


    if(isset($_COOKIE["username"])){
        $result1 = $connect->query("SELECT `hash` FROM `users` WHERE `username` = ?s", $_COOKIE["username"]);
        foreach($result1 as $row){
            $dbhahs = $row["hash"];
            if(isset($_COOKIE['hash'])){
                if($dbhahs == $_COOKIE["hash"]){
                    $_SESSION["is_auth"] = true;
                } else{
                    header('Location: ../Login/login.php');
                    exit();
                }
            } else {
                setcookie("username", "", time() - 3600, "/","danilkor.bplaced.net");
                setcookie("avatar","", time() - 3600, "/","danilkor.bplaced.net");
                header('Location: ../Login/login.php');
                exit();
            }
        }
    }
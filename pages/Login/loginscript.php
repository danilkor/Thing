<?php
    session_start();
    
    include_once('../../scripts/connect.php');
    include_once('../../scripts/hasher.php');
    include_once('../../scripts/feedbackGen.php');

    if(!isset($_POST['username']) || !isset($_POST['password'])){
        header('Location: login.php');
        exit();
    }

    $username = $_POST['username'];
    $password = passHasher($_POST['password']);
    $hash = loginHasher(date('d/Y-m-s'));
    $connect->query("UPDATE `users` SET `hash`=?s WHERE `username` = ?s", $hash, $username);
    $result1 = $connect->query("SELECT `password`, avatar FROM `users` WHERE `username` = ?s", $username);
    
    $user = $result1->fetch_assoc(); // Конвертируем в массив

    if (empty($user)) {
        error('User with this name not found');
        header('Location: login.php');
        exit();
    } else {
        foreach($result1 as $row){
            $dbpassword = $row['password'];
            $ava = $row['avatar'];
            if($password == $dbpassword){
                setcookie('username', $username, time() + 86400, '/');
                setcookie('hash', $hash, time() + 86400, '/');
                setcookie('avatar', $ava, time() + 86400, '/');
                $_SESSION["is_auth"] = true;
            } else {
                error('Wrong password');
                header('Location: login.php');
                exit();
            }
        }
    }

    header('Location: ../Home/home.php');
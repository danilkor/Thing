<?php
    session_start();

    if(!isset($_POST['username']) || !isset($_POST['email']) || !isset($_POST['password']) || !isset($_POST['confirmPassword'])){header('Location: signup.php');}

    include_once('../../scripts/connect.php');
    function error($text){
        $_SESSION['invalid_feedback'] = '<div class="alert alert-danger mt-3" role="alert">' . $text . '</div>';
    }

    $username = ($_POST['username']);
    $email = $_POST['email'];
    $avatar = $_POST['avatar'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $regDate = date('Y-m-d H:i:s');
    // echo ($regdate);

    if($password === $confirmPassword){}else{
        error("<b>Passwords</b> do not match!");
        header('Location: signup.php');
        exit();
    }

    if(mb_strlen($username) < 5 || mb_strlen($username) > 90){
        error("<b>Username</b> must contain from 5 to 90 characters!");
        header('Location: signup.php');
        exit();
    }

    $password = md5("amogus".$password."suspectos"); //! Создаем хэш из пароля с "Солью"

    $result1 = $connect->query("SELECT * FROM `users` WHERE `username` = '$username'"); //  Отправка запросов в БД
    if($email != ""){
        $result2 = $connect->query("SELECT * FROM `users` WHERE `email` = '$email'");
    }

    $user1 = $result1->fetch_assoc(); // Конвертируем в массив
    if(!empty($user1)){
        error("This <b>username</b> is taken");
        header('Location: signup.php');
        exit();
    }

    $email1 = $result2->fetch_assoc(); // Конвертируем в массив
    if(!empty($email1)){
        error("This <b>email</b> is taken");
        header('Location: signup.php');
        exit();
    }


    $connect->query("INSERT INTO `users` (`username`, `email`, `password`, `regDate`, `avatar`) VALUES('$username', '$email', '$password', '$regDate', '$avatar')");
    $connect->close();

    $_SESSION['valid_feedback'] = '<div class="alert alert-success mt-3" role="alert">' . "Successfully signed up!<br> <strong>Log in</strong> to your account now:" . '</div>';
    header('Location: ../Login/login.php');
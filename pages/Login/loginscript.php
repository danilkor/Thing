<?php
    session_start();
    function error($text){
        $_SESSION['invalid_feedback'] = '<div class="row mb-4"><div class="col-lg-4 col-md-4 col-sm-3"></div><div class="alert alert-danger mt-3 col-lg-4 col-sm-6 col-md-4 text-center" role="alert">' . $text . '</div><div class="col-lg-4 col-md-4 col-sm-3"></div></div>';
    }
    
    include_once('../../scripts/connect.php');
    include_once('../../scripts/passwordHash.php');

    if(!isset($_POST['username']) || !isset($_POST['password'])){
        header('Location: login.php');
    }

    $username = $_POST['username'];
    $password = passHasher($_POST['password']);

$sql = "SELECT `password` FROM `users` WHERE `username` = '$username'";
$result1 = $connect->query($sql);
$user = $result1->fetch_assoc(); // Конвертируем в массив
if (empty($user)) {
    error('User with this name not found');
    header('Location: login.php');
    exit();
} else {
    foreach($result1 as $row){
        $dbpassword = $row['password'];
        if($password == $dbpassword){
            setcookie('is_auth', true, time() + 80);
        } else {
            error('Wrong password');
            header('Location: login.php');
            exit();
        }
    }
}
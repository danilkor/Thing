<?php
    session_start();
    function error($text){
        $_SESSION['invalid_feedback'] = '<div class="alert alert-danger mt-3" role="alert">' . $text . '</div>';
    }
    
    include_once('../../scripts/connect.php');

    if(!isset($_POST['username']) || !isset($_POST['password'])){
        header('Location: login.php');
    }
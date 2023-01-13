<?php
    session_start();
    function error($text){
        $_SESSION['invalid_feedback'] = '<div class="row mb-4"><div class="col-lg-4 col-md-4 col-sm-3"></div><div class="alert alert-danger mt-3 col-lg-4 col-sm-6 col-md-4 text-center" role="alert">' . $text . '</div><div class="col-lg-4 col-md-4 col-sm-3"></div></div>';
    }
    
    include_once('../../scripts/connect.php');

    if(!isset($_POST['username']) || !isset($_POST['password'])){
        header('Location: login.php');
    }
<?php 
if (!isset($_COOKIE["username"]))
header("Location: ../Login/login.php");
    session_start();

    $pageName = "SignUp";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>

    <link rel="stylesheet" type="text/css" href="dd.css" />
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <style>
        * {
            transition: all ease 0.3s;
        }
    </style>
</head>
<body>
        <!-- header -->
        <div class="container">
        <?php
            require_once('../../scripts/header.php')
        ?>
    </div>


    <div class="container-fluid">

    </div>
</body>
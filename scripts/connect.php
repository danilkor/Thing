<?php

    $connect = mysqli_connect('localhost','danilkor_Admin','1928@2007MySQLDB','danilkor_DB1');

    if(!$connect) {
        die('Error connect to DataBase');
    }
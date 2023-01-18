<?php 

// To improve security from hacking from GitHub


    function passHasher($pass){
        return md5("solenaya" . $pass . "sol");
    }
<?php 

// To improve security from hacking from GitHub


    function passHasher($pass){
        return md5("solenaya" . $pass . "sol");
    }

    function loginHasher($input){
        return md5(date("Y-m-d H:i:s") . $input . ("Privet chtoli?"));
    }
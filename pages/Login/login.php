<?php

    $pageName = "Login";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thing | Login</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <?php
            require_once('../../scripts/header.php')
        ?>
    </div>


    <!-- Форма авторизации -->

    <div class="container-fluid">
        <?php
            if(isset($_SESSION['valid_feedback'])){
                echo $_SESSION['valid_feedback'];
                unset($_SESSION['valid_feedback']);
            }
        ?>
        <h1 class="w-100 text-center">Login</h1>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-3"></div>
            <form action="loginscript.php" method="post" enctype="multipart/form-data" class="col-lg-4 col-sm-6 col-md-4 needs-validation" novalidate>
                <label class="form-label">Username</label>
                <input type="text" class="form-control" required>
                <div class="invalid-feedback">Username is required</div>
                <label class="form-label">Password</label>
                <input type="password" class="form-control" required>
                <div class="invalid-feedback">Password is required</div>
                <div class="row mt-2 p-3 flex-nowrap"><button type="submit" class="btn btn-primary col-3">Login</button><div class="col"></div><span class="alert col-8 align-self-center mb-0 py-2 pl-4 text-center"><a href="#"class="alert-link text-decoration-none">Forgot password?</a> or <a href="../SignUp/signup.php"class="alert-link text-decoration-none">Have no account yet?</a></span></div>
                <?php
                    if(isset($_SESSION['invalid_feedback'])){
                        echo $_SESSION['invalid_feedback'];
                        unset($_SESSION['invalid_feedback']);
                    }
                ?>
            </form>
            <div class="col-lg-4 col-md-4 col-sm-3"></div>
        </div>
    </div>




    <script src="../SignUp/app.js"></script>
</body>
</html>
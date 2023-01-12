<?php 
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
        <!--  Форма регистрации -->

    <div class="container-fluid">
        <?php require_once("../../scripts/header.php")?>
        <?php
                    if(isset($_SESSION['invalid_feedback'])){
                        echo $_SESSION['invalid_feedback'];
                        unset($_SESSION['invalid_feedback']);
                    }
                ?>
        <h1 class="w-100 text-center">Sign-up</h1>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-3"></div>

            <!--  Form Begins -->

            <form class="col-lg-4 col-sm-6 col-md-4 needs-validation container" action="signupscript.php" method="post" enctype="multipart/form-data" novalidate>

                <label for="username" class="form-label">Username</label>
                <input id="username" type="text" class="form-control mb-3 has-validation" name="username" value="<?php if(isset($_POST['username'])){echo($_POST['username']);}?>" required>
                <div class="invalid-feedback">Username is required</div>

                <label class="form-label">E-mail</label>
                <input id="email" type="email" class="form-control has-validation" name="email" value="<?php if(isset($_POST['email'])){echo($_POST['email']);}?>" required>
                <div class="form-text mb-3">Required for password recovery</div>

                <label for="formFile" class="form-label">Your avatar</label><br>
                <select name="avatar" id="avatar" class="" is="ms-dropdown">
                    <?php
                        for($i=1;$i < 51; $i++){
                        echo ('<option value="' . $i . '" data-image="../../img/avatars/'.$i.'.png"></option>"');
                        }
                    ?>
                </select><br>

                <label for="password" class="form-label">Password</label>
                <input id="password" type="password" class="form-control mb-3 has-validation" name="password" value="<?php if(isset($_POST['password'])){echo($_POST['password']);}?>" required>
                <div class="form-text mb-3">*Do not use your bank card password. <b>We</b> worked on site security ;)</div>
                <div class="invalid-feedback">Password is required</div>

                <label for="confPassword" class="form-label">Confirm Password</label>
                <input id="confPassword" type="password" class="form-control has-validation" name="confirmPassword" value="<?php if(isset($_POST['confirmPassword'])){echo($_POST['confirmPassword']);}?>" required>
                <div class="invalid-feedback">Confirm the password</div>

                <div class="row mt-2 p-3 flex-nowrap"><button type="submit" class="btn btn-primary col-3">Sign-up</button><div class="col"></div><span class="alert col-8 align-self-center mb-0 py-2 pl-4 text-center">Already have an account? <a href="../Login/login.php"class="alert-link text-decoration-none">Login</a></span></div>
                
                
            </form>
            <div class="col-lg-4 col-md-4 col-sm-3"></div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="app.js"></script>
    <script src="dd.min.js"></script>
</body>
</html>

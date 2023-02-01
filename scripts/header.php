    <?php    

    ?>
    
    <!-- * HEADER -->
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 py-md-0 mb-4 border-bottom">
    <?php if($pageName != "Login" && $pageName != "SignUp"){echo(' <div class="col-md-3"><a href="#"><img src="../../img/icon/T.png" alt="Thing" class="text-primary" width="80px"></a></div>');}?>
    
    <ul class="nav col-12 <?php if($pageName != "Login" && $pageName != "SignUp"){echo(' col-md-auto ');}?> mb-2 py-3 justify-content-center mb-md-0">
    <li><div class="hover-overlay"><div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div></div>
    <a href="../Home/home.php" class="h-100 nav-link px-2 <?php if($pageName == "Home"){echo "link-secondary";} else {echo " link-dark";}?>">Home</a></li> 
    <li><a href="#" class="h-100 nav-link px-2 <?php if($pageName == "Features"){echo "link-secondary";} else {echo " link-dark";}?>">Features</a></li>
    <li><a href="#" class="h-100 nav-link px-2 <?php if($pageName == "Pricing"){echo "link-secondary";} else {echo " link-dark";}?>">Pricing</a></li>
    <li><a href="#" class="h-100 nav-link px-2 <?php if($pageName == "FAQs"){echo "link-secondary";} else {echo " link-dark";}?>">FAQs</a></li>
    <li><a href="#" class="h-100 nav-link px-2 <?php if($pageName == "About"){echo "link-secondary";} else {echo " link-dark";}?>">About</a></li>
    </ul>

    <?php
        if (!isset($_COOKIE["username"]) && $pageName != "Login" && $pageName != "SignUp") { //Если Куки не существует и это не логин/регистр страница
            echo('
                <div class="col-md-3 text-end py-3">
                <a href="../Login/login.php" class="me-2"><button type="button" class="btn btn-outline-primary">Login</button></a>
                <a href="../SignUp/signup.php"><button type="button" class="btn btn-primary">Sign-up</button></a>
                </div>
            ');
        } else if(isset($_COOKIE["username"])) {
            echo('
            <div class="col-md-3 text-end py-3">
            <div class="row">
                <div class="col-md-8"></div>
                <div class="dropdown text-end col-md-4">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../../img/avatars/'.$_COOKIE['avatar'].'.png" alt="YOU" width="44" height="44" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small">
                        <li><a class="dropdown-item" href="#">lorem</a></li>
                        <li><a class="dropdown-item" href="#">ispum</a></li>
                        <li><a class="dropdown-item" href="#">dorem</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Sign out</a></li>
                    </ul>
                </div>
            </div>
        </div>
            ');
        } else {
            echo ('
                <div class="col-md-3 py-3"></div>
            ');
        }
    ?>
</header>
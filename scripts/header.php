    <?php    

    ?>
    
    <!-- * HEADER -->
<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
    <?php if($pageName != "Login" && $pageName != "SignUp"){echo(' <div class="col-md-3"></div>');}?>
    
    <ul class="nav col-12 <?php if($pageName != "Login" && $pageName != "SignUp"){echo(' col-md-auto ');}?> mb-2 justify-content-center mb-md-0">
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
                <div class="col-md-3 text-end">
                <a href="../Login/login.php" class="me-2"><button type="button" class="btn btn-outline-primary">Login</button></a>
                <a href="../SignUp/signup.php"><button type="button" class="btn btn-primary">Sign-up</button></a>
                </div>
            ');
        } else if(isset($_COOKIE["username"])) {
            echo('
                <div class="col-md-3 text-end">
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="../../img/avatars'.$_COOKIE['avatar'].'.png" alt="mdo" width="32" height="32" class="rounded-circle">
                        </a>
                        <ul class="dropdown-menu text-small" style="">
                            <li><a class="dropdown-item" href="#">lorem</a></li>
                            <li><a class="dropdown-item" href="#">ispum</a></li>
                            <li><a class="dropdown-item" href="#">dorem</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            ');
        }
    ?>
</header>
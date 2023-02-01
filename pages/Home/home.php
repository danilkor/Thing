<?php
    session_start();
    $pageName = "Home";
    $factsOnOnePage = 50;
    
    include_once("../../scripts/connect.php");
    include_once("../../scripts/timeRecreatorScript.php");
    include_once("../../scripts/logincheck.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thing | Home</title>
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <?php
            require_once('../../scripts/header.php');
        ?>

        <!-- Text by GPT-3 -->

        <div class="row">
            <div class="col col-lg-2"></div>
            <div id="carouselExampleIndicators" class="carousel slide col-lg-8 col-md-12 col-sm-12" data-bs-ride="true">
                <!-- <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active bg-primary" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" class="bg-primary" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" class="bg-primary" aria-label="Slide 3"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" class="bg-primary" aria-label="Slide 4"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" class="bg-primary" aria-label="Slide 5"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" class="bg-primary" aria-label="Slide 6"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" class="bg-primary" aria-label="Slide 7"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" class="bg-primary" aria-label="Slide 8"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" class="bg-primary" aria-label="Slide 9"></button>
                </div> -->
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="7000">
                        <img src="img/Places.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-bg-dark bg-opacity-75 rounded-5">
                            <h5>Places</h5>
                            <p>Discover interesting facts about different places around the world, including their
                                history, culture, and other interesting tidbits</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="7000">
                        <img src="img/Traditions.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-bg-dark bg-opacity-75 rounded-5">
                            <h5>Traditions</h5>
                            <p>Learn more about the customs, beliefs, and practices of different cultures and societies
                                around the world</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="7000">
                        <img src="img/Health.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-bg-dark bg-opacity-75 rounded-5">
                            <h5>Health</h5>
                            <p>Get the facts on the latest health trends and breakthroughs, as well as tips for
                                maintaining a healthy lifestyle</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="7000">
                        <img src="img/Animals.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-bg-dark bg-opacity-75 rounded-5">
                            <h5>Animals</h5>
                            <p>Get to know the world's creatures, including their habitats, behaviors, and other
                                interesting facts</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="7000">
                        <img src="img/Technology.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-bg-dark bg-opacity-75 rounded-5">
                            <h5>Technology</h5>
                            <p>Stay up to date on the latest tech trends, from gadgets to apps and from the internet to
                                artificial intelligence</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="7000">
                        <img src="img/Science.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-bg-dark bg-opacity-75 rounded-5">
                            <h5>Science</h5>
                            <p>Get to know the basics of science and learn more about the amazing discoveries made every
                                day by scientists around the world</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="7000">
                        <img src="img/Music.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-bg-dark bg-opacity-75 rounded-5">
                            <h5>Music</h5>
                            <p>Learn more about the history, genres, and artists of the music world, as well as tips for
                                creating your own musical masterpieces</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="7000">
                        <img src="img/Nature.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-bg-dark bg-opacity-75 rounded-5">
                            <h5>Nature</h5>
                            <p>Get to know the natural world, from the plants and animals to the weather and the
                                environment</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="7000">
                        <img src="img/Space.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block text-bg-dark bg-opacity-75 rounded-5">
                            <h5>Space</h5>
                            <p>Discover the secrets of the universe, from the planets and stars to the galaxies and
                                beyond</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon border-1" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="col col-lg-2"></div>
        </div>

        <!-- Celebrities: Get the inside scoop on your favorite celebrities, including their personal and professional lives, lifestyle habits, and more.

    Places: Discover interesting facts about different places around the world, including their history, culture, and other interesting tidbits.

    Traditions: Learn more about the customs, beliefs, and practices of different cultures and societies around the world.

    Health: Get the facts on the latest health trends and breakthroughs, as well as tips for maintaining a healthy lifestyle.

    Animals: Get to know the world's creatures, including their habitats, behaviors, and other interesting facts.

    Technology: Stay up to date on the latest tech trends, from gadgets to apps and from the internet to artificial intelligence.

    Science: Get to know the basics of science and learn more about the amazing discoveries made every day by scientists around the world.

    Music: Learn more about the history, genres, and artists of the music world, as well as tips for creating your own musical masterpieces.

    Nature: Get to know the natural world, from the plants and animals to the weather and the environment.

    Space: Discover the secrets of the universe, from the planets and stars to the galaxies and beyond. -->







        <!-- // ! Facts generation -->
        <!-- <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php
                        $factId = 1;
                        include("../../scripts/factsGenerator.php");
                    ?>
        </div> -->
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
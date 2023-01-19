<?php
    session_start();
    $pageName = "Home";
    $factsOnOnePage = 50;


    include_once("../../scripts/connect.php");
    include_once("../../scripts/timeRecreatorScript.php");
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
        <br><br>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <?php
                        $factId = 1;
                        include("../../scripts/factsGenerator.php");
                    ?>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>

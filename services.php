<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- including CSS -->
    <link rel="stylesheet" href="css/Style.css">
   <!-- including font-awesome -->
   <link rel="stylesheet" href="./fontawesome/css/fontawesome.min.css">
   <link rel="stylesheet" href="./fontawesome/css/all.min.css">
   
    <!-- Including -->
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
     
    <!-- including JS -->
    <script src="js/script.js"></script>

    <title>Happy Wedding</title>

</head>
<body>
    <?php 
        $IPATH = $_SERVER["DOCUMENT_ROOT"]."/assets/php/";
        include($IPATH."navbar.php");
    ?> 
    <h1>Wedding Categories</h1>
    <div class="container">
        <div class="card">
            <a class="element" href="venue.php">
                <p>Venue</p>
                <img src="./assets/imgs/venue1.png" alt="">
            </a>
        </div>
        
        <div class="card">
            <a class="element" href="decoration.php">
                <p>Decoration</p>
                <img src="./assets/imgs/venue2.png" alt="">
            </a>
        </div>
        <div class="card">
            <a class="element" href="catering.php">

                <p>Catering</p>
                <img src="./assets/imgs/catering1.png" alt="">
            </a>
        </div>
        <div class="card">
            <a class="element" href="photographers.php">
                
                <p>Photographers</p>
                <img src="./assets/imgs/photographers1.png" alt="">
            </a>
        </div>
        <div class="card">
            <a class="element" href="makeup.php">
                
                <p>Make up</p>
                <img src="./assets/imgs/makeup1.png" alt="">
            </a>
        </div>
        <div class="card">
            <a class="element" href="bridalwear.php">
                
                <p>Bridal Wear</p>
                <img src="./assets/imgs/bridalwear7.png" alt="">
            </a>
        </div>
        <div class="card">
            <a class="element" href="groomwear.php">
                
                <p>Groom Wear</p>
                <img src="./assets/imgs/groomwear1.png" alt="">
            </a>
        </div>
        <div class="card">
            <a class="element" href="cakes.php">
                
                <p>Cakes</p>
                <img src="./assets/imgs/cakes1.png" alt="">
            </a>
        </div>
        <div class="card">
            <a class="element" href="jewelry.php">
                
                <p>Jewelry</p>
                <img src="./assets/imgs/jewelry1.png" alt="">
            </a>
        </div>
        <div class="card">
            <a class="element" href="honeymoon.php">
                <p>Honeymoon</p>
                <img src="./assets/imgs/honeymoon1.png" alt="">
            </a>
        </div>
    </div>
    <?php
  include($IPATH . "footer.php");
  ?>
</body>
</html>
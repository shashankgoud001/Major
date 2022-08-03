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
    <div class="plans planspage">
    <h1>Our Plans</h1>
    <div class="combo-plans">
      <div class="card">
        <h1>Basic</h1>
        <ul>

          <li><i class="fa-solid fa-check"> </i> Venue</li>
          <li><i class="fa-solid fa-check"> </i> Decorators</li>
          <li><i class="fa-solid fa-check"> </i> Catering</li>
          <li><i class="fa-solid fa-xmark"> </i> Make Up</li>
          <li><i class="fa-solid fa-xmark"> </i> Photographers</li>
          <li><i class="fa-solid fa-xmark"> </i> Cake</li>
          <li><i class="fa-solid fa-xmark"> </i> Clothes</li>
          <li><i class="fa-solid fa-xmark"> </i> Jewelery</li>
          <li><i class="fa-solid fa-xmark"> </i> Honey Moon</li>
        </ul>
        <!-- <p>10% discount</p> -->
        <button >10% Discount</button>
      </div>
      <div class="card">
      <h1 style="color:silver;">Silver</h1>
        <ul>
          <li><i class="fa-solid fa-check"> </i> Venue</li>
          <li><i class="fa-solid fa-check"> </i> Decorators</li>
          <li><i class="fa-solid fa-check"> </i> Catering</li>
          <li><i class="fa-solid fa-check"> </i> Make Up</li>
          <li><i class="fa-solid fa-check"> </i> Photographers</li>
          <li><i class="fa-solid fa-check"> </i> Cake</li>
          <li><i class="fa-solid fa-xmark"> </i> Clothes</li>
          <li><i class="fa-solid fa-xmark"> </i> Jewelery</li>
          <li><i class="fa-solid fa-xmark"> </i> Honey Moon</li>
        </ul>
        <!-- <p>20% discount</p> -->
        <button >20% Discount</button>
      </div>
      <div class="card">
        <h1 style="color:gold;">Gold</h1>
        <ul>
          <li><i class="fa-solid fa-check"> </i> Venue</li>
          <li><i class="fa-solid fa-check"> </i> Decorators</li>
          <li><i class="fa-solid fa-check"> </i> Catering</li>
          <li><i class="fa-solid fa-check"> </i> Make Up</li>
          <li><i class="fa-solid fa-check"> </i> Photographers</li>
          <li><i class="fa-solid fa-check"> </i> Cake</li>
          <li><i class="fa-solid fa-check"> </i> Clothes</li>
          <li><i class="fa-solid fa-check"> </i> Jewelery</li>
          <li><i class="fa-solid fa-check"> </i> Honey Moon</li>
        </ul>
        <!-- <p>30% discount</p> -->
        <button >30% Discount</button>
      </div>

    </div> 
    <?php
  include($IPATH . "footer.php");
  ?>
</body>
</html>
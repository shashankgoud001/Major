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

  <!-- Including jquery -->
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Happy Wedding</title>
</head>

<body>
  <!-- <div id="nav-placeholder"></div>
    <script>
      $(function(){
          $("#nav-placeholder").load("nav.php");
      }); 
    </script> -->
  <?php
  $IPATH = $_SERVER["DOCUMENT_ROOT"] . "/assets/php/";
  include($IPATH . "navbar.php");
  ?>
  <div class="home-page">
    <!-- <img src="./assets/imgs/logo1.png" alt="logo"> -->
    <!-- <p>Happy Wedding</p> -->
    <!-- <form action="">
            <label for="city">City</label>
            <input type="text" id="city" name="city">
            <button>Search</button>
        </form> -->
  </div>
  <h1>Our Services</h1>
  <div class="container home">
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
  </div>
  <center>
    <a href="services.php" class="a">View more</a>
  </center>

  <div class="plans">
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
        <button onclick="location.href='plans.php'">Know More</button>
      </div>
      <div class="card" >
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
        <button onclick="location.href='plans.php'">Know More</button>
      </div>
      <div class="card">
        <h1 style="color:gold;" >Gold</h1>
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
        <button onclick="location.href='plans.php'">Know More</button>
      </div>

    </div> 
  </div>
  <div class="customers homepageCustomers">
    <h1>Our Customers</h1>
    <div class="images">
      <a href="gallery.php">
        <img src="./assets/imgs/customer14.png" alt="image1">
        <img src="./assets/imgs/customer1.png" alt="image2">
        <img src="./assets/imgs/customer3.png" alt="image3">
        <img src="./assets/imgs/customer4.png" alt="image4">
        <img src="./assets/imgs/customer16.png" alt="image5">
        <img src="./assets/imgs/customer11.png" alt="image6">
        <img src="./assets/imgs/customer7.png" alt="image7">
        <img src="./assets/imgs/customer8.png" alt="image8">
        <img src="./assets/imgs/customer9.png" alt="image9">
      </a>
    </div>
    <center>
      <a href="gallery.php" class="a">View more</a>
    </center>
  </div>
  <!-- <div class="blog">
        <h1>Read our latest blogs</h1>
        
    </div> -->

  <!-- <div class="services">
        <h1>We offer the following services</h1>

        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="./assets/imgs/venue7.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Venue</h5>
                </div>
                <h6>Venue</h6>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="./assets/imgs/cakes8.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Cake</h5>
                </div>
                <h6>Cake</h6>
              </div>
              <div class="carousel-item">
                <img src="./assets/imgs/makeup1.png" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Make Up</h5>
                </div>
                <h6>Make Up</h6>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </div> -->

  <?php
  include($IPATH . "footer.php");
  ?>

  <!-- including JS -->
  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
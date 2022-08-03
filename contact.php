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
    <div class="front">

        <h1>Contact</h1>
        <div class="container-contact-1">
            <div class="box">
                <i class="fa-solid fa-phone"> </i> 
                <p>Phone : +91-9876543210</p>
            </div>
            <div class="box">
                <i class="fa-solid fa-envelope"> </i> 
                <p>Email : happywedding@gmail.com</p>
            </div>
            <div class="box">
                <i class="fa-solid fa-location-dot"> </i>
                <p> Address : Suraj Towers,<br> Miyapur, Hyderabad, India.</p>
            </div>
    
        </div>
        <div class="container-contact-2">
            <form action="./assets/php/suggestion.php" method="POST">
                <div class="box-out">
                    <div class="box">
        
                        <label for="name">Name</label>
                        <input type="text"  name="name" placeholder="Your Name" required>
            
                        <label for="email" >Email</label>
                        <input type="text"  name="email" placeholder="Your Email" required>
            
                        <label for="phone">Phone</label>
                        <input type="text"  name="phone" placeholder="Your Phone Number" required>
                        
                    </div>
                    <div class="box">
                        <label for="message">Message</label>
                        <textarea name="message" id="message-c" placeholder="Message" required></textarea>
                    </div>
                </div>
                <input type="submit" value="Submit" name="suggestion">
            </form>
        </div>
    </div> 
    <?php
  include($IPATH . "footer.php");
  ?>
</body>
</html>
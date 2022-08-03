<?php

    if(isset($_POST["username"])){
        $uname = $_POST["username"];
    }
    if(isset($_POST["password"])){
        $pwd = $_POST["password"];
    }
   
    include "connect.php";
    
    // $sql = "SELECT * FROM users_data WHERE username='$uname' AND password1='$pwd'";
    
    $sql = "CREATE TABLE users_data (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    

    
    $conn->close();
?>
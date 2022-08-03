<?php 
    if(isset($_POST['suggestion'])){
        include_once "connect.php";
        $sql = "INSERT INTO suggestions_data(fname,email,phone,message) VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['message']."')";
        $query = $conn->query($sql);

    }
?>
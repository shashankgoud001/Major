<?php 
        $url = $_SERVER['HTTP_REFERER'];

    if(isset($_POST['suggestion'])){
        include_once "connect.php";
        $sql = "INSERT INTO suggestions_data(fname,email,phone,message) VALUES('".$_POST['name']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['message']."')";
        $query = $conn->query($sql);

    }

    ob_start();
                while (ob_get_status()) 
                {
                    ob_end_clean();
                }
                header( "Location: $url" );
?>
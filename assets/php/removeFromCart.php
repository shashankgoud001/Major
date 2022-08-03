<?php 
    session_start();
    $url = $_SERVER['HTTP_REFERER'];

    if(isset($_POST['deleteItem']))
    {

        if(isset(($_POST['deleteID']))){
            if (($key = array_search($_POST['deleteID'], $_SESSION['cart'])) !== false) {
                unset($_SESSION['cart'][$key]);
            }
        }
    }


    ob_start();
                while (ob_get_status()) 
                {
                    ob_end_clean();
                }
                header( "Location: $url" );
?>
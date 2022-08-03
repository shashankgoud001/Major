<?php 
    session_start();
    $url = $_SERVER['HTTP_REFERER'];

    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = array();
    }
    if(isset($_POST['addToCart'])){
        echo $_POST['Pid'];
        $flag = 1;
        foreach($_SESSION['cart'] as $items){
            if($items===$_POST['Pid']){
                $flag = 0;
                break;
            }
        }
        if($flag===1)
            array_push($_SESSION['cart'],$_POST['Pid']);
    }
    ob_start();
                while (ob_get_status()) 
                {
                    ob_end_clean();
                }
                header( "Location: $url" );
?>
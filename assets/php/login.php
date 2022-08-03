<?php
    session_start();

    $url = $_SERVER['HTTP_REFERER'];

    if(isset($_SESSION['uname'])&&!isset($_POST["uname"])){
        header("Location: $url");
    }
    else{
        
        if(isset($_POST["uname"])){
            $uname = $_POST["uname"];
        }
        if(isset($_POST["psw"])){
            $psw = $_POST["psw"];
        }
        if(isset($_POST["name"])&&!empty($_POST["name"])){
            $name = $_POST["name"];
            $_SESSION['signup'] = true;
            echo "name is $name ";
        }
        if(isset($_POST["email"])&&!empty($_POST["email"])){
            $email = $_POST["email"];
        }
        include "connect.php";



        $sql = "SELECT * FROM users_data WHERE username='$uname' AND password='$psw'";
        
        
        
            $result = $conn->query(($sql));



        if ($result->num_rows > 0) { 
            if(isset($_SESSION['signup'])){
                $_SESSION["login_fail"] = true;
            }else{
                $_SESSION['uname'] = $uname;
                $_SESSION['psw'] = $psw;
            }       
        }
        else {
            if(isset($_SESSION['signup'])){
                $sql = "INSERT INTO users_data (fname,username,email,password) VALUES ('$name','$uname','$email','$psw')";
                $result = $conn->query(($sql));
                $_SESSION['uname'] = $uname;
                $_SESSION['psw'] = $psw;
                $_SESSION['name'] = $name;
                $_SESSION['email'] = $email;
                echo "this is happening";
            }else{
                $_SESSION["login_fail"] = true;

            }
        }
        if(isset($_SESSION['signup'])) unset($_SESSION['signup']);
        ob_start();
                while (ob_get_status()) 
                {
                    ob_end_clean();
                }
                header( "Location: $url" );
    
        $conn->close();
    }
?>




<?php
session_start() ;
$total_cost = 0;
$_SESSION['venueFlag'] = 0;
$_SESSION['decorationFlag'] = 0;
$_SESSION['cateringFlag'] = 0;
$_SESSION['makeupFlag'] = 0;
$_SESSION['cakesFlag'] = 0;
$_SESSION['photographersFlag'] = 0;
$_SESSION['bridalwearFlag'] = 0;
$_SESSION['groomwearFlag'] = 0;
$_SESSION['jewelryFlag'] = 0;
$_SESSION['honeymoonFlag'] = 0;

$flag1 = 0;
$flag2 = 0;
$flag3 = 0;

$discount = 0;

?>
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
        include_once($IPATH."connect.php");
    ?> 
    <div class="cartPage">

    

    <h1>Cart</h1>
    <?php  $nodata = 1;
        if(isset($_SESSION['cart'])&& count($_SESSION['cart'])>0){ ?>
    <table class="cartTable">
        <tr class="commonCartHeading">
            <th>Image</th>
            <th>Service</th>
            <th>Cost</th>
            <th>Delete</th>
        </tr>
        <?php 
        
            
         foreach($_SESSION['cart'] as $items){
            $nodata = 0;
            $sql = "SELECT * FROM cards_data WHERE id=$items";
            $query = $conn->query($sql);
            $row = $query->fetch_assoc();
         ?>
        <tr class="commonCartCard" id="cartitem<?php echo $row['id'] ?>" >
            <th><img src="./assets/imgs/<?php echo $row['typename'].$row['count']; ?>.png"  alt="img"></th>
            <th><?php echo $row['title']; ?></th>
            <th><?php echo $row['cost']; ?></th>
            <th>
                <form action="./assets/php/removeFromCart.php" method="POST">
                    <input type="hidden" value="<?php echo $row['id']; ?>" name="deleteID">
                    <input type="submit" value="Delete" name="deleteItem">
                </form>
            </th>
        </tr>
        <?php
        $total_cost += $row['cost'];
        $_SESSION[$row["typename"]."Flag"] = 1;
    } ?>
    </table>

    <?php 
    }

    if($nodata===1){
        echo "<br><br><br>";
        echo '<center >    <h3>No items are present in cart</h3>
        <br>'; 
        echo '<img class="nocartitems" src="./assets/imgs/cartman3.png" alt="connection lost"></center>';
        unset($nodata);
    }else{ ?>
    <?php 
        if($_SESSION['venueFlag']===1&&$_SESSION['decorationFlag']===1&&$_SESSION['cateringFlag']===1){
            $flag1 = 1;
        }
        if($_SESSION['makeupFlag']===1&&$_SESSION['cakesFlag']===1&&$_SESSION['photographersFlag']===1){
            $flag2 = 1;
        }
        if(($_SESSION['bridalwearFlag']||$_SESSION['groomwearFlag'])&&$_SESSION['jewelryFlag']===1&&$_SESSION['honeymoonFlag']===1){
            $flag3 = 1;
        }
        if($flag1===1){
            
            if($flag2===1){
                if($flag3===1){
                    $discount = 0.3;
                }else{
                    $discount = 0.2;
                }
            }else{
                $discount = 0.1;
            }
        }
        ?>
        <div class="costSection">
            <div class="subtotal">
                <div>Subtotal</div>
                <div>$<?php echo $total_cost ?></div>
            </div>
            <div class="discount">
                <div>Discount</div>
                <div><?php echo 100*$discount."%"; ?></div>
            </div>
            <hr>
            <div class="totalCost">
                <div>Total Cost</div>
                <div>$<?php echo $total_cost*(1-$discount); ?></div>
            </div>
                <center>
                    <button>Buy</button>
                </center>
        </div>
        <?php
    } ?>
    </div>

    <?php
  include($IPATH . "footer.php");
  ?>

</body>
</html>
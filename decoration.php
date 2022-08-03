<?php 
session_start();

// Include pagination library file 
include_once './assets/php/Pagination.class.php';
// Include database configuration file 
require_once './assets/php/connect.php'; 
 
// Set some useful configuration 
$baseURL = './assets/php/getData.php'; 
$limit = 2; 
$flag = 0;
$pageName = basename($_SERVER['PHP_SELF']);

$discountflag1 = 0;
$discountflag2 = 0;
$discountflag3 = 0;
$venueFlag = 0;

// echo substr($pageName,0,strlen($pageName)-4); //works fine
// $websitename = 'cakes';
$websitename = substr($pageName,0,strlen($pageName)-4);

// Count of all records 
$query   = $conn->query("SELECT COUNT(*) as rowNum FROM cards_data WHERE typename='$websitename' "); 
$result  = $query->fetch_assoc(); 
$rowCount= $result['rowNum']; 
 
// Initialize pagination class 
$pagConfig = array( 
    'baseURL' => $baseURL, 
    'totalRows' => $rowCount, 
    'perPage' => $limit, 
    'contentDiv' => 'commonCard', 
    'link_func' => 'searchFilter' 
); 
$pagination =  new Pagination($pagConfig); 
 
// Fetch records based on the limit 
$query = $conn->query("SELECT * FROM cards_data WHERE typename='$websitename' ORDER BY id ASC LIMIT $limit"); 
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
    ?>  
    <div class="search-panel">
    <div class="searchsortcontainer">
        <div class="search">
            <input type="text" class="form-control" id="keywords" placeholder="Type keywords..." onkeyup="searchFilter();">
            <i class="fa fa-search"></i>
            <div class="options">
                <select class="form-control" id="filterBy" onchange="searchFilter();">
                    <option value="">Sort by</option>
                    <option value="cost">Cost</option>
                    <option value="stars">Ratings</option>
                </select>
            </div>
        </div>
    </div>
    </div>


    <script>
    function searchFilter(page_num) {
        page_num = page_num?page_num:0;
        console.log(page_num);
        var keywords = $('#keywords').val();
        var filterBy = $('#filterBy').val();
        $.ajax({
            type: 'POST',
            url: './assets/php/getData.php',
            data:'page='+page_num+'&keywords='+keywords+'&filterBy='+filterBy+'&service_type=<?php echo $websitename ?>',
            success: function (html) {
                $('#dataContainer').html(html);
            }
        });
    }
</script>
    
<div class="datalist-wrapper">
    
    <!-- Data list container -->
    <div id="dataContainer">

        <div class="commonContainer">
                <?php 
                if($query->num_rows > 0){ $i=0; 
                    while($row = $query->fetch_assoc()){ $i++; 
                ?>
                    <div class="commonCard">
                        <img src="./assets/imgs/<?php echo $row['typename'].$row['count']; ?>.png" alt="img">
                        <div class="commonContent">
                            <p class="commonName"><?php echo $row['title']; ?></p>
                            <div class="stars">
                            <div class="stars-inner" style="width: <?php echo $row['stars']*20 ?>%;"></div>
                            </div>
                            <?php if($row['location']!=='none'){ ?>
                            <p class="location"> <i class="fa-solid fa-location-dot"></i> <?php echo $row['location']; ?> </p>
                            <?php } ?> 
                            <?php if($row['venueType']!=='none'){ ?>
                                <p class="type"><i class="fa-solid fa-hotel"></i> <?php echo $row['venueType']; ?></p>
                            <?php } ?>
                            <?php if($row['people_range']!=='none'){ ?>
                                <p class="range"><i class="fa-solid fa-people-group"></i> <?php echo $row['people_range']; ?></p>
                            <?php } ?>
                                <p class="cost">$ <?php echo $row['cost']; ?></p>
                            </div>
                            <form action="./assets/php/addToCart.php" method="POST">
                                <!-- <button class="commonBuy" onclick="addToCart('<?php echo $row['id']; ?>')">Add to Cart</button> -->
                                <input type="hidden" name="Pid" value="<?php echo $row['id'] ?>">
                                <input type="submit" value="Add to Cart" class="commonBuy" name="addToCart">
                            </form>
                            </div>
                <?php 
                    $flag = 1;
                    } 
                }
                ?>
            <!-- Display pagination links -->
        </div>
        <?php
         echo $pagination->createLinks();
        ?>
    </div>
    <?php
    if($flag == 0){
        echo "<br><br><br>";
        echo '<center>No data is present<br>'; 
        echo '<img src="./assets/imgs/connectionlost.png" alt="connection lost"></center>';
        unset($flag);
    }
  include($IPATH . "footer.php");
  ?> 
</body>
</html>
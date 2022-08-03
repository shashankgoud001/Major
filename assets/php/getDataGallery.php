<?php
if(isset($_POST['service_type'])){
    if(isset($_POST['page'])){ 
        include_once 'Pagination.class.php'; 
        require_once 'connect.php'; 
        $baseURL = 'getData.php'; 
        $offset = !empty($_POST['page'])?$_POST['page']:0; 
        $limit = 4;  // change
        $temp = "SELECT * FROM cards_data WHERE typename='".$_POST['service_type']."'";
        $temp_query = $conn->query($temp);
        $temp_row = $temp_query->fetch_assoc();
        $whereSQL = " WHERE typename='".$_POST['service_type']."'";


        // Count of all records 
        $query   = $conn->query("SELECT COUNT(*) as rowNum FROM cards_data ".$whereSQL); 
        $result  = $query->fetch_assoc(); 
        $rowCount= $result['rowNum']; 
        
        // Initialize pagination class 
        $pagConfig = array( 
            'baseURL' => $baseURL, 
            'totalRows' => $rowCount, 
            'perPage' => $limit, 
            'currentPage' => $offset, 
            'contentDiv' => 'dataContainer', 
            'link_func' => 'searchFilter' 
        ); 
        $pagination =  new Pagination($pagConfig); 
    
        // Fetch records based on the offset and limit
        // echo  "SELECT * FROM cards_data $whereSQL LIMIT $offset,$limit" ;
        $query = $conn->query("SELECT * FROM cards_data $whereSQL LIMIT $offset,$limit "); 
?> 
        <div class="commonContainer">
            <?php 
            if($query->num_rows > 0){ 
                while($row = $query->fetch_assoc()){ 
                    $offset++ 
            ?> 
            <div class="commonCard">
                <img src="./assets/imgs/<?php echo $row['typename'].$row['count']; ?>.png" alt="img">
            </div>
            <?php 
                } 
            } 
            ?> 

        </div>

        
        <!-- Display pagination links --> 
        <?php echo $pagination->createLinks(); ?> 
<?php 
    } 
}
?>
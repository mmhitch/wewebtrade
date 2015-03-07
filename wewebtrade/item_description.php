<?php
    session_start();
    $alumni_id = $_SESSION['alumni_id'];
    $page_title = 'We Web Trade | Item Description';
    
    include_once 'includes/db_functions.php';
    //testing og meta usage
    if (isset($_GET['item_id'])){
                $item_id = $_GET['item_id'];
                $item_details =  getItemDetails($item_id);
                
                foreach($item_details as $row){
                    //see http://stackoverflow.com/questions/8431694/generating-facebook-open-graph-meta-tags-dynamically
                    $img_meta =  "<meta property='og:image' content='http://wewebtrade.com" . $row['image'] . "' />";
                    $og_meta_title = "<meta property='og:title' content=' " . $row['description'] . "' />";
                }     
    }
    //end testing og meta usage
    
    include 'header.php';
    
?>
<section class="content outline">
    <?php
        include 'includes/advanced_search.php';

        //html for <div class='right_side'> & <aside class='aside_right'>
        include 'includes/myItemsLH.php';
        
        //html for <div class='right_side'> & <aside class='aside_right'>
        include 'includes/wishlistItemsRH.php'
    ?>
    <div class='profile'>
        <?php

            if (isset($_GET['item_id'])){
                $item_id = $_GET['item_id'];
                $item_details =  getItemDetails($item_id);
            
                foreach($item_details as $row){
                    ?>
                    <img class='shadow' src="images/profile/profile.png" width="80" height="80" alt="Profile Pic" />
                    <p>Member: <?php echo $row['first_name'] . ' ' . $row['last_name']; ?></p>
                    <h3>Item Desctiption:</h3><p id='sm_para'><?php echo $row['description']; ?></p>
                    <ul>
                        <li>Category: <?php echo $row['category']; ?></li>
                        <li>Sub Category: <?php echo $row['subcategory']; ?></li>
                        <!--<li>Brand Name: Honda</li>
                        <li>Model: CRF 50</li>
                        <li>Year: 2004</li>-->
                        <li>Value: $<?php echo $row['value']; ?></li>
                        <!--<li>Expiration: None</li>
                        <li>Location: Kent WA</li>-->
            
                    </ul>
                    <?php
                    
                    if (!empty($row['image'])) {
                        echo "<img width='400px' src='http://wewebtrade.com" . $row['image'] . "' />";
                    } else {
                        echo "<img width='400px' src='http://wewebtrade.com/images/items/image_not_available.jpg' />";
                    }
                    
                } 
            } else {
                
            
        ?>
        <img class='shadow' src="images/profile_mark.png" width="80" height="80" alt="Profile Pic" />
        <p>Member: Megamind</p>
        <h3>Item Desctiption:</h3><p id='sm_para'>Customized Honda CRF 50 with Pit king 110cc 4 speed manul transmission.  Red Baron swing arm and adjustable Forks.
        Ishock rear shock and BBR rev box, big bar kit, skid plate and foot pegs. Oversized chain and sprockets.</p>
        <img id='map' src="http://maps.googleapis.com/maps/api/staticmap?center=47.38093,-122.23484&zoom=10&size=150x150&sensor=false">
        <ul>
            <li>Category: Motorcycle</li>
            <li>Sub Category: Mini Bike</li>
            <li>Brand Name: Honda</li>
            <li>Model: CRF 50</li>
            <li>Year: 2004</li>
            <li>Value: $1000.00</li>
            <li>Expiration: None</li>
            <li>Location: Kent WA</li>

        </ul>
        <img id='item1' src="images/item_crf50.png" width="200" height="200" alt="Featured Item" />
        <img id='item2' src="images/item_crf50.png" width="200" height="200" alt="Featured Item" />
        <img id='item3' src="images/item_crf50.png" width="200" height="200" alt="Featured Item" />
        <img id='item4' src="images/item_crf50.png" width="200" height="200" alt="Featured Item" />
        <?php
            }
        ?>
        
        
        <!--FACEBOOK BUTTON-->
        <div class="fb-share-button" data-href="#" data-layout="button_count"></div>
    </div>
    
    <div class="clear"></div>
    
    <div class='item_page'>
    <!--<img src="images/item_crf50.png" width="200" height="200" alt="Featured Item" />-->

    
    
    <!--<ul id="pagination-clean">
        <li class="previous-off">Previous</li>
        <li class="active">1</li>
        <li><a href="?page=2">2</a></li>
        <li><a href="?page=3">3</a></li>
        <li><a href="?page=4">4</a></li>
        <li><a href="?page=5">5</a></li>
        <li><a href="?page=6">6</a></li>
        <li><a href="?page=7">7</a></li>
        <li class="next"><a href="?page=2">Next</a></li>
    </ul>-->
    </div>
</section>
<div class="clear"></div>
<?php
    include 'footer.php';
?>

    
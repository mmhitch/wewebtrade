<?php
    $page_title = 'We Web Trade | Items for Trade';
    include 'header.php';
?>
<!--
    Name: Mark Hitchcock
    Date: 10/18/2013
    URL: wewebtrade.com/view/index.php 
-->
<section class="content outline">
    <!--<h2>Title</h2>
    <p>Here is some content.</p>-->
    <?php
        include 'includes/advanced_search.php';
    ?>
    <div class='item_page' >
<!--    <div  id="cf3">
            <img class="bottom" src="images/item_stamps.png" height='200' width='200' />
            <img class="top" src="images/item_crf50.png" height='200' width='200' />
    </div>
    <div id="cf4">
            <img class="bottom" src="images/item_elec_dog_fence.png" height='200' width='200' />
            <img class="top" src="images/item_kayak.jpg" height='200' width='200' />
    </div>-->
    <?php
        include_once 'includes/db_functions.php';
        $results = getAllItems();
        
        foreach($results as $row) {
            if(isset($row['image'])) {
                //echo "<meta og:image src='http://wewebtrade.com/item_description.php?item_id=" . $row['item_id'] . "'><img src='" . $row['image'] . "' />";
                echo "<a href='http://wewebtrade.com/item_description.php?item_id=" . $row['item_id'] . "'><img src='" . $row['image'] . "' width='200' height='200' alt='Featured Item' /></a>";
            }
        }
    ?>
<!--    <img src="images/item_kayak.jpg" width="200" height="200" alt="Featured Item" />
    <img src="images/item_crf50.png" width="200" height="200" alt="Featured Item" />
    <img src="images/item_stamps.png" width="200" height="200" alt="Featured Item" />
    <img src="images/item_elec_dog_fence.png" width="200" height="200" alt="Featured Item" />
    <img src="images/item_rock_shoes.png" width="200" height="200" alt="Featured Item" />
    <img src="images/item_crf50.png" width="200" height="200" alt="Featured Item" />-->

    
    
<!--    <ul id="pagination-clean">
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

    
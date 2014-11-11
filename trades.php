<?php
    $page_title = 'We Web Trade | Items Wanted';
    include 'header.php';
?>
<!--
    Name: Mark Hitchcock
    DATE: 10/18/2013
    URL: wewebtrade.com/view/trades.php 
-->
<section class="content outline">
    <!--<h2>Title</h2>
    <p>Here is some content.</p>-->
    <?php
        include 'includes/advanced_search.php';
    ?>
    <div class='item_page'>
    <img src="images/item_crf50.png" width="200" height="200" alt="Featured Item" />
    <img src="images/item_kayak.jpg" width="200" height="200" alt="Featured Item" />

    </div>
    <input class="button" type="button" name="back" value="back" />
    More 
    <input class="button" type="button" name="forward" value="forward" />
</section>
<div class="clear"></div>
<?php
    include 'footer.php';
?>

    
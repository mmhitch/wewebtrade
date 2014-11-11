<?php
    $page_title = 'We Web Trade | Home Page';
    include 'header.php';
?>
<!--
    Name: Mark Hitchcock
    Date: October 18, 2013
    URL: wewebtrade.com/view/home.php
-->

<section class="content outline">
    <!--<h2>Title</h2>
    <p>Here is some content.</p>-->
    <?php
        include 'includes/advanced_search.php';
    ?>

    <h1 id='feature'><a  href='create_profile_form.php'>Register</a> for free and trade.</h1>

    <img id='feature' class='shadow' src="images/trade_featured_image.png" width="575" height="200" alt="Featured Item" /><br />
    <input class="button animated animated.hinge wiggle" type="button" name="back" value="back" />
    More Featured Items
    <input class="button animated animated.hinge wiggle" type="button" name="forward" value="forward" />
    
    <!--<div class='buttons animated animated.hinge wiggle'>
        <a href='' >Wiggle</a>More Featured Items <a href=''> Wiggle</a>
    </div>-->
        
</section>
<div class="clear"></div>
<?php
    include 'footer.php';
?>

    
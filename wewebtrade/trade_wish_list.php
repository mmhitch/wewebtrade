<?php
    session_start();
    $alumni_id = $_SESSION['alumni_id'];
    //echo "<br /> alumni id is " . $alumni_id . " this should be the session value";
    
    $page_title = 'We Web Trade | Wish List';
    include 'header.php';
?>
<!--
    Name: Mark Hitchcock
    DATE: 10/18/2013
    URL: wewebtrade.com/view/trade_wish_list.php
-->
<section class="content outline">
    <!--<h2>Title</h2>
    <p>Here is some content.</p>-->
    <?php
        include 'includes/advanced_search.php';
        include_once 'includes/db_functions.php';
        
        if (isset($alumni_id)) {
            $wish_list_name = getWishListName($alumni_id);
            
            
            if(!isset($wish_list_name)){ ?>
                <h2>Create your Wishlist</h2><br />
                <form action='index.php?action=nameWishList' method='post'>
                    <label>Wish List Name:</label>
                    <input class='search' type='text' name='description' /><br />
                    <input type="submit" value="Create Wish List" />
                </form>
        <?php        //echo "Create A Wish List"; //move form into here
            } else {
                echo $wish_list_name;
            }
        } else {
         ?>
         <p><a href="http://www.wewebtrade.com/create_profile_form.php">Register</a> to create a profile or <br>
         <a href="http://www.wewebtrade.com/index.php?action=login">Login</a> to create or add to your wishlist.</p>
         
        <?php
        }
        ?>
    
    <?php
        include 'includes/wish_list.php';
    ?>
</section>
<div class="clear"></div>
<?php
    include_once 'footer.php';
?>

    
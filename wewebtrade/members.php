<?php
    session_start();
    $alumni_id = $_SESSION['alumni_id'];
    
    //echo "<br /> alumni id is " . $alumni_id . " this should be the session value";
    
    $page_title = 'We Web Trade | Members';
    include 'header.php';
    include_once 'includes/db_functions.php';
?>
<!--
    Name: Mark Hitchcock
    DATE: 10/18/2013
    URL: wewebtrade.com/view/members.php
-->

<section class="content outline">
    <?php
        include 'includes/advanced_search.php';

        //html for <div class='right_side'> & <aside class='aside_right'>
        include 'includes/myItemsLH.php';
        
        //html for <div class='right_side'> & <aside class='aside_right'>
        include 'includes/wishlistItemsRH.php'
    ?>
<!--</section>

<section  id='content_border'>--> 

    <!--<div class='left_side'>
        <aside class='aside_left'>
            <h3>My Items</h3>
            <ul>
                <li><a href='item_description.php'>CRF 50</a></li>
                <li><a href='#'>Rock Climbing Shoes</a></li>
                <li><a href='#'>Electric Dog Fence</a></li>
                <li><a href='#'>Item 4</a></li>
            </ul>
        </aside>
    </div>
    
    <div class='right_side'>
        <aside class='aside_right'>
            <h3>Matched Items</h3>
            <ul>
                <li><a href='trades.php'>Kayak</a></li>
                <li><a href='#'>Item 2</a></li>
                <li><a href='#'>Item 3</a></li>
                <li><a href='#'>Item 4</a></li>
            </ul>
        </aside>
    </div>-->
    
    <section class='page_content'>
        
        <?php
        //echo "test";
        include_once 'includes/db_functions.php';
        //showProfileItems(12);
        
        $profile = showMemberProfiles();       //showProfile();
        //$profile = showProfile($alumni_id);
        
      //echo "test2";
        foreach($profile as $row2){
         
         //echo "<h2>Member:" .$row2['first_name'] . '  ' . $row2['last_name']. "</h2>";
         //
         //   if($row2['profile'] == NULL){
         //      echo "This user hasn't writen their profile yet";
         //   } else {
         //      echo "<p>" .$row2['profile']. "</p>";
         //   }
         ?>
          
        
            <div class='members'>
                <!--<img class='shadow' src="images/profile_mark.png" width="100" height="100" alt="Profile Pic" />-->
                <?php
                if (!empty($row2['profile_pic']) && $row2['profile_pic'] != "/images/profile/") { 
                    echo "<img width='100px' src='http://wewebtrade.com" . $row2['profile_pic'] . "' />";
                } else {
                    echo "<img class='shadow' src='http://wewebtrade.com/images/profile/profile.png' width='100' height='100' alt='Profile Pic' />";
                }
                ?>
                <h4>Member: <?php echo $row2['first_name'] . '  ' . $row2['last_name']; ?></h4>
                <p><h1><a class='cta' href="#">Users Review</a></h1></p>
                <p>Profile Desctiption:</p>
                <p><?php echo $row2['profile']; ?></p>
                <a class='left' href='view_member_profile.php?user=<?php echo $row2['client_id']; ?>#wishlist'>See My Wish List</a>
                <a class='right' href='view_member_profile.php?user=<?php echo $row2['client_id']; ?>'>See My Items</a>
            </div>
            <div class="clear"></div>
        <?php
        }
        ?>
        
        
        
        
        <!--<div class='members'>
            <img class='shadow' src="images/profile_megawolfy.png" width="100" height="100" alt="Profile Pic" />
            <h4>Member: Megamind</h4>
            
            <p><h1><a class='cta3' href="#">Users Review</a></h1></p>
            <p>Profile Desctiption:</p>
            <p >Hollo, I am a changed man.  I was previously a super-villain but am now a superhero.  I enjoy long walks on the beach and inventing mind blowing machines that are out of this world.
            My rating does not reflect my new behavior as a Superhero.  I am interested in <mark>world domination</mark>, <mark>Science</mark> and <mark>Activities</mark>.</p>
            <a class='left' href='trade_wish_list.php'>See My Wish List</a>
            <a class='right' href=''>See My Items</a>
        </div>
        
        <div class="clear"></div>
        <div class='members'>
            <img class='shadow' src="images/profile_christine.png" width="100" height="100" alt="Profile Pic" />
            <h4>Member: Trader Christin</h4>
           
            <p><h1><a class='cta' href="#">Users Review</a></h1></p>
             <p>Profile Desctiption:</p>
            <p >Profile Desctiption:  My stuff may be a little smashed up but it is still good.
            I am interested in <mark>Toys</mark>, <mark>Science</mark> and <mark>Activities</mark>.
            I have a lot of hand me down clothes to trade from when I was 2.</p>
            <a class='left' href='trade_wish_list.php'>See My Wish List</a>
            <a class='right' href=''>See My Items</a>
        </div>
        <div class="clear"></div>
        <div class='members'>
         
            <img class='shadow' src="images/profile_jayden.png" width="100" height="100" alt="Profile Pic" />
            <h4>Member: Incredible Hulk</h4>
            <p><h1><a class='cta' href="#">Users Review</a></h1></p>
            <p>Profile Desctiption:</p>
            
            <p>My stuff may be a little smashed up but it is still good.
            I am interested in <mark>Toys</mark>, <mark>Science</mark> and <mark>Activities</mark>.
            I have a lot of hand me down clothes to trade from when I was 2.</p>
            <a class='left' href='trade_wish_list.php'>See My Wish List</a>
            <a class='right' href=''>See My Items</a>
        </div>-->
        
    </section>
    <!--<aside class='aside_left'>Hello</aside>
    S
    <aside class='aside_right'>Hello</aside>-->
    <!--<aside class='right_side'>Hello</aside>-->
</section>


<div class="clear"></div>

<?php
    include 'footer.php';
?>

    
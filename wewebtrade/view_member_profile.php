<?php
    //session_start();
    //$alumni_id = $_SESSION['alumni_id'];
    //echo "<br /> alumni id is " . $alumni_id . " this should be the session value";
    if (isset($_GET['user'])){
        $alumni_id = $_GET['user'];
        //$alumni_id = 13;
    }
    $page_title = 'We Web Trade | Profile ';
    include 'header.php';
    include_once 'includes/db_functions.php';
?>
<!--
    Name: Mark Hitchcock
    Date: February 17th 2013
    URL: ned.highline.edu/~mmhitch/202/assignments/index.php 
-->
<section class="content outline">
    <!--<h2>Title</h2>
    <p>Here is some content.</p>-->
    <?php
        include 'includes/advanced_search.php';
    ?>
    <div class='left_side'>
        
    </div>
    <?php
      //include 'includes/wishlistItemsRH.php'
    ?>
    <div class='profile'>
        <!--<img class='shadow' src="images/profile_mark.png" width="100" height="100" alt="Profile Pic" />-->
        <!--<p><a class='cta' href="#">Users Review</a></p>-->
        
        <?php
         include_once 'includes/db_functions.php';
         if(isset($alumni_id)){
            //showProfile($alumni_id);
            
           
            //$my_wish_list = getMyWishListItems($alumni_id);
            //
            //foreach($my_wish_list as $row3) {
            //   echo $row3['subcategory'] . " " . $row3['wish_item_detail'] . "<br />";
            //}
            $profile = showProfile($alumni_id);
            //echo "test2";
            foreach($profile as $row2){
                
                if (!empty($row2['profile_pic']) && $row2['profile_pic'] != "/images/profile/") { 
                    echo "<img width='100px' src='http://wewebtrade.com" . $row2['profile_pic'] . "' />";
                } else {
                    echo "<img class='shadow' src='http://wewebtrade.com/images/profile/profile.png' width='100' height='100' alt='Profile Pic' />";
                }
                echo "<p><a class='cta' href='#'>Users Review</a></p>";
                
                
            
            echo "<h2>Member:" .$row2['first_name'] . '  ' . $row2['last_name']. "</h2>";
            
               if($row2['profile'] == NULL) {
                  echo "This user hasn't writen their profile yet";
               } else {
                  echo "<p>" .$row2['profile']. "</p>";
               }
            }
         } else {
         ?>
         <p class='profile_desc'>Profile description:  About a paragraph, descripe the type of items you have.  Type of items you may be interested in. </p>
        <?php
        }
        showProfileItems($alumni_id);
        ?>
        <style>
	  #subs table, th, tr, td{
		border: 1px ridge black;
      text-align: center;
	  }
	  th {
		font-weight: bolder;
	  }
     th, td {
      margin: 15px;
     }
	 </style>
        <center>
        <h2><b><a name="wishlist">My Wish List</a></b></h2>
        </center>
    <table id="subs" width="100%" border="5" cellpadding="5">
	  <tr>
		<th>Category</th>
		<th>Subcategory</th>
		<th>Description</th>
	  </tr>
	  

	  
    <?php
		  $my_wish_list = getMyWishListItems($alumni_id);
       
        foreach($my_wish_list as $row) {
            echo "<tr><td>" . $row['category'] . "</td><td>" . $row['subcategory'] . "</td><td>" . $row['wish_item_detail'] . "</td></tr>";
        }
		  ?>
		  
	 </table>
	 <br /><br />
        
        
        
        
        
    
    <div class="clear"></div>
    
    <!--<p class='profile_desc'>Profile description:  About a paragraph, descripe the type of items you have.  Type of items you may be interested in. </p>-->
    <!--<div class='profile'>
        <img class='shadow' src="images/item_rock_shoes.png" width="120" height="120" alt="Profile Pic" />
        <h2>Item Desctiption:</h2>
        <p>Rock Climbing Shoes size 9.<br /> <h4 class='right'><a href='#'>See Item details.</a></h4></p>
    </div>
    <div class="clear"></div>-->
    <!--<div class='profile'>
        <img class='shadow' src="images/item_elec_dog_fence.png" width="120" height="120" alt="Profile Pic" />
        <h2>Item Desctiption:</h2>
        <p>Electric dog fence. <br /> <h4 class='right'><a href='#'>See Item details.</a></h4></p>
        <p>-->
        
        <!--</p>
    </div>
    <div class="clear"></div>-->
<!--      <div class='profile'>
          <img class='shadow' src="images/item_crf50.png" width="120" height="120" alt="Profile Pic" />
          <h4>Item Desctiption:</h4>
          <p>Honda CRF 50 mini pit bike.<br /> <h4 class='right'><a href='item_description.php'>See Item details.</a></h4> </p>
          <p>
          <?php
          //include_once 'includes/db_functions.php';
          //showProfileItems(12);
          ?>
          </p>
      </div>-->
    </div>
</section>
<div class="clear"></div>
<?php
    include 'footer.php';
?>

    
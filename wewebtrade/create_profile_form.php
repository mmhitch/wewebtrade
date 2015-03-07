<?php
    session_start();
    $alumni_id = $_SESSION['alumni_id'];
    $page_title = 'We Web Trade | Create Profile';
    include_once 'header.php';
?>
<!--
    Name: Mark Hitchcock
    Date: 10/18/2013
    URL: wewebtrade.com/view/index.php 
-->
<section class="registration outline">
    <!--<h2>Title</h2>
    <p>Here is some content.</p>-->
    <?php
        include_once 'includes/advanced_search.php';
        
        
        
        if (isset($alumni_id)) {
            //echo "You are already logged in.";
            echo '<center><p>Welcome ' . ucwords($current_user) .  '!</p>';
		
        //echo 'This is the current client id ' . $alumni_id . ' for ' . ucwords($current_user);
		  
		  echo '<p><center>Do you want to:</center></p>';
		  ?>
		  <br />
		  <center>
		  <a href="http://wewebtrade.com/member_profile.php"><img class="shadow" title="See your profile?" src="http://wewebtrade.com/images/ProfileIcon.jpg" /></a>
		  <a href="http://wewebtrade.com/add_my_item.php"><img class="shadow" title="Add your item?" src="http://wewebtrade.com/images/ForTradeIcon.jpg" /></a>
		  <a href="http://wewebtrade.com/trade_wish_list.php"><img class="shadow" title="Modify your wishlist?" src="http://wewebtrade.com/images/WishListIcon.jpg" /></a>
		  </center>
        <?php    
        } else {
            //include_once 'includes/login.php';
            
            include 'includes/arrays.php';
            ?>
             <fieldset id='reg_form' >
             <legend>Registration Form</legend>
             <form class='search' id='reg_form' action='index.php?action=process' method='post' enctype="multipart/form-data">
                
                <label for='first_name'>First Name:
                <input id='first_name' class='search' type='text' name='first_name' required/></label><br />
                
                <label for='last_name'>Last Name:</label>
                <input id='last_name' class='search' type='text' name='last_name' required/><br /><br />
                
                <label for='email'>Email:</label>
                <input id='email' class='search' type='email' name='email' required /><br />
                
                <label for='phone'>Phone:</label>
                <input id='phone' class='search' type='tel' name='phone' /><br />
                
                <label for='user'>User Name:</label>
                <input id='user' class='search' type='text' name='user' required /><br />
                
                <label for='password'>Password:</label>
                <input id='password' class='search' type='password' name='password' required /><br />
                
                <label for='confirm'>Confirm Password:</label>
                <input id='confirm' class='search' type='password' name='confirm' required /><br /><br />
                
                <label for='address'>Address:</label>
                <input id='address' class='search' type='address' name='address' required /><br />
                
                <label for='city'>City:</label>
                <input id='city' class='search' type='text' name='city' required />
                
                <label for='state'>State:</label>
                <!-- Dropdown boxes for state -->
                    <select name="state" size='1'>
                    <?php
                      //SELECT DROPDOWN BOXES
                        foreach($states as $key => $state):?>
                        <option  value="<?php echo $state ?>" <?php
                        if(!empty($_POST['state'])) {
                            echo "selected='selected'";
                        }?>
                        ><?php echo $state;?></option>
                      <?php endforeach; ?>
                    </select>
                <!-- End Dropdown boxes for state -->     
                <label for='zip'>Zip:</label>
                <input id='zip' class='search' type='text' name='zip' required /><br /><br />
                
                
                <!--<label>Permission to make profile public</label>
                <input class='search' type='checkbox' name='public' /><br /><br />
                
                <label>Gender<br />-->
             <?php
                //foreach ($genders as $gender) {
                   //echo "<input type='radio' name='gender' value='$gender'/>$gender<br />";
               // }
             ?>
                <!--</label><br /><br />-->
                
                <!-- Dropdown boxes for category -->
                     <!--<select name="category">-->
                     <?php
                       //SELECT DROPDOWN BOXES
                       //foreach($categorys as $key => $category):?>
                         <!--<option  value="<?php //echo $key ?>" <?php
                         //if(!empty($_POST['category'])) {
                            // echo "selected='selected'";
                         //}?>
                         ><?php //echo $category;?></option>
                       <?php //endforeach; ?>
                     </select><br /><br />-->
                
                <!-- Dropdown boxes for category -->
                     <!--<select name="sub_category">
                     <?php
                       //SELECT DROPDOWN BOXES
                       //foreach($sub_categorys as $key => $category):?>
                         <option  value="<?php //echo $key ?>" <?php
                         //if(!empty($_POST['sub_category'])
                            //&& $_POST['sub_category'] == $year) {
                            // echo "selected='selected'";
                         //}?>
                         ><?php //echo $category;?></option>
                       <?php //endforeach; ?>
                     </select><br /><br />-->
                
                
                <label for='profile'>Profile Description:</label><br />
                <textarea id='profile' class='search' name='profile' cols='40' rows='5'></textarea><br /><br />
                
                <label for="pic">Upload profile picture:</label>
                <input id='pic' class='search' type="file" name="pic" multiple /><br /><br />
                
                <input type='submit' name='submit' value='Create Profile' />
             </form>
             </fieldset>
    <?php
        }
    ?>

</section>
<!--<div class="clear"></div>-->
<?php
    include_once 'footer.php';
?>

    
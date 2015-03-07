<?php
    session_start();
    $alumni_id = $_SESSION['alumni_id'];
    $page_title = 'We Web Trade | Edit Profile';
    include_once 'header.php';
        include_once 'includes/db_functions.php';
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
        include 'includes/arrays.php';
        $result = showProfile($alumni_id);
        foreach($result as $row){
        
        ?>
             <fieldset id='reg_form' >
             <legend>Registration Form</legend>
             <form class='search' id='reg_form' action='index.php?action=edit' method='post' enctype="multipart/form-data">
                
                <label for='first_name'>First Name:
                <input id='first_name' class='search' type='text' name='first_name' value="<?php echo $row['first_name']; ?>" required/></label>
                
                <label for='last_name'>Last Name:</label>
                <input id='last_name' class='search' type='text' name='last_name' value="<?php echo $row['last_name']; ?>" required/><br /><br />
                
                <label for='email'>Email:</label>
                <input id='email' class='search' type='email' name='email' value="<?php echo $row['email']; ?>" required />
                
                <label for='phone'>Phone:</label>
                <input id='phone' class='search' type='tel' name='phone' value="<?php echo $row['phone']; ?>"/><br />
                
                <!--<label for='user'>User Name:</label>
                <input id='user' class='search' type='text' name='user' value="<?php echo $row['username']; ?>" required /><br />
                
                <label for='password'>Password:</label>
                <input id='password' class='search' type='password' name='password' required /><br />
                
                <label for='confirm'>Confirm Password:</label>
                <input id='confirm' class='search' type='password' name='confirm' required /><br /><br />-->
                
                <label for='address'>Address:</label>
                <input id='address' class='search' type='address' name='address' value="<?php echo $row['address']; ?>" required /><br />
                
                <label for='city'>City:</label>
                <input id='city' class='search' type='text' name='city' value="<?php echo $row['city']; ?>" required />
                
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
                <input id='zip' class='search' type='text' name='zip' value="<?php echo $row['zip']; ?>" required /><br /><br />

                <label for='profile'>Profile Description:</label><br />
                <textarea id='profile' class='search' name='profile' cols='40' rows='5'><?php echo $row['profile']; ?></textarea><br /><br />
                
                <label for="pic">Upload profile picture:</label>
                <input id='pic' class='search' type="file" name="pic" multiple value="<?php echo $row['profile_pic']; ?>"/><br /><br />
                
                <input type='submit' name='submit' value='Edit Profile' />
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

    
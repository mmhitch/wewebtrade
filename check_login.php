<?php
    ob_start();
    session_start ();    
?>
<?php
    include 'header.php';
?>
<section class='content outline'>
<?php
    //include functions with db connection
    include_once 'includes/db_functions.php';
	 
    // username and password sent from form
    if (ctype_alnum($_POST['username'])) {
        $user_name = $_POST['username'];
    }
    
//    $password = clean_password($_POST['password']);		//This will need some work or get rid of this function.
	$password = $_POST['password']; 
	  
    //define the query
    $sql = "SELECT * FROM client WHERE username='$user_name'
            AND password='$password'";
    
    //execute the query
    $result = $dbh->query($sql);
    
    //process the result
    foreach ($result as $row) {
        $row['client_id'];
    }
    $rows_returned = count($row['client_id']);
    
	 $current_user = $row['first_name'];
    $alumni_id = $row['client_id'];
    $_SESSION['alumni_id'] = $alumni_id;
    session_regenerate_id();
    
    // If result matched username and password, table row must be 1 row
    // If client logs in
    if ($rows_returned == 1) {
        
        //USER REQUESTS TO BE REMEMBERED
        $remebmer = $_POST['remebmer'];
        if (!empty($remebmer)) {
            
            $encripted_id = $alumni_id; //encryptAlumni($alumni_id);
            
            //set cookie for 1 hour
            //setcookie('megamind',$encripted_id, time()+60*60);
            setcookie('megamind',$alumni_id, time()+60*60);
				
            //echo $remebmer . ' value' ;	//this is a test to see checkbox works
        }
        echo '<p>Welcome back ' . ucwords($current_user) .  '!</p>';
		
        //echo 'This is the current client id ' . $alumni_id . ' for ' . ucwords($current_user);
		  
		  echo 'Do you want to:';
		  ?>
		  <br />
		  <center>
		  <a href="http://wewebtrade.com/member_profile.php"><img class="shadow" title="See your profile?" src="http://wewebtrade.com/images/ProfileIcon.jpg" /></a>
		  <a href="http://wewebtrade.com/add_my_item.php"><img class="shadow" title="Add your item?" src="http://wewebtrade.com/images/ForTradeIcon.jpg" /></a>
		  <a href="http://wewebtrade.com/trade_wish_list.php"><img class="shadow" title="Modify your wishlist?" src="http://wewebtrade.com/images/WishListIcon.jpg" /></a>
		  </center>
		  <?php
        
    // If admin logs in
    } elseif ($rows_returned == 0 AND $_POST['username'] == 'admin' AND
              $_POST['password'] == 'admin') {
        //ADMIN REQUESTS TO BE REMEMBERED
        $remebmer = $_POST['remebmer'];
        if (!empty($remebmer)) {
            
            //$encripted_alumni = encryptAlumni('admin');
            //setcookie('megamind', $encripted_alumni, time()+60*60);
            
            //set cookie for 1 hour 
            setcookie('megamind', 'admin', time()+60*60);
            //echo $remebmer . ' value' ;  // test to see if cookie is on 
        }

        echo '<p>Login Success for Admin!</p><br />';
        $user = $_POST['username'];
        $_SESSION['admin'] = $user;
        session_regenerate_id();

    } else {
		  
        echo 'Wrong Username or Password<br />';
		  echo "<a href='index.php?action=login'>Try Again</a><br />";
        echo "<a href='forgot_password.php'>Forgot password - Make a link</a>";
       
        
    }
    ?>
	 </section>
    <!-- Mark Hitchcock
    6/21/2014
    http://wewebtrade.com/check_login.php
    Login  success page -->
<?php
	 include_once 'footer.php';
	 ob_end_flush();
?>

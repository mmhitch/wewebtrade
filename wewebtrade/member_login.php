<?php
    ob_start();
    session_start();
    $alumni_id = $_SESSION['alumni_id'];
	 
	  //$_SESSION['alumni_id'] = $alumni_id;
	  
    $user = $_SESSION['admin'];
    include_once 'check_cookie.php';
?>
<?php
	 //html needs to come after session_start()
	include 'header.php';
?>
<!-- Mark Hitchcock 
    6/21/2014
    http://wewebtrade.com/main_login.php
    Login page -->
<section class="content outline">
<?php

if ($user == 'admin' || isset($alumni_id)) {
        echo "You have already logged in.<br />";
   include ('logout.php');
} else {
?>

<h3 align="center"><a href='create_profile_form.php'>Create Account</a> or login!</h3><br />
<fieldset id='main_login'>
	 <center>
	 <form id="updateform" name="form1" method="post" action="check_login.php">
		  <label>User Name:</label>
		  <input name="username" type="text" id="username"><br /><br />
		  <label>Password:&nbsp;</label>
		  <input name="password" type="password" id="password"><br /><br />
		  <lable>Remember me: 
		  <input type='checkbox' name='remebmer' ></lable><br /><br />
		  <input type="submit" name="Submit" value="Login">
		  <a href='forgot_password.php'>&nbsp; Forgot password</a>
	 </form>
	 </center>
</fieldset>
<?php
	 // curly bracket is related to else statement at top
    echo '<p>Contact Website Administrator: mark@wewebuild.com</p>';
}
?>
</section> 
<?php
	 include_once 'footer.php';
    ob_end_flush();
?>


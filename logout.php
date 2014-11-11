<?php
    if (isset($_POST['logout'])) {
    session_destroy();
 
   $expire = strtotime('-1 year');
   setcookie('megamind', '', $expire);
    
    //header('Location: destroy_cookie.php');
    echo "You have logged out successfully.<br />";
    }
?>

<form method="post" action=''>
    <input type='submit' name='logout' value='Log Out'>
</form>
<?php
require_once 'includes/db_functions.php';
   session_start();
   //echo "Session just for admin stores user which is ";
   //echo (!empty($user))?  $user :  "null";
   
   //echo "<br /> alumni id is " . $alumni_id . " this should be the session value";
   
   if (isset($_COOKIE['megamind']) && $_COOKIE['megamind'] == 'admin') {
      echo $_COOKIE['megamind'];
      $user = $_COOKIE['megamind'];
      
      //testing decription of cookie as admin
      $_SESSION['alumni_id'] = $_COOKIE['megamind'];//decryptAdmin($_COOKIE['megamind']);
      $_SESSION['admin'] = $_COOKIE['megamind'];
      
   } elseif (isset($_COOKIE['megamind']) && $_COOKIE['megamind'] != 'admin' ) {
      
      //$alumni_id = decryptAlumni($_COOKIE['megamind']);
      //$_SESSION['alumni_id'] = $_COOKIE['megamind'];
      $_SESSION['alumni_id'] = $_COOKIE['megamind'];  //decryptAlumni($_COOKIE['megamind']);
   }
   
?>
<?php
//print '<pre>';
//print_r ($_COOKIE);
//print '</pre>';
?>



<?php
   /*
    *Name: Mark Hitchcock
    *DATE: 10/18/2013
    *URL: wewebtrade.com/view/header.php
    *Header for We Web Trade website
    */
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <title><?php echo $page_title; ?></title>
            <link rel="stylesheet" href="css/styles.css">
            <link rel="stylesheet" href="css/dd_tabs.css">
                
            <!-- [if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
    </head>
    <body>
        <div id="page">
            <header>
                <!-- header logo image -->
                <img src="images/trade_header_logo.png" class="shadow" width="600" height="120" alt="header image"/>
                
                <!-- social button imgages -->
                <a href='create_profile_form.php' ><img src="images/profile.png" class="shadow" width="40" height="40" alt="social button" /></a>
                <a href=''><img src="images/twitter.png" class="shadow"  width="40" height="40" alt="social button" /></a>
                <a href=''><img src="images/contact.png" class="shadow" width="40" height="40" alt="social button" /></a>
                <a href=''><img src="images/facebook.png" class="shadow" width="40" height="40" alt="social button" /></a>
                
                <form method="get" action="#">
                    <input class="search_tool" type="search"  name="search" placeholder="Search"  /><br />
                </form>    
                    <a href="./index.php?action=login"><input class="search_tool" type='button' name='login' value='Members <?php if(isset($alumni_id)){ echo "Logout"; } else { echo "Login"; } ?>' /></a>
                
                <div class="clear"></div>
               <hgroup>
                    <h6></h6>
                  <!--<h1><a href="index.php">Dropdown Navigation Bars with Borders</a></h1>-->
               </hgroup>
               
                <nav>
                    <ul id="main_menu">
                        <li><a href="home.php"  <?php echo stripos($_SERVER['PHP_SELF'], 'home' ) ? 'class="selected"' : ""; ?>>HOME</a>
                            <ul class="sub_menu">
                            </ul>
                        </li>
                        
                        <li><a href="items.php"  <?php echo stripos($_SERVER['PHP_SELF'], 'item' ) ? 'class="selected"' : ""; ?>>ITEMS</a>
                            <ul class="sub_menu">
                               <li><a href="item_description.php"  <?php echo stripos($_SERVER['PHP_SELF'], 'description' ) ? 'class="selected"' : ""; ?>>Item Description</a></li>
                               <li><a href="add_my_item.php"  <?php echo stripos($_SERVER['PHP_SELF'], 'add_my_item' ) ? 'class="selected"' : ""; ?>>Add My Item</a></li>
                               <li><a href="categories.php"  <?php echo stripos($_SERVER['PHP_SELF'], 'categories' ) ? 'class="selected"' : ""; ?>>Categories</a></li>
                            </ul>
                        </li>
                        <li><a href="members.php"  <?php echo stripos($_SERVER['PHP_SELF'], 'member' ) ? 'class="selected"' : ""; ?>>MEMBERS</a>
                            <ul class="sub_menu">
                               <li><a href="member_profile.php"  <?php echo stripos($_SERVER['PHP_SELF'], 'profile' ) ? 'class="selected"' : ""; ?>>Profile</a></li>
                               <li><a href="member_login.php"  <?php echo stripos($_SERVER['PHP_SELF'], 'login' ) ? 'class="selected"' : ""; ?>><?php if(isset($alumni_id)){ echo "Logout"; } else { echo "Login"; } ?></a></li>
                               <li><a href="create_profile_form.php"  <?php echo stripos($_SERVER['PHP_SELF'], 'form' ) ? 'class="selected"' : ""; ?>>Create Account</a></li>
                            </ul>
                        </li>
                        <li><a href="trades.php" <?php echo stripos($_SERVER['PHP_SELF'], 'trade' ) ? 'class="selected"' : ""; ?>>TRADES</a>
                            <ul class="sub_menu">
                               <li><a href="trade_wish_list.php" <?php echo stripos($_SERVER['PHP_SELF'], 'wish_list' ) ? 'class="selected"' : ""; ?>>My Wish List</a></li>
                            </ul>
                        </li>
                        <li><a href="about_us.php" <?php echo stripos($_SERVER['PHP_SELF'], 'about_us' ) ? 'class="selected"' : ""; ?>>ABOUT US</a>
                            <ul class="sub_menu">
                            </ul>
                        </li>
                        <li><a href="contact_us.php" <?php echo stripos($_SERVER['PHP_SELF'], 'contact_us' ) ? 'class="selected"' : ""; ?>>CONTACT US</a>
                            <ul class="sub_menu">
                            </ul>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </nav>
            </header>
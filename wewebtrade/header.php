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
            <?php
            echo $img_meta;
            echo $og_meta_title;
            ?>
            <!--Responsive CSS-->
            <meta name="viewport" content="width=device-width,
                                                 maximum-scale=1.0,
                                                 minimum-scale=1.0,
                                                 initial-scale=1.0" />
            <!--<link rel="stylesheet" type="text/css" href="css/screen_styles.css" />
            <link rel="stylesheet" type="text/css" href="css/screen_layout_large.css" />
            <link rel="stylesheet" type="text/css" media="only screen and (min-width:50px) and (max-width:500px)" href="css/screen_layout_small.css"  />
            <link rel="stylesheet" type="text/css" media="only screen and (min-width:501px) and (max-width:800px)" href="css/screen_layout_medium.css"  />
            <link rel="stylesheet" media="screen" href="css/form_styles.css" >-->
            <!--END Responsive CSS
        
            <!--ORIGINAL CSS-->
            <link rel="stylesheet" href="css/styles.css">
            <link rel="stylesheet" href="css/dd_tabs.css">
            <!-- END ORIGINAL CSS-->
            <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
            <link rel="icon" href="/favicon.ico" type="image/x-icon">    
            
            <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
            <script src="//code.jquery.com/jquery-1.10.2.js"></script>
            <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
            <link rel="stylesheet" href="/resources/demos/style.css">
            <script>
            $(function() {
              $( "#menu" ).menu();
            });
            </script>
            <style>
            .ui-menu { width: 150px; }
            </style>    
                
            <!-- [if lt IE 9]>
                <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
              
                ga('create', 'UA-57246098-1', 'auto');
                ga('send', 'pageview');
            </script>
            <!-- Ajax for category test script -->
            <script>
                function category_filter(category) {
                    if(category==""){
                        document.getElementById("cat_id").innerHTML="Choose a Category";
                        return;
                    }
                    
                    if (window.XMLHttpRequest) {
                        //code for IE&+, Firefox, Chrome, Opera Safari
                        xmlhttp = new XMLHttpRequest();
                    } else {
                        //code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    
                    xmlhttp.onreadystatechange=function(){
                        if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                            document.getElementById("cat_id").innerHTML=xmlhttp.responseText;
                        }
                    }
                    
                    xmlhttp.open("GET", "get_cat_code_pdo.php?category="+category, true);
                    xmlhttp.send();
                }
            </script>
    </head>
    <body>
<!--FACEBOOK SHARE -->        
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- end FACEBOOK SHARE -->    

        <div id="page">
            <header>
                <!-- header logo image -->
                <img src="images/trade_header_logo.png" class="shadow" width="600" height="120" alt="header image"/>
                
                <!-- social button imgages -->
                <a href='create_profile_form.php' ><img src="images/profile.png" class="shadow" width="40" height="40" alt="social button" /></a>
                <a href='https://twitter.com/wewebtrade'><img src="images/twitter.png" class="shadow"  width="40" height="40" alt="social button" /></a>
                <a href='http://wewebtrade.com/contact_us.php'><img src="images/contact.png" class="shadow" width="40" height="40" alt="social button" /></a>
                <a href='https://www.facebook.com/wewebtrade'><img src="images/facebook.png" class="shadow" width="40" height="40" alt="social button" /></a>
                
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
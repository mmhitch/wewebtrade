<?php
    session_start();
    $alumni_id = $_SESSION['alumni_id'];


    //Get the desired action
    if(isset($_POST['action'])){
        $action = $_POST['action'];
    }
    else if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    else{
        $action = "display";
    }

    //Carry out the desired action
    switch($action){

        //Display the home page
        case "display":
            include 'home.php';
            break;
        case "process":
            
            include_once 'includes/db_functions.php';
            $user  = $_POST['user'];
            $password   = $_POST['password'];
            $first_name = $_POST['first_name'];
            $last_name  = $_POST['last_name'];
            $phone      = $_POST['phone'];
            $email      = $_POST['email'];
            $address    = $_POST['address'];
            $city       = $_POST['city'];
            $state      = $_POST['state'];
            $zip        = $_POST['zip'];
            $profile    = $_POST['profile'];
            
            //$pic = $_POST['pic'];
            
            //handle images
            $tmp_name = $_FILES['pic']['tmp_name'];
            $path = getcwd() . DIRECTORY_SEPARATOR . 'images/profile';
            $name = $path . DIRECTORY_SEPARATOR . $_FILES['pic']['name'];
            //echo 'temp name = ' . $tmp_name . '<br />';
            //echo 'path = ' .$path . '<br />';
            //echo $name . '<br />';
            // /home2/wewebbui/public_html/wewebtrade/images/items/seo_logo.png
            if (!isset($image)) {
              $image = $image_name = substr($name, 38);
              $success = move_uploaded_file($tmp_name, $name);
                //echo $success . '<br />';
                if ($success) {
                    //$upload_message = $name . ' has been uploaded.';
                    //echo $upload_message . '<br />';
                } else {
                    echo 'Error Loading image';
                }
            } else {
              $image       = NULL;  
            }
            
            //echo ' name is ' . $image_name . '<br />';
            
            //use this for image url
            //echo "<img src='http://wewebtrade.com" . $image_name . "' />";
            
            
            
            
            
            //<pre>
            //print_r($_POST);
            //</pre>
            registrerUser( $first_name, $last_name, $user, $password, $phone, $email, $address, $city, $state, $zip, $profile, $image);
            //echo "test2";
            include "member_profile.php";
            break;
        case "edit":
            
            include_once 'includes/db_functions.php';
            //$user  = $_POST['user'];
            //$password   = $_POST['password'];
            $first_name = $_POST['first_name'];
            $last_name  = $_POST['last_name'];
            $phone      = $_POST['phone'];
            $email      = $_POST['email'];
            $address    = $_POST['address'];
            $city       = $_POST['city'];
            $state      = $_POST['state'];
            $zip        = $_POST['zip'];
            $profile    = $_POST['profile'];
            
            //$pic = $_POST['pic'];
            
            //handle images
            $tmp_name = $_FILES['pic']['tmp_name'];
            $path = getcwd() . DIRECTORY_SEPARATOR . 'images/profile';
            $name = $path . DIRECTORY_SEPARATOR . $_FILES['pic']['name'];
            //echo 'temp name = ' . $tmp_name . '<br />';
            //echo 'path = ' .$path . '<br />';
            //echo $name . '<br />';
            // /home2/wewebbui/public_html/wewebtrade/images/items/seo_logo.png
            if (!isset($image)) {
              $image = $image_name = substr($name, 38);
              $success = move_uploaded_file($tmp_name, $name);
                //echo $success . '<br />';
                if ($success) {
                    //$upload_message = $name . ' has been uploaded.';
                    //echo $upload_message . '<br />';
                } else {
                    echo 'Error Loading image';
                }
            } else {
              $image       = NULL;  
            }
            
            //echo ' name is ' . $image_name . '<br />';
            
            //use this for image url
            //echo "<img src='http://wewebtrade.com" . $image_name . "' />";
            
            
            
            
            
            //<pre>
            //print_r($_POST);
            //</pre>
            editProfile($alumni_id, $first_name, $last_name, $user, $password, $phone, $email, $address, $city, $state, $zip, $profile, $image);
            //echo "test2";
            include "member_profile.php";
            break;
        case "nameWishList":
            include_once 'includes/db_functions.php';
            $wish_list_name = $_POST['description'];
            makeWishList($wish_list_name, $alumni_id);
            include 'trade_wish_list.php';
            break;
        case "advanced":
            include_once 'includes/db_functions.php';
            $city = $_POST['city'];
            $state = $_POST['state'];
            $distance = $_POST['distance'];
            $year = $_POST['year'];
            $value = $_POST['value'];
            $keyword = $_POST['keyword'];
            
            //makeWishList($wish_list_name, $alumni_id);
            include_once 'advanced_search_result.php';
            break;
        
        case "addItem":
            include_once 'includes/db_functions.php';
            $item_id = NULL;
            $subcategory = $_POST['sub_category'];
            $description = $_POST['description'];
            //$image       = NULL;
            $value       = $_POST['value'];
            $status      = "USED";
            $client_id   = $alumni_id;
            //$pic = $_POST['pic'];
            
            //handle images
            $tmp_name = $_FILES['pic']['tmp_name'];
            $path = getcwd() . DIRECTORY_SEPARATOR . 'images/items';
            $name = $path . DIRECTORY_SEPARATOR . $_FILES['pic']['name'];
            //echo 'temp name = ' . $tmp_name . '<br />';
            //echo 'path = ' .$path . '<br />';
            //echo $name . '<br />';
            // /home2/wewebbui/public_html/wewebtrade/images/items/seo_logo.png
            if (!isset($image)) {
                $image = $image_name = substr($name, 38);
                $success = move_uploaded_file($tmp_name, $name);
                //echo $success . '<br />';
                if ($success) {
                    //$upload_message = $name . ' has been uploaded.';
                    //echo $upload_message . '<br />';
                } else {
                    //echo 'Error Loading image';
                    $image       = NULL; 
                }
            } else {
              $image       = NULL;  
            }
            
            //echo ' name is ' . $image_name . '<br />';
            
            //use this for image url
            //echo "<img src='http://wewebtrade.com" . $image_name . "' />";
            //<pre>
            //print_r($_POST);
            //</pre>
            //category=Category+1&sub_category=sub_category_3&name=Kw&model=KE&quantity=1&year=1920&value=494&expiration=2014-08-07&description=fdg
            //addTradeItem(NULL, "MX", "2003 Suzuki", NULL, 4999, "used", 10);
            addTradeItem(NULL, $subcategory, $description, $image, $value, $status, $client_id);
            //echo "test2";
            include "member_profile.php";
            break;
        case "addWishItem":
            include_once 'includes/db_functions.php';
            $wishlist_id = getWishList($alumni_id);
            $subcategory = $_POST['subcategory'];
            $description = $_POST['wish_item_detail'];
            addWishItem($wishlist_id, $subcategory, $description);
            include 'trade_wish_list.php';
            break;
        case "delete":
            include_once 'includes/db_functions.php';
            $wishlist_id = $_GET['wishlist_id'];
            $subcategory = $_GET['subcategory'];
            deleteWishlistItem($wishlist_id, $subcategory);
            include 'trade_wish_list.php';
            //$city = $_POST['city'];
            //$state = $_POST['state'];
            break;

        //Process from Registration form
        case "register":
            //registerUser()
            include '#';
            break;
        case "login":
            //registerUser()
            include 'member_login.php';
            break;
        default:
            include 'items.php';
    }

?>
<?php
   //Mark Hitchcock
   // June 21, 2014
   //wewebtrade.com/includes/db_functions.php
   include_once 'db.php';

   function registrerUser($first_name, $last_name, $user_name, $password, $phone, $email, $address, $city, $state, $zip, $profile, $profile_pic)
   {
      global $dbh;
      
      //define statement to create user profile
      $sql = "INSERT INTO client VALUES (NULL, :first_name,
                                               :last_name,
                                               :user_name,
                                               :password,                                               
                                               :phone,
                                               :email,
                                               :address,
                                               :city,
                                               :state,
                                               :zip,
                                               :date,
                                               :profile,
                                               :profile_pic)";
                                               
      //prepare
      $statement = $dbh->prepare($sql);
      
      //bind parameters
      $user_name  = $user_name;
      $password   = $password ;
      $first_name = $first_name;
      $last_name  = $last_name;
      $phone      = $phone;
      $email      = $email ;
      $address    = $address;
      $city       = $city;
      $state      = $state;
      $zip        = $zip;
      $date       = date('F d, Y');
      $profile    = $profile;
      $profile_pic    = $profile_pic;
      
      $statement->bindParam(':user_name', $user_name, PDO::PARAM_STR);
      $statement->bindParam(':password', $password, PDO::PARAM_STR);
      $statement->bindParam(':first_name', $first_name, PDO::PARAM_STR);
      $statement->bindParam(':last_name', $last_name, PDO::PARAM_STR);
      $statement->bindParam(':phone', $phone, PDO::PARAM_STR);
      $statement->bindParam(':email', $email, PDO::PARAM_STR);
      $statement->bindParam(':address', $address , PDO::PARAM_STR);
      $statement->bindParam(':city', $city, PDO::PARAM_STR);
      $statement->bindParam(':state', $state, PDO::PARAM_STR);
      $statement->bindParam(':zip', $zip, PDO::PARAM_STR);
      $statement->bindParam(':date', $date, PDO::PARAM_STR);
      $statement->bindParam(':profile', $profile, PDO::PARAM_STR);
      $statement->bindParam(':profile_pic', $profile_pic, PDO::PARAM_STR);
     
      //Execute
      $statement->execute();
      
      //Gets the primary key of alumni
      $last_id = $dbh->lastInsertId();
   }  //End registerUser
   
   //This function selects client profile details for client_id         
   function showProfile($client_id){ 
      
      global $dbh;
      
      //Define the query
      if(isset($client_id)){
         $sql = "SELECT * FROM client WHERE client_id =" . $client_id .";";
      } else {
         echo "<center><a href='http://wewebtrade.com/index.php?action=login'>Please login to continue</a></center>";
         //$sql = "SELECT * FROM client WHERE 1";
      }
      
      
      //query() returns the result
      $statement = $dbh->prepare($sql);
      
      //Execute statement
      $statement->execute();
      
      //process the result
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      //foreach($result as $row){
      //   
      //   echo "<h2>Member:" .$row['first_name'] . '  ' . $row['last_name']. "</h2>";
      //   
      //   if($row['profile'] == NULL){
      //      echo "This user hasn't writen their profile yet";
      //   } else {
      //      echo "<p>" .$row['profile']. "</p>";
      //   }
      //}
      return $result;
   }
   
   //This function selects client profile details for client_id         
   function showMemberProfiles($client_id){ 
      
      global $dbh;
      
      //Define the query
      //if(isset($client_id)){
        // $sql = "SELECT * FROM client WHERE client_id =" . $client_id .";";
      //} else {
        // echo "<center><a href='http://wewebtrade.com/index.php?action=login'>Please login to continue</a></center>";
         $sql = "SELECT * FROM client WHERE 1";
      //}
      
      
      //query() returns the result
      $statement = $dbh->prepare($sql);
      
      //Execute statement
      $statement->execute();
      
      //process the result
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);

      return $result;
   }
    
    //This function populates the wishlist table, auto populates wishlist_id, takes name and users client_id
    function makeWishList($wish_list_name, $client_id){
         
         global $dbh;
         
         //define statement to create wishlist      
         $sql = "INSERT INTO wishlist VALUES(NULL, :wishlist_name, :client_id);";
         
                  
         //prepare
         $statement = $dbh->prepare($sql);
         
         //assign function argument values
         $wish_list_name = $wish_list_name;  //validate
         $client_id = $client_id;   //validate
      
         //bind parameters
         $statement->bindParam(':wishlist_name', $wish_list_name, PDO::PARAM_STR);
         $statement->bindParam(':client_id', $client_id, PDO::PARAM_STR);
         
         //Execute
         $statement->execute();
         
    }
    
    //this function allows client to edit profile description and profile pic
    //$alumni_id, $first_name, $last_name, $user, $password, $phone, $email, $address, $city, $state, $zip, $profile, $image
    function editProfile($client_id, $first_name, $last_name, $user, $password, $phone, $email, $address, $city, $state, $zip, $profile, $image){
      global $dbh;
      
      //define statemente
      $sql = "UPDATE client SET profile = :profile, profile_pic = :pic WHERE client_id = " . $client_id;
      
      //prepare statent
      $statement = $dbh->prepare($sql);
      
      //bind parameters
      $profile = $profile;
      $pic = $image;
      $statement->bindParam(':profile', $profile, PDO::PARAM_STR);
      $statement->bindParam(':pic', $pic, PDO::PARAM_STR);
      
      //Execute
      $statement->execute();
      
    }
    
    //this function gets and returns wishlist_id for client_id
    function getWishList($client_id){
      
         global $dbh;
         
         //select statement for wishlist
         $sql = "SELECT * from wishlist WHERE client_id =" . $client_id;
         
         //***********************This needs to be finished ****************
         //execute the query
         $result = $dbh->query($sql);
         
         //process the result
         foreach ($result as $row) {
             $row['wishlist_id'];
         }
         
         return $row['wishlist_id'];
    }
    //this function gets and returns all wishlist items for client_id
    function getMyWishListItems($client_id){
      
         global $dbh;
         
         //select statement for wishlist
         $sql = "SELECT s.category, w.wishlist_name, wd.wishlist_id, wd.subcategory, wd.wish_item_detail
                 FROM wishlist w, wishlist_detail wd, subcategory s
                 WHERE w.wishlist_id = wd.wishlist_id AND s.subcategory = wd.subcategory
                 AND client_id =" . $client_id;
         
         //***********************This needs to be finished ****************
         //query() returns the result
         $statement = $dbh->prepare($sql);
         
         //Execute statement
         $statement->execute();
         
         //process the result
         $result = $statement->fetchAll(PDO::FETCH_ASSOC);
         
         return $result; 
    }
    
    //this function gets and returns wishlist_details for wishlist_id, existing items
    function getWishListDetails($wishlist_id){
      
      global $dbh;
      global $alumni_id;
      
      //select statement for wishlist
      $sql = "SELECT i.subcategory, i.description, i.item_id
              FROM items i, wishlist_detail w
              WHERE i.subcategory = w.subcategory
              AND wishlist_id =" . $wishlist_id . " AND client_id !=" . $alumni_id;
      
      //***********************This needs to be finished ****************
      //query() returns the result
      $statement = $dbh->prepare($sql);
      
      //Execute statement
      $statement->execute();
      
      //process the result
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      
      return $result;     
    }
    
    
    //this function gets and returns wishlist_name for client_id
    function getWishListName($client_id){
      
         global $dbh;
         
         //select statement for wishlist
         $sql = "SELECT * from wishlist WHERE client_id =" . $client_id;
         
         //execute the query
         $result = $dbh->query($sql);
         
         //process the result
         foreach ($result as $row) {
             $row['wishlist_name'];
         }
         
         return $row['wishlist_name'];
    }
    
    //This function populates the wishlist_detail table wishlist_id, subcategory, detail
    function addWishItem($wish_list_id, $subcategory, $wish_item_detail){
         
         global $dbh;
         
         //define statement to add wishlist item
         $sql = "INSERT INTO wishlist_detail VALUES (:wishlist_id, :subcategory, :wish_item_detail);";
         
                  
         //prepare
         $statement = $dbh->prepare($sql);
         
         //assign function argument values
         $wish_list_id = $wish_list_id;  //validate
         $subcategory = $subcategory;   //validate
         $wish_item_detail = $wish_item_detail; //validate
         
         //bind parameters
         $statement->bindParam(':wishlist_id', $wish_list_id, PDO::PARAM_INT);
         $statement->bindParam(':subcategory', $subcategory, PDO::PARAM_STR);
         $statement->bindParam(':wish_item_detail', $wish_item_detail, PDO::PARAM_STR);
         
         //Execute
         $statement->execute();
         
    }
    
    //This function adds users item available for trade
    function addTradeItem($item_id, $subcategory, $description, $image, $value, $status, $client_id){
      
      global $dbh;
      
      //define statement to add trade item
      $sql = "INSERT INTO items VALUES (:item_id, :subcategory, :description, :image, :value, :status, :client_id);";
      
      //prepare
      $statement = $dbh->prepare($sql);
      
      //assign function argument values
      $item_id = $item_id;
      $subcategory = $subcategory;  //validate
      $description = $description;  //validate
      $image = $image;              //validate
      $value = $value;              //validate
      $status = $status;            //validate  
      $client_id = $client_id;      //validate
         
      //bind parameters
      $statement->bindParam(':item_id', $item_id, PDO::PARAM_STR);
      $statement->bindParam(':subcategory', $subcategory, PDO::PARAM_STR);
      $statement->bindParam(':description', $description, PDO::PARAM_STR);
      $statement->bindParam(':image', $image, PDO::PARAM_LOB);
      $statement->bindParam(':value', $value, PDO::PARAM_INT);
      $statement->bindParam(':status', $status, PDO::PARAM_STR);
      $statement->bindParam(':client_id', $client_id, PDO::PARAM_INT);
      
      //Execute
      $statement->execute();
    }
    
    //This function selects all items for the entered client_id         
    function showProfileItems($client_id){
      
      global $dbh;
      
      //Define the query
      $sql = "SELECT * FROM items WHERE client_id =" . $client_id .";";
      
      //query() returns the result
      $statement = $dbh->prepare($sql);
      
      //Execute statement
      $statement->execute();
      
      //process the result
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      
      
      
      foreach($result as $row){
         if (empty($row['image'])) {
            $image = "images/items/image_not_available.jpg";
         } else {
            $image = $row['image'];
         }
        
         echo "<div class='profile'> <img class='shadow' src='" . $image . "' width='120' height='120' alt='Profile Pic' />     <h2>Item Desctiption:</h2>
        <p>" .$row['subcategory'] . " <br /> " . $row['description'] . "<h4 class='right'><a href='http://wewebtrade.com/item_description.php?item_id=" . $row['item_id'] . "'>See Item details.</a></h4></p>
    </div>
    <div class='clear'></div>";
      }
    }
    
   //This function gets category, subcategory and description of items belonging to client_id
   function getClientItems($client_id){
      
      global $dbh;
      
      //Define the query
      $sql = "SELECT s.category, i.subcategory, i.description, client_id, i.item_id
              FROM items i
              JOIN subcategory s ON i.subcategory = s.subcategory
              WHERE client_id =" . $client_id;
              
      //query() returns the result
      $statement = $dbh->prepare($sql);
      
      //Execute statement
      $statement->execute();
      
      //process the result
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      
      return $result;     
   }
   
   //This function gets item row details for item_id
   function getItemDetails($item_id){
      
      global $dbh;
      
      //Define the query
      $sql = "SELECT item_id, i.subcategory, i.description, i.image, i.value, i.status, i.client_id, s.category, c.first_name, c.last_name
              FROM items i, subcategory s, client c
              WHERE i.subcategory = s.subcategory
              AND i.client_id = c.client_id
              AND item_id =" . $item_id;
              
      //query() returns the result
      $statement = $dbh->prepare($sql);
      
      //Execute statement
      $statement->execute();
      
      //process the result
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      
      return $result;  
   }
   //This function gets all items
   function getAllItems(){
      
      global $dbh;
      
      //Define the query
      $sql = "SELECT *
              FROM items 
              WHERE 1";
              
      //query() returns the result
      $statement = $dbh->prepare($sql);
      
      //Execute statement
      $statement->execute();
      
      //process the result
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      
      return $result;  
   }
   
   //This function gets items of a specified subcategory
   function getSubcategoryItems($subcategory){
      
      global $dbh;
      
      //Define the query
      $sql = "SELECT *
              FROM items
              WHERE subcategory ='" . $subcategory . "';";
              
      //query() returns the result
      $statement = $dbh->prepare($sql);
      
      //Execute statement
      $statement->execute();
      
      //process the result
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      
      return $result;  
   }
   
   //This function gets all subcategory details
   function getSubcategory(){
      
      global $dbh;
      
      //Define the query
      $sql = "SELECT * 
              FROM  subcategory 
              WHERE 1 
              ORDER BY subcategory";
              
      //query() returns the result
      $statement = $dbh->prepare($sql);
      
      //Execute statement
      $statement->execute();
      
      //process the result
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      
      return $result;  
   }
   
   //This function deletes single wishlist item from wishlist
   //function deleteWishlistItem($wishlist_id, $subcategory){
   function deleteWishlistItem($wishlist_id, $subcategory){
      
      global $dbh;
      
      //Define the query
      $sql = "DELETE 
              FROM  wishlist_detail 
              WHERE wishlist_id = '" . $wishlist_id ."'
              AND subcategory = '" . $subcategory . "';";
              
      //query() returns the result
      $statement = $dbh->prepare($sql);
      
      //Execute statement
      $statement->execute();
      
      //process the result
      //$result = $statement->fetchAll(PDO::FETCH_ASSOC);
      //
      //return $result;  
   }
   
   //This function gets all category details
   function getCategory(){
      
      global $dbh;
      
      //Define the query
      $sql = "SELECT * 
              FROM  category 
              WHERE 1 
              ORDER BY category";
              
      //query() returns the result
      $statement = $dbh->prepare($sql);
      
      //Execute statement
      $statement->execute();
      
      //process the result
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      
      return $result;  
   }
   
    ////this function creates sql statement based on Advanced Search parameters
    function advancedSearch($keyword = NULL, $city = NULL, $state = NULL, $distance = NULL, $year = NULL, $value = NULL) {
      
         global $dbh;
         
         //select statement for wishlist
         if ($keyword != NULL && $city == NULL && $state == NULL) {
               $sql = "SELECT c.state, i.item_id, i.subcategory, i.description, i.image, i.value  FROM items i,client c  WHERE c.client_id = i.client_id 
               AND image != 'NULL' AND description REGEXP '" . $keyword . "';";
         } elseif($keyword != NULL && $city != NULL) {
               $sql = "SELECT c.state, i.item_id, i.subcategory, i.description, i.image, i.value  FROM items i,client c  WHERE c.client_id = i.client_id 
               AND image != 'NULL' AND description REGEXP '" . $keyword . "'";
               $sql = $sql . "AND city = '" . $city . "'";
         } elseif ($keyword != NULL && $city != NULL && $state != NULL) {
               $sql = "SELECT c.state, i.item_id, i.subcategory, i.description, i.image, i.value  FROM items i,client c  WHERE c.client_id = i.client_id AND state REGEXP '" . $state . "' AND city REGEXP '" . $city . "'
               AND image != 'NULL' AND description REGEXP  '" . $keyword . "';";
         } elseif ($city != NULL && $state == NULL) {
            $sql = "SELECT c.state, i.item_id, i.subcategory, i.description, i.image, i.value  FROM items i,client c  WHERE c.client_id = i.client_id 
               AND image != 'NULL' AND city REGEXP '" . $city . "';";
         } elseif($state != NULL && $city == NULL) {
            $sql = "SELECT c.state, i.item_id, i.subcategory, i.description, i.image, i.value  FROM items i,client c  WHERE c.client_id = i.client_id 
               AND image != 'NULL' AND state REGEXP '" . $state . "';";
         } elseif($state != NULL && $city != NULL) {
            $sql = "SELECT c.state, i.item_id, i.subcategory, i.description, i.image, i.value  FROM items i,client c  WHERE c.client_id = i.client_id 
               AND image != 'NULL' AND state REGEXP '" . $state . "'";
            $sql = $sql . "AND city = '" . $city . "';";
         } else {
            
         }
         
         
         
         
         
         
         //query() returns the result
         $statement = $dbh->prepare($sql);
         
         //Execute statement
         $statement->execute();
         
         //process the result
         $result = $statement->fetchAll(PDO::FETCH_ASSOC);
         
         return $result;   
    }
   
   
   function encryptAlumni($alumni)
    {
        
        $newAlumni = md5($alumni . 'lksd33ajfa33sfa232thfdg22sdfg44lkas');
        return $newAlumni;
    }
    
    function decryptAlumni($alumniHash)
    {
        global $dbh;
        $sql = "SELECT *
            FROM client";

        //Prepare the statement
        $result = $dbh->prepare($sql);
        //Execute the statement
        $result->execute();
        $result = $result->fetchAll();
        $alumniIdFound = 0;
        
        $numOfAlumni = count($result);
        
        $counter = -1;
        $alumni = array();
        $found = false;
        
        do
        {
            $counter++;
            $alumni = $result[$counter];
            $found = encryptAlumni($alumni['client_id']) == $alumniHash;
        }while(!$found);
        
        if ($found) return $alumni['client_id'];
        return false;
    }
    
    function decryptAdmin($alumniHash)
    {
        if (encryptAlumni('admin') == $alumniHash) return $user = 'admin';
        return false;
    }

    
       //THIS FUNCTION TRIMS AND STRIP TAGS OFF THE PASSWORD
    function clean_password($password)
    {
        if (preg_match("/^[a-zA-Z]\w{3,14}$/", $password)) {
            //The password's first character must be a letter,
            //it must contain at least 4 characters and
            //no more than 15 characters and no characters
            //other than letters, numbers and the underscore may be used
            return $password;
        } else {
            error_msg('password, 4-15 characters, only letters, numbers and underscores & start with letter.');
            global $send;
            $send = false;
            return $send;
        }
        //return $password;
    }
    
    //THIS FUNCTION CAN CREATE DYNAMIC ERROR MESSAGES OR USE DEFAULT INPUT
    function error_msg($msg = "Password incorrect and must be at least 4 characters.")
    {
        echo "<p style='color:red'>Error: Please check your " .$msg. "</p>";
        
    }
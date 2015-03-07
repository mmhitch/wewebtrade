<div style='margin-left: 200px'>
<!--<table border='1px' cellpadding='5px' cellspacing='5px'>
        <tr>
            <th>Category</th>
            <th>Sub Category</th>
            <!--<th>Year</th>-->
            <!--<th>Brand Name</th>-->
            <!--<th>Keywords</th>-->
            <!--<th>Quantity</th>
            <th>Value</th>
            <th>Add Expiration</th>
            <th>Description</th>
            <th>Photograph</th>-->
        <!--</tr>-->
        <?php
                //include 'includes/arrays.php';
                ////print_r($my_items);
                //echo '<tr>';
                //        echo '<td>' . $my_items['0'] . '</td>';
                //        echo '<td>' . $my_items['1'] . '</td>';
                //        echo '<td>' . $my_items['3'] . ', ' . $my_items['4'] . ', ' . $my_items['8'] .'</td>';
                //echo '</tr>';
                //echo '<tr>';
                //        echo '<td>' . $my_items['0'] . '</td>';
                //        echo '<td>' . $my_items['1'] . '</td>';
                //        echo '<td>' . $my_items['3'] . '</td>';
                //echo '<tr>';

        ?>
        <!--<tr>
            <td>Motorcycle</td>
            <td>Off Road</td>
            <td>KX 250</td>
        </tr>
    </table>-->
</div>

<?php
    //include functions with db connection
    include_once 'db_functions.php';
    $wishlist_id = getWishList($alumni_id);
    
    //echo "this is the wishlist id of client " . $wishlist_id;
       
    ?>
    <!-- Mark Hitchcock
    10/04/2014
    http://wewebtrade.com/includes/wish_list.php
    Login  success page -->
    
    <legend>Add Item to your Wish list</legend>
    <form action="index.php?action=addWishItem" method="post" class='search'>
        
        <!--<label>Enter Wishlist ID:<input type="text" name="wishlist_id" id="wishlist_id" class='search'/></label><br />-->
        <p>See all <a href="http://www.wewebtrade.com/categories.php">Categories and Subcategories.</a></p>
		  
		  
		  <label for='category'>Item Category:</label>
                <select id='category' name='category' required>
					  <?php
						$result = getSubcategory();
						foreach ($result as $row2){
						 echo "<option value='" . $row2['category'] . "' >" . $row2['category'] . "</option>";
						}
					  ?>
                    <!--<option value='Appliance'>Appliance</option>
                    <option value='Antique' >Antique</option>
                    <option value='Services' >Services</option>
                    <option value='Boat' >Boat</option>
                    <option value='Motorcycle' >Motorcycle</option>-->
                </select><br /><br />
					 
                <label for='sub_category'>Sub Category:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <select id='sub_category' name='subcategory' required>
						  <?php
						foreach ($result as $row2){
						 echo "<option value='" . $row2['subcategory'] . "' >" . $row2['subcategory'] . "</option>";
						}
					  ?>
                    <!--<option value='SPORT' >SPORT</option>
                    <option value='KAYAK' >KAYAK</option>
                    <option value='POWER BOAT' >POWER BOAT</option>
                    <option value='MX' >MX</option>
						  <option value='AUTOMOTIVE' >AUTOMOTIVE</option>
						  <option value='BEAUTY' >BEAUTY</option>
						  <option value='ELECTRICIAN' >ELECTRICIAN</option>
						  <option value='WEB DEV' >WEB DEV</option>
						  <option value='PLUMBING' >PLUMBING</option>-->
                </select><br /><br />
		  
		  
		  
		  
		  
        <!--<label>Enter Subcategory:<input type="text" name="subcategory" id="subcategory" class='search'/></label><br />-->
		  
		  
		  
		  
        <label>Enter Description:<input type="text" name="wish_item_detail" id="wish_item_detail" class='search'/></label><br />
        <input type="submit" name="submit" id="submit" />
    </form>
	 <style>
	  #subs table, th, tr, td{
		border: 1px ridge black;
	  }
	  th {
		font-weight: bolder;
	  }
	 </style>
    <table id="subs" width="80%" border="5" cellpadding="5">
	  <tr>
		<th>Category</th>
		<th>Subcategory</th>
		<th>Description</th>
		<th>Delete</th>
		
	  </tr>
	  

	  
    <?php
		  $my_wish_list = getMyWishListItems($alumni_id);
       
        foreach($my_wish_list as $row) {
            echo "<tr><td>" . $row['category'] . "</td><td>" . $row['subcategory'] . "</td><td>" . $row['wish_item_detail'] . "</td><td><a href='http://wewebtrade.com/index.php?action=delete&wishlist_id=" . $row['wishlist_id'] . "&subcategory=" . $row['subcategory']."'>delete</a></td></tr>";
        }
		  ?>
		  
	 </table>
	 <br /><br />
		  <?php
     //echo "this is where I left off.";
     
     //addWishItem("12", "MX", "KX 450");
     
     //addTradeItem(NULL, "MX", "2003 Suzuki", NULL, 4999, "used", 10);
     //addTradeItem(NULL, $subcategory, $description, $image, $value, $status, $client_id)
     //echo "<br>after addTradeItem These two functions are working as hard coded!";
	 
        
	 include_once 'footer.php';
	 ob_end_flush();
?>

<div class='right_side'>
        <aside class='aside_right'>
            <h3>Wishlist Items</h3>
            <ul>
                <?php
                    if (isset($alumni_id)){
                        $wishlist_id = getWishList($alumni_id);
                        //if ($wishlist_id != NULL) {}  //this condition should control if wislist_details exist or not
                        $result1 = getWishListDetails($wishlist_id);
                        
                        
                        foreach($result1 as $row1){
                            echo "<li><a href='http://wewebtrade.com/item_description.php?item_id=";
                            echo $row1['item_id'];
                            echo "'>" . $row1['subcategory'];
                            echo "</a></li>";
                        }
                    } else {
                ?>
                <li><a href='http://wewebtrade.com/index.php?action=login'>Log In</a></li>
                <li><a href='http://wewebtrade.com/index.php?action=login'>Item 2</a></li>
                <li><a href='http://wewebtrade.com/index.php?action=login'>Item 3</a></li>
                <li><a href='http://wewebtrade.com/index.php?action=login'>Item 4</a></li>
                <?php
                    };
                ?>
            </ul>
        </aside>
    </div>
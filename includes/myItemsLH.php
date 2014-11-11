<div class='left_side'>
        <aside class='aside_left'>
            <h3>My Items</h3>
            <ul>
                <?php
                    if (isset($alumni_id)){
                        
                        $result = getClientItems($alumni_id);
                        
                        foreach($result as $row){
                            echo "<li><a href='http://wewebtrade.com/item_description.php?item_id=";
                            echo $row['item_id'];
                            echo "'>" . $row['subcategory'];
                            echo "</a></li>";
                        }
                        } else {
                    ?>
                    <li><a href='http://wewebtrade.com/create_profile_form.php'>Register</a></li>
                    <li><a href='http://wewebtrade.com/create_profile_form.php'>Item 2</a></li>
                    <li><a href='http://wewebtrade.com/create_profile_form.php'>Item 3</a></li>
                    <li><a href='http://wewebtrade.com/create_profile_form.php'>Item 4</a></li>
                <?php
                    }
                ?>
            </ul>
        </aside>
    </div>
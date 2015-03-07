<?php
    session_start();
    $alumni_id = $_SESSION['alumni_id'];
    //echo "<br /> alumni id is " . $alumni_id . " this should be the session value";
   
    $page_title = 'We Web Trade | add My Item';
    include 'header.php';
?>
<!--
    Name: Mark Hitchcock
    Date: October 18, 2013
    URL: wewebtrade.com/view/add_my_item.php 
-->
<section class="content outline">
    <!--<h2>Title</h2>
    <p>Here is some content.</p>-->
    <?php
        include 'includes/advanced_search.php';
        include_once 'includes/db_functions.php';
        
        if(isset($alumni_id)){
    ?>
    <div class='fieldset_left'>
        
        <fieldset>
            <legend>Add My Item</legend>
            <form action='index.php?action=addItem' method='post' class="contact_form" enctype="multipart/form-data">
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
                    <option value='Automotive' >Automotive</option>
                    <option value='Boat' >Boat</option>
                    <option value='Motorcycle' >Motorcycle</option>
                    <option value='Services' >Services</option>-->
                </select><br /><br /><br />
                <label for='sub_category'>Sub Category:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <select id='sub_category' name='sub_category' required>
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
						  <option value='PLUMBING' >PLUMBING</option>
                    <option value='ENDURO' >ENDURO</option>
                    <option value='CAR' >CAR</option>-->
                </select><br /><br />
                <label for='name'>Brand Name:</label>
                <input id='name' class='search' type='text' name='name' required/><br /><br />
                <label for='model'>Model:</label>
                <input id='model' class='search' type='text' name='model' required/><br /><br />
                <label  for='quantity'>Quantity:</label>
                <input id='quantity' class='search' type='number' name='quantity' required/>
                <span class="form_hint">Proper format numeric</span>
                
        </fieldset>    
    </div>
    <div class='fieldset_right'>
        <fieldset>
            <legend>Add My Item</legend>
                
                <label for='year'>Year:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input id='year' class='search' type='text' list='years' name='year' pattern="(^\d{4})"/>
                <datalist id='years'>
                    <option value='1900'></option>
                    <option value='1910'></option>
                    <option value='1920'></option>
                    <option value='1930'></option>
                    <option value='1940'></option>
                    <option value='1950'></option>
                    <option value='1960'></option>
                    <option value='1970'></option>
                    <option value='1980'></option>
                    <option value='1990'></option>
                    <option value='2000'></option>
                    <option value='2001'></option>
                    <option value='2002'></option>
                    <option value='2003'></option>
                    <option value='2004'></option>
                    <option value='2005'></option>
                    <option value='2006'></option>
                    <option value='2007'></option>
                    <option value='2008'></option>
                    <option value='2009'></option>
                    <option value='2010'></option>
                    <option value='2011'></option>
                    <option value='2012'></option>
                    <option value='2013'></option>
                </datalist>

                <span class='form_hint'>Format 1999</span><br /><br />
                
                
                <label for='value'>Value:</label>
                <input id='value' class='search' type='text' name='value' /><br /><br />
                <label for="pic">Upload a picture:</label>
                <input id='pic' class='search' type="file" name="pic" multiple /><br /><br />
                <label for='expiration'>Expiration:</label>
                <input id='expiration' class='search' type='date' min='2013-3-8' max='2013-6-8' name='expiration' required/><br /><br />
        </fieldset>
    </div>
    <div class='clear'></div>
    <div class='fieldset_center'>
        <fieldset>
            <legend>Add My Item</legend>
                <label for='description'>Description:<br />
                <textarea id='description' name='description' class='search' rows='5' cols='40' required></textarea></label><br />
                
                <input type='submit' name='submit' value='Add My Item'>
        
            </form>
        </fieldset>
    </div>
    <?php
        }
        else {
            echo "<a href='http://www.wewebtrade.com/create_profile_form.php'>Register</a> or <a href='http://www.wewebtrade.com/index.php?action=login'>login</a> to add your items.";
        }
    ?>
    
    <?php
        //include functions with db connection
        include_once 'includes/db_functions.php';
        
        //result is array of 
        $result = getClientItems($alumni_id);
        foreach($result as $row){
            echo "<p>" . $row['category'] . "  " . $row['subcategory'] . "  " . $row['description'] . "</p>";

        }  
        
        include 'includes/my_items_table.php';
    ?>
</section>
<div class="clear"></div>
<?php
    include 'footer.php';
?>

    
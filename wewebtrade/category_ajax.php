<?php
    session_start();
    $alumni_id = $_SESSION['alumni_id'];
    //echo "<br /> alumni id is " . $alumni_id . " this should be the session value";
    
    $page_title = 'We Web Trade | Categories';
    include 'header.php';
    include_once 'includes/db_functions.php';
?>

<script>
    function category_filter(category) {
        if(category=="") {
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
        
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState==4 && xmlhttp.status==200) {
                document.getElementById("cat_id").innerHTML=xmlhttp.responseText;
            }
        }
        
        xmlhttp.open("GET", "get_cat_code_pdo.php?category="+category, true);
        xmlhttp.send();
    }
</script>
<!--
    Name: Mark Hitchcock
    DATE: 10/18/2013
    URL: wewebtrade.com/view/members.php
-->

<section class="content outline">
    <?php
        //include 'includes/advanced_search.php';
        ////html for <div class='right_side'> & <aside class='aside_right'>
        //include 'includes/myItemsLH.php';
        ////html for <div class='right_side'> & <aside class='aside_right'>
        //include 'includes/wishlistItemsRH.php'
    ?>
    <section class='page_content'>
        <div class='members'>
            
            
            <form action="index.php?action=addWishItem" method="post" class='search'>
                <!--<select name="category" onchange="category_filter(this.value)">
                    <option value="">Select a Category</option>
                    <option value="Appliances">Appliances</option>
                    <option value="Motorcycle">Motorcycle</option>
                    <option value="Services">Services</option>
                    <option value="Boat">Boat</option>
                </select>-->
                <select id='category' name='category' onchange="category_filter(this.value)" required>
					  <?php
						$result = getCategory();
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

            <div id="cat_id">Select a category then a subcategory.</div>
            <label>Enter Description:<input type="text" name="wish_item_detail" id="wish_item_detail" class='search'/></label><br />
            <input type="submit" name="submit" id="submit" />
            </form>

<!--
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
  </style>-->
 
<!--<ul id="menu">
  <li>Automotive
  <ul>
      <li><a href="?sub=CARS">CARS</a></li>
      <li><a href="?sub=TRUCKS">TRUCKS</a></li>
      <li><a href="?sub=PARTS">PARTS</a></li>
    </ul>
  </li>
  <li>Boat
  <ul>
      <li><a href="?sub=KAYAK">KAYAK</a></li>
      <li><a href="?sub=POWER BOAT">POWER BOAT</a></li>
      <li class="ui-state-disabled">SAIL</li>
    </ul>
  </li>
  <li>Motorcycle    
        <ul>
          <li><a href="?sub=ENDURO">ENDURO</a></li>
          <li><a href="?sub=MX">MX</a></li>
          <li><a href="?sub=SPORT">SPORT</a></li>
        </ul>
      </li>
  <li>Services
    <ul>
      <!--<li class="ui-state-disabled">Ada</li>
      <li><a href="?sub=BEAUTY">BEAUTY</a></li>
      <li><a href="?sub=ELECTRICIAN">ELECTRICIAN</a></li>
      <li><a href="?sub=WEB DEV">WEB DEV</a></li>
      <li><a href="?sub=PLUMBING">PLUMBING</a></li>
    </ul>
  </li>
</ul>-->

            
        </div>    
        <div class="clear"></div>
        <div class='members'>
        <?php
            //include_once 'includes/db_functions.php';
            //$subcategory = $_GET['sub'];
            //$results = getSubcategoryItems($subcategory);
            //foreach($results as $row4) {
            //    $shortDesc = substr($row4['description'], 0, 55);
            //    echo "<p>" . $row4['subcategory'] . "<a href=item_description.php?item_id=". $row4['item_id'] . "> " . $shortDesc . "...</a></p>";
            //}
       
        ?>
        
        </div>
    </section>
    <!--<aside class='aside_left'>Hello</aside>
    S
    <aside class='aside_right'>Hello</aside>-->
    <!--<aside class='right_side'>Hello</aside>-->
    <?php
        include 'includes/wish_list.php';
    ?>
</section>


<div class="clear"></div>

<?php
    include_once 'footer.php';
?>

    
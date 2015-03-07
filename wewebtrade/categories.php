<?php
    session_start();
    $alumni_id = $_SESSION['alumni_id'];
    //echo "<br /> alumni id is " . $alumni_id . " this should be the session value";
    
    $page_title = 'We Web Trade | Categories';
    include 'header.php';
    include_once 'includes/db_functions.php';
?>
<!--
    Name: Mark Hitchcock
    DATE: 10/18/2013
    URL: wewebtrade.com/categories.php
-->

<section class="content outline">
    <?php
        include 'includes/advanced_search.php';
        //html for <div class='right_side'> & <aside class='aside_right'>
        include 'includes/myItemsLH.php';
        //html for <div class='right_side'> & <aside class='aside_right'>
        include 'includes/wishlistItemsRH.php'
    ?>
    <section class='page_content'>
        <div class='members'>
            

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
 
<ul id="menu">
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
      <!--<li class="ui-state-disabled">Ada</li>-->
      <li><a href="?sub=BEAUTY">BEAUTY</a></li>
      <li><a href="?sub=ELECTRICIAN">ELECTRICIAN</a></li>
      <li><a href="?sub=WEB DEV">WEB DEV</a></li>
      <li><a href="?sub=PLUMBING">PLUMBING</a></li>
    </ul>
  </li>
</ul>

            
        </div>    
        <div class="clear"></div>
        <div class='members'>
        <?php
            include_once 'includes/db_functions.php';
            $subcategory = $_GET['sub'];
            $results = getSubcategoryItems($subcategory);
            foreach($results as $row4) {
                $shortDesc = substr($row4['description'], 0, 55);
                echo "<p>" . $row4['subcategory'] . "<a href=item_description.php?item_id=". $row4['item_id'] . "> " . $shortDesc . "...</a></p>";
            }
       
        ?>
        <center>
            <p><br />To request new categories, please <a href="http://wewebtrade.com/contact_us.php">contact us through our contact form.</a> <br /> </p>
        </center>
        </div>
    </section>
    <!--<aside class='aside_left'>Hello</aside>
    S
    <aside class='aside_right'>Hello</aside>-->
    <!--<aside class='right_side'>Hello</aside>-->
</section>


<div class="clear"></div>

<?php
    include 'footer.php';
?>

    
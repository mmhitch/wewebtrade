<?php
   /*
    *Name: Mark Hitchcock
    *DATE: 3/3/2013
    *URL: ned.highline.edu/~mmhitch/202/assignments/includes/advanced_search.php
    *Advanced Search Form under Nav Bar
    */
?>
<div class='shadow' id="advanced_search">
   <form  class='shadow' method='get' action='#'>
      <h6>Advanced Search</h6><br />
      <label for='city'>City&nbsp;</label>
      <input class='search' id='city' type="text" name="city" placeholder='Seattle' />
      <label for='state'>State&nbsp;</label>
      <input class='search' id='state' type="text" name="state" placeholder='WA' />
      <label for='distance'>Distance</label>
      <input class='search' id='distance' type="text" name="distance" placeholder='100 Miles' />  
      <input id='image' type='checkbox' name='image' />&nbsp;<label for='image'>Has Image</label><br />
      <label for='year_search'>Year</label>
      <input class='search' id='year_search' type="text" name="year_search" placeholder='2013' />
      <label for='value_search'>Value</label>
      <input class='search' id='value_search' type="text" name="value" placeholder='$2000.00' />
      <label for='keyword'>Keyword</label>
      <input class='search' id='keyword' type="text" name="keyword" placeholder='Keyword' />
      
      <input type='checkbox' id='condition' name='condition' />&nbsp;<label for='condition'>New Condition</label>
      &nbsp;&nbsp;&nbsp;&nbsp;<input id='submit' type='submit' name='submit' value='Go' />
   </form>
</div>
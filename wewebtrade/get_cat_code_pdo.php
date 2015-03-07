<?php
$category = $_GET["category"];

//include_once 'includes/db_functions.php';
include_once 'includes/db.php';
$query ="SELECT * FROM subcategory WHERE category = '" .  $category . "'";

global $dbh;

$result = $dbh->query($query);

echo "<select name='subcategory'>";
 echo "<option value=''>Select a subcategory</option>";
while ($row = $result->fetch()) {
   echo "<option value='{$row['subcategory']}'>
           {$row['subcategory']} - {$row['description']}
         </option>";
}
echo "</select>";
$dbh = NULL;
?>
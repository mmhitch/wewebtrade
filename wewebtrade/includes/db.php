<?php
    $username='wewebbui';
    $password='Tucker)&%@0752';
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=wewebbui_trade', $username, $password);
        //echo "Success";
    }
    catch (PDOException $e) {
        die( "Error!: " . $e->getMessage());
    }
?>
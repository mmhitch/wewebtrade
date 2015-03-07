<?php
    $page_title = 'We Web Trade | Contact Us';
    include 'header.php';
?>
<!--
    Name: Mark Hitchcock
    DATE: 10/18/2013
    URL: wewebtrade.com/view/contact_us.php 
-->
<section class="content outline">
    <!--<h2>Title</h2>
    <p>Here is some content.</p>-->
    <?php
        //include 'includes/advanced_search.php';
    ?>
    <h1>Contact Us</h1>
    <div id='contat_us'>
        <form action='http://wewebtrade.com/contact_us.php' method='post'
        <label for='name'>Name:</label>
            <input id='name' class='search' type='text' name='name' /><br />
        <label for='email'>Email:</label>    
            <input id='email' class='search' type="email" placeholder="john_doe@example.com" name='email' /><br /><br />
            <label for='message'>Please write us a detailed message.</label><br />
            <textarea id='message' class='search' name='message' cols='40' rows='5'></textarea><br />
            <input type='submit' name='submit' value='Send Message' />
                        
        </form>
        <?php

if (empty($_POST)) {
        header ('location:index.php');
    } else {
        //Get form info
        $from = $_POST['name'];
        $fromEmail = $_POST['email'];
        $subject = "Contact Us";
        $message = $_POST['message'];
    }
    
    //SEnd Email
    $to = "Mark Hitchcock <mark@wewebbuild.com>";
    $headers = "From: $from<$fromEmail>\r\n";
    $headers .= "Reply-To: $fromEmail";
    $mailit = mail($to, $subject, $message, $headers);
    echo $mailit ? "<p>Message sent successfully."
        : "Error sending message to $to.";
    include 'footer.php';
?>
    </div>
</section>
<div class="clear"></div>


    
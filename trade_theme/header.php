<html>
    <head>
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title> <?php bloginfo('name'); ?> <?php wp_title(); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        </?php wp_head(); ?> <!--theme hook, required for some plugins -->
    </head>
    <body>
        <div id="page">  <!-- div for whole page (ended in footer.php) -->

            <div id="header">  <!--div used for header styling -->
                    <h1><?php bloginfo('name'); ?></h1>
                    <h4><?php bloginfo('description'); ?></h4>

            </div>
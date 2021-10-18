<!DOCTYPE html>
<html>
<head>
    <!-- <link rel="stylesheet" href="http://localhost/Wordpress1/wordpress/wp-content/themes/bgletheme/style.css"> -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <meta charset="UTF-8">

    <title>
    <?php bloginfo('name'); ?> - 
    <?php bloginfo('description'); ?>
    </title>
</head>

<body>
    <?php wp_nav_menu( array( 'theme_location' => 'menu_principal' ) ); ?>
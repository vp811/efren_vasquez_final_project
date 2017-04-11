<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
    <!-- Links to our Style.css file -->
	<link rel="stylesheet" type="text/css" href="
        <?php bloginfo('stylesheet_url'); ?>
    " />
</head>
<body>
    <div class="container"> <!-- Begin Header Div -->
        <header class="row">
            <div clas="twelve columns">
                <a href="<?php $url = home_url('/'); echo $url; ?>"><img src="img/tennis.png" alt="tennis"></a>
                <hr />
            </div>
        </header>

        <div clas="row">
            <div clas="twelve columns">
                <?php wp_nav_menu(array(
            			'sort_column'        =>  'menu_order',
            			'container_class'    =>  'blank-menu-header'
            		));
                ?>
            </div>
        </div>

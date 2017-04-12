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
     <!-- Begin Header Div -->
        <header class="row">
            <div class="five columns">
                <?php wp_nav_menu(array(
                        'theme_location'     =>  'menu-left',
            			'sort_column'        =>  'menu_order',
            			'container_class'    =>  'menu-left'
            		));
                ?>
            </div>

            <div class="two columns">
                <div id="logo">
                    <a href="<?php $url = home_url('/'); echo $url; ?>">
                    <img src="https://preview.ibb.co/fXjtd5/tennis.png" alt="tennis" />
                    </a>
                </div>
            </div>

            <div class="five columns">
                <?php wp_nav_menu(array(
                        'theme_location'     =>  'menu-right',
                        'sort_column'        =>  'menu_order',
                        'container_class'    =>  'menu-right'
                    ));
                ?>
            </div>
        </header>

    <div class="border">
    </div>

<div class="container">

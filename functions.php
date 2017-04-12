<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
/*------Intro Page widget -----*/
register_sidebar( array(
		'name' => ('First Widget'),
		'id' => 'first-widget',
		'description' => 'Widget for intro page',
		'before_widget' => '<div class="widget-intro">',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	));

/*------Upcoming Events widget -----*/
register_sidebar( array(
		'name' => ('Upcoming Events'),
		'id' => 'events',
		'description' => 'Widget for Upcoming Events',
		'before_widget' => '<div class="widget-event">',
		'after_widget' => '</div>',
		'before_title' => '<h1>',
		'after_title' => '</h1>'
	));

/*----first footer widget---*/
register_sidebar( array(
    'name'          => ('First Footer Widget'),
    'id'            => 'footer-one',
    'description'   => 'Left Widget in the footer',
    'before_widget' => '<div class="widget-footer widget-left">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----second footer widget---*/
register_sidebar( array(
    'name'          => ('Second Footer Widget'),
    'id'            => 'footer-two',
    'description'   => 'Middle Widget in the footer',
    'before_widget' => '<div class="widget-footer widget-middle">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*----third footer widget---*/
register_sidebar( array(
    'name'          => ('Third Footer Widget'),
    'id'            => 'footer-three',
    'description'   => 'Right Widget in the footer',
    'before_widget' => '<div class="widget-right">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));
}
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */
add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' );




function register_my_menus() {
  register_nav_menus(
    array(
      'menu-left' => __( 'Menu Left' ),
      'menu-right' => __( 'Menu Right' ),
      'menu-footer' => __( 'Menu Footer' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );




?>

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

/*-------------- Add Menu --------------- */
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


/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' );

/*--- Custom Page ---*/
function custom_web_resources() {

  $labels = array(
    /*--- Begin Labels Options ---*/
    'name'               => _x( 'Links', 'post type general name' ),
    'singular_name'      => _x( 'Link', 'post type singular name' ),
    'add_new'            => _x( 'Add New', weblink ),
    'add_new_item'       => __( 'Add Link' ),
    'edit_item'          => __( 'Edit Links' ),
    'new_item'           => __( 'New Link' ),
    'all_items'          => __( 'All Links' ),
    'view_item'          => __( 'View Links' ),
    'search_items'       => __( 'Search Links' ),
    'not_found'          => __( 'No links found' ),
    'not_found_in_trash' => __( 'No links found in the Trash' ),
    'parent_item_colon'  => '',
    'menu_name'          => 'Web Links'
  );

  $args = array(
    /*--- Begin Arguments Options ---*/
    'labels'        => $labels,
    'description'   => 'Place to put useful links to other web resources',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
    'has_archive'   => true,
  );

  register_post_type( 'resources', $args );
}

add_action( 'init', 'custom_web_resources' );

/*-------------------------------Contact Page --------------*/
register_sidebar( array(
    'name'          => ('Contact Widget'),
    'id'            => 'contact-widget',
    'description'   => 'Widget in contact Page',
    'before_widget' => '<div class="contact-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

register_sidebar( array(
    'name'          => ('Contact Widget Social'),
    'id'            => 'contact-widget-social',
    'description'   => 'Widget in contact Page for social media',
    'before_widget' => '<div class="contact-widget-social">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));

/*-------------------------------Post Page --------------*/
register_sidebar( array(
    'name'          => ('Post Widget'),
    'id'            => 'post-widget',
    'description'   => 'Widget in Post Page',
    'before_widget' => '<div class="post-widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
));
?>

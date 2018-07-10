<?

// Return menu items array for a menu name
function get_menu_items($menu_name){
  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    return wp_get_nav_menu_items($menu->term_id);
  }
}

if ( function_exists('register_sidebar') )
  register_sidebar(array(
    'name' => 'Footer Boxes',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>',
  )
);

// unregister all widgets
function unregister_default_widgets() {
    unregister_widget('WP_Widget_Pages');
    unregister_widget('WP_Widget_Calendar');
    unregister_widget('WP_Widget_Archives');
    unregister_widget('WP_Widget_Links');
    unregister_widget('WP_Widget_Meta');
    unregister_widget('WP_Widget_Search');
    unregister_widget('WP_Widget_Text');
    unregister_widget('WP_Widget_Categories');
    unregister_widget('WP_Widget_Recent_Posts');
    unregister_widget('WP_Widget_Recent_Comments');
    unregister_widget('WP_Widget_RSS');
    unregister_widget('WP_Widget_Tag_Cloud');
    unregister_widget('WP_Nav_Menu_Widget');
		unregister_widget('WP_Widget_Media_Audio');
		unregister_widget('WP_Widget_Media_Image');
		unregister_widget('WP_Widget_Media_Gallery');
		unregister_widget('WP_Widget_Media_Video');
		// unregister_widget('WP_Widget_Custom_HTML');
		unregister_widget('NF_Widget');
		unregister_widget('PodsWidgetSingle');
		unregister_widget('PodsWidgetList');
		unregister_widget('PodsWidgetField');
		unregister_widget('PodsWidgetForm');
		unregister_widget('PodsWidgetView');
}
add_action('widgets_init', 'unregister_default_widgets', 11);

function twentyseventeen_setup() {
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'main'    => __( 'Sidebar Menu', 'selbst' ),
		'footer'  => __( 'Footer Menu', 'selbst' )
	) );
}
add_action( 'after_setup_theme', 'twentyseventeen_setup' );

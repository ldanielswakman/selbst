<?

// Return menu items array for a menu name
function get_menu_items($menu_name){
  if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    return wp_get_nav_menu_items($menu->term_id);
  }
}

function twentyseventeen_setup() {
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'main'    => __( 'Main Menu', 'selbst' )
	) );
}
add_action( 'after_setup_theme', 'twentyseventeen_setup' );

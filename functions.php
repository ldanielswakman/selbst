<?

function twentyseventeen_setup() {
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'main'    => __( 'Main Menu', 'selbst' )
	) );
}
add_action( 'after_setup_theme', 'twentyseventeen_setup' );

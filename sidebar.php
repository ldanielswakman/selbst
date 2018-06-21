<?
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Selbst
 * @since 1.0
 * @version 1.0
 */

// if ( ! is_active_sidebar( 'sidebar-1' ) ) {
// 	return;
// }
?>

<aside id="secondary" class="widget-area" role="complementary" aria-label="<? esc_attr_e( 'Selbst Sidebar', 'twentyseventeen' ); ?>">

	<a href="<?= get_bloginfo('url') ?>">
		<img src="<?= get_template_directory_uri() ?>/images/selbst-logo.svg" alt="<?= get_bloginfo('name') ?>" />
	</a>
	
	<?
	// Menu
	wp_nav_menu([
		'menu_id' => 'menu',
		'items_wrap' => '<ol id="%1$s" class="%2$s">%3$s</ol>'
	]);
	?>

	<? dynamic_sidebar( 'sidebar-1' ); ?>

</aside><!-- #secondary -->

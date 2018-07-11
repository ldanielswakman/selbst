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

	<a href="<?= get_bloginfo('url') ?>" class="logo">
		<img src="<?= get_template_directory_uri() ?>/images/selbst-logo.svg" alt="<?= get_bloginfo('name') ?>" />
	</a>

	<a href="javascript:toggleAside()" class="toggle-aside">
		<img src="<?= get_template_directory_uri() ?>/images/caret.svg" alt="<?= get_bloginfo('name') ?>" />
	</a>

	<div class="sidebar__content">

		<blockquote class="sidebar-quote"><p><?= get_post_meta(get_option('page_on_front'))['summary'][0] ?></p></blockquote>
		
		<?
		// Menu
		wp_nav_menu([
			'menu' => 'Primary Menu',
			'items_wrap' => '<ol id="%1$s" class="%2$s">%3$s</ol>'
		]);
		?>

		<div class="sidebar-items">
			<?
			$menu_items = get_menu_items('main');
			$n = 0;
			
			if(isset($menu_items)) :
		    foreach ($menu_items as $key => $menu_item ) :
		    	$id = $menu_item->object_id;
		    	$page = get_post($id);
		    	$meta = get_post_meta($id);
	      	$n++;

	      	if(strlen($meta['summary_title'][0]) > 0 && strlen($meta['summary'][0]) > 0) :
		      	?>

			      <div class="item">

			      	<h4>0<?= $n ?>—<?= $page->post_title ?></h4>

				      <? if(strlen($meta['summary_title'][0]) > 0) : ?>
				      	<h3><?= $meta['summary_title'][0] ?></h3>
				      <? endif ?>

				      <? if(strlen($meta['summary'][0]) > 0) : ?>
				      	<p><?= $meta['summary'][0] ?></p>
				      <? endif ?>

			      	<? if ($id != get_the_id()) : ?>
			      		<a class="read-more" href="<?= get_permalink($id) ?>">&mdash;Read more</a>
				      <? else : ?>
				      	<h4>See here ————></h4>
				      <? endif ?>

			      </div>

		      	<?
	      	endif;
		    endforeach;
		  endif;
			?>
		</div>

	</div>

	<div class="sidebar__footer">
		&copy; Selbst 2018 — <a href="https://ldaniel.eu" target="_blank">website by ldaniel.eu</a>
	</div>

</aside><!-- #secondary -->

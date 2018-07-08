<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Selbst
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

<?php get_sidebar(); ?>

<main>

	<a href="<?= get_permalink(get_page_by_path('join')) ?>" class="cta">Join</a>

	<div class="row">
		<div class="col-xs-12 col-sm-offset-3 col-sm-9">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
			endwhile; endif; ?>
		</div>
	</div>

	<h3 class="projects-title">Projects</h3>

	<div class="projects row">
	<?
	$pages = get_posts([
		'post_type' => 'project',
		'post_status' => 'publish',
	]);
	foreach($pages as $key => $p) :
	$cover_img_id = get_post_meta($p->ID)['cover_image'][0];
	?>
		<div class="col-xs-12 col-sm-6">
			<a href="<?= get_permalink($p->ID) ?>" class="project-tile">
				<? if (strlen($cover_img_id > 0)) : ?>
					<figure>
						<img src="<?= wp_get_attachment_image_src($cover_img_id, 'large')[0] ?>" alt="<?= $p->post_title ?>" />
					</figure>
				<? else : ?>
					<figure class="figure--empty">
						<div class="placeholder"><?= substr($p->post_content, 0, 40) ?></div>
					</figure>
				<? endif ?>
				<h4><?= $p->post_title ?></h4>
			</a>
		</div>
	<? endforeach ?>

	<div class="main-footer">
		&copy; Selbst 2018 — <a href="https://ldaniel.eu" target="_blank">website by ldaniel.eu</a>
	</div>

</main>

<?php get_footer();

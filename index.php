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

	<? if($post->post_name != 'join') : ?>
		<a href="<?= get_permalink(get_page_by_path('join')) ?>" class="cta">
			<? if(wp_get_post_parent_id( $post->ID ) > 0) : ?>
				<img src="<?= get_template_directory_uri() ?>/images/cross.svg" title="Back to Projects" alt="Back to Projects" />
			<? else : ?>
				Join
			<? endif ?>
		</a>
	<? endif ?>

	<div class="main__content">

		<div class="main__title">

			<h1><? the_title(); ?></h1>
		</div>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
			the_content();
			endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
		<?php endif; ?>

	</div>

	<? if($post->post_name != 'join') : ?>
		<? get_template_part('partials/action-box') ?>
	<? endif ?>

	<? get_template_part('partials/newsletter-box') ?>

	<? get_template_part('partials/footer-main') ?>

</main>

<?php get_footer();

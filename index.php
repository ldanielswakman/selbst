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
		<a href="<?= get_permalink(get_page_by_path('join')) ?>" class="cta">Join</a>
	<? endif ?>

	<div class="main__title">
		<h1><? the_title(); ?></h1>
	</div>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
		the_content();
		endwhile; else: ?>
		<p>Sorry, no posts matched your criteria.</p>
	<?php endif; ?>

	<div class="main-footer">
		&copy; Selbst 2018 — <a href="https://ldaniel.eu" target="_blank">website by ldaniel.eu</a>
	</div>

</main>

<?php get_footer();

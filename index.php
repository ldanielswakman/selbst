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

	<div class="main__content">

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

	</div>

	<? get_template_part('partials/footer-main') ?>

</main>

<?php get_footer();

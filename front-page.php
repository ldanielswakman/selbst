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

		<a href="<?= get_permalink(get_page_by_path('join')) ?>" class="cta">Join</a>

		<div class="row">
			<div class="col-xs-12 col-sm-offset-3 col-sm-9">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
				endwhile; endif; ?>
			</div>
		</div>

		<h3 class="projects-title">Projects</h3>

		<? get_template_part('partials/projects') ?>

	</div>
 
	<? if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer Boxes") ) : ?>
		<? dynamic_sidebar('sidebar-1'); ?>
	<? endif;?>

	<? get_template_part('partials/footer-main') ?>

</main>

<?php get_footer();

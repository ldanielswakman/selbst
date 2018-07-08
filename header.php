<?
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Selbst
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <? language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<? bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdnjs.cloudflare.com/ajax/libs/flexboxgrid/6.3.1/flexboxgrid.min.css" rel="stylesheet" type="text/css" />
<link href="<?= get_template_directory_uri() ?>/style.css" rel="stylesheet" type="text/css" />

<? wp_head(); ?>
</head>

<body <? body_class('page-name--' . $post->post_name ); ?>>
<div id="page">

	<header id="masthead" class="site-header" role="banner">

	</header>

	<div class="site-content-contain">
		<div id="content" class="site-content">

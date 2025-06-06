<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package phukiendep
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" src="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="main-container">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'phukiendep'); ?></a>

		<header id="masthead" class="site-header">
			<?php
			get_template_part('template-parts/header/header', 'top', array());
			get_template_part('template-parts/header/header', 'main', array());
			get_template_part('template-parts/header/header', 'bottom', array());
			?>

		</header><!-- #masthead -->
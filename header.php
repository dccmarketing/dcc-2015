<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package DCC 2015
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"><?php

wp_head();

?></head>

<body <?php body_class(); ?>><?php

do_action( 'after_body' );

?><div id="page" class="hfeed site fadeIn">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'dcc-2015' ); ?></a>

	<header id="masthead" class="site-header slidein" role="banner">
		<div class="header-wrap">
			<div class="site-branding">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="dccpartone">DCC</span> <span class="dccparttwo">Interactive [marketing] Agency</span></a></h1>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Menu', 'dcc-2015' ); ?></button><?php

					wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) );

			?></nav><!-- #site-navigation --><?php

			get_template_part( 'menu', 'social' );

			get_template_part( 'content', 'footer' );

		?></div><!-- .header-wrap -->
	</header><!-- #masthead -->

	<div id="content" class="site-content fadeIn">
		<div class="breadcrumbs"><?php

				if ( function_exists( 'yoast_breadcrumb' ) ) {
					yoast_breadcrumb();
				}

			?></div>
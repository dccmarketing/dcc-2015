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
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dcc-2015' ); ?></a>

	<header id="masthead" class="site-header slidein" role="banner">
		<div class="header-wrap">
			<div class="site-branding"><?php

			if ( is_front_page() && is_home() ) {

				?><h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="dccpartone"><?php esc_html_e( 'DCC', 'dcc-2015' ); ?></span> <span class="dccparttwo"><?php esc_html_e( 'Interactive [marketing] Agency', 'dcc-2015' ); ?></span></a></h1><?php

			} else {

				?><p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="dccpartone"><?php esc_html_e( 'DCC', 'dcc-2015' ); ?></span> <span class="dccparttwo"><?php esc_html_e( 'Interactive [marketing] Agency', 'dcc-2015' ); ?></span></a></p><?php

			}

			?></div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Menu', 'dcc-2015' ); ?></button><?php

					wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) );

			?></nav><!-- #site-navigation --><?php

			get_template_part( 'menus/menu', 'social' );

			get_template_part( 'template-parts/content', 'footer' );

		?></div><!-- .header-wrap -->
	</header><!-- #masthead -->

	<div id="content" class="site-content fadeIn">
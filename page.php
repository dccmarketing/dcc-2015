<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package DCC 2015
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="breadcrumbs">
			<div class="wrap-crumbs"><?php

				do_action( 'dcc_2015_breadcrumbs' );

			?></div><!-- .wrap-crumbs -->
		</div><!-- .breadcrumbs -->
		<main id="main" class="site-main page" role="main"><?php

			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // end of the loop.

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();
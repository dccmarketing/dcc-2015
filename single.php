<?php
/**
 * The template for displaying all single posts.
 *
 * @package DCC 2015
 */

get_header();

	?><div id="primary" class="content-area">
		<div class="breadcrumbs">
			<div class="wrap-crumbs"><?php

				do_action( 'dcc_2015_breadcrumbs' );

			?></div><!-- .wrap-crumbs -->
		</div><!-- .breadcrumbs -->
		<main id="main" class="site-main singlepage" role="main"><?php

		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single' );

		endwhile; // end of the loop.

		get_template_part( 'template-parts/content', 'authorbox' );

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();
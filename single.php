<?php
/**
 * The template for displaying all single posts.
 *
 * @package DCC 2015
 */

get_header();

	?><div id="primary" class="content-area">
		<main id="main" class="site-main singlepage" role="main"><?php

		while ( have_posts() ) : the_post();

			get_template_part( 'content', 'single' );

		endwhile; // end of the loop.

		get_template_part( 'content', 'authorbox' );

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();
?>
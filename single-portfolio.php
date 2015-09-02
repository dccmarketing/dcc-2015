<?php
/**
 * The template for displaying all single portfolio items
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

			?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header single-post"><?php

					the_title( '<h1 class="entry-title">', '</h1>' );

				?></header><!-- .entry-header -->
				<div class="entry-content"><?php

					the_content();

				?></div><!-- .entry-content -->
			</article><!-- #post-## --><?php

		endwhile; // end of the loop.

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();
?>
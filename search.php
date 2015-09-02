<?php
/**
 * The template for displaying search results pages.
 *
 * @package DCC 2015
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div class="breadcrumbs">
			<div class="wrap-crumbs"><?php

				do_action( 'dcc_2015_breadcrumbs' );

			?></div><!-- .wrap-crumbs -->
		</div><!-- .breadcrumbs -->
		<main id="main" class="site-main searchpage" role="main"><?php

		if ( have_posts() ) :

			?><header class="page-header">
				<h1 class="page-title"><?php

					printf( esc_html__( 'Search Results for: %s', 'dcc-2015' ), '<span>' . get_search_query() . '</span>' );

				?></h1>
			</header><!-- .page-header --><?php

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;

		?></main><!-- #main -->
	</section><!-- #primary --><?php

get_footer();
?>
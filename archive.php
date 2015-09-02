<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
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
		<main id="main" class="site-main archivepage" role="main"><?php

		if ( have_posts() ) :

			?><header class="page-header"><?php

				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<h3 class="taxonomy-description">', '</h3>' );

				do_action( 'category_select' );

			?></header><!-- .page-header -->
			<div class="flex-posts"><?php

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'excerpt' );

			endwhile;

			the_posts_navigation();

			?></div><?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;

		?></main><!-- .site-main -->
	</div><!-- .content-area --><?php

get_footer();
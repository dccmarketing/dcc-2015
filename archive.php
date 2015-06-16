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
		<main id="main" class="site-main archivepage" role="main"><?php

		if ( have_posts() ) :

			?><header class="page-header"><?php

				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<h3 class="taxonomy-description">', '</h3>' );
				echo dcc_2015_category_select();

			?></header><!-- .page-header --><?php

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/* Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', 'excerpt' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'content', 'none' );

		endif;

		?></main><!-- .site-main -->
	</div><!-- .content-area --><?php

get_footer();
?>
<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package DCC 2015
 */

$pageID = get_option( 'page_for_posts' );

get_header();

	?><div id="primary" class="content-area">
		<main id="main" class="site-main indexpage" role="main">
			<header class="entry-header">
				<h1 class="page-title">Blog</h1>
				<h3 class="entry-subtitle"><?php the_field( 'subtitle', $pageID ); ?></h3><?php

				echo dcc_2015_category_select();

				?></header><!-- .entry-header --><?php

			if ( have_posts() ) :

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

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();
?>
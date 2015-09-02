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
		<div class="breadcrumbs">
			<div class="wrap-crumbs"><?php

				do_action( 'dcc_2015_breadcrumbs' );

			?></div><!-- .wrap-crumbs -->
		</div><!-- .breadcrumbs -->
		<main id="main" class="site-main indexpage" role="main">
			<header class="entry-header">
				<h1 class="page-title"><?php esc_html_e( 'Blog', 'dcc-2015' ); ?></h1>
				<h3 class="entry-subtitle"><?php the_field( 'subtitle', $pageID ); ?></h3><?php

				do_action( 'category_select' );

				?></header><!-- .entry-header --><?php

			if ( have_posts() ) :

				?><div class="flex-posts"><?php

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'excerpt' );

				endwhile;

				$args['prev_text'] = '<span class="dashicons dashicons-arrow-left"></span>' . __( 'Older Posts', 'dcc-2015' );
				$args['next_text'] = __( 'Newer Posts', 'dcc-2015' ) . '<span class="dashicons dashicons-arrow-right"></span>';

				the_posts_navigation( $args );

				?></div><?php

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif;

		?></main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();
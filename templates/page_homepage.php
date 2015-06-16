<?php
/**
 * Template Name: Home Page
 *
 * Description: The home page template
 *
 * @package DCC 2015
 */

get_header();

putRevSlider( "slider" ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="home-section">
				<h1 class="section-title">[marketing] therapy</h1>
				<h3 class="section-subtitle">We do the dirty work so you don't have to. Blogs away!</h3><?php

				$homeposts = dcc_2015_get_homeposts();

				while ( $homeposts->have_posts() ) : $homeposts->the_post();

					?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><?php

						the_post_thumbnail( 'homeblog', array( 'class' => 'home-post-image' ) );

						?><div class="home-post-content">
							<header class="entry-header"><?php

								the_title( '<a href="' . get_permalink( get_the_ID() ) . '" class="entry-header-link"><h1 class="entry-title">', '</h1></a>' );

							?></header><!-- .entry-header -->
							<div class="entry-content"><?php

								the_excerpt();

								?><a class="read-more" href="<?php echo get_permalink( get_the_ID() ); ?>"><?php _e('Read More', 'dcc-2015'); ?></a><?php

								wp_link_pages( array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'dcc-marketing' ),
									'after'  => '</div>',
								) );

							?></div><!-- .entry-content -->
						</div>
					</article><!-- #post-## --><?php

				endwhile; // end of the loop.

				/* Removed 6/16/2015 per Kara's feedback

				wp_reset_postdata();

				$catargs['hide_empty'] 	= true;
				$catargs['number'] 		= 6;
				$catargs['parent'] 		= 0;
				$cats 					= get_categories( $catargs );

				?><div class="categories"><?php

				foreach ( $cats as $cat ) {

					?><a href="<?php echo get_category_link( $cat->term_id ); ?>" class="category hvr-rectangle-in"><?php echo $cat->name; ?></a><?php

				}

				</div>*/

			?></section>
			<section class="home-section">
				<h1 class="section-title">smile!</h1>
				<h3 class="section-subtitle">Can you find yourself in our Instagram feed?</h3><?php

				echo do_shortcode( '[instagram-feed]' );

			?></section>
		</main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();
?>
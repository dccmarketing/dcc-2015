<?php
/**
 * Template Name: Home Page
 *
 * Description: The home page template
 *
 * @package DCC 2015
 */

global $dcc_2015_themekit;

get_header();

putRevSlider( "slider" ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="home-section">
				<h1 class="section-title"><?php esc_html_e( '[marketing] therapy', 'dcc-2015' ); ?></h1>
				<h3 class="section-subtitle"><?php esc_html_e( 'We do the dirty work so you don\'t have to. Blogs away!', 'dcc-2015' ); ?></h3><?php

				$args['order'] 			= 'DESC';
				$args['posts_per_page'] = 8;

				$homeposts = $dcc_2015_themekit->get_posts( 'post', $args, 'home' );

				while ( $homeposts->have_posts() ) : $homeposts->the_post();

					get_template_part( 'template-parts/content', 'excerpt' );

				endwhile; // end of the loop.

				?><a class="link-home-read" href="<?php echo esc_url( get_permalink( get_option('page_for_posts' ) ) ); ?>"><?php esc_html_e( 'Read More Blogs', 'dcc-2015' ); ?></a>
			</section>
			<section class="home-section">
				<h1 class="section-title"><?php esc_html_e( 'smile!', 'dcc-2015' ); ?></h1>
				<h3 class="section-subtitle"><?php esc_html_e( 'Can you find yourself in our Instagram feed?', 'dcc-2015' ); ?></h3><?php

				echo do_shortcode( '[instagram-feed]' );

			?></section>
		</main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();
<?php
/**
 * Template Name: Contact Us
 *
 * Description: The contact us page template
 *
 * @package DCC 2015
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="wrap">
				<div id="content" class="full-width"><?php

					while ( have_posts() ) : the_post();

						get_template_part( 'templates-parts/content', 'page' );

					endwhile; // end of the loop.

					if( have_rows('locations') ): $i = 0;

					 	// loop through the rows of data
						while ( have_rows('locations') ) : the_row(); $i++;

							?><div>
								<div class="contact-address">
									<h3 class="contact-name"><?php

										the_sub_field( 'location_name' );

									?></h3><?php

									the_sub_field('address');

								?></div>
								<div class="contact-map">
									<a class="acf-map" href="<?php echo get_sub_field( 'map_link' ); ?>" target="_blank" style="background-image:url(<?php echo get_sub_field( 'map_image' ); ?>)"></a>
								</div>
							</div><?php

/*								$location = get_sub_field( 'map' );

								if( ! empty( $location ) ) :

								?><div class="acf-map map_canvas" id="map-<?php echo $i; ?>"><?php
									/*<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div><?php
								</div>

								endif;

						</div><?php
		*/

						endwhile;

					endif;

					if( function_exists( 'ninja_forms_display_form' ) ) {

						ninja_forms_display_form( 1 );

					}

				?></div><!-- .full-width -->
			</div>
		</main><!-- #main -->
	</div><!-- #primary --><?php

get_footer();
?>
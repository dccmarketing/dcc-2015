<?php
/**
 * Template for display Author Archive pages
 *
 * @package DCC 2015
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main page" role="main">
		<div class="wrap">
			<div id="content" class="full-width"><?php

				$curauth 	= ( isset( $_GET['author-name'] ) ) ? get_user_by( 'slug', $author->name ) : get_userdata( intval( $author ) );
				$meta 		= get_user_meta( $curauth->ID );

				?><img src="<?php echo $meta['user_large_image'][0] ?>" class="author-large-image" />
				<h1 class="author-name"><?php echo $curauth->data->display_name; ?></h1>
				<h2 class="author-position"><?php echo $meta['job_title'][0]; ?></h2>
				<p class="author-bio"><?php echo $meta['description'][0]; ?></p><?php

				if ( have_posts() ) {

					?><h2 class="author-postsby">Posts by <?php echo $curauth->data->display_name; ?></h2>

					<div class="flex-posts"><?php

						while ( have_posts() ) : the_post();

							get_template_part( 'content', 'excerpt' );

						endwhile; // loop

					?></div><?php

				}

				wp_reset_postdata();

			?></div><!-- .full-width -->
		</div>
	</main>
</div><?php

get_footer(); ?>
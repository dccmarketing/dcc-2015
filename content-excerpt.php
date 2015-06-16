<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package DCC 2015
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image:url(<?php echo dcc_2015_get_thumbnail_url( get_the_ID(), 'medium' ); ?>)">
	<div class="dcchover">
		<div class="mobile-thumbnail" style="background-image:url(<?php echo dcc_2015_get_featured_url( get_the_ID(), 'medium' ); ?>)"></div>
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
</article><!-- #post-## -->
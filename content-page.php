<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package DCC 2015
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header"><?php

		the_title( '<h1 class="page-title">', '</h1>' );

		$subtitle = get_field( 'subtitle' );

		if ( ! empty( $subtitle ) ) {

			?><h3 class="entry-subtitle"><?php echo $subtitle; ?></h3><?php

		}

	?></header><!-- .entry-header -->

	<div class="page-content"><?php

		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'dcc-marketing' ),
			'after'  => '</div>',
		) );

	?></div><!-- .entry-content -->
</article><!-- #post-## -->
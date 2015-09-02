<?php
/**
 * @package DCC 2015
 */
?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header contentpage"><?php

		the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' );

		if ( 'post' == get_post_type() ) :

			?><div class="entry-meta"><?php

				dcc_2015_posted_on();

			?></div><!-- .entry-meta --><?php

		endif;

	?></header><!-- .entry-header -->
	<div class="article_image" style="background-image:url(<?php echo dcc_2015_get_featured_url( get_the_ID() ); ?>)"></div>
	<div class="entry-content"><?php

			/* translators: %s: Name of current post */
			the_content( sprintf(
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'dcc-2015' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dcc-2015' ),
				'after'  => '</div>',
			) );

	?></div><!-- .entry-content -->

	<footer class="entry-footer"><?php

		dcc_2015_entry_footer();

	?></footer><!-- .entry-footer -->
</article><!-- #post-## -->
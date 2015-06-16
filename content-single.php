<?php
/**
 * @package DCC 2015
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header single-post"><?php

		the_title( '<h1 class="entry-title">', '</h1>' );

	?></header><!-- .entry-header -->
	<div class="entry-content"><?php

		the_post_thumbnail( 'med', array( 'class' => 'blog-feat-img' ) );

		the_content();

	?></div><!-- .entry-content -->
	<div class="entry-meta"><?php

		echo apply_filters( 'simplesharing', '' );

		dcc_2015_posted_on();

	?></div><!-- .entry-meta -->
</article><!-- #post-## -->
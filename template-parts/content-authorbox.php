<?php
/**
 * The template used for displaying the authorbox
 *
 * @package DCC 2015
 */
?><div class="authorbox">
	<div class="authorbox-header">
		<div class="authorbox-headshot" style="background-image:url(<?php echo dcc_2015_get_headshot( $post->post_author ); ?>)"></div>
		<h4 class="authorbox-name vcard author"><?php printf( esc_attr__( '%s', 'dcc-2015' ), get_the_author() );?></h4>
	</div>
	<div class="authorbox-bio"><?php echo wp_kses( get_the_author_meta( 'description' ), null ); ?></div>
	<div class="authorbox-blog-link">
		<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author"><?php

			printf( wp_kses( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'dcc-2015' ), array( 'span' => array( 'class' => array() ) ) ), get_the_author() );

		?></a>
	</div>
</div>
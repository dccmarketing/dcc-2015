<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package DCC 2015
 */

global $dcc_2015_themekit;

?><article id="post-<?php the_ID(); ?>" <?php post_class(); ?> style="background-image:url(<?php echo $dcc_2015_themekit->get_thumbnail_url( get_the_ID(), 'medium' ); ?>)">
	<div class="dcchover">
		<div class="mobile-thumbnail" style="background-image:url(<?php echo $dcc_2015_themekit->get_thumbnail_url( get_the_ID(), 'medium' ); ?>)"></div>
		<header class="entry-header"><?php

			the_title( '<h2 class="entry-title">', '</h2>' );

		?></header><!-- .entry-header -->
		<div class="entry-content"><?php

			the_excerpt();

		?></div><!-- .entry-content -->
	</div>
	<a aria-hidden="true" class="link-overlay" href="<?php echo esc_url( get_permalink( get_the_ID() ) ); ?>"><?php esc_html_e( '', 'dcc-2015' ); ?></a>
</article><!-- #post-## -->
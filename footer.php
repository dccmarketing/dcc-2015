<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package DCC 2015
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">

		<div class="footer-wrap"><?php

			get_template_part( 'menu', 'social' );

			get_template_part( 'template-parts/content', 'footer' );

		?></div><!-- .footer-wrap -->

	</footer><!-- #colophon -->

</div><!-- #page --><?php

//<img class="easter-egg" src="<?php //echo get_stylesheet_directory_uri(); /images/CeCe.png" /><?php

wp_footer();

?></body>
</html>
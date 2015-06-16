<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package DCC 2015
 */

/**
 * Because of using post_type=any we have to manually weed out the attachments from the query_posts results.
 *
 * @author 		Joost De Valk
 *
 * @return 		WHERE statement that strips out attachment
 */
function dcc_2015_strip_attachments( $where ) {

	$where .= ' AND post_type != "attachment"';

 	return $where;

}
add_filter( 'posts_where', 'dcc_2015_strip_attachments' );

$upload_dir = wp_upload_dir();

get_header();

	?><div id="primary" class="content-area">
		<main id="main" class="site-main page" role="main">
			<h1 class="page-title">CeCe can't find that one...</h1>
			<img src="<?php echo $upload_dir['baseurl']; ?>/2015/02/CeCe-Final-Head.jpg" class="cece404">
			<section class="entry-content">
				<p>Don't worry though! I've got a few tips for you to find it:</p>
				<ol>
					<li>
						<label for="s"><strong>Search</strong> for it:</label>
						<form style="display:inline;" action="<?php bloginfo( 'siteurl' ); ?>">
							<input type="text" value="<?php echo esc_attr( $s ); ?>" id="s" name="s"/> <input type="submit" value="Search"/>
						</form>
					</li>
					<li>
						If you typed in a URL... make sure the spelling, cApitALiZaTiOn, and punctuation are correct. Then try reloading the page.

					</li>
					<li>
						Start over again at our <a href="<?php echo site_url(); ?>">homepage</a> (and please contact me to say what went wrong, so I can fix it).
					</li>
				</ol>
			</section>
		</main>
	</div>

<?php get_footer(); ?>
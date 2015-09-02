<?php

?><div class="site-info">
	<div class="copyright">&copy <?php echo date( 'Y' ); ?> <a href="<?php echo esc_url( get_admin_url() ); ?>" title="Login"><?php esc_html_e( get_bloginfo( 'name' ) ); ?></a></a></div>
	<div><?php

		$addys['Decatur'] = '225 North Water Street, Suite 300 | Decatur, Illinois 62523';
		$addys['Chicago'] = '77 West Wacker Drive, Suite 4800 | Chicago, Illinois 60601';

		foreach ( $addys as $name => $addy ) {

			global $dcc_2015_themekit;

			$map = $dcc_2015_themekit->make_map_link( $addy );

			?><address>
				<a href="<?php echo esc_url( $map ); ?>" class="map-link" title="<?php echo $addy; ?>"><?php esc_html_e( $name, 'dcc-2015' ); ?></a>
			</address><?php

		} // foreach

	?></div>
	<a href="mailto:<?php echo sanitize_email( 'contact@dccmarketing.com' ); ?>"><?php echo sanitize_email( 'contact@dccmarketing.com' ); ?></a><br>
	<a href="tel:2174217580">217.421.7580</a>
</div><!-- .site-info -->
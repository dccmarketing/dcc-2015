<?php

?><div class="site-info"><?php

	printf( __( '<div class="copyright">All content &copy %1$s <br /><a href="%2$s" title="Login">%3$s</a></a></div>', 'dcc-marketing' ), date( 'Y' ), get_admin_url(), get_bloginfo( 'name' ) );
	printf( __( '<div><address><a href="http://maps.google.com/?q=%1$s" target="_blank" class="map-link" title="25 North Water Street, Suite 300 | Decatur, Illinois 62523">%1$s</a></address> | <address><a href="http://maps.google.com/?q=%2$s" target="_blank" class="map-link" title="77 West Wacker Drive, Suite 4800 | Chicago, Illinois 60601">%2$s</a></address></div><a href="mailto:%3$s">%3$s</a><br /><a href="tel:%4$s">%5$s</a>', 'dcc-marketing' ), 'Decatur', 'Chicago', 'contact@dccmarketing.com', '2174217580','217.421.7580' );

?></div><!-- .site-info -->
<?php

/**
 * [dcc_2015_get_headshot description]
 * @param  [type] $author_ID [description]
 * @return [type]            [description]
 */
function dcc_2015_get_headshot( $author_ID ) {

	$meta 		= get_user_meta( $author_ID );
	$headshot 	= $meta['user_headshot'][0];

	if ( ! empty( $headshot ) ) {

		return $headshot;

	}

	return get_avatar( get_the_author_meta( 'ID' ), $author_ID );

} // dcc_2015_get_headshot()
?>
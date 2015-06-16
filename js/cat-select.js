/**
 * Switches to the selected category page
 */
( function( $ ) {

	'use strict';

	$(function() {

		var select = $('.catswitch');

		select.on( 'select', function( e ){

			e.preventDefault();

			var value = this.value;

			//alert( value );

			if ( 0 < value ) {

				location.href = "?cat=" + value;

			}

		});

	});

} )( jQuery );
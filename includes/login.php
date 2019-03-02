<?php

/**
 * Change the logo url.
 *
 * @since  1.0.0
 */
function anva_custom_login_logo_url() {
	return home_url( '/' );
}

/**
 * Change the logo url title.
 *
 * @since  1.0.0
 */
function anva_custom_login_logo_url_title() {
	return get_bloginfo( 'name' );
}

/**
 * Add custom text in login footer page.
 *
 * @since  1.0.0
 */
function anva_custom_login_footer() {
	
	$url    = 'https://anthuanvasquez.net/';
	$author = __( 'Anthuan Vásquez', 'anva-custom-login' );
	
	printf(
		'<div class="login-footer"><p class="login-footer__copyrights">&copy %1$s %2$s %3$s.</p></div>',
		date( 'Y' ),
		apply_filters( 'anva_custom_login_author', sprintf( '<a class="login-footer__link" href="%1$s">%2$s</a>', esc_url( $url ), esc_html( $author ) ) ),
		esc_html__( 'All Rights Reserved' , 'anva-custom-login' )
	);
}

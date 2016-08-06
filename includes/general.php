<?php

/**
 * Custom login styles.
 *
 * @since 1.0.0
 */
function anva_custom_login_styles() {
	
	// Add styles
	wp_enqueue_style( 'anva-custom-login', ANVA_CUSTOM_LOGIN_PLUGIN_URI . '/assets/css/anva-custom-login.css', array(), ANVA_CUSTOM_LOGIN_PLUGIN_VERSION );
}

/**
 * Custom login textdomain.
 *
 * @since  1.0.0
 */
function anva_custom_login_textdomain() {
	load_plugin_textdomain(
		'anva-foodlist',
		false,
		dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
	);
}

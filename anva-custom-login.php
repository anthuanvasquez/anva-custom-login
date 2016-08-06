<?php
/*
Plugin Name: Anva Custom Login
Description: Customize the login area with yours won styles.
Version: 1.0.0
Author: Anthuan Vásquez
Author URI: http://anthuanvasquez.net
License: GPL2
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Plugin Constans
define ( 'ANVA_CUSTOM_LOGIN_PLUGIN_VERSION', '1.0.0' );
define ( 'ANVA_CUSTOM_LOGIN_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define ( 'ANVA_CUSTOM_LOGIN_PLUGIN_URI', plugin_dir_url( __FILE__ ) );

// Load dependencies
require_once( ANVA_CUSTOM_LOGIN_PLUGIN_DIR . '/includes/general.php' );
require_once( ANVA_CUSTOM_LOGIN_PLUGIN_DIR . '/includes/login.php' );

/**
 * Anva Foodlist Init.
 *
 * @since 1.0.0
 */
function anva_custom_login_init() {

	// Add print styles in login head
	if ( ! has_action( 'login_enqueue_scripts', 'wp_print_styles' ) ) {
		add_action( 'login_enqueue_scripts', 'wp_print_styles', 11 );
	}

	add_filter( 'login_headerurl', 'anva_custom_login_logo_url' );
	add_action( 'login_footer', 'anva_custom_login_footer' );
	add_action( 'login_enqueue_scripts', 'anva_custom_login_styles', 12 );
	add_action( 'plugins_loaded', 'anva_custom_login_textdomain' );

}
add_action( 'init', 'anva_custom_login_init' );


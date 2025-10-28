<?php
/**
 * Plugin Name:       Callandor
 * Plugin URI:        https://github.com/imagewize/callandor
 * Description:       Pattern library for Sage 11 hybrid themes with Tailwind CSS support
 * Version:           1.0.0-beta.12
 * Requires at least: 6.6
 * Requires PHP:      8.2
 * Author:            Imagewize
 * Author URI:        https://imagewize.com
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       callandor
 * Domain Path:       /languages
 *
 * @package Callandor
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Current plugin version.
 */
define( 'CALLANDOR_VERSION', '1.0.0-beta.12' );
define( 'CALLANDOR_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'CALLANDOR_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'CALLANDOR_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

/**
 * Plugin activation hook.
 */
function callandor_activate() {
	// Set default options on activation.
	if ( ! get_option( 'callandor_version' ) ) {
		update_option( 'callandor_version', CALLANDOR_VERSION );
	}

	// Flush rewrite rules.
	flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'callandor_activate' );

/**
 * Plugin deactivation hook.
 */
function callandor_deactivate() {
	// Flush rewrite rules.
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'callandor_deactivate' );

/**
 * Load plugin classes.
 */
require_once CALLANDOR_PLUGIN_DIR . 'includes/class-callandor-pattern-loader.php';
require_once CALLANDOR_PLUGIN_DIR . 'includes/class-callandor-admin-settings.php';

/**
 * Initialize the plugin.
 */
function callandor_init() {
	// Load text domain for translations.
	load_plugin_textdomain( 'callandor', false, dirname( CALLANDOR_PLUGIN_BASENAME ) . '/languages' );

	// Initialize pattern loader.
	$pattern_loader = new Callandor_Pattern_Loader();
	$pattern_loader->init();

	// Initialize admin settings if in admin area.
	if ( is_admin() ) {
		$admin_settings = new Callandor_Admin_Settings();
		$admin_settings->init();
	}
}
add_action( 'plugins_loaded', 'callandor_init' );

/**
 * Enqueue admin assets.
 *
 * @param string $hook The current admin page hook.
 */
function callandor_admin_enqueue_scripts( $hook ) {
	// Only load on our admin pages.
	if ( 'appearance_page_callandor-patterns' !== $hook ) {
		return;
	}

	wp_enqueue_style(
		'callandor-admin',
		CALLANDOR_PLUGIN_URL . 'assets/css/admin.css',
		array(),
		CALLANDOR_VERSION
	);

	wp_enqueue_script(
		'callandor-admin',
		CALLANDOR_PLUGIN_URL . 'assets/js/admin.js',
		array( 'jquery' ),
		CALLANDOR_VERSION,
		true
	);
}
add_action( 'admin_enqueue_scripts', 'callandor_admin_enqueue_scripts' );

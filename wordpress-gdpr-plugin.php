<?php
/*
Plugin Name:  WordPress GDPR Plugin
Plugin URI:   https://developer.wordpress.org/plugins/wordpress-gdpr-plugin/
Description:  A simple WordPress plugin for displaying cookie usage notice on your website
Version:      1.0.0
Author:       Oleg Krivtsov
Author URI:   https://github.com/olegkrivtsov
License:      MIT
License URI:  https://opensource.org/licenses/MIT
Text Domain:  wordpress-gdpr-plugin
Domain Path:  /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
/**
 * Current plugin version.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 */
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wordpress-gdpr-plugin-activator.php';
	Plugin_Name_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 */
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wordpress-gdpr-plugin-deactivator.php';
	Plugin_Name_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wordpress_gdpr_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_wordpress_gdpr_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */

 require plugin_dir_path( __FILE__ ) . 'includes/class-wordpress-gdpr-plugin.php';

 /**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wordpress_gdpr_plugin() {
	$plugin = new WordPress_Gdpr_Plugin();
	$plugin->run();
}

run_wordpress_gdpr_plugin();
<?php
/**
 * WordPress GDPR plugin
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           WordPress_Gdpr_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       WordPress GDPR Plugin
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       A simple WordPress plugin that displays cookie usage notice on your website
 * Version:           1.0.0
 * Author:            Oleg Krivtsov
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wordpress-gdpr-plugin
 * Domain Path:       /languages
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
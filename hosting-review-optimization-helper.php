<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://hosting.review
 * @since             1.0.0
 * @package           Hosting_Review_Optimization_Helper
 *
 * @wordpress-plugin
 * Plugin Name:       Hosting Review Optimization Helper
 * Plugin URI:        https://hosting.review
 * Description:       Helps to optimize wordpress website, by suggesting required plugins and their configurations.
 * Version:           1.0.0
 * Author:            Hosting Review
 * Author URI:        https://hosting.review
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hosting-review-optimization-helper
 * Domain Path:       /languages
 */

/**
 * Hosting Review Optimization Helper will be known in code as HROH
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'PLUGIN_VERSION', '1.0.0' );
define( 'HROH_ROOT', __DIR__ . DIRECTORY_SEPARATOR );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hosting-review-optimization-helper-activator.php
 */
function activate_hosting_review_optimization_helper() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/activator.php';
	HROH\Includes\Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hosting-review-optimization-helper-deactivator.php
 */
function deactivate_hosting_review_optimization_helper() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/deactivator.php';
	HROH\Includes\Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hosting_review_optimization_helper' );
register_deactivation_hook( __FILE__, 'deactivate_hosting_review_optimization_helper' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/main.php';
require plugin_dir_path( __FILE__ ) . 'vendor/autoload.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hosting_review_nginx_fix() {

	$plugin = new HROH\Includes\Main();
	$plugin->run();

}
run_hosting_review_nginx_fix();

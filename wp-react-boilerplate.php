<?php

/**
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

include dirname( __FILE__ ) . '/widget.php';

class WP_React_Boilerplate {

	static function widgets_init() {
		register_widget( 'React_Demo_Widget' );
	}

	static function enqueue_scripts() {
		wp_enqueue_script( 'wp-react-boilerplate', plugins_url( 'build/widget.js', __FILE__ ), array(), 'v0.0.1', true );
		wp_enqueue_style( 'wp-react-boilerplate', plugins_url( 'build/widget.css', __FILE__ ), array(), 'v0.0.1');
	}


	static function admin_enqueue_scripts() {
		wp_enqueue_script( 'wp-react-boilerplate-admin', plugins_url( 'build/admin.js', __FILE__ ), array(), 'v0.0.1', true );
		wp_enqueue_style( 'wp-react-boilerplate-admin', plugins_url( 'build/admin.css', __FILE__ ), array(), 'v0.0.1');

	}

	static function add_admin_page() {
		add_menu_page(
			'WP React Component Library',
			'Component Library',
			'manage_options',
			'wp-react-component-library',
			array( 'WP_React_Boilerplate', 'render_component_library' )
		);
	}

	static function render_component_library() {
		echo '<div id="wp-react-component-library" class="wrap"></div>';
	}

}

add_action( 'widgets_init', array( 'WP_React_Boilerplate', 'widgets_init' ) );
add_action( 'wp_enqueue_scripts', array( 'WP_React_Boilerplate', 'enqueue_scripts' ) );
add_action( 'admin_enqueue_scripts', array( 'WP_React_Boilerplate', 'admin_enqueue_scripts' ) );
add_action( 'admin_menu', array( 'WP_React_Boilerplate', 'add_admin_page' ) );

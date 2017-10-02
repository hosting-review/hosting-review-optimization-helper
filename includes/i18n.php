<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://hosting.review
 * @since      1.0.0
 *
 * @package    Hosting_Review_Optimization_Helper
 * @subpackage Hosting_Review_Optimization_Helper/includes
 */

namespace HROH\Includes;

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Hosting_Review_Optimization_Helper
 * @subpackage Hosting_Review_Optimization_Helper/includes
 * @author     Hosting Review <contact@hosting.review>
 */
class i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'hosting-review-optimization-helper',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}

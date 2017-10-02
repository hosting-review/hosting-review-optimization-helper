<?php
/**
 * Created by PhpStorm.
 * User: juslintek
 * Date: 27/09/2017
 * Time: 18:34
 */

namespace HROH\Includes;

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Hosting_Review_Optimization_Helper
 * @subpackage Hosting_Review_Optimization_Helper/acf
 * @author     Hosting Review <contact@hosting.review>
 */
class ACFPrepare {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $plugin_name The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string $version The current version of this plugin.
	 */
	private $version;

	public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version     = $version;
	}

	/**
	 * @param $path
	 *
	 * @return string
	 */
	public function set_acf_settings_path( $path ) {
		// update path
		$path = WP_CONTENT_DIR . '/fields/';

		$wp_filesystem = new \WP_Filesystem_Direct( [] );

		if ( ! $wp_filesystem->exists( $path ) ) {
			$wp_filesystem->mkdir( $path );
		}

		// return
		return $path;
	}

	/**
	 * @param $dir
	 *
	 * @return string
	 */
	public function set_acf_settings_dir( $dir ) {
		// update path
		$dir = content_url( '/fields/' );

		// return
		return $dir;
	}

	/**
	 * @return bool
	 */
	public function hide_acf_group_menu() {
		return true;
	}

	/**
	 *
	 */
	public function load() {

	}

	/**
	 * @param $path
	 *
	 * @return string
	 */
	public function acf_json_save_point( $path ) {

		// update path
		$path = content_url( '/fields' );


		// return
		return $path;

	}

	/**
	 * @param $paths
	 *
	 * @return array
	 */
	public function acf_json_load_point( $paths ) {

		// remove original path (optional)
		unset( $paths[0] );


		// append path
		$paths[] = content_url( '/fields' );


		// return
		return $paths;

	}
}
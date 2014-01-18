<?php
/**
 *
 * @package   sa-gallery
 * @author    Kwag De Gi tech@skyaperture.com
 * @license   GPL-2.0+
 * @link      http://www.skyaperture.com/plugin/sa-gallery
 * @copyright 2014 SkyAperture
 * @wordpress-plugin
 * Plugin Name: SA-Gallery
 * Plugin URI:  http://www.skyaperture.com/plugin/sa-gallery
 * Description: Simple, Sleek, Clean gallery
 * Version:     0.1.0
 * Author:      Kwag De Gi
 * Author URI:  http://www.wordpressure.co.kr/
 * Text Domain: sa-gallery-locale
 * License:     GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Domain Path: /languages
 * GitHub Plugin URI: https://github.com/kkdg/sa-gallery
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 *
 */
require_once( plugin_dir_path( __FILE__ ) . 'public/class-sa-gallery.php' );

/*
 * Register hooks that are fired when the plugin is activated or deactivated.
 * When the plugin is deleted, the uninstall.php file is loaded.
 *
 * @TODO:
 *
 * - replace Plugin_Name with the name of the class defined in
 *   `class-plugin-name.php`
 */
register_activation_hook( __FILE__, array( 'SA_Gallery', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'SA_Gallery', 'deactivate' ) );

/*
 * @TODO:
 *
 * - replace Plugin_Name with the name of the class defined in
 *   `class-plugin-name.php`
 */
add_action( 'plugins_loaded', array( 'SA_Gallery', 'get_instance' ) );

/*----------------------------------------------------------------------------*
 * Dashboard and Administrative Functionality
 *----------------------------------------------------------------------------*/

/*
 * @TODO:
 *
 * - replace `class-plugin-admin.php` with the name of the plugin's admin file
 * - replace Plugin_Name_Admin with the name of the class defined in
 *   `class-plugin-name-admin.php`
 *
 * If you want to include Ajax within the dashboard, change the following
 * conditional to:
 *
 * if ( is_admin() ) {
 *   ...
 * }
 *
 * The code below is intended to to give the lightest footprint possible.
 */
if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-sa-gallery-admin.php' );
	add_action( 'plugins_loaded', array( 'SA_Gallery_Admin', 'get_instance' ) );

}

<?php
/**
 * Plugin Name:     (WP-EXT) Resource
 * Plugin URI:      https://metastore.pro/
 *
 * Description:     Resource post type and more.
 *
 * Author:          Kitsune Solar
 * Author URI:      https://kitsune.solar/
 *
 * Version:         1.0.0
 *
 * Text Domain:     wp-ext-resource
 * Domain Path:     /languages
 *
 * License:         GPLv3
 * License URI:     https://www.gnu.org/licenses/gpl-3.0.html
 */

/**
 * Loading `WP_EXT_Resource`.
 */

function run_wp_ext_resource() {
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Resource.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Resource_Post_Type.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Resource_Post_Field.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Resource_Taxonomy.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Resource_User_Role.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Resource_Theme.class.php' );
//	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Resource_Template.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Resource_ShortCode.class.php' );
	require_once( plugin_dir_path( __FILE__ ) . 'includes/WP_EXT_Resource_Widget.class.php' );
}

run_wp_ext_resource();

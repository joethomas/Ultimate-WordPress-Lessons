<?php
/*
	Plugin Name: Ultimate WordPress Lessons
	Description: This plugin adds multiple custom post types to manage your lessons, courses, and teachers.
	Plugin URI: https://github.com/joethomas/ultimate-wordpress-lessons
	Version: 0.1.4
	Author: Joe Thomas
	Author URI: https://github.com/joethomas
	License: GNU General Public License v3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
	Text Domain: ultimate-wordpress-lessons
	Domain Path: /languages/

	GitHub Plugin URI: https://github.com/joethomas/ultimate-wordpress-lessons
	GitHub Branch: master
*/

// Prevent direct file access
defined( 'ABSPATH' ) or exit;


/* Global Variables & Constants
==============================================================================*/

/**
 * Define the constants for use within the plugin
 */
function joe_uwpl_get_plugin_data_version() {
	$plugin = get_plugin_data( __FILE__, false, false );

	define( 'JOE_UWPL_VER', $plugin['Version'] );
	define( 'JOE_UWPL_TEXTDOMAIN', $plugin['TextDomain'] );
	define( 'JOE_UWPL_NAME', $plugin['Name'] );
}
add_action( 'init', 'joe_uwpl_get_plugin_data_version' );

define( 'JOE_UWPL_PREFIX', 'ultimate-wordpress-lessons' );

// Plugin basename
define( 'JOEUWPLESSONS_BASENAME', plugin_basename(__DIR__) );
define( 'JOEUWPLESSONS_BASENAME_FILE', plugin_basename(__FILE__) );

// Plugin paths
define( 'JOEUWPLESSONS_DIR', plugin_dir_path( __FILE__ ) );
define( 'JOEUWPLESSONS_DIR_URI', plugin_dir_url( __FILE__ ) );

// Plugin directory paths
define( 'JOEUWPLESSONS_INC_DIR', JOEUWPLESSONS_DIR . '/includes' );
define( 'JOEUWPLESSONS_INC_DIR_URI', JOEUWPLESSONS_DIR_URI . '/includes' );

define( 'JOEUWPLESSONS_LIB_DIR', JOEUWPLESSONS_DIR . '/library' );
define( 'JOEUWPLESSONS_LIB_DIR_URI', JOEUWPLESSONS_DIR_URI . '/library' );

define( 'JOEUWPLESSONS_PLUGINS_DIR', JOEUWPLESSONS_LIB_DIR . '/plugins' );
define( 'JOEUWPLESSONS_PLUGINS_DIR_URI', JOEUWPLESSONS_LIB_DIR_URI . '/plugins' );


/* Bootstrap Files
==============================================================================*/

// WP Admin styles
require_once( JOEUWPLESSONS_INC_DIR . '/admin-styles.php' );

// Register custom post types
require_once( JOEUWPLESSONS_INC_DIR . '/custom-post-types.php' );

// Register custom taxonomies
require_once( JOEUWPLESSONS_INC_DIR . '/custom-taxonomies.php' );

// Plugin activation
require_once( JOEUWPLESSONS_INC_DIR . '/plugin-activation.php' );

// Plugin deactivation
require_once( JOEUWPLESSONS_INC_DIR . '/plugin-deactivation.php' );

// Plugin updates
require_once( JOEUWPLESSONS_INC_DIR . '/updates.php' );


/* Languages
==============================================================================*/

/**
 * Load text domain for plugin translations
 */
function joe_uwpl_load_textdomain() {
	load_plugin_textdomain( 'ultimate-wordpress-lessons', false, basename( __DIR__ ) . '/languages/' );
}
add_action( 'plugins_loaded', 'joe_uwpl_load_textdomain' );


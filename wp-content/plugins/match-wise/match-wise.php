<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://punei.andrei123@gmail.com
 * @since             1.0.0
 * @package           Match_Wise
 *
 * @wordpress-plugin
 * Plugin Name:       Match Wise
 * Plugin URI:        https://match-wise.com
 * Description:       Match numbers
 * Version:           1.0.0
 * Author:            Andrei
 * Author URI:        https://punei.andrei123@gmail.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       match-wise
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'MATCH_WISE_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-match-wise-activator.php
 */
function activate_match_wise() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-match-wise-activator.php';
	Match_Wise_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-match-wise-deactivator.php
 */
function deactivate_match_wise() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-match-wise-deactivator.php';
	Match_Wise_Deactivator::deactivate();
}

// includes
include('init-person.php');


//Actions
 add_action('init', 'create_person_post_type');


register_activation_hook( __FILE__, 'activate_match_wise' );
register_deactivation_hook( __FILE__, 'deactivate_match_wise' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-match-wise.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_match_wise() {

	$plugin = new Match_Wise();
	$plugin->run();

}
run_match_wise();

<?php
/**
 * Plugin Name: Check Test
 * Description: Debug wp_plugin_check_admin_referer
 * Plugin URI: https://github.com/kallookoo/check-test
 * Author: Sergio ( kallookoo )
 * Author URI: https://dsergio.com/
 * Version: 1.0
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

defined( 'ABSPATH' ) || exit;

require_once plugin_dir_path( __FILE__ ) . 'admin/functions/wp-plugin-check-admin-referer.php';

function check_test_on_activation() {
	if ( wp_plugin_check_admin_referer( __FILE__ ) ) {
		update_option( 'check_text_activation', 'true', false );
	} else {
		update_option( 'check_text_activation', 'false', false );
	}
}
register_activation_hook( __FILE__, 'check_test_on_activation' );

function check_test_on_deactivation() {
	if ( wp_plugin_check_admin_referer( __FILE__ ) ) {
		update_option( 'check_text_deactivation', 'true', false );
	} else {
		update_option( 'check_text_deactivation', 'false', false );
	}
}
register_deactivation_hook( __FILE__, 'check_test_on_deactivation' );

function check_test_on_uninstall() {
	if ( wp_plugin_check_admin_referer( __FILE__ ) ) {
		delete_option( 'check_text_activation' );
		delete_option( 'check_text_deactivation' );
	}
}
register_uninstall_hook( __FILE__, 'check_test_on_uninstall' );

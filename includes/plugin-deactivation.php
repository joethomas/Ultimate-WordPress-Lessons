<?php
/**
 * Plugin Deactivation
 */

// Flush rewrite rules on plugin deactivation
function joe_uwpl_plugin_deactivation() {
	flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'joe_uwpl_plugin_deactivation' );
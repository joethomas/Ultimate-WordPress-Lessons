<?php
/**
 * Plugin Activation
 */

// Flush rewrite rules on plugin activation
function joe_uwpl_plugin_activation() {

	joe_uwpl_register_post_type_lesson();
    joe_uwpl_register_post_type_course();
    joe_uwpl_register_post_type_teacher();

	flush_rewrite_rules();

}
register_activation_hook( __FILE__, 'joe_uwpl_plugin_activation' );


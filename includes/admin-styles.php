<?php
/**
 * Admin Styles
 */

/* Styles
==============================================================================*/
/**
 * Load custom admin CSS
 */
function joe_uwpl_enqueue_admin_styles() {

	$handle     = JOE_UWPL_PREFIX . '-admin';
	$deps       = array();

	wp_register_style( $handle, JOEUWPLESSONS_INC_DIR_URI . '/css/style-admin.css', $deps, JOE_UWPL_VER );
	wp_enqueue_style( $handle );

}
add_action( 'admin_enqueue_scripts', 'joe_uwpl_enqueue_admin_styles' );
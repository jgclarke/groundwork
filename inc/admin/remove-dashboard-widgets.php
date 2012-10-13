<?php
/**
 * From GrowthSpark's gs-starter-theme
 * https://github.com/growth-spark/gs-starter-theme
 */

/**********************************************************************

:: Remove Dashboard Widgets

Removes default widgets from the WP Dashboard.

**********************************************************************/

function groundwork_remove_dashboard_widgets() {
	global $wp_meta_boxes;

	/* unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']); */
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

}
add_action('wp_dashboard_setup', 'groundwork_remove_dashboard_widgets' );


?>

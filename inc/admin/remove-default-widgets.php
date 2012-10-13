<?php
/**
 * From GrowthSpark's gs-starter-theme
 * https://github.com/growth-spark/gs-starter-theme
 */

/* ----------------------------------------------------------

Remove Default Widgets

------------------------------------------------------------- */
function unregister_default_wp_widgets() {
  unregister_widget('WP_Widget_Calendar');
  unregister_widget('WP_Widget_Recent_Comments');
  unregister_widget('WP_Widget_Meta');
  unregister_widget('WP_Widget_Pages');
  unregister_widget('WP_Nav_Menu_Widget');
  unregister_widget('WP_Widget_Links');
  unregister_widget('WP_Widget_Search');
  unregister_widget('WP_Widget_Tag_Cloud');
  unregister_widget('WP_Widget_RSS');
  //unregister_widget('WP_Widget_Text');
  //unregister_widget('WP_Widget_Recent_Posts');
  //unregister_widget('WP_Widget_Archives');
  //unregister_widget('WP_Widget_Categories');
  
  
}
add_action('widgets_init', 'unregister_default_wp_widgets', 1);

?>
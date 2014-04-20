<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Groundwork
 * @since Groundwork 1.0
 */
?>

<div id="secondary" class="widget-area" role="complementary">

	<?php do_action( 'before_sidebar' ); ?>
	
	<?php if ( is_page_template('front-page.php') ) { ?>
	
		<?php dynamic_sidebar( 'sidebar-home' ); ?>
		
	<?php } else if ( is_home() || is_archive() || is_category() || is_single() ) { ?>
	
		<?php dynamic_sidebar( 'sidebar-news' ); ?>
	
	<?php } else { ?>
		
		<?php dynamic_sidebar( 'sidebar-standard' ); ?>
		
	<?php } ?>
	
</div><!-- #secondary .widget-area -->


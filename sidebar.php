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
	
	<?php if ( is_page_template('home-page.php') ) { ?>
	
		<aside id="first" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-home' ); ?>
		</aside>
		
	<?php } else if ( is_home() || is_archive() || is_category() || is_single() ) { ?>
	
		<aside id="first" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-news' ); ?>
		</aside>
	
	<?php } else { ?>
		
		<aside id="first" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-standard' ); ?>
		</aside>
		
	<?php } ?>
	
</div><!-- #secondary .widget-area -->


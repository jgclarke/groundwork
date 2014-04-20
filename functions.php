<?php
/**
 * Groundwork functions and definitions
 *
 * @package Groundwork
 * @since Groundwork 1.0
 */

/**
 * Main theme setup & config
 */

function groundwork_setup() {

	/**
	 * Custom template tags for this theme
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	require( get_template_directory() . '/inc/tweaks.php' );
	
	/**
	 * Custom widgets for this theme
	 */
	//require( get_template_directory() . '/inc/custom-widgets.php' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );
	
	/**
	 * Remove WP version (for security)
	 */
	remove_action('wp_head', 'wp_generator');

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	// add_image_size( 'custom-thumb-name', 150, 150, true );

	/**
	 * Load the theme's menus
	 */
	add_theme_support( 'menus' );  
	register_nav_menus( array(
		'main-navigation' => __( 'Main Navigation Menu', 'groundwork' ),
	) );
	
	/**
	 * Excerpts
	 */
	function custom_excerpt_length( $length ) {
		return 26; // words
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 10 );
	
	function custom_excerpt_more( $more ) {
		return '&hellip;';
	}
	add_filter( 'excerpt_more', 'custom_excerpt_more' );
	
	/**
	 * Customized admin area features
	 */
	require( get_template_directory() . '/inc/admin/login-admin-config.php' );
	require( get_template_directory() . '/inc/admin/remove-default-widgets.php' );
	require( get_template_directory() . '/inc/admin/remove-dashboard-widgets.php' );
	//require( get_template_directory() . '/inc/admin/cpt.sample.php' );

}
add_action( 'after_setup_theme', 'groundwork_setup' );

/**
 * Load LESS stylesheet and Javascript
 */
function groundwork_enque_less() {

	echo '<link rel="stylesheet/less" type="text/css" href="'. get_template_directory_uri() .'/style.less" media="all" />';
	
	if ('WP_DEV_MODE' == true ) {
		echo '<script type="text/javascript">less = { env: \'development\' };</script>';
	}
	
	echo '<script src="'. get_template_directory_uri() .'/js/libs/less-1.3.0.min.js" type="text/javascript"></script>';
		
}
	
add_action('wp_head', 'groundwork_enque_less');

/**
 * Load styles and scripts 
 */
function groundwork_scripts() {

	global $post;

	/* Use this format - 'true' loads in footer
	wp_enqueue_style( 'style-identifier', get_template_directory_uri() . '/style.css', array(), '1', 'all' ); */

	/* Use this format - 'true' loads in footer
	wp_enqueue_script( 'script-identifier', get_template_directory_uri() . '/js/script-name.js', array(), '1', true ); */

	wp_enqueue_style( 'default-stylesheet', get_template_directory_uri() . '/style.css', array(), '1', 'all', false );
	
	wp_enqueue_script('jquery');
	
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/libs/modernizr-2.5.3.min.js', array(), '1', false );
	
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply', array(), '', true );
	}

	if ( is_singular() && wp_attachment_is_image( $post->ID ) ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202', true );
		
	}
			
}
add_action( 'wp_enqueue_scripts', 'groundwork_scripts' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function groundwork_widgets_init() {

	register_sidebar( array(
		'name' => __( 'Home Sidebar', 'groundwork' ),
		'id' => 'sidebar-home',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Standard Sidebar', 'groundwork' ),
		'id' => 'sidebar-standard',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'News Sidebar', 'groundwork' ),
		'id' => 'sidebar-news',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => "</aside>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	
}
add_action( 'widgets_init', 'groundwork_widgets_init' );
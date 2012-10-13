<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Groundwork
 * @since Groundwork 1.0
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>
	
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta content="initial-scale=1.0; maximum-scale=1.0; user-scalable=0; " name="viewport">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 */
			global $page, $paged;
		
			wp_title( '|', true, 'right' );
		
			// Add the blog name.
			bloginfo( 'name' );
		
			// Add the blog description for the home/front page.
			$site_description = get_bloginfo( 'description', 'display' );
			if ( $site_description && ( is_home() || is_front_page() ) )
				echo " | $site_description";
		
			// Add a page number if necessary:
			if ( $paged >= 2 || $page >= 2 )
				echo ' | ' . sprintf( __( 'Page %s', 'groundwork' ), max( $paged, $page ) );
		
			?></title>
		
		<meta name="description" content="">
		
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		
		<?php wp_head(); ?>
		
	</head>
	
	<body <?php body_class(); ?>>
	
		<div id="page" class="hfeed site">
		
			<?php do_action( 'before' ); ?>
			
			<header id="site-header" class="clearfix" role="banner">
			
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" /></a>
				
				<hgroup>
					<h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
				</hgroup>
				
				<div class="small-menu-pointer">
					<a href="#small-menu" title="Main menu">Menu</a>
				</div>
		
				<nav role="navigation" class="site-navigation main-navigation">
			
					<h1 class="assistive-text"><?php _e( 'Menu', 'groundwork' ); ?></h1>
					<div class="assistive-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'groundwork' ); ?>"><?php _e( 'Skip to content', 'groundwork' ); ?></a></div>
						
					<?php wp_nav_menu( array( 'theme_location' => 'main-navigation' ) ); ?>
				
				</nav>
				
			</header><!-- #site-header -->
		
			<div id="main" class="clearfix">
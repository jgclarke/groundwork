<?php

	/**
	 * Add custom styling to the sign-up, log in, and admin areas
	 */
	 
	class themeLogo {
	
		const THEME_LOGO_WIDTH = '274';
		const THEME_LOGO_HEIGHT = '63';
		const THEME_LOGO_PATH = 'img/logo.png';
	
	}
		
	function ht_admin_styles() {

		if ( !is_admin() ) {
			echo '<link rel="stylesheet/less" type="text/css" href="' . get_template_directory_uri() . '/inc/admin/style-login.less" media="all" />';
		}
			
		if ('SITE_MODE' == 'dev' ) {
			echo '<script type="text/javascript">less = { env: \'development\' };</script>';
		}
			
		echo '<script src="'. get_template_directory_uri() .'/js/libs/less-1.7.0.min.js" type="text/javascript"></script>';
		
		$theme_logo_width = themeLogo::THEME_LOGO_WIDTH;
		$theme_logo_height = themeLogo::THEME_LOGO_HEIGHT;
		$theme_logo_path = themeLogo::THEME_LOGO_PATH;
	
		?>
	
		<style type="text/css">
			
			/* For the log in, password, and create account screens */
			.login h1 a {
				width: <?php echo $theme_logo_width; ?>px;
				height: <?php echo $theme_logo_height; ?>px;
				background-image: url('<?php echo get_template_directory_uri().'/'. $theme_logo_path; ?>');
				background-size: <?php echo $theme_logo_width; ?>px <?php echo $theme_logo_height; ?>px;
			}

			#customize-current-theme-link {
					display: none;
			}
			    
		</style>
		
	<?php }
	 
	add_action( 'login_head', 'ht_admin_styles' );
	add_action( 'admin_head', 'ht_admin_styles' );

	/**
	 * Gets the blog name and sets it as the logo title for the register & log in screens
	 */                     
	function set_login_title() {
	    return get_bloginfo( 'name' );
	}
                 
	add_filter( 'login_headertitle', 'set_login_title' );
	
	/**
	 * Gets the blog URL and sets it as the logo URL for the register & log in screens
	 */                     
	function set_login_url() {
  		return site_url();
	}

	add_filter( 'login_headerurl', 'set_login_url');
	
	/** 
	 * Enables styling the admin editing window
	 */
	add_editor_style('inc/admin/editor-style.css');
	
	/**
	 * Set the editing window content width based on the theme's design and stylesheet.
	 */
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */
	
	/**
	 * Enables embedding the IFRAME tag within the admin editing window
	 */
	function add_iframe($initArray) {
		$initArray['extended_valid_elements'] = "iframe[id|class|title|style|align|frameborder|height|longdesc|marginheight|marginwidth|name|scrolling|src|width]";
		return $initArray;
	}
?>

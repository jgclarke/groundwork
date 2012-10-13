<?php
// Custom wp-config.php heavily influenced by Mark Jaquith's WordPress Skeleton
// For more visit http://markjaquith.wordpress.com/2012/05/26/wordpress-skeleton/

// ====================
// Check for and switch between local and production environments
// ====================
if ( file_exists( dirname( __FILE__ ) . '/wp-config-dev.php' ) ) {
	define( 'WP_DEV_MODE', true );
	include( dirname( __FILE__ ) . '/wp-config-dev.php' ); // <-- All other local settings here.
} else {
	//Connect to database
	define( 'WP_DEV_MODE', false );
	define( 'DB_NAME', '%%DB_NAME%%' );
	define( 'DB_USER', '%%DB_USER%%' );
	define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
	define( 'DB_HOST', '%%DB_HOST%%' ); // Probably 'localhost'
	//Disable debug
	define('WP_DEBUG', false);
	ini_set( 'display_errors', 0 );
	define( 'WP_DEBUG_DISPLAY', false );
	//If the whole site is in a sub-directory, set it here (without the slashes)
	$sub_dir = '';
	// Place any production-specific settings below this comment
}

// ====================
//Other database settings
// ====================

//Table prefix
$table_prefix  = 'wp_';

//Other database settings - rarely changed
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ====================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ====================
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

// ====================
// Language
// Leave blank for American English
// ====================
define( 'WPLANG', '' );

// ====================
// Bootstrap WordPress
// ====================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
require_once( ABSPATH . 'wp-settings.php' );

<?php
// Custom wp-config-dev.php loaded only for development-specific options
// Heavily influenced by Mark Jaquith's WordPress Skeleton
// For more visit http://markjaquith.wordpress.com/2012/05/26/wordpress-skeleton/

// ====================
// Load database info and local development parameters
// ====================

define( 'DB_NAME', '%%DB_NAME%%' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', 'root' );
define( 'DB_HOST', 'localhost' );

// ====================
// Enable debug
// ====================
define( 'SAVEQUERIES', true );
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );

// ====================
// If the whole site is in a sub-directory, set it here (without the slashes)
// ====================
$sub_dir = '';

// ====================
// Place any other local-specific settings here
// ====================